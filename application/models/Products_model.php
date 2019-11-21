<?php
/**
 * Geo POS -  Accounting,  Invoicing  and CRM Application
 * Copyright (c) Rajesh Dukiya. All Rights Reserved
 * ***********************************************************************
 *
 *  Email: support@ultimatekode.com
 *  Website: https://www.ultimatekode.com
 *
 *  ************************************************************************
 *  * This software is furnished under a license and may be used and copied
 *  * only  in  accordance  with  the  terms  of such  license and with the
 *  * inclusion of the above copyright notice.
 *  * If you Purchased from Codecanyon, Please read the full License from
 *  * here- http://codecanyon.net/licenses/standard/
 * ***********************************************************************
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends CI_Model
{
    public $table = 'geopos_products';
    public $column_order = array(null, 'geopos_products.product_name', 'geopos_products.qty', 'geopos_products.product_code', 'geopos_product_cat.title', 'geopos_products.product_price', null); //set column field database for datatable orderable
    public $column_search = array('geopos_products.product_name', 'geopos_products.product_code', 'geopos_product_cat.title', 'geopos_warehouse.title'); //set column field database for datatable searchable
    public $order = array('geopos_products.pid' => 'desc'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query($id = '', $w = '', $sub = '')
    {
        $this->db->select('geopos_products.*,geopos_product_cat.title AS c_title,geopos_warehouse.title');
        $this->db->from($this->table);
        $this->db->join('geopos_warehouse', 'geopos_warehouse.id = geopos_products.warehouse');
        if ($sub) {
            $this->db->join('geopos_product_cat', 'geopos_product_cat.id = geopos_products.sub_id');
            $this->db->where('geopos_products.merge', 0);
            if ($this->aauth->get_user()->loc) {
                $this->db->group_start();
                $this->db->where('geopos_warehouse.loc', $this->aauth->get_user()->loc);
                if (BDATA) {
                    $this->db->or_where('geopos_warehouse.loc', 0);
                }
                $this->db->group_end();
            } elseif (!BDATA) {
                $this->db->where('geopos_warehouse.loc', 0);
            }

            $this->db->where("geopos_products.sub_id=$id");
        } else {
            $this->db->join('geopos_product_cat', 'geopos_product_cat.id = geopos_products.pcat');

            if ($w) {
                if ($id > 0) {
                    $this->db->where("geopos_warehouse.id = $id");
                    // $this->db->where('geopos_products.sub_id', 0);
                }
                if ($this->aauth->get_user()->loc) {
                    $this->db->group_start();
                    $this->db->where('geopos_warehouse.loc', $this->aauth->get_user()->loc);

                    if (BDATA) {
                        $this->db->or_where('geopos_warehouse.loc', 0);
                    }
                    $this->db->group_end();
                } elseif (!BDATA) {
                    $this->db->where('geopos_warehouse.loc', 0);
                }
            } else {
                $this->db->where('geopos_products.merge', 0);
                if ($this->aauth->get_user()->loc) {
                    $this->db->group_start();
                    $this->db->where('geopos_warehouse.loc', $this->aauth->get_user()->loc);
                    if (BDATA) {
                        $this->db->or_where('geopos_warehouse.loc', 0);
                    }
                    $this->db->group_end();
                } elseif (!BDATA) {
                    $this->db->where('geopos_warehouse.loc', 0);
                }
                if ($id > 0) {
                    $this->db->where("geopos_product_cat.id = $id");
                    $this->db->where('geopos_products.sub_id', 0);
                }
            }
        }

        $i = 0;

        foreach ($this->column_search as $item) { // loop column
            $search = $this->input->post('search');
            $value = $search['value'];
            if ($value) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $value);
                } else {
                    $this->db->or_like($item, $value);
                }

                if (count($this->column_search) - 1 == $i) { //last loop
                    $this->db->group_end();
                } //close bracket
            }
            $i++;
        }
        $search = $this->input->post('order');
        if ($search) { // here order processing
            $this->db->order_by($this->column_order[$search['0']['column']], $search['0']['dir']);
        } elseif (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_datatables($id = '', $w = '', $sub = '')
    {
        if ($id > 0) {
            $this->_get_datatables_query($id, $w, $sub);
        } else {
            $this->_get_datatables_query();
        }
        if ($this->input->post('length') != -1) {
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered($id, $w = '', $sub='')
    {
        if ($id > 0) {
            $this->_get_datatables_query($id, $w, $sub);
        } else {
            $this->_get_datatables_query();
        }

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        $this->db->join('geopos_warehouse', 'geopos_warehouse.id = geopos_products.warehouse');
        if ($this->aauth->get_user()->loc) {
            $this->db->where('geopos_warehouse.loc', $this->aauth->get_user()->loc);
            if (BDATA) {
                $this->db->or_where('geopos_warehouse.loc', 0);
            }
        } elseif (!BDATA) {
            $this->db->where('geopos_warehouse.loc', 0);
        }
        return $this->db->count_all_results();
    }



    public function addnew($catid, $warehouse, $product_name, $product_code, $product_price, $factoryprice, $taxrate, $disrate, $product_qty, $product_qty_alert, $product_desc, $image, $unit, $barcode, $v_type, $v_stock, $v_alert, $wdate, $code_type, $w_type = '', $w_stock = '', $w_alert = '', $sub_cat = '', $b_id = '', $related_product, $favorite = '', $wholesale = '0', $product_status, $bundle_products, $discounnt_array,$search_meta,$calculate_profit_value)
    {
        $ware_valid = $this->valid_warehouse($warehouse);
        if (!$sub_cat) {
            $sub_cat=0;
        }
        if (!$b_id) {
            $b_id=0;
        }
        $datetime1 = new DateTime(date('Y-m-d'));

        $datetime2 = new DateTime($wdate);

        $difference = $datetime1->diff($datetime2);
        if (!$difference->d > 0) {
            $wdate = null;
        }
        if ($this->aauth->get_user()->loc) {
            if ($ware_valid['loc'] == $this->aauth->get_user()->loc or $ware_valid['loc'] == '0' or $warehouse == 0) {
                if (strlen($barcode) > 5 and is_numeric($barcode)) {
                    $catid = $catid > 0 ? $catid :  1 ;
                    $data = array(
                        'pcat' => $catid,
                        'warehouse' => $warehouse,
                        'product_name' => $product_name,
                        'product_code' => $product_code,
                        'product_price' => $product_price,
                        'fproduct_price' => $factoryprice,
                        'taxrate' => $taxrate,
                        'disrate' => $disrate,
                        'qty' => $product_qty,
                        'product_des' => $product_desc,
                        'alert' => $product_qty_alert,
                        'unit' => $unit,
                        'image' => $image,
                        'barcode' => $barcode,
                        'expiry' => $wdate,
                        'code_type' => $code_type,
                        'sub_id' => $sub_cat,
                        'b_id' => $b_id,
                        'related_product' => $related_product,
                        'favorite' => $favorite,
                        'wholesale' => $wholesale,
                        'product_status' => $product_status,
                        'bundle_products' => $bundle_products,
                        'bundle_discount' => $discounnt_array,
                        'search_meta' => $search_meta ,
                        'auto_prices' => $calculate_profit_value , 
                    );
                } else {
                    $barcode = rand(100, 999) . rand(0, 9) . rand(1000000, 9999999) . rand(0, 9);

                    $data = array(
                        'pcat' => $catid,
                        'warehouse' => $warehouse,
                        'product_name' => $product_name,
                        'product_code' => $product_code,
                        'product_price' => $product_price,
                        'fproduct_price' => $factoryprice,
                        'taxrate' => $taxrate,
                        'disrate' => $disrate,
                        'qty' => $product_qty,
                        'product_des' => $product_desc,
                        'alert' => $product_qty_alert,
                        'unit' => $unit,
                        'image' => $image,
                        'barcode' => $barcode,
                        'expiry' => $wdate,
                        'code_type' => 'EAN13',
                        'sub_id' => $sub_cat,
                        'b_id' => $b_id,
                        'related_product' => $related_product,
                        'favorite' => $favorite,
                        'wholesale' => $wholesale,
                        'product_status' => $product_status,
                        'bundle_products' => $bundle_products,
                        'bundle_discount' => $discounnt_array,
                        'search_meta' => $search_meta,
                        'auto_prices' => $calculate_profit_value , 
                    );
                }
                $this->db->trans_start();
                if ($this->db->insert('geopos_products', $data)) {
                    $pid = $this->db->insert_id();
                    $this->movers(1, $pid, $product_qty, 0, 'Stock Initialized');
                    $this->aauth->applog("[New Product] -$product_name  -Qty-$product_qty ID " . $pid, $this->aauth->get_user()->username);
                    echo json_encode(array('status' => 'Success', 'message' =>
                        $this->lang->line('ADDED') . "  <a href='add' class='btn btn-blue btn-lg'><span class='fa fa-plus-circle' aria-hidden='true'></span>  </a> <a href='" . base_url('products') . "' class='btn btn-grey-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a>"));
                } else {
                    echo json_encode(array('status' => 'Error', 'message' =>
                        $this->lang->line('ERROR')));
                }                
                if ($v_type) {
                    foreach ($v_type as $key => $value) {
                        if ($v_type[$key] && numberClean($v_stock[$key]) > 0.00) {
                            $this->db->select('u.id,u.name,u2.name AS variation');
                            $this->db->join('geopos_units u2', 'u.rid = u2.id', 'left');
                            $this->db->where('u.id', $v_type[$key]);
                            $query = $this->db->get('geopos_units u');
                            $r_n = $query->row_array();
                            $data['product_name'] = $product_name . '-' . $r_n['variation'] . '-' . $r_n['name'];
                            $data['qty'] = numberClean($v_stock[$key]);
                            $data['alert'] = numberClean($v_alert[$key]);
                            $data['merge'] = 1;
                            $data['sub'] = $pid;
                            $data['vb'] = $v_type[$key];
                            $this->db->insert('geopos_products', $data);
                            $pidv = $this->db->insert_id();
                            $this->movers(1, $pidv, $data['qty'], 0, 'Stock Initialized');
                            $this->aauth->applog("[New Product] -$product_name  -Qty-$product_qty ID " . $pid, $this->aauth->get_user()->username);
                        }
                    }
                }
                if ($w_type) {
                    foreach ($w_type as $key => $value) {
                        if ($w_type[$key] && numberClean($w_stock[$key]) > 0.00 && $w_type[$key] != $warehouse) {
                            $data['product_name'] = $product_name;
                            $data['warehouse'] = $w_type[$key];
                            $data['qty'] = numberClean($w_stock[$key]);
                            $data['alert'] = numberClean($w_alert[$key]);
                            $data['merge'] = 2;
                            $data['sub'] = $pid;
                            $data['vb'] = $w_type[$key];
                            $this->db->insert('geopos_products', $data);
                            $pidv = $this->db->insert_id();
                            $this->movers(1, $pidv, $data['qty'], 0, 'Stock Initialized');
                            $this->aauth->applog("[New Product] -$product_name  -Qty-$product_qty ID " . $pid, $this->aauth->get_user()->username);
                        }
                    }
                }
		$this->custom->save_fields_data($pid, 4); 
                $this->db->trans_complete();
            } else {
                echo json_encode(array('status' => 'Error', 'message' =>
                    $this->lang->line('ERROR')));
            }
        } else {
            if (strlen($barcode) > 5 and is_numeric($barcode)) {
                $data = array(
                    'pcat' => $catid,
                    'warehouse' => $warehouse,
                    'product_name' => $product_name,
                    'product_code' => $product_code,
                    'product_price' => $product_price,
                    'fproduct_price' => $factoryprice,
                    'taxrate' => $taxrate,
                    'disrate' => $disrate,
                    'qty' => $product_qty,
                    'product_des' => $product_desc,
                    'alert' => $product_qty_alert,
                    'unit' => $unit,
                    'image' => $image,
                    'barcode' => $barcode,
                    'expiry' => $wdate,
                    'code_type' => $code_type,
                    'sub_id' => $sub_cat,
                    'b_id' => $b_id,
                    'related_product' => $related_product,
                    'favorite' => $favorite,
                    'wholesale' => $wholesale,
                    'product_status' => $product_status,
                    'bundle_products' => $bundle_products,
                    'bundle_discount' => $discounnt_array,
                    'search_meta' => $search_meta,
                    'auto_prices' => $calculate_profit_value , 

                );
            } else {
                $barcode = rand(100, 999) . rand(0, 9) . rand(1000000, 9999999) . rand(0, 9);
                $data = array(
                    'pcat' => $catid,
                    'warehouse' => $warehouse,
                    'product_name' => $product_name,
                    'product_code' => $product_code,
                    'product_price' => $product_price,
                    'fproduct_price' => $factoryprice,
                    'taxrate' => $taxrate,
                    'disrate' => $disrate,
                    'qty' => $product_qty,
                    'product_des' => $product_desc,
                    'alert' => $product_qty_alert,
                    'unit' => $unit,
                    'image' => $image,
                    'barcode' => $barcode,
                    'expiry' => $wdate,
                    'code_type' => 'EAN13',
                    'sub_id' => $sub_cat,
                    'b_id' => $b_id,
                    'related_product' => $related_product,
                    'favorite' => $favorite,
                    'wholesale' => $wholesale,
                    'product_status' => $product_status,
                    'bundle_products' => $bundle_products,
                    'bundle_discount' => $discounnt_array,
                    'search_meta' => $search_meta,
                    'auto_prices' => $calculate_profit_value , 
                );
            }
            $this->db->trans_start();
            if ($this->db->insert('geopos_products', $data)) {
                $pid = $this->db->insert_id();
                $this->movers(1, $pid, $product_qty, 0, 'Stock Initialized');
                $this->aauth->applog("[New Product] -$product_name  -Qty-$product_qty ID " . $pid, $this->aauth->get_user()->username);
                echo json_encode(array('status' => 'Success', 'message' =>
                    $this->lang->line('ADDED') . "  <a href='add' class='btn btn-blue btn-lg'><span class='fa fa-plus-circle' aria-hidden='true'></span>  </a> <a href='" . base_url('products') . "' class='btn btn-grey-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a>"));
            } else {
                echo json_encode(array('status' => 'Error', 'message' =>
                    $this->lang->line('ERROR')));
            }
            if ($v_type) {
                foreach ($v_type as $key => $value) {
                    if ($v_type[$key] && numberClean($v_stock[$key]) > 0.00) {
                        $this->db->select('u.id,u.name,u2.name AS variation');
                        $this->db->join('geopos_units u2', 'u.rid = u2.id', 'left');
                        $this->db->where('u.id', $v_type[$key]);

                        $query = $this->db->get('geopos_units u');
                        $r_n = $query->row_array();
                        $data['product_name'] = $product_name . '-' . $r_n['variation'] . '-' . $r_n['name'];
                        $data['qty'] = numberClean($v_stock[$key]);
                        $data['alert'] = numberClean($v_alert[$key]);
                        $data['merge'] = 1;
                        $data['sub'] = $pid;
                        $data['vb'] = $v_type[$key];
                        $this->db->insert('geopos_products', $data);
                        $pidv = $this->db->insert_id();
                        $this->movers(1, $pidv, $data['qty'], 0, 'Stock Initialized');
                        $this->aauth->applog("[New Product] -$product_name  -Qty-$product_qty ID " . $pid, $this->aauth->get_user()->username);
                    }
                }
            }
            if ($w_type) {
                foreach ($w_type as $key => $value) {
                    if ($w_type[$key] && numberClean($w_stock[$key]) > 0.00 && $w_type[$key] != $warehouse) {
                        $data['product_name'] = $product_name;
                        $data['warehouse'] = $w_type[$key];
                        $data['qty'] = numberClean($w_stock[$key]);
                        $data['alert'] = numberClean($w_alert[$key]);
                        $data['merge'] = 2;
                        $data['sub'] = $pid;
                        $data['vb'] = $w_type[$key];
                        $this->db->insert('geopos_products', $data);
                        $pidv = $this->db->insert_id();
                        $this->movers(1, $pidv, $data['qty'], 0, 'Stock Initialized');
                        $this->aauth->applog("[New Product] -$product_name  -Qty-$product_qty ID " . $pid, $this->aauth->get_user()->username);
                    }
                }
            }
            $this->custom->save_fields_data($pid, 4);
            $this->db->trans_complete();

            // add history shot
            $scree_price_data = array(
                'pid'               => $pid ,
                'product_price'     => $product_price ,
                'fproduct_price'    => $factoryprice ,
                'wholesale'         => $wholesale
            );
            $this->db->insert('geopos_products_prices_history', $scree_price_data ) ;
        }
    }

    public function edit($pid, $catid, $warehouse, $product_name, $product_code, $product_price, $factoryprice, $taxrate, $disrate, $product_qty, $product_qty_alert, $product_desc, $image, $unit, $barcode, $code_type, $sub_cat = '', $b_id = '', $related_product, $favorite ='', $wholesale, $product_status, $bundle_products, $discounnt_array, $search_meta)
    {
        $this->db->select('qty,product_price,fproduct_price,wholesale');
        $this->db->from('geopos_products');
        $this->db->where('pid', $pid);
        $query = $this->db->get();
        $r_n = $query->row_array();
        $ware_valid = $this->valid_warehouse($warehouse);
        if ($this->aauth->get_user()->loc) {
            if ($ware_valid['loc'] == $this->aauth->get_user()->loc or $ware_valid['loc'] == '0' or $warehouse == 0) {
                $data = array(
                    'pcat' => $catid,
                    'warehouse' => $warehouse,
                    'product_name' => $product_name,
                    'product_code' => $product_code,
                    'product_price' => $product_price,
                    'fproduct_price' => $factoryprice,
                    'taxrate' => $taxrate,
                    'disrate' => $disrate,
                    'qty' => $product_qty,
                    'product_des' => $product_desc,
                    'alert' => $product_qty_alert,
                    'unit' => $unit,
                    'image' => $image,
                    'barcode' => $barcode,
                    'code_type' => $code_type,
                    'sub_id' => $sub_cat,
                    'b_id' => $b_id,
                    'related_product' => $related_product,
                    'favorite' => $favorite,
                    'wholesale' => $wholesale,
                    'product_status' => $product_status,
                    'bundle_products' => $bundle_products,
                    'bundle_discount' => $discounnt_array,
                    'search_meta' => $search_meta
                );

                $this->db->set($data);
                $this->db->where('pid', $pid);

                if ($this->db->update('geopos_products')) {
                    if ($r_n['qty'] != $product_qty) {
                        $m_product_qty = $product_qty - $r_n['qty'];
                        $this->movers(1, $pid, $m_product_qty, 0, 'Stock Changes');
                    }
                    $this->aauth->applog("[Update Product] -$product_name  -Qty-$product_qty ID " . $pid, $this->aauth->get_user()->username);
                    echo json_encode(array('status' => 'Success', 'message' =>
                        $this->lang->line('UPDATED') . " <a href='" . base_url('products/edit?id=' . $pid) . "' class='btn btn-blue btn-lg'><span class='fa fa-eye' aria-hidden='true'></span>  </a> <a href='" . base_url('products') . "' class='btn btn-grey-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a>"));
                } else {
                    echo json_encode(array('status' => 'Error', 'message' =>
                        $this->lang->line('ERROR')));
                }
            } else {
                echo json_encode(array('status' => 'Error', 'message' =>
                    $this->lang->line('ERROR')));
            }
        } else {
            $data = array(
                'pcat' => $catid,
                'warehouse' => $warehouse,
                'product_name' => $product_name,
                'product_code' => $product_code,
                'product_price' => $product_price,
                'fproduct_price' => $factoryprice,
                'taxrate' => $taxrate,
                'disrate' => $disrate,
                'qty' => $product_qty,
                'product_des' => $product_desc,
                'alert' => $product_qty_alert,
                'unit' => $unit,
                'image' => $image,
                'barcode' => $barcode,
                'code_type' => $code_type,
                'sub_id' => $sub_cat,
                'b_id' => $b_id,
                'related_product' => $related_product,
                'favorite' => $favorite,
                'wholesale' => $wholesale,
                'product_status' => $product_status,
                'bundle_products' => $bundle_products,
                'bundle_discount' => $discounnt_array,
                'search_meta' => $search_meta
            );
            $this->db->set($data);
            $this->db->where('pid', $pid);
            if ($this->db->update('geopos_products')) {
                if ($r_n['qty'] != $product_qty) {
                    $m_product_qty = $product_qty - $r_n['qty'];
                    $this->movers(1, $pid, $m_product_qty, 0, 'Stock Changes');
                }
                $this->aauth->applog("[Update Product] -$product_name  -Qty-$product_qty ID " . $pid, $this->aauth->get_user()->username);
                echo json_encode(array('status' => 'Success', 'message' =>
                    $this->lang->line('UPDATED') . " <a href='" . base_url('products/edit?id=' . $pid) . "' class='btn btn-blue btn-lg'><span class='fa fa-eye' aria-hidden='true'></span>  </a> <a href='" . base_url('products') . "' class='btn btn-grey-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a>"));
            } else {
                echo json_encode(array('status' => 'Error', 'message' =>
                    $this->lang->line('ERROR')));
            }
        }

        // History Table 
        $data =  array(
            'pid'  => $pid,
        );
        if($r_n['product_price'] != $product_price){
            $data['product_price'] = $product_price ;
        }
        if($r_n['fproduct_price'] != $factoryprice){
            $data['fproduct_price'] = $factoryprice;
        }
        if($r_n['wholesale'] != $wholesale){
            $data['wholesale'] = $wholesale;
        }

        if( count($data) > 1 ){
            $this->db->insert('geopos_products_prices_history', $data ) ;       
        }

        $this->custom->edit_save_fields_data($pid, 4);
    }



    public function prd_stats()
    {
        $whr = '';
        if ($this->aauth->get_user()->loc) {
            $whr = ' LEFT JOIN  geopos_warehouse on geopos_warehouse.id = geopos_products.warehouse WHERE geopos_warehouse.loc=' . $this->aauth->get_user()->loc;
            if (BDATA) {
                $whr = ' LEFT JOIN  geopos_warehouse on geopos_warehouse.id = geopos_products.warehouse WHERE geopos_warehouse.loc=0 OR geopos_warehouse.loc=' . $this->aauth->get_user()->loc;
            }
        } elseif (!BDATA) {
            $whr = ' LEFT JOIN  geopos_warehouse on geopos_warehouse.id = geopos_products.warehouse WHERE geopos_warehouse.loc=0';
        }
        $query = $this->db->query("SELECT COUNT(IF( geopos_products.qty > 0, geopos_products.qty, NULL)) AS instock, COUNT(IF( geopos_products.qty <= 0, geopos_products.qty, NULL)) AS outofstock, COUNT(geopos_products.qty) AS total FROM geopos_products $whr");
        echo json_encode($query->result_array());
    }

    public function products_list($id, $term = '')
    {
        $this->db->select('geopos_products.*');
        $this->db->from('geopos_products');
        $this->db->where('geopos_products.warehouse', $id);
        if ($this->aauth->get_user()->loc) {
            $this->db->join('geopos_warehouse', 'geopos_warehouse.id = geopos_products.warehouse');
            $this->db->where('geopos_warehouse.loc', $this->aauth->get_user()->loc);
        } elseif (!BDATA) {
            $this->db->join('geopos_warehouse', 'geopos_warehouse.id = geopos_products.warehouse');
            $this->db->where('geopos_warehouse.loc', 0);
        }
        if ($term) {
            $this->db->where("geopos_products.product_name LIKE '%$term%'");
            $this->db->or_where("geopos_products.product_code LIKE '$term%'");
        }
        $query = $this->db->get();
        return $query->result_array();
    }


    public function units()
    {
        $this->db->select('*');
        $this->db->from('geopos_units');
        $this->db->where('type', 0);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function transfer_custom_fields($old,$new){
        $old  = (int)$old;
        $new  = (int)$new;
        $customfields = "SELECT * FROM `geopos_custom_data` WHERE rid = $old ";
        $customfields = $this->db->query($customfields);
        $customfields = $customfields->result_array();
        if( count($customfields) > 0 ){
            foreach ($customfields as $key => $field) {
                unset($customfields[$key]['id']);
                $customfields[$key]['rid'] =  $new ;
            }
            $this->db->insert_batch ('geopos_custom_data' , $customfields);     
        }    
    }

    public function transfer($from_warehouse, $products_l, $to_warehouse, $qty)
    {    
        $updateArray = array();
        $move = false;
        $qtyArray = explode(',', $qty);
        $this->db->select('title');
        $this->db->from('geopos_warehouse');
        $this->db->where('id', $to_warehouse);
        $query = $this->db->get();
        $to_warehouse_name = $query->row_array()['title'];
        $i = 0;
        pre($products_l);
        foreach ($products_l as $row) {
            $qty = 0;
            if (array_key_exists($i, $qtyArray)) {
                $qty = $qtyArray[$i];
            }
            $this->db->select('*');
            $this->db->from('geopos_products');
            $this->db->where('pid', $row);
            $query = $this->db->get();
            $pr = $query->row_array();
            $pr2 = $pr;
            $c_qty = $pr['qty'];
            if ($c_qty - $qty < 0) {
            } elseif ($c_qty - $qty == 0) {
                if ($pr['merge'] == 2) {
                    $this->db->select('pid,product_name');
                    $this->db->from('geopos_products');
                    $this->db->where('pid', $pr['sub']);
                    $this->db->where('warehouse', $to_warehouse);
                    $query = $this->db->get();
                    $pr = $query->row_array();
                } else {
                    $this->db->select('pid,product_name');
                    $this->db->from('geopos_products');
                    $this->db->where('merge', 2);
                    $this->db->where('sub', $row);
                    $this->db->where('warehouse', $to_warehouse);
                    $query = $this->db->get();
                    $pr = $query->row_array();
                }


                $c_pid = $pr['pid'];
                $product_name = $pr['product_name'];

                if ($c_pid) { 
                    $this->db->set('qty', "qty+$qty", false);
                    $this->db->where('pid', $c_pid);
                    $this->db->update('geopos_products');
                    $this->aauth->applog("[Product Transfer] -$product_name  -Qty-$qty ID " . $c_pid, $this->aauth->get_user()->username);
                    $this->db->delete('geopos_products', array('pid' => $row));
                    $this->db->delete('geopos_movers', array('d_type' => 1, 'rid1' => $row));
                } else {
                    $updateArray[] = array(
                        'pid' => $row,
                        'warehouse' => $to_warehouse
                    );
                    $move = true;
                    $product_name = $pr2['product_name'];
                    $this->db->delete('geopos_movers', array('d_type' => 1, 'rid1' => $row));

                    $this->movers(1, $row, $qty, 0, 'Stock Transferred & Initialized W- ' . $to_warehouse_name);
                    $this->aauth->applog("[Product Transfer] -$product_name  -Qty-$qty W- $to_warehouse_name PID " . $pr2['pid'], $this->aauth->get_user()->username);
                }
            } else {
                $data['product_name'] = $pr['product_name'];
                $data['pcat'] = $pr['pcat'];
                $data['warehouse'] = $to_warehouse;
                $data['product_name'] = $pr['product_name'];
                $data['product_code'] = $pr['product_code'];
                $data['product_price'] = $pr['product_price'];
                $data['fproduct_price'] = $pr['fproduct_price'];
                $data['taxrate'] = $pr['taxrate'];
                $data['disrate'] = $pr['disrate'];
                $data['qty'] = $qty;
                $data['product_des'] = $pr['product_des'];
                $data['alert'] = $pr['alert'];
                $data['	unit'] = $pr['unit'];
                $data['image'] = $pr['image'];
                $data['barcode'] = $pr['barcode'];
                $data['merge'] = 2;
                $data['sub'] = $row;
                $data['vb'] = $to_warehouse;

                // New added Fields 
                $data['related_product'] = $pr['related_product'];
                $data['favorite'] = $pr['favorite'];
                $data['wholesale'] = $pr['wholesale'];
                $data['product_status'] = $pr['product_status'];
                $data['bundle_products'] = $pr['bundle_products'];
                $data['bundle_discount'] = $pr['bundle_discount'];
                $data['search_meta'] = $pr['search_meta'];
                $data['auto_prices'] = $pr['auto_prices'];
                
                if ($pr['merge'] == 2) {
                    $this->db->select('pid,product_name');
                    $this->db->from('geopos_products');
                    $this->db->where('pid', $pr['sub']);
                    $this->db->where('warehouse', $to_warehouse);
                    $query = $this->db->get();
                    $pr = $query->row_array();
                } else {
                    $this->db->select('pid,product_name');
                    $this->db->from('geopos_products');
                    $this->db->where('merge', 2);
                    $this->db->where('sub', $row);
                    $this->db->where('warehouse', $to_warehouse);
                    $query = $this->db->get();
                    $pr = $query->row_array();
                }


                $c_pid = $pr['pid'];
                $product_name = $pr2['product_name'];

                if ($c_pid) {
                    $this->db->set('qty', "qty+$qty", false);
                    $this->db->where('pid', $c_pid);
                    $this->db->update('geopos_products');

                    $this->movers(1, $c_pid, $qty, 0, 'Stock Transferred W ' . $to_warehouse_name);
                    $this->aauth->applog("[Product Transfer] -$product_name  -Qty-$qty W $to_warehouse_name  ID " . $c_pid, $this->aauth->get_user()->username);
                } else {
                    $this->db->insert('geopos_products', $data);
                    $pid = $this->db->insert_id();
                    $this->movers(1, $pid, $qty, 0, 'Stock Transferred & Initialized W ' . $to_warehouse_name);
                    $this->aauth->applog("[Product Transfer] -$product_name  -Qty-$qty  W $to_warehouse_name ID " . $pr2['pid'], $this->aauth->get_user()->username);
                    $this->transfer_custom_fields($row,$pid);
                }

                $this->db->set('qty', "qty-$qty", false);
                $this->db->where('pid', $row);
                $this->db->update('geopos_products');
                $this->movers(1, $row, -$qty, 0, 'Stock Transferred WID ' . $to_warehouse_name);
            }
            $i++;
        }

        if ($move) {
            $this->db->update_batch('geopos_products', $updateArray, 'pid');
        }

        echo json_encode(array('status' => 'Success', 'message' =>
            $this->lang->line('UPDATED')));
    }

    public function meta_delete($name)
    {
        if (@unlink(FCPATH . 'userfiles/product/' . $name)) {
            return true;
        }
    }

    public function valid_warehouse($warehouse)
    {
        $this->db->select('id,loc');
        $this->db->from('geopos_warehouse');
        $this->db->where('id', $warehouse);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }

    public function movers($type = 0, $rid1 = 0, $rid2 = 0, $rid3 = 0, $note = '')
    {
        $data = array(
            'd_type' => $type,
            'rid1' => $rid1,
            'rid2' => $rid2,
            'rid3' => $rid3,
            'note' => $note
        );
        $this->db->insert('geopos_movers', $data);
    }
    public function pos_get_bundle_by_id($id)
    {
        try {
            $out = '';
            $product_id = $id;
    
            $query = "SELECT bundle_products  FROM geopos_products WHERE pid = ". $product_id;
            $query_result = $this->db->query($query)->result_array();
           
           
            $bundes = str_replace(']', ')', str_replace('[', "(", $query_result[0]['bundle_products']));
    
            $query = "SELECT geopos_products.*  FROM geopos_products Where pid IN ".$bundes;
    
            $query_result = $this->db->query($query)->result_array();
            return $query_result;
        } catch (\Throwable $th) {
            return [];
        }
    }
    public function get_product_data($id , $request_name)
    {
        if( $request_name == 'just_name'){
            $out = '';
            $product_id = $id;
            $query = "SELECT product_name  FROM geopos_products WHERE pid = ". $product_id;
            $query_result = $this->db->query($query)->result_array();               
            return $query_result;
        }
    }
    public function prices_changes_list()
    {
        $pid = $this->input->get('id');
        
        $no =  0 ; 
        $output =  '';
        $list = $this->db->query("SELECT * FROM geopos_products_prices_history  WHERE pid  =  $pid");
        $list = $list->result_array();

        if( count($list) > 0 ){
            foreach ($list as $change) {
                $no ++ ;
                $product_price  = $change['product_price'] !== NULL  ? $change['product_price'] : $this->lang->line('__no changes__');
                $wholesale      = $change['wholesale'] !== NULL  ? $change['wholesale'] : $this->lang->line('__no changes__');
                $fproduct_price  = $change['fproduct_price'] !== NULL  ? $change['fproduct_price'] : $this->lang->line('__no changes__');
                $date           = $change['date'];
                $output .= "<tr role='row' class='odd'><td>$no</td><td>$fproduct_price</td><td>$product_price</td><td>$wholesale</td><td>$date</td></tr>";
            }
        }else {
            $output =  "<tr role='row' class='odd'><td>".$this->lang->line('No Saved changes in the prices for this products')."</td></tr>";
        }
        return $output;
    }
    public function out_transfered_products()
    {
        $query = "SELECT geopos_tranfering_products.* , geopos_warehouse.title As w_to_name , geopos_products.product_name , geopos_products.product_code , geopos_products.qty As max_available ";
        $query .= " FROM geopos_tranfering_products "; 
        $query .= " LEFT JOIN geopos_warehouse ON geopos_warehouse.id = geopos_tranfering_products.w_to "; 
        $query .= " LEFT JOIN geopos_products  ON geopos_products.pid = geopos_tranfering_products.pid "; 
        $query .= " WHERE geopos_tranfering_products.status =  1 ";
        echo $query ;
        $query_result = $this->db->query($query)->result_array();
        return $query_result ;
    }
    public function received_transfer()
    {
        $query = "SELECT geopos_tranfering_products.* , geopos_warehouse.title As w_from_name , geopos_products.product_name , geopos_products.product_code , geopos_products.qty As max_available ";
        $query .= " FROM geopos_tranfering_products "; 
        $query .= " LEFT JOIN geopos_warehouse ON geopos_warehouse.id = geopos_tranfering_products.w_from "; 
        $query .= " LEFT JOIN geopos_products  ON geopos_products.pid = geopos_tranfering_products.pid "; 
        $query .= " WHERE geopos_tranfering_products.status =  2 ";
        $query_result = $this->db->query($query)->result_array();
        return $query_result ;
    }
}
