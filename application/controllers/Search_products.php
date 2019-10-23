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

class Search_products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("Aauth");
        $this->load->model('search_model');
        $this->load->model('products_model', 'products');

        if (!$this->aauth->is_loggedin()) {
            redirect('/user/', 'refresh');
        }
        if (!$this->aauth->premission(1)) {
            exit('<h3>Sorry! You have insufficient permissions to access this section</h3>');
        }
    }

    //search product in invoice
    public function search()
    {
        $result = array();
        $out = array();
        $row_num = $this->input->post('row_num', true);
        $name = $this->input->post('name_startsWith', true);
        $wid = $this->input->post('wid', true);
        $qw = '';
        if ($wid > 0) {
            $qw = "(geopos_products.warehouse='$wid') AND ";
        }
        $join = '';
        if ($this->aauth->get_user()->loc) {
            $join = 'LEFT JOIN geopos_warehouse ON geopos_warehouse.id=geopos_products.warehouse';
            if (BDATA) {
                $qw .= '(geopos_warehouse.loc=' . $this->aauth->get_user()->loc . ' OR geopos_warehouse.loc=0) AND ';
            } else {
                $qw .= '(geopos_warehouse.loc=' . $this->aauth->get_user()->loc . ' ) AND ';
            }
        } elseif (!BDATA) {
            $join = 'LEFT JOIN geopos_warehouse ON geopos_warehouse.id=geopos_products.warehouse';
            $qw .= '(geopos_warehouse.loc=0) AND ';
        }
        if ($name) {
            $query = $this->db->query("SELECT geopos_products.pid,geopos_products.product_name,geopos_products.product_price,geopos_products.product_code,geopos_products.taxrate,geopos_products.disrate,geopos_products.product_des,geopos_products.qty,geopos_products.unit  FROM geopos_products $join WHERE " . $qw . "(UPPER(geopos_products.product_name) LIKE '%" . strtoupper($name) . "%') OR (UPPER(geopos_products.product_code) LIKE '" . strtoupper($name) . "%') LIMIT 6");

            $result = $query->result_array();
            foreach ($result as $row) {
                $name = array($row['product_name'], amountExchange_s($row['product_price'], 0, $this->aauth->get_user()->loc), $row['pid'], amountFormat_general($row['taxrate']), amountFormat_general($row['disrate']), $row['product_des'], $row['unit'], $row['product_code'], amountFormat_general($row['qty']), $row_num);
                array_push($out, $name);
            }
            echo json_encode($out);
        }
    }

    public function puchase_search()
    {
        $result = array();
        $out = array();
        $row_num = $this->input->post('row_num', true);
        $name = $this->input->post('name_startsWith', true);
        $wid = $this->input->post('wid', true);
        $qw = '';
        if ($wid > 0) {
            $qw = "(geopos_products.warehouse='$wid' ) AND ";
        }
        $join = '';
        if ($this->aauth->get_user()->loc) {
            $join = 'LEFT JOIN geopos_warehouse ON geopos_warehouse.id=geopos_products.warehouse';
            if (BDATA) {
                $qw .= '(geopos_warehouse.loc=' . $this->aauth->get_user()->loc . ' OR geopos_warehouse.loc=0) AND ';
            } else {
                $qw .= '(geopos_warehouse.loc=' . $this->aauth->get_user()->loc . ' ) AND ';
            }
        } elseif (!BDATA) {
            $join = 'LEFT JOIN geopos_warehouse ON geopos_warehouse.id=geopos_products.warehouse';
            $qw .= '(geopos_warehouse.loc=0) AND ';
        }
        if ($name) {
            $query = $this->db->query("SELECT geopos_products.pid,geopos_products.product_name,geopos_products.product_code,geopos_products.fproduct_price,geopos_products.taxrate,geopos_products.disrate,geopos_products.product_des,geopos_products.unit FROM geopos_products $join WHERE " . $qw . "UPPER(geopos_products.product_name) LIKE '%" . strtoupper($name) . "%' OR UPPER(geopos_products.product_code) LIKE '" . strtoupper($name) . "%' LIMIT 6");

            $result = $query->result_array();
            foreach ($result as $row) {
                $name = array($row['product_name'], amountExchange_s($row['fproduct_price'], 0, $this->aauth->get_user()->loc), $row['pid'], amountFormat_general($row['taxrate']), amountFormat_general($row['disrate']), $row['product_des'], $row['unit'], $row['product_code'], $row_num);
                array_push($out, $name);
            }
            echo json_encode($out);
        }
    }

    public function csearch()
    {
        $result = array();
        $out = array();
        $name = $this->input->get('keyword', true);
        $whr = '';
        if ($this->aauth->get_user()->loc) {
            $whr = ' (loc=' . $this->aauth->get_user()->loc . ' OR loc=0) AND ';
            if (!BDATA) {
                $whr = ' (loc=' . $this->aauth->get_user()->loc . ' ) AND ';
            }
        } elseif (!BDATA) {
            $whr = ' (loc=0) AND ';
        }
        if ($name) {
            $query = $this->db->query("SELECT id,name,address,city,phone,email,discount_c FROM geopos_customers WHERE $whr (UPPER(name)  LIKE '%" . strtoupper($name) . "%' OR UPPER(phone)  LIKE '" . strtoupper($name) . "%') LIMIT 6");
            $result = $query->result_array();
            echo '<ol>';
            $i = 1;
            foreach ($result as $row) {
                echo "<li onClick=\"selectCustomer('" . $row['id'] . "','" . $row['name'] . " ','" . $row['address'] . "','" . $row['city'] . "','" . $row['phone'] . "','" . $row['email'] . "','" . amountFormat_general($row['discount_c']) . "')\"><span>$i</span><p>" . $row['name'] . " &nbsp; &nbsp  " . $row['phone'] . "</p></li>";
                $i++;
            }
            echo '</ol>';
        }
    }

    public function party_search()
    {
        $result = array();
        $out = array();
        $tbl = 'geopos_customers';
        $name = $this->input->get('keyword', true);

        $ty = $this->input->get('ty', true);
        if ($ty) {
            $tbl = 'geopos_supplier';
        }
        $whr = '';

        if ($this->aauth->get_user()->loc) {
            $whr = ' (loc=' . $this->aauth->get_user()->loc . ' OR loc=0) AND ';
            if (!BDATA) {
                $whr = ' (loc=' . $this->aauth->get_user()->loc . ' ) AND ';
            }
        } elseif (!BDATA) {
            $whr = ' (loc=0) AND ';
        }

        if ($name) {
            $query = $this->db->query("SELECT id,name,address,city,phone,email FROM $tbl  WHERE $whr (UPPER(name)  LIKE '%" . strtoupper($name) . "%' OR UPPER(phone)  LIKE '" . strtoupper($name) . "%') LIMIT 6");
            $result = $query->result_array();
            echo '<ol>';
            $i = 1;
            foreach ($result as $row) {
                echo "<li onClick=\"selectCustomer('" . $row['id'] . "','" . $row['name'] . " ','" . $row['address'] . "','" . $row['city'] . "','" . $row['phone'] . "','" . $row['email'] . "')\"><span>$i</span><p>" . $row['name'] . " &nbsp; &nbsp  " . $row['phone'] . "</p></li>";
                $i++;
            }
            echo '</ol>';
        }
    }

    public function pos_c_search()
    {
        $result = array();
        $out = array();
        $name = $this->input->get('keyword', true);
        $whr = '';
        if ($this->aauth->get_user()->loc) {
            $whr = ' (loc=' . $this->aauth->get_user()->loc . ' OR loc=0) AND ';
            if (!BDATA) {
                $whr = ' (loc=' . $this->aauth->get_user()->loc . ' ) AND ';
            }
        } elseif (!BDATA) {
            $whr = ' (loc=0) AND ';
        }

        if ($name) {
            $query = $this->db->query("SELECT id,name,phone,discount_c,wholesale FROM geopos_customers WHERE $whr (UPPER(name)  LIKE '%" . strtoupper($name) . "%' OR UPPER(phone)  LIKE '" . strtoupper($name) . "%') LIMIT 6");
            $result = $query->result_array();
            echo '<ol>';
            $i = 1;
            foreach ($result as $row) {
                $query2 = $this->db->query("SELECT SUM(total) AS total,SUM(pamnt) AS pamnt,SUM(discount) AS discount FROM geopos_invoices where csd = ". $row['id'] ."");
                $this->db->where('csd', $row['id']);
                $ret = $query2->row();
                echo "<li onClick=\"PselectCustomer('" . $row['id'] . "','" . $row['name'] . " ','" . amountFormat_general($row['discount_c']) . "','" . ((int)$ret->total - (int)$ret->pamnt) . "','" . $row['wholesale'] . " ')\"><span>$i</span><p>" . ($row['wholesale'] ? "<i class='fa fa-star mr-1 text-danger' ></i>" : '') . $row['name'] . " &nbsp; &nbsp  " . $row['phone'] . " &nbsp; &nbsp  due: <span class='text-danger'>" . ((int)$ret->total - (int)$ret->pamnt) . "</span></p></li>";
                $i++;
            }
            echo '</ol>';
        }
    }



    public function supplier()
    {
        $result = array();
        $out = array();
        $name = $this->input->get('keyword', true);

        $whr = '';
        if ($this->aauth->get_user()->loc) {
            $whr = ' (loc=' . $this->aauth->get_user()->loc . ' OR loc=0) AND ';
            if (!BDATA) {
                $whr = ' (loc=' . $this->aauth->get_user()->loc . ' ) AND ';
            }
        } elseif (!BDATA) {
            $whr = ' (loc=0) AND ';
        }
        if ($name) {
            $query = $this->db->query("SELECT id,name,address,city,phone,email FROM geopos_supplier WHERE $whr (UPPER(name)  LIKE '%" . strtoupper($name) . "%' OR UPPER(phone)  LIKE '" . strtoupper($name) . "%') LIMIT 6");
            $result = $query->result_array();
            echo '<ol>';
            $i = 1;
            foreach ($result as $row) {
                echo "<li onClick=\"selectSupplier('" . $row['id'] . "','" . $row['name'] . " ','" . $row['address'] . "','" . $row['city'] . "','" . $row['phone'] . "','" . $row['email'] . "')\"><span>$i</span><p>" . $row['name'] . " &nbsp; &nbsp  " . $row['phone'] . "</p></li>";
                $i++;
            }
            echo '</ol>';
        }
    }

    public function pos_search()
    {
        $out = '';
        $name = $this->input->post('name', true);
        $cid = $this->input->post('cid', true);
        $wid = $this->input->post('wid', true);
        $status = $this->input->post('status', true);
        $qw = '';
        $product_status = '';
        if ($wid > 0) {
            $qw .= "(geopos_products.warehouse='$wid') AND ";
        }
        if ($cid > 0) {
            $qw .= "(geopos_products.pcat='$cid') AND ";
        }
        if ($status > 0) {
            $product_status .= "(geopos_products.product_status='$status') AND ";
        }

        $join = '';
        if ($this->aauth->get_user()->loc) {
            $join = 'LEFT JOIN geopos_warehouse ON geopos_warehouse.id=geopos_products.warehouse';
            if (BDATA) {
                $qw .= '(geopos_warehouse.loc=' . $this->aauth->get_user()->loc . ' OR geopos_warehouse.loc=0) AND ';
            } else {
                $qw .= '(geopos_warehouse.loc=' . $this->aauth->get_user()->loc . ' ) AND ';
            }
        } elseif (!BDATA) {
            $join = 'LEFT JOIN geopos_warehouse ON geopos_warehouse.id=geopos_products.warehouse';
            $qw .= '(geopos_warehouse.loc=0) AND ';
        }
        $bar = '';
        if (is_numeric($name)) {
            $b = array('-', '-', '-');
            $c = array(3, 4, 11);
            $barcode = $name;
            for ($i = count($c) - 1; $i >= 0; $i--) {
                $barcode = substr_replace($barcode, $b[$i], $c[$i], 0);
            }

            $bar = " OR (geopos_products.barcode LIKE '" . (substr($barcode, 0, -1)) . "%' OR geopos_products.barcode LIKE '" . $name . "%')";
        }
        $relatedQuery = "select GROUP_CONCAT( Concat(',',rel,',')) from (SELECT geopos_products.related_product as rel FROM geopos_products LEFT JOIN geopos_custom_data ON geopos_custom_data.rid=geopos_products.pid AND (geopos_custom_data.module=4) $join WHERE " . $product_status . $qw . "(UPPER(geopos_products.product_name) LIKE '%" . strtoupper($name) . "%' $bar OR geopos_products.product_code LIKE '" . strtoupper($name) . "%' OR geopos_custom_data.data LIKE '" . strtoupper($name) . "%'OR geopos_custom_data.data LIKE '" . strtoupper($name) . "%') AND (geopos_products.qty>0) GROUP BY pid) as relatedporoducts";
        $query = "SELECT geopos_products.*,geopos_custom_data.* FROM geopos_products LEFT JOIN geopos_custom_data ON geopos_custom_data.rid=geopos_products.pid AND (geopos_custom_data.module=4) $join WHERE " . $product_status . $qw . "(UPPER(geopos_products.product_name) LIKE '%" . strtoupper($name) . "%' $bar OR geopos_products.product_code LIKE '" . strtoupper($name) . "%' OR INStr((".$relatedQuery."),`pid`)>0 OR geopos_custom_data.data LIKE '" . strtoupper($name) . "%'OR geopos_custom_data.data LIKE '" . strtoupper($name) . "%') AND (geopos_products.qty>0) GROUP BY pid LIMIT 16";

        $query = $this->db->query($query);

        $result = $query->result_array();
        $i = 0;
        echo '<div class="row match-height">';
        foreach ($result as $key => $row) {
            $related_products = implode(',', json_decode($row['related_product'],true));
            $query3 = "SELECT geopos_products.* FROM geopos_products WHERE pid in(". $related_products . ',' .");";
            $query3 = $this->db->query($query);    
            $result2 = $query3->result_array();
                
            $out .= '<div class="col-3 border "><div class="rounded text-center mt-3 pb-3">
                    ' . ($row['favorite'] ? '<i class="fa fa-heart favorite-products"></i>' : '') .  (($row['bundle_products']== 'null') ?  '' :'<i class="fa fa-object-group bundle-products"></i>' ) .'
                        <a   id="posp' . $i . '"  class="select_pos_item btn btn-outline-light-blue round" data-bundle="' . ($row['bundle_products']=='null' ? false : true) .'"   data-name="' . $row['product_name'] . '"  data-price="' . amountExchange_s($row['product_price'], 0, $this->aauth->get_user()->loc) . '" data-wholesale="' . amountExchange_s($row['wholesale'], 0, $this->aauth->get_user()->loc) . '"  data-tax="' . amountFormat_general($row['taxrate']) . '"  data-discount="' . amountFormat_general($row['disrate']) . '"   data-pcode="' . $row['product_code'] . '"   data-pid="' . $row['pid'] . '"  data-stock="' . amountFormat_general($row['qty']) . '" data-unit="' . $row['unit'] . '" >
                            <img class="round"
                                    src="' . base_url('userfiles/product/' . $row['image']) . '"  style="max-height: 100%;max-width: 100%">
                            <div class="text-xs-center text">
                                <small style="white-space: pre-wrap;">' . $row['product_name'] . '</small>
                            </div></a>
                    </div></div>';
            $i++;
            //   if ($i % 4 == 0) $out .= '</div><div class="row">';
        }
        echo $out;
    }

    //  for the global search page
    public function detailed_product_search() 
    {        
        $out = '';
        $wid = $this->input->post('wid', true);
        $subcat = $this->input->post('subcat', true);
        $cid = $this->input->post('cid', true);
        $loc = $this->input->post('loc', true);
        $status = $this->input->post('status', true);
        $name = $this->input->post('name', true);

        $qw = '';
        $join = '';
        if ($status > 0) { // Status
            $qw .= " AND  (geopos_products.product_status='$status') ";
        }
        if ($wid > 0) { // Warehouse 
            $qw .= " AND (geopos_products.warehouse='$wid') ";
        }
        if ($loc > 0) { // Location
            $join .= " LEFT JOIN geopos_warehouse On geopos_products.warehouse = geopos_warehouse.id"; 
            $join .= " LEFT JOIN geopos_locations On geopos_warehouse.loc = geopos_locations.id"; 
            $qw   .= " AND (geopos_locations.id='$loc') ";
        }
        if ($subcat > 0) { // Sub category
            $qw .= " AND (geopos_products.sub_id='$subcat') ";
        }
        if ($cid > 0) { // Category
            $qw .= " AND (geopos_products.pcat='$cid') ";
        }

        $bar = '';
        if(strlen($name) >= 2){
            $name =  explode(',' , $name);
            foreach ($name as $keyword) {
                $or = "";
                if(is_numeric($keyword)){
                    $or = " OR  geopos_products.barcode LIKE '%$keyword%' "; 
                }
                $qw .= " AND  ( geopos_products.search_meta LIKE '%$keyword%'   $or  ) ";

            }    
        }
        if($qw != ''){
            $where = " WHERE ";
        }else {
            $where = "";
        }
        $query  = " SELECT geopos_products.* FROM geopos_products ";
        $query .= " $join WHERE (geopos_products.qty>0) $qw   ";
        $query .= " GROUP BY product_code  DESC ";

        $query = $this->db->query($query);

        $result = $query->result_array();
        $i = 0;
        echo $qw.'<div class="row match-height">';
        foreach ($result as $key => $row) {
            $out .= '<div class="col-2 border "><div class="rounded text-center mt-3 pb-3">' . ($row['favorite'] ? '<i class="fa fa-heart favorite-products"></i>' : '') .  (($row['bundle_products']== 'null') ?  '' :'<i class="fa fa-object-group bundle-products"></i>' ) .'
                        <a   id="posp' . $i . '"  class="select_pos_item btn btn-outline-light-blue round   view-object" data-bundle="' . ($row['bundle_products']=='null' ? false : true) .'"   data-name="' . $row['product_name'] . '" data-object-id="' . $row['pid'] . '"  data-image="' . base_url('userfiles/product/' . $row['image']) . '"  data-url="' . base_url('products/edit?id=' . $row['pid']) . '"  data-toggle="modal" data-target="#" data-price="' . amountExchange_s($row['product_price'], 0, $this->aauth->get_user()->loc) . '" data-wholesale="' . amountExchange_s($row['wholesale'], 0, $this->aauth->get_user()->loc) . '"  data-tax="' . amountFormat_general($row['taxrate']) . '"  data-discount="' . amountFormat_general($row['disrate']) . '"   data-pcode="' . $row['product_code'] . '"   data-pid="' . $row['pid'] . '"  data-stock="' . amountFormat_general($row['qty']) . '" data-unit="' . $row['unit'] . '" >
                            <img class="round" src="' . base_url('userfiles/product/' . $row['image']) . '"  style="max-height: 100%;max-width: 100%">
                            <div class="text-xs-center text">
                                <small style="white-space: pre-wrap;">' . $row['product_name'] . '</small>
                            </div></a>
                    </div></div>';
            $i++;
        }

        echo $out;
    }

    public function v2_pos_search()
    {
        $out = '';
        $name = $this->input->post('name', true);
        $cid = $this->input->post('cid', true);
        $wid = $this->input->post('wid', true);
        $status = $this->input->post('status', true);
        $qw = '';
        $product_status = '';
        if ($wid > 0) {
            $qw .= "(geopos_products.warehouse='$wid') AND ";
        }
        if ($cid > 0) {
            $qw .= "(geopos_products.pcat='$cid') AND ";
        }
        if ($status > 0) {
            $product_status .= "(geopos_products.product_status='$status') AND ";
        }
        $join = '';

        if ($this->aauth->get_user()->loc) {
            $join = 'LEFT JOIN geopos_warehouse ON geopos_warehouse.id=geopos_products.warehouse';
            if (BDATA) {
                $qw .= '(geopos_warehouse.loc=' . $this->aauth->get_user()->loc . ' OR geopos_warehouse.loc=0) AND ';
            } else {
                $qw .= '(geopos_warehouse.loc=' . $this->aauth->get_user()->loc . ' ) AND ';
            }
        } elseif (!BDATA) {
            $join = 'LEFT JOIN geopos_warehouse ON geopos_warehouse.id=geopos_products.warehouse';
            $qw .= '(geopos_warehouse.loc=0) AND ';
        }
        $bar = '';

        if (is_numeric($name)) {
            $b = array('-', '-', '-');
            $c = array(3, 4, 11);
            $barcode = $name;
            for ($i = count($c) - 1; $i >= 0; $i--) {
                $barcode = substr_replace($barcode, $b[$i], $c[$i], 0);
            }
            //    echo(substr($barcode, 0, -1));
            $bar = " OR (geopos_products.barcode LIKE '" . (substr($barcode, 0, -1)) . "%' OR geopos_products.barcode LIKE '" . $name . "%')";
        }
        $relatedQuery  = "select GROUP_CONCAT( Concat(',',rel,',')) from (SELECT geopos_products.related_product as rel FROM geopos_products LEFT JOIN geopos_custom_data ON geopos_custom_data.rid=geopos_products.pid AND (geopos_custom_data.module=4) $join WHERE " . $product_status . $qw . "(UPPER(geopos_products.product_name) LIKE '%" . strtoupper($name) . "%' $bar OR geopos_products.product_code LIKE '" . strtoupper($name) . "%' OR geopos_custom_data.data LIKE '" . strtoupper($name) . "%') AND (geopos_products.qty>0) GROUP BY pid ORDER BY geopos_products.product_name) as related";
        $query = "SELECT geopos_products.*,geopos_custom_data.* FROM geopos_products LEFT JOIN geopos_custom_data ON geopos_custom_data.rid=geopos_products.pid AND (geopos_custom_data.module=4) $join WHERE " . $product_status . $qw . "(UPPER(geopos_products.product_name) LIKE '%" . strtoupper($name) . "%' $bar OR geopos_products.product_code LIKE '" . strtoupper($name) . "%' OR INStr((".$relatedQuery."),`pid`)>0  OR geopos_custom_data.data LIKE '" . strtoupper($name) . "%') AND (geopos_products.qty>0) GROUP BY pid ORDER BY geopos_products.product_name LIMIT 18";

        $query = $this->db->query($query);
        $result = $query->result_array();
        $i = 0;
        echo '<div class="row match-height">';
        foreach ($result as $row) {
            $out .= '<div class="col-2 border"  ><div class="text-center mt-3 pb-3 rounded" >
                    ' . ($row['favorite'] ? '<i class="fa fa-heart favorite-products"></i>' : '') .  ($row['bundle_products']=='null' ?  '' :'<i class="fa fa-object-group bundle-products"></i>' ) .'
                        <a  id="posp' . $i . '"  class="v2_select_pos_item round"  data-bundle="' . ($row['bundle_products']=='null'?  false:true) . '" data-name="' . $row['product_name'] . '"  data-price="' . amountExchange_s($row['product_price'], 0, $this->aauth->get_user()->loc) . '" data-wholesale="' . amountExchange_s($row['wholesale'], 0, $this->aauth->get_user()->loc) . '"  data-tax="' . amountFormat_general($row['taxrate']) . '"  data-discount="' . amountFormat_general($row['disrate']) . '" data-pcode="' . $row['product_code'] . '"   data-pid="' . $row['pid'] . '"  data-stock="' . amountFormat_general($row['qty']) . '" data-unit="' . $row['unit'] . '" >
                            <img class="round"
                                    src="' . base_url('userfiles/product/' . $row['image']) . '"  style="max-height: 100%;max-width: 100%">
                            <div class="text-center" style="margin-top: 4px;">
                            
                                <small style="white-space: pre-wrap;">' . $row['product_name'] . '</small>

                                
                            </div></a>
                        
                    </div></div>';
            $i++;
        }
        echo $out;
    }

    public function pos_get_bundle()
    {
        $out = '';
        $product_id = $this->input->get('product_id', true);
        echo json_encode($this->products->pos_get_bundle_by_id($product_id), true);
        ;
    }
}
