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

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("Aauth");
        if (!$this->aauth->is_loggedin()) {
            redirect('/user/', 'refresh');
        }
        if (!$this->aauth->premission(2)) {

            exit('<h3>Sorry! You have insufficient permissions to access this section</h3>');

        }
        $this->load->model('products_model', 'products');
        $this->load->model('categories_model');
        $this->load->library("Custom");
        $this->li_a = 'stock';
    }

    public function index()
    {
        $head['title'] = "Products";
        $head['usernm'] = $this->aauth->get_user()->username;
        $this->load->view('fixed/header', $head);
        $this->load->view('products/products');
        $this->load->view('fixed/footer');
    }

    public function cat()
    {
        $head['title'] = "Product Categories";
        $head['usernm'] = $this->aauth->get_user()->username;
        $this->load->view('fixed/header', $head);
        $this->load->view('products/cat_productlist');
        $this->load->view('fixed/footer');

    }


    public function add()
    {
        $data['cat'] = $this->categories_model->category_list();
        $data['units'] = $this->products->units();
        $data['warehouse'] = $this->categories_model->warehouse_list();
        $data['custom_fields'] = $this->custom->add_fields(4);
        $this->load->model('units_model', 'units');
        $data['variables'] = $this->units->variables_list();
        $head['title'] = "Add Product";
        $head['usernm'] = $this->aauth->get_user()->username;
        $data['products_list'] = $this->products->product_name_list();
        $this->load->view('fixed/header', $head);
        $this->load->view('products/product-add', $data);
        $this->load->view('fixed/footer');
    }


    public function product_list()
    {
        $catid = $this->input->get('id');
        $sub = $this->input->get('sub');

        if ($catid > 0) {
            $list = $this->products->get_datatables($catid, '', $sub);
        } else {
            $list = $this->products->get_datatables();
        }
        $data = array();
        $no = $this->input->post('start');
        foreach ($list as $prd) {
            $no++;
            $row = array();
            $row[] = $no;
            $pid = $prd->pid;
            $row[] = '<a href="#" data-object-id="' . $pid . '" class="view-object"><span class="avatar-lg align-baseline"><img src="' . base_url() . 'userfiles/product/thumbnail/' . $prd->image . '" ></span>&nbsp;' . $prd->product_name . '</a>';
            $row[] = +$prd->qty;
            $row[] = $prd->product_code;
            $row[] = $prd->c_title;
            $row[] = $prd->title;
            $row[] = amountExchange($prd->product_price, 0, $this->aauth->get_user()->loc);
            $row[] = '<a href="#" data-object-id="' . $pid . '" class="btn btn-success  btn-sm  view-object"><span class="fa fa-eye"></span> ' . $this->lang->line('View') . '</a>
<div class="btn-group">
                                    <button type="button" class="btn btn-indigo dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-print"></i>  ' . $this->lang->line('Print') . '</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="' . base_url() . 'products/barcode?id=' . $pid . '" target="_blank"> ' . $this->lang->line('BarCode') . '</a><div class="dropdown-divider"></div> <a class="dropdown-item" href="' . base_url() . 'products/posbarcode?id=' . $pid . '" target="_blank"> ' . $this->lang->line('BarCode') . ' - Compact</a> <div class="dropdown-divider"></div>
                                             <a class="dropdown-item" href="' . base_url() . 'products/label?id=' . $pid . '" target="_blank"> ' . $this->lang->line('Product') . ' Label</a><div class="dropdown-divider"></div>
                                         <a class="dropdown-item" href="' . base_url() . 'products/poslabel?id=' . $pid . '" target="_blank"> Label - Compact</a></div></div><a class="btn btn-pink  btn-sm" href="' . base_url() . 'products/report_product?id=' . $pid . '" target="_blank"> <span class="fa fa-pie-chart"></span> ' . $this->lang->line('Sales') . '</a>' 
                                         .'<a class="btn btn-danger btn-sm" href="' . base_url() . 'products/history?id=' . $pid . '" target="_blank"> <span class="fa fa-pie-chart"></span>  ' . $this->lang->line('History') . '</a>'
                                         .'<div class="btn-group">
                                    <button type="button" class="btn btn btn-primary dropdown-toggle   btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-cog"></i>  </button>
                                    <div class="dropdown-menu">
&nbsp;<a href="' . base_url() . 'products/edit?id=' . $pid . '"  class="btn btn-purple btn-sm"><span class="fa fa-edit"></span>' . $this->lang->line('Edit') . '</a><div class="dropdown-divider"></div>&nbsp;<a href="#" data-object-id="' . $pid . '" class="btn btn-danger btn-sm  delete-object"><span class="fa fa-trash"></span>' . $this->lang->line('Delete') . '</a>
                                    </div>
                                </div>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->products->count_all($catid, '', $sub),
            "recordsFiltered" => $this->products->count_filtered($catid, '', $sub),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function addproduct()
    {

    	$product_name = $this->input->post('product_name', true);
        $catid = $this->input->post('product_cat');
        $warehouse = $this->input->post('product_warehouse');
        $product_code = $this->input->post('product_code');
        $product_price = numberClean($this->input->post('product_price'));
        $factoryprice = numberClean($this->input->post('fproduct_price'));
        $taxrate = numberClean($this->input->post('product_tax', true));
        $disrate = numberClean($this->input->post('product_disc', true));
        $product_qty = numberClean($this->input->post('product_qty', true));
        $product_qty_alert = numberClean($this->input->post('product_qty_alert'));
        $product_desc = $this->input->post('product_desc', true);
        $image = $this->input->post('image');
        $unit = $this->input->post('unit', true);
        $barcode = $this->input->post('barcode');
        $extrabarcodes = $this->input->post('extrabarcodes');
        $v_type = $this->input->post('v_type');
        $v_stock = $this->input->post('v_stock');
        $v_alert = $this->input->post('v_alert');
        $w_type = $this->input->post('w_type');
        $w_stock = $this->input->post('w_stock');
        $w_alert = $this->input->post('w_alert');
        $wdate = datefordatabase($this->input->post('wdate'));
        $code_type = $this->input->post('code_type');
        $sub_cat = $this->input->post('sub_cat');
        $brand = $this->input->post('brand');
        $related_products_as_array = $this->input->post('related_product');
        if(is_array($related_products_as_array)){
            $related_product = json_encode($related_products_as_array);
        }else {
            $related_product = NULL;
        }

        $favorite = $this->input->post('favorite') ? 1 : 0; 
        $calculate_profit_value = $this->input->post('calculate_profit_value');
        $wholesale = $this->input->post('wholesale');
        $product_status = $this->input->post('product_status');
        $bundle_products = json_encode($this->input->post('bundle_products'));

        $bundle_p_discount_amount = json_encode($this->input->post('bundle_p_discount_amount'));
        $bundle_p_discount_factor = json_encode($this->input->post('bundle_p_discount_factor'));
        $bundle_w_discount_amount = json_encode($this->input->post('bundle_w_discount_amount'));
        $bundle_w_discount_factor = json_encode($this->input->post('bundle_w_discount_factor'));

        $discounnt_array = array();
        $discounnt_array['bundle_p_discount_amount'] = $bundle_p_discount_amount;
        $discounnt_array['bundle_p_discount_factor'] = $bundle_p_discount_factor;
        $discounnt_array['bundle_w_discount_amount'] = $bundle_w_discount_amount;
        $discounnt_array['bundle_w_discount_factor'] = $bundle_w_discount_factor;
        $discounnt_array = json_encode($discounnt_array);

        // Search Meta
        $search_meta = ''; 
        $search_meta .= $product_name.' , ';
        $search_meta .= $product_code.' , ';
        $search_meta .= $extrabarcodes.' , ';

        $cats_list = $this->categories_model->category_list();
        $cat_name = '';
        foreach ($cats_list as $row) {
            $cid = $row['id'];
            $title = $row['title'];

             if($cid == $catid){
             	$cat_name = $title;
             }
        }
        $search_meta .= $cat_name.' , ';
        
        // add warehouse to search_meta
        $warehouse_list = $this->categories_model->warehouse_list();
        $warehouse_name = '';
        foreach ($warehouse_list as $row) {
            $cid = $row['id'];
            $title = $row['title'];

             if($cid == $warehouse){
             	$warehouse_name = $title;
             }
        }
        $search_meta .= $warehouse_name.' , ';

        // add custom fields to search_meta
        $custom_fields = $this->input->post('custom');
        if( is_array($custom_fields) ) {
            foreach ($custom_fields as $key => $value) {
                if ($value) {
                    $search_meta .= $value.' , ';
                }
            }
        }

        //  Add the related products to Search meta
        if(is_array($related_products_as_array) && count($related_products_as_array) > 0){
            foreach ($related_products_as_array as $id) {
                $data = $this->products->get_product_data($id,'just_name');
                $name = $data[0]['product_name'];
                $search_meta .= $name .' , ';
            }    
        }

        //validate product name
        $this->load->library("form_validation");
        if ($this->input->post()) {
            $this->form_validation->set_rules('product_name', 'ProductName', 'required|is_unique[geopos_products.product_name]', array('is_unique' => 'This %s already exists.'));
            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('status' => 'Error', 'message' => '<br>- Rules:<br> - Product name should be unique name! <br> - This product name is already used before!'));
            }else {
                if ($catid) {
                    $this->products->addnew($catid, $warehouse, $product_name, $product_code, $product_price, $factoryprice, $taxrate, $disrate, $product_qty, $product_qty_alert, $product_desc, $image, $unit, $barcode, $v_type, $v_stock, $v_alert, $wdate, $code_type, $w_type, $w_stock, $w_alert, $sub_cat, $brand, $related_product, $favorite, $wholesale, $product_status, $bundle_products, $discounnt_array,$search_meta,$calculate_profit_value,$extrabarcodes);
                }
            }
        }
    }



    public function delete_i()
    {
         if ($this->aauth->premission(11)) {
             $id = $this->input->post('deleteid');
             if ($id) {
                 $this->db->delete('geopos_products', array('pid' => $id));
                 $this->db->delete('geopos_products', array('sub' => $id, 'merge' => 1));
                 $this->db->delete('geopos_movers', array('d_type' => 1, 'rid1' => $id));
                 $this->db->set('merge', 0);
                 $this->db->where('sub', $id);
                 $this->db->update('geopos_products');
                 echo json_encode(array('status' => 'Success', 'message' => $this->lang->line('DELETED')));
             } else {
                 echo json_encode(array('status' => 'Error', 'message' => $this->lang->line('ERROR')));
             }
         }
         else {
                echo json_encode(array('status' => 'Error', 'message' =>
                    $this->lang->line('ERROR')));
            }
    }

    public function edit()
    {
        $pid = $this->input->get('id');
        $this->db->select('*');
        $this->db->from('geopos_products');
        $this->db->where('pid', $pid);
        $query = $this->db->get();
        $data['product'] = $query->row_array();
        $data['units'] = $this->products->units();
        $data['cat_ware'] = $this->categories_model->cat_ware($pid);
        $data['cat_sub'] = $this->categories_model->sub_cat($data['product']['pcat']);
        $data['cat_sub_list'] = $this->categories_model->sub_cat_list($data['product']['pcat']);

        /*
        if ($data['product']['related_product'] != 'null' && $data['product']['related_product']) {

            $related_product_id  = implode(',', json_decode($data['product']['related_product']));
            
            $query2 = "SELECT * FROM geopos_products WHERE pid in($related_product_id)";   
            $query2 = $this->db->query($query2);
            $data['rese22'] = $query2->result_array();
            
            $query3 = "SELECT * FROM geopos_products";   
            $query3 = $this->db->query($query3);
            $data['related_product'] = $query3->result_array();
        }
        */


        /*
            $bundle_products_id  = implode(',', json_decode($data['product']['bundle_products']));
            
            $query4 = "SELECT * FROM geopos_products WHERE pid in($bundle_products_id)";   
            $query4 = $this->db->query($query4);
            $data['rese23'] = $query4->result_array();
            
            $query5 = "SELECT * FROM geopos_products WHERE pid in($bundle_products_id)";
            $query5 = $this->db->query($query5);
            $data['bundle_products'] = $query5->result_array();
        */
        $data['products_list'] = $this->products->product_name_list();
        if ($data['product']['bundle_products'] != 'null' && $data['product']['bundle_products']) {
		// identifier to check if its bundle or product
		$data['product']['is_bundle'] = 1;

        }else{
        	// identifier to check if its bundle or product
        	$data['product']['is_bundle'] = 0;
        }

        $data['warehouse'] = $this->categories_model->warehouse_list();
        $data['cat'] = $this->categories_model->category_list();
        $data['custom_fields'] = $this->custom->view_edit_fields($pid, 4);
        $head['title'] = "Edit Product";
        $head['usernm'] = $this->aauth->get_user()->username;
        $this->load->view('fixed/header', $head);
        $this->load->view('products/product-edit', $data);
        $this->load->view('fixed/footer');

    }
          


    public function editproduct()
    {
        $pid = $this->input->post('pid');
        $product_name = $this->input->post('product_name', true);
        $catid = $this->input->post('product_cat');
        $warehouse = $this->input->post('product_warehouse');
        $product_code = $this->input->post('product_code');
        $product_price = numberClean($this->input->post('product_price'));
        $factoryprice = numberClean($this->input->post('fproduct_price'));
        $taxrate = numberClean($this->input->post('product_tax'));
        $disrate = numberClean($this->input->post('product_disc'));
        $product_qty = numberClean($this->input->post('product_qty'));
        $product_qty_alert = numberClean($this->input->post('product_qty_alert'));
        $product_desc = $this->input->post('product_desc', true);
        $image = $this->input->post('image');
        $unit = $this->input->post('unit');
        $barcode = $this->input->post('barcode');
        $code_type = $this->input->post('code_type');
        $sub_cat = $this->input->post('sub_cat');
        $related_product = json_encode($this->input->post('related_product'));
        $favorite = $this->input->post('favorite') ? 1 : 0;
        $wholesale = $this->input->post('wholesale');
        $product_status = $this->input->post('product_status');
        $bundle_products = json_encode($this->input->post('bundle_products'));

        $bundle_p_discount_amount = json_encode($this->input->post('bundle_p_discount_amount'));
        $bundle_p_discount_factor = json_encode($this->input->post('bundle_p_discount_factor'));
        $bundle_w_discount_amount = json_encode($this->input->post('bundle_w_discount_amount'));
        $bundle_w_discount_factor = json_encode($this->input->post('bundle_w_discount_factor'));

        $discounnt_array = array();
        $discounnt_array['bundle_p_discount_amount'] = $bundle_p_discount_amount;
        $discounnt_array['bundle_p_discount_factor'] = $bundle_p_discount_factor;
        $discounnt_array['bundle_w_discount_amount'] = $bundle_w_discount_amount;
        $discounnt_array['bundle_w_discount_factor'] = $bundle_w_discount_factor;
        $discounnt_array = json_encode($discounnt_array);

        $calculate_profit_value = $this->input->post('calculate_profit_value');
        $extrabarcodes = $this->input->post('extrabarcodes');

        // Search Meta
        $search_meta = ''; 
        $search_meta .= $product_name.' , ';
        $search_meta .= $product_code.' , ';
        $search_meta .= $extrabarcodes.' , ';
        $cats_list = $this->categories_model->category_list();
        $cat_name = '';
        foreach ($cats_list as $row) {
            $cid = $row['id'];
            $title = $row['title'];

             if($cid == $catid){
             	$cat_name = $title;
             }
        }
        $search_meta .= $cat_name.' ';

        // add  sub category to search_meta
        $sub_cat_name = '';
        foreach ($cats_list as $row) {
            $cid = $row['id'];
            $title = $row['title'];

             if($cid == $sub_cat){
             	$cat_name = $title;
             }
        }
        $search_meta .= $sub_cat_name.' ';

        // add warehouse to search_meta
        $warehouse_list = $this->categories_model->warehouse_list();
        $warehouse_name = '';
        foreach ($warehouse_list as $row) {
            $cid = $row['id'];
            $title = $row['title'];

             if($cid == $warehouse){
             	$warehouse_name = $title;
             }
        }
        $search_meta .= $warehouse_name.' ';

        // add custom fields to search_meta
        $custom_fields = $this->input->post('custom');
        if( is_array($custom_fields) ) {
            foreach ($custom_fields as $key => $value) {
                if ($value) {
                        $search_meta .= $value.' ';
                }
            }
        }

        if (!$sub_cat) $sub_cat = 0;
        $brand = $this->input->post('brand');
        if ($pid) {
            $this->products->edit($pid, $catid, $warehouse, $product_name, $product_code, $product_price, $factoryprice, $taxrate, $disrate, $product_qty, $product_qty_alert, $product_desc, $image, $unit, $barcode, $code_type, $sub_cat, $brand, $related_product, $favorite, $wholesale, $product_status, $bundle_products, $discounnt_array,$search_meta,$calculate_profit_value , $extrabarcodes );
        }
    }




    public function warehouseproduct_list()
    {
        $catid = $this->input->get('id');
        $list = $this->products->get_datatables($catid, true);
        $data = array();
        $no = $this->input->post('start');
        foreach ($list as $prd) {
            $no++;
            $row = array();
            $row[] = $no;
            $pid = $prd->pid;
            $row[] = $prd->product_name;
            $row[] = +$prd->qty;
            $row[] = $prd->product_code;
            $row[] = $prd->c_title;
            $row[] = amountExchange($prd->product_price, 0, $this->aauth->get_user()->loc);
            $row[] = '<a href="#" data-object-id="' . $pid . '" class="btn btn-success btn-sm  view-object"><span class="fa fa-eye"></span> ' . $this->lang->line('View') . '</a> <a href="' . base_url() . 'products/edit?id=' . $pid . '" class="btn btn-primary btn-sm"><span class="fa fa-pencil"></span> ' . $this->lang->line('Edit') . '</a> <a href="#" data-object-id="' . $pid . '" class="btn btn-danger btn-sm  delete-object"><span class="fa fa-trash"></span> ' . $this->lang->line('Delete') . '</a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->products->count_all($catid, true),
            "recordsFiltered" => $this->products->count_filtered($catid, true),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function prd_stats()
    {
        $this->products->prd_stats();
    }

    public function stock_transfer_products()
    {
        $wid = $this->input->get('wid');
        $customer = $this->input->post('product');
        $term = @$customer['term'];
        $query = $this->db->query("SELECT * FROM geopos_products WHERE warehouse = ". $wid ." AND geopos_products.product_name LIKE '%" . $term . "%' AND geopos_products.product_code LIKE '%" . $term . "%'");
        $results = $query->result_array();
        echo json_encode($results);
    }
    public function new_stock_transfer_products()
    {
        $from = $this->input->get('from');
        $query =  "SELECT geopos_products.pid, geopos_products.product_name FROM geopos_products WHERE warehouse = $from AND bundle_products = 'null'  ";
        $query = $this->db->query($query);
        $results = $query->result_array();
        echo json_encode($results);
    }
    public function product_transfer_data()
    {
        $pid = $this->input->get('pid');
        $from = $this->input->get('from');
        $to = $this->input->get('to');

        $query   = "SELECT geopos_products.product_code , geopos_products.pid AS pid, geopos_products.qty AS from_qty  , category.title AS cat , sub_category.title AS sub_cat ";
        $query  .= " FROM geopos_products  ";
        $query  .= " LEFT JOIN geopos_product_cat AS category 	ON geopos_products.pcat = category.id ";
        $query  .= " LEFT JOIN geopos_product_cat AS sub_category 	ON geopos_products.sub_id = sub_category.id  ";
        $query  .= " WHERE warehouse = $from  AND geopos_products.pid = $pid ";
        $query   = $this->db->query($query);
        $results = $query->result_array();
        
        $query = "SELECT SUM(qty) AS qty FROM geopos_products WHERE warehouse = $to  AND product_code = '" . $results[0]['product_code'] . "'";
        $query = $this->db->query($query);
        $results2 = $query->result_array();

        // edit numbers format
        $results[0]['from_qty'] = number_format($results[0]['from_qty']);
        $results[0]['to_qty'] =  $results2[0]['qty'] != '' ? number_format($results2[0]['qty']) : 0 ;

        // pre($results);

        echo json_encode($results);
    }

    public function sub_cat()
    {
        $wid = $this->input->get('id');
        $result = $this->categories_model->category_list(1, $wid);
        echo json_encode($result);
    }


    public function cat_details()
    {
        $wid = $this->input->get('id');
        $result = $this->categories_model->get_cat_details(1, $wid);
        echo json_encode($result);
    }



    public function stock_transfer()
    {
        if ($this->input->post()) {
            $products_l = $this->input->post('products_l');
            $from_warehouse = $this->input->post('from_warehouse');
            $to_warehouse = $this->input->post('to_warehouse');
            $qty = $this->input->post('products_qty');
            $this->products->transfer($from_warehouse, $products_l, $to_warehouse, $qty);
        } else {
            $data['cat'] = $this->categories_model->category_list();
            $data['warehouse'] = $this->categories_model->warehouse_list();
            $head['title'] = "Stock Transfer";
            $head['usernm'] = $this->aauth->get_user()->username;
            $this->load->view('fixed/header', $head);
            $this->load->view('products/stock_transfer', $data);
            $this->load->view('fixed/footer');
        }
    }
    public function create_transfer()
    {
        if ($this->input->post()) {
            $qtys       = $_POST['qty'];
            $products   = $_POST['products'];
            $stocks     = array(); 
            foreach ($products as $key => $pid) {
                if($pid != 0){ // the defult value if not products selected
                    $stocks[$key]['pid']    = $pid;
                    $stocks[$key]['qty']    = $qtys[$key];
                    $stocks[$key]['w_from']   = $_POST['from_value'];
                    $stocks[$key]['w_to']     = $_POST['to_value'];    
                    $stocks[$key]['status'] = 1;    // allready created 1 , allready prepared 2 , allready recieved 3
                }
            }
            if($this->db->insert_batch('geopos_tranfering_products', $stocks)){
                echo json_encode(array('status' => 'Success', 'message' => $this->lang->line('Products are now ready to be prepared') ));
            }else {
                echo json_encode(array('status' => 'Error', 'message' => $this->lang->line('Some thing Wrong') ));
            }
        }else {
            $data['cat'] = $this->categories_model->category_list();
            $data['warehouse'] = $this->categories_model->all_warehouse_list_with_location();
            $head['title'] = "Create Transfer";
            $head['usernm'] = $this->aauth->get_user()->username;
            $this->load->view('fixed/header', $head);
            $this->load->view('products/create_transfer', $data);
            $this->load->view('fixed/footer');
        }
    }
    public function prepare_transfer(){
        if ($this->input->post()) {
            $qts= $_POST['qty'] ;
            $approve= $_POST['approve'] ;
            $update_array =  array();

            foreach ($qts as $key => $qty) {
                if($approve[$key] == 1){
                    $update_array[$key]['id'] =  $_POST['ids'][$key]; 
                    $update_array[$key]['qty'] = $qty; 
                    $update_array[$key]['status'] = 2;     
                }
            }
            if(count($update_array) >  0){
                if($this->db->update_batch('geopos_tranfering_products', $update_array , 'id')){
                    echo json_encode(array('status' => 'Success', 'message' => $this->lang->line('Products transfered correctly') ));
                }else {
                    echo json_encode(array('status' => 'Error', 'message' => $this->lang->line('Some thing Wrong') ));
                }
            }
        }else {
            $data['products']   = $this->products->out_transfered_products();
            $head['title']      = "Prepare Transfer";
            $head['usernm']     = $this->aauth->get_user()->username;
            $this->load->view('fixed/header', $head);
            $this->load->view('products/prepare_transfer', $data);
            $this->load->view('fixed/footer');
        }
    }
    public function received_transfer(){
        if ($this->input->post()) { 
            $qts= $_POST['qty'] ;
            $approve= $_POST['approve'] ;
            $update_array =  array();

            foreach ($qts as $key => $qty) { 
                if($approve[$key] == 1){
                    $update_array[$key]['id'] =  $_POST['ids'][$key]; 
                    $update_array[$key]['qty'] = $qty; 
                    $update_array[$key]['status'] = 3; 
                }
            }
            $this->db->update_batch('geopos_tranfering_products', $update_array , 'id');
            $qtys = "";
            foreach ($_POST['qty'] as $key => $qty) {
                $comma =  $key >  0 ? "," : "" ;
                $qtys .= $comma.$qty;
            }
            if($this->products->transfer($_POST['from'],$_POST['pids'],$_POST['to'],$qtys)){
                echo json_encode(array('status' => 'Success', 'message' => $this->lang->line('Products recieved correctly') ));
            }
        }else {
            $data['products']   = $this->products->received_transfer();
            $head['title']      = "Received Transfer";
            $head['usernm']     = $this->aauth->get_user()->username;
            $this->load->view('fixed/header', $head);
            $this->load->view('products/received_transfer', $data);
            $this->load->view('fixed/footer');
        }
    }

    public function file_handling()
    {
        if ($this->input->get('op')) {
            $name = $this->input->get('name');
            if ($this->products->meta_delete($name)) {
                echo json_encode(array('status' => 'Success'));
            }
        } else {
            $id = $this->input->get('id');
            $this->load->library("Uploadhandler_generic", array(
                'accept_file_types' => '/\.(gif|jpe?g|png)$/i', 'upload_dir' => FCPATH . 'userfiles/product/', 'upload_url' => base_url() . 'userfile/product/'
            ));
        }
    }

    public function barcode()
    {
        $pid = $this->input->get('id');
        if ($pid) {
            $this->db->select('product_name,barcode,code_type');
            $this->db->from('geopos_products');
            //  $this->db->where('warehouse', $warehouse);
            $this->db->where('pid', $pid);
            $query = $this->db->get();
            $resultz = $query->row_array();
            $data['name'] = $resultz['product_name'];
            $data['code'] = $resultz['barcode'];
            $data['ctype'] = $resultz['code_type'];
            $html = $this->load->view('barcode/view', $data, true);
            ini_set('memory_limit', '64M');

            //PDF Rendering
            $this->load->library('pdf');
            $pdf = $this->pdf->load();
            $pdf->WriteHTML($html);
            $pdf->Output($data['name'] . '_barcode.pdf', 'I');

        }
    }

    public function posbarcode()
    {
        $pid = $this->input->get('id');
        if ($pid) {
            $this->db->select('product_name,barcode,code_type');
            $this->db->from('geopos_products');
            //  $this->db->where('warehouse', $warehouse);
            $this->db->where('pid', $pid);
            $query = $this->db->get();
            $resultz = $query->row_array();
            $data['name'] = $resultz['product_name'];
            $data['code'] = $resultz['barcode'];
            $data['ctype'] = $resultz['code_type'];
            $html = $this->load->view('barcode/posbarcode', $data, true);
            ini_set('memory_limit', '64M');

            //PDF Rendering
            $this->load->library('pdf');
            $pdf = $this->pdf->load_thermal();
            $pdf->WriteHTML($html);
            $pdf->Output($data['name'] . '_barcode.pdf', 'I');

        }
    }

    public function view_over()
    {
        $pid = $this->input->post('id');
        $this->db->select('geopos_products.*,geopos_warehouse.title');
        $this->db->from('geopos_products');
        $this->db->where('geopos_products.pid', $pid);
        $this->db->join('geopos_warehouse', 'geopos_warehouse.id = geopos_products.warehouse');
        if ($this->aauth->get_user()->loc) {
            $this->db->group_start();
            $this->db->where('geopos_warehouse.loc', $this->aauth->get_user()->loc);
            if (BDATA) $this->db->or_where('geopos_warehouse.loc', 0);
            $this->db->group_end();
        } elseif (!BDATA) {
            $this->db->where('geopos_warehouse.loc', 0);
        }
        $query = $this->db->get();
        $data['product'] = $query->row_array();
        $this->db->select('geopos_products.*,geopos_warehouse.title');
        $this->db->from('geopos_products');
        $this->db->join('geopos_warehouse', 'geopos_warehouse.id = geopos_products.warehouse');
        if ($this->aauth->get_user()->loc) {
            $this->db->group_start();
            $this->db->where('geopos_warehouse.loc', $this->aauth->get_user()->loc);
            if (BDATA) $this->db->or_where('geopos_warehouse.loc', 0);
            $this->db->group_end();
        } elseif (!BDATA) {
            $this->db->where('geopos_warehouse.loc', 0);
        }
        $this->db->where('geopos_products.merge', 1);
        $this->db->where('geopos_products.sub', $pid);
        $query = $this->db->get();
        $data['product_variations'] = $query->result_array();
        $this->db->select('geopos_products.*,geopos_warehouse.title');
        $this->db->from('geopos_products');
        $this->db->join('geopos_warehouse', 'geopos_warehouse.id = geopos_products.warehouse');
        if ($this->aauth->get_user()->loc) {
            $this->db->group_start();
            $this->db->where('geopos_warehouse.loc', $this->aauth->get_user()->loc);
            if (BDATA) $this->db->or_where('geopos_warehouse.loc', 0);
            $this->db->group_end();
        } elseif (!BDATA) {
            $this->db->where('geopos_warehouse.loc', 0);
        }
        $this->db->where('geopos_products.sub', $pid);
        $this->db->where('geopos_products.merge', 2);
        $query = $this->db->get();
        $data['product_warehouse'] = $query->result_array();
        $this->load->view('products/view-over', $data);
    }
    
    public function label()
    {
        $pid = $this->input->get('id');
        if ($pid) {
            $this->db->select('product_name,product_price,product_code,barcode,expiry,code_type');
            $this->db->from('geopos_products');
            //  $this->db->where('warehouse', $warehouse);
            $this->db->where('pid', $pid);
            $query = $this->db->get();
            $resultz = $query->row_array();

            $html = $this->load->view('barcode/label', array('lab' => $resultz), true);
            ini_set('memory_limit', '64M');

            //PDF Rendering
            $this->load->library('pdf');
            $pdf = $this->pdf->load();
            $pdf->WriteHTML($html);
            $pdf->Output($resultz['product_name'] . '_label.pdf', 'I');

        }
    }


    public function poslabel()
    {
        $pid = $this->input->get('id');
        if ($pid) {
            $this->db->select('product_name,product_price,product_code,barcode,expiry,code_type');
            $this->db->from('geopos_products');
            //  $this->db->where('warehouse', $warehouse);
            $this->db->where('pid', $pid);
            $query = $this->db->get();
            $resultz = $query->row_array();
            $html = $this->load->view('barcode/poslabel', array('lab' => $resultz), true);
            ini_set('memory_limit', '64M');
            //PDF Rendering
            $this->load->library('pdf');
            $pdf = $this->pdf->load_thermal();
            $pdf->WriteHTML($html);
            $pdf->Output($resultz['product_name'] . '_label.pdf', 'I');
        }
    }

    public function report_product()
    {
        $pid = intval($this->input->post('id'));

        $r_type = intval($this->input->post('r_type'));
        $s_date = datefordatabase($this->input->post('s_date'));
        $e_date = datefordatabase($this->input->post('e_date'));

        if ($pid && $r_type) {


            switch ($r_type) {
                case 1 :
                    $query = $this->db->query("SELECT geopos_invoices.tid,geopos_invoice_items.qty,geopos_invoice_items.price,geopos_invoices.invoicedate FROM geopos_invoice_items LEFT JOIN geopos_invoices ON geopos_invoices.id=geopos_invoice_items.tid WHERE geopos_invoice_items.pid='$pid' AND geopos_invoices.status!='canceled' AND (DATE(geopos_invoices.invoicedate) BETWEEN DATE('$s_date') AND DATE('$e_date'))");
                    $result = $query->result_array();
                    break;

                case 2 :
                    $query = $this->db->query("SELECT geopos_purchase.tid,geopos_purchase_items.qty,geopos_purchase_items.price,geopos_purchase.invoicedate FROM geopos_purchase_items LEFT JOIN geopos_purchase ON geopos_purchase.id=geopos_purchase_items.tid WHERE geopos_purchase_items.pid='$pid' AND geopos_purchase.status!='canceled' AND (DATE(geopos_purchase.invoicedate) BETWEEN DATE('$s_date') AND DATE('$e_date'))");
                    $result = $query->result_array();
                    break;

                case 3 :
                    $query = $this->db->query("SELECT rid2 AS qty, DATE(d_time) AS  invoicedate,note FROM geopos_movers  WHERE geopos_movers.d_type='1' AND rid1='$pid'  AND (DATE(d_time) BETWEEN DATE('$s_date') AND DATE('$e_date'))");
                    $result = $query->result_array();
                    break;
            }

            $this->db->select('*');
            $this->db->from('geopos_products');
            $this->db->where('pid', $pid);
            $query = $this->db->get();
            $product = $query->row_array();

            $cat_ware = $this->categories_model->cat_ware($pid, $this->aauth->get_user()->loc);

//if(!$cat_ware) exit();
            $html = $this->load->view('products/statementpdf-ltr', array('report' => $result, 'product' => $product, 'cat_ware' => $cat_ware, 'r_type' => $r_type), true);
            ini_set('memory_limit', '64M');

            //PDF Rendering
            $this->load->library('pdf');
            $pdf = $this->pdf->load();
            $pdf->WriteHTML($html);
            $pdf->Output($pid . 'report.pdf', 'I');
        } else {
            $pid = intval($this->input->get('id'));
            $this->db->select('*');
            $this->db->from('geopos_products');
            $this->db->where('pid', $pid);
            $query = $this->db->get();
            $product = $query->row_array();
            $head['title'] = "Product Sales";
            $head['usernm'] = $this->aauth->get_user()->username;
            $this->load->view('fixed/header', $head);
            $this->load->view('products/statement', array('id' => $pid, 'product' => $product));
            $this->load->view('fixed/footer');
        }
    }
    public function history(){
        $head['title'] = "Prices History";
        $this->load->model('products_model', 'products');
        $data['data'] = $this->products->prices_changes_list();
        $this->load->view('fixed/header', $head);
        $this->load->view('products/history', $data);
        $this->load->view('fixed/footer');
    }
    public function custom_label()
    {
        if ($this->input->post()) {
            $width = $this->input->post('width');
            $height = $this->input->post('height');
            $padding = $this->input->post('padding');
            $store_name = $this->input->post('store_name');
            $warehouse_name = $this->input->post('warehouse_name');
            $product_price = $this->input->post('product_price');
            $product_code = $this->input->post('product_code');
            $bar_height = $this->input->post('bar_height');
            $total_rows = $this->input->post('total_rows');
            $items_per_rows = $this->input->post('items_per_row');
            $products = array();


            foreach ($this->input->post('products_l') as $row) {
                $this->db->select('geopos_products.product_name,geopos_products.product_price,geopos_products.product_code,geopos_products.barcode,geopos_products.expiry,geopos_products.code_type,geopos_warehouse.title,geopos_warehouse.loc');
                $this->db->from('geopos_products');
                $this->db->join('geopos_warehouse', 'geopos_warehouse.id = geopos_products.warehouse', 'left');

                if ($this->aauth->get_user()->loc) {
                    $this->db->group_start();
                    $this->db->where('geopos_warehouse.loc', $this->aauth->get_user()->loc);

                    if (BDATA) $this->db->or_where('geopos_warehouse.loc', 0);
                    $this->db->group_end();
                } elseif (!BDATA) {
                    $this->db->where('geopos_warehouse.loc', 0);
                }

                //  $this->db->where('warehouse', $warehouse);
                $this->db->where('geopos_products.pid', $row);
                $query = $this->db->get();
                $resultz = $query->row_array();

                $products[] = $resultz;

            }


            $loc = location($resultz['loc']);

            $design = array('store' => $loc['cname'], 'warehouse' => $resultz['title'], 'width' => $width, 'height' => $height, 'padding' => $padding, 'store_name' => $store_name, 'warehouse_name' => $warehouse_name, 'product_price' => $product_price, 'product_code' => $product_code, 'bar_height' => $bar_height, 'total_rows' => $total_rows, 'items_per_row' => $items_per_rows);

            $html = $this->load->view('barcode/custom_label', array('products' => $products, 'style' => $design), true);
            ini_set('memory_limit', '64M');

            //PDF Rendering
            $this->load->library('pdf');
            $pdf = $this->pdf->load();
            $pdf->WriteHTML($html);
            $pdf->Output($resultz['product_name'] . '_label.pdf', 'I');


        } else {
            $data['cat'] = $this->categories_model->category_list();
            $data['warehouse'] = $this->categories_model->warehouse_list();
            $head['title'] = "Stock Transfer";
            $head['usernm'] = $this->aauth->get_user()->username;
            $this->load->view('fixed/header', $head);
            $this->load->view('products/custom_label', $data);
            $this->load->view('fixed/footer');
        }
    }
    public function check_product_code()
    {
        $loc =  $this->aauth->get_user()->loc ;
        $code = $this->input->get('code');
        $query = " SELECT geopos_products.pid FROM geopos_products ";
        $query .= " WHERE  geopos_products.product_code =  '$code'  ";
        $query = $this->db->query($query);
        $query =   $query->result_array();
        $return =  count($query);
        echo  $return ;
    }
}
