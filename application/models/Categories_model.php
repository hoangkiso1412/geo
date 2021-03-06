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
defined('BASEPATH') OR exit('No direct script access allowed');
class Categories_model extends CI_Model
{
    public function category_list($type = 0, $rel = 0)
    {
        $query = $this->db->query("SELECT id,title,retail_discount,wholesale_discount
        FROM geopos_product_cat WHERE c_type='$type' AND rel_id='$rel'
        ORDER BY id DESC");
        return $query->result_array();
    }
    public function get_cat_details($type = 0, $rel = 0)
    {
        $query = $this->db->query("SELECT id,title, retail_discount, wholesale_discount FROM geopos_product_cat WHERE  id='$rel' ");
        return $query->row();
    }
    public function warehouse_list()
    {
        $where = '';
        if (!BDATA) $where = "WHERE  (loc=0) ";
        if ($this->aauth->get_user()->loc) {
            $where = "WHERE  (loc=" . $this->aauth->get_user()->loc . " ) ";
            if (BDATA) $where = "WHERE  (loc=" . $this->aauth->get_user()->loc . " OR geopos_warehouse.loc=0) ";
        }
        $query = $this->db->query(
            "SELECT id,title
            FROM geopos_warehouse $where 
            ORDER BY id DESC"
        );
        return $query->result_array();
    }
    public function warehouse_list_with_location()
    {
        $where = '';
        if (!BDATA) $where = "WHERE  (loc=0) ";
        if ($this->aauth->get_user()->loc) {
            $where = "WHERE  (loc=" . $this->aauth->get_user()->loc . " ) ";
            if (BDATA) $where = "WHERE  (loc=" . $this->aauth->get_user()->loc . " OR geopos_warehouse.loc=0) ";
        }
        //  SELECT geopos_warehouse.id,geopos_warehouse.title ,geopos_locations.cname  FROM geopos_warehouse JOIN geopos_locations ON geopos_locations.id =  geopos_warehouse.loc
        $query = $this->db->query("SELECT id,title FROM geopos_warehouse $where  ORDER BY id DESC");
        return $query->result_array();
    }
    public function all_warehouse_list_with_location()
    {
        $query = $this->db->query(
            "SELECT geopos_warehouse.id,geopos_warehouse.title, geopos_locations.id As loc_id, geopos_locations.cname
             FROM geopos_warehouse  
             LEFT JOIN geopos_locations ON geopos_locations.id = geopos_warehouse.loc"
        );
        foreach ($query as $key => $warehouse) {
            // if($warehouse)
        }
        return $query->result_array();
    }
    public function category_stock()
    {
        $whr = '';
        if (!BDATA) $whr = "WHERE  (geopos_warehouse.loc=0) ";
        if ($this->aauth->get_user()->loc) {
            $whr = "WHERE  (geopos_warehouse.loc=" . $this->aauth->get_user()->loc . " ) ";
            if (BDATA) $whr = "WHERE  (geopos_warehouse.loc=" . $this->aauth->get_user()->loc . " OR geopos_warehouse.loc=0) ";
        }
        $query = $this->db->query("SELECT c.*,p.pc,p.salessum,p.worthsum,p.qty FROM geopos_product_cat AS c LEFT JOIN ( SELECT geopos_products.pcat,COUNT(geopos_products.pid) AS pc,SUM(geopos_products.product_price*geopos_products.qty) AS salessum, SUM(geopos_products.fproduct_price*geopos_products.qty) AS worthsum,SUM(geopos_products.qty) AS qty FROM geopos_products LEFT JOIN geopos_warehouse ON geopos_products.warehouse=geopos_warehouse.id  $whr GROUP BY geopos_products.pcat ) AS p ON c.id=p.pcat WHERE c.c_type=0");
        return $query->result_array();
    }
    public function category_sub_stock($id = 0)
    {
        $whr = '';
        if (!BDATA) $whr = "WHERE  (geopos_warehouse.loc=0) ";
        if ($this->aauth->get_user()->loc) {
            $whr = "WHERE  (geopos_warehouse.loc=" . $this->aauth->get_user()->loc . " ) ";
            if (BDATA) $whr = "WHERE  (geopos_warehouse.loc=" . $this->aauth->get_user()->loc . " OR geopos_warehouse.loc=0) ";
        }
        $whr2 = '';
        $query = $this->db->query("SELECT c.*,p.pc,p.salessum,p.worthsum,p.qty,p.sub_id FROM geopos_product_cat AS c LEFT JOIN ( SELECT geopos_products.sub_id,COUNT(geopos_products.pid) AS pc,SUM(geopos_products.product_price*geopos_products.qty) AS salessum, SUM(geopos_products.fproduct_price*geopos_products.qty) AS worthsum,SUM(geopos_products.qty) AS qty FROM geopos_products LEFT JOIN geopos_warehouse ON geopos_products.warehouse=geopos_warehouse.id  $whr GROUP BY geopos_products.sub_id ) AS p ON c.id=p.sub_id WHERE c.c_type=1 AND c.rel_id='$id'");
        return $query->result_array();
    }
    public function warehouse()
    {
        $where = '';
        if ($this->aauth->get_user()->loc) {
            $where = ' WHERE c.loc=' . $this->aauth->get_user()->loc;
            if (BDATA) $where = ' WHERE c.loc=' . $this->aauth->get_user()->loc . ' OR c.loc=0';
        } elseif (!BDATA) {
            $where = ' WHERE  c.loc=0';
        }
        $query = $this->db->query("SELECT c.*,p.pc,p.salessum,p.worthsum,p.qty FROM geopos_warehouse AS c LEFT JOIN ( SELECT warehouse,COUNT(pid) AS pc,SUM(product_price*qty) AS salessum, SUM(fproduct_price*qty) AS worthsum,SUM(qty) AS qty FROM  geopos_products GROUP BY warehouse ) AS p ON c.id=p.warehouse  $where");
        return $query->result_array();
    }
    public function cat_ware($id, $loc = 0)
    {
        $qj = '';
        if ($loc) $qj = "AND w.loc='$loc'";
        $query = $this->db->query("SELECT c.id AS cid, w.id AS wid,c.title AS catt,w.title AS watt FROM geopos_products AS p LEFT JOIN geopos_product_cat AS c ON p.pcat=c.id LEFT JOIN geopos_warehouse AS w ON p.warehouse=w.id WHERE
p.pid='$id' $qj ");
        return $query->row_array();
    }
    public function addnew($cat_name, $cat_desc, $cat_type = 0, $cat_rel = 0, $cat_retail_discount = 0, $wholesale_discount = 0)
    {
        if (!$cat_type) $cat_type = 0;
        if (!$cat_rel) $cat_rel = 0;
        $data = array(
            'title' => $cat_name,
            'extra' => $cat_desc,
            'c_type' => $cat_type,
            'rel_id' => $cat_rel,
            'retail_discount' => $cat_retail_discount,
            'wholesale_discount' => $wholesale_discount
        );
        if ($cat_type) {
            $url = "<a href='" . base_url('productcategory/add_sub') . "' class='btn btn-blue btn-lg'><span class='fa fa-plus-circle' aria-hidden='true'></span>  </a> <a href='" . base_url('productcategory/view?id=' . $cat_rel) . "' class='btn btn-grey-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a>";
        } else {
            $url = "<a href='" . base_url('productcategory/add') . "' class='btn btn-blue btn-lg'><span class='fa fa-plus-circle' aria-hidden='true'></span>  </a> <a href='" . base_url('productcategory') . "' class='btn btn-grey-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a>";
        }
        if ($this->db->insert('geopos_product_cat', $data)) {
            $this->aauth->applog("[Category Created] $cat_name ID " . $this->db->insert_id(), $this->aauth->get_user()->username);
            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('ADDED') . " $url"));
        } else {
            echo json_encode(array('status' => 'Error', 'message' =>
                $this->lang->line('ERROR')));
        }
    }
    public function addwarehouse($cat_name, $cat_desc, $lid)
    {
        $data = array(
            'title' => $cat_name,
            'extra' => $cat_desc,
            'loc' => $lid
        );
        if ($this->db->insert('geopos_warehouse', $data)) {
            $this->aauth->applog("[WareHouse Created] $cat_name ID " . $this->db->insert_id(), $this->aauth->get_user()->username);
            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('ADDED') . "  <a href='addwarehouse' class='btn btn-indigo btn-lg'><span class='icon-plus-circle' aria-hidden='true'></span>  </a>"));
        } else {
            echo json_encode(array('status' => 'Error', 'message' =>
                $this->lang->line('ERROR')));
        }
    }
    public function edit($catid, $product_cat_name, $product_cat_desc, $cat_type, $cat_rel, $old_cat_type, $cat_retail_discount , $wholesale_discount ,  $update_prices)
    {
         if (!$cat_rel) $cat_rel = 0;
        $data = array(
            'title' => $product_cat_name,
            'extra' => $product_cat_desc,
            'c_type' => $cat_type,
            'rel_id' => $cat_rel,
            'retail_discount' => $cat_retail_discount,
            'wholesale_discount' => $wholesale_discount,
            'update_prices' => $update_prices,
        );
        $this->db->set($data);
        $this->db->where('id', $catid);
        if ($this->db->update('geopos_product_cat')) {
            if ($cat_type != $old_cat_type && $cat_type && $cat_type) {
                $data = array('pcat' => $cat_rel);
                $this->db->set($data);
                $this->db->where('sub_id', $catid);
                $this->db->update('geopos_products');
            }
            $this->aauth->applog("[Category Edited] $product_cat_name ID " . $catid, $this->aauth->get_user()->username);
            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('UPDATED')));

            if ($update_prices == 1){
                $query  = $this->db->query("SELECT pid, fproduct_price FROM geopos_products WHERE pcat = $catid AND sub_id =  0 AND auto_prices = 1");
                $result =  $query->result_array();
        
                if( count($result) > 0 ){
                    foreach ($result as $product) {
                        $ip  = $product['pid'];
                        $fproduct_price  = $product['fproduct_price'];
                        $price = $fproduct_price +  ( $fproduct_price * $cat_retail_discount  /  100 ) ;
                        $whole = $fproduct_price +  ( $fproduct_price * $wholesale_discount  /  100 );
                        $product['product_price'] = $price ;
                        $product['wholesale'] = $whole ;
                        $this->db->set($product);
                        $this->db->where('pid', $ip);
                        $this->db->update('geopos_products');
                    }
                }
            }
        } else {
            echo json_encode(array('status' => 'Error', 'message' =>$this->lang->line('ERROR')));
        }
    }
    public function editwarehouse($catid, $product_cat_name, $product_cat_desc, $lid)
    {
        $data = array(
            'title' => $product_cat_name,
            'extra' => $product_cat_desc,
            'loc' => $lid
        );
        $this->db->set($data);
        $this->db->where('id', $catid);
        if ($this->db->update('geopos_warehouse')) {
            $this->aauth->applog("[Warehouse Edited] $product_cat_name ID " . $catid, $this->aauth->get_user()->username);
            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('UPDATED')));
        } else {
            echo json_encode(array('status' => 'Error', 'message' =>
                $this->lang->line('ERROR')));
        }
    }
    public function sub_cat($id = 0)
    {
        $this->db->select('*');
        $this->db->from('geopos_product_cat');
        $this->db->where('rel_id', $id);
        $this->db->where('c_type', 1);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function sub_cat_list($id = 0)
    {
        $this->db->select('*');
        $this->db->from('geopos_product_cat');
        $this->db->where('rel_id', $id);
        $this->db->where('c_type', 1);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function all_sub_cat_list($id = 0)
    {
        $this->db->select('*');
        $this->db->from('geopos_product_cat');
        $this->db->where('c_type', 1);
        $query = $this->db->get();
        return $query->result_array();
    }
}