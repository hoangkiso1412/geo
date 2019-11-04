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
require_once APPPATH . 'third_party/vendor/autoload.php';
require_once APPPATH . 'third_party/qrcode/vendor/autoload.php';

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;
use Mike42\Escpos\PrintConnectors\DummyPrintConnector;
use Mike42\Escpos\EscposImage;

use Omnipay\Omnipay;
use Endroid\QrCode\QrCode;


class testing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('detailed_products_model', 'invocies');
        $this->load->model('products_model', 'products');

        $this->load->library("Aauth");
        $this->load->library("Registerlog");
        $this->load->library("Common");

        if (!$this->aauth->is_loggedin()) {
            redirect('/user/', 'refresh');
        }
        if (!$this->aauth->premission(1)) {
            exit('<h3>Sorry! You have insufficient permissions to access this section</h3>');
        }
        if ($this->aauth->get_user()->roleid == 2) {
            $this->limited = $this->aauth->get_user()->id;
        } else {
            $this->limited = '';
        }
        $this->load->library("Custom");
        $this->li_a = 'sales';
        echo "<title>testing</title>";
    }
    
    public function detailed_product_search() 
    {   
        function relateds_loop($result,$extra){
            





            /*
            //  Related :  save all the related in array then remove what showed in the last query then show the rest
            $related  =  array(); 
            foreach ($result as $key => $product) {
                $parents[]= $product['pid'];  
                if( $product['related_product'] != NULL &&  $product['related_product'] != 'null'){
                        $current_relateds =  json_decode($product['related_product']);
                        $related = array_merge($related,$current_relateds);
                }
            }
            $this->test->pre($related);
            $related =  array_unique($related);  // remove all duplicated results 
            foreach ($related as $id) { //
                if(in_array($id,$parents)){
                    unset($related[$id]);
                }
            }
            if (count($related) >  0) {
                $whr =  "" ;
                foreach ($related as $key => $id) {
                    $or   = $key > 0 ?  " OR "  : " ";
                    $whr .= " $or pid =  $id ";
                }
                $query2  = " SELECT * FROM geopos_products ";
                $query2 .= " WHERE $whr ";
                $query2 .= " GROUP BY product_code DESC ";
                echo $query2 ;
                $query2 = $this->db->query($query2);
                $result2 = $query2->result_array();    
                $result = array_merge ($result, $result2); 
            }
            */
            return $result ; 
        }
        $out = '';
        $name = "p4" ;
        $qw = '';
        $join = '';
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
        $query  = " SELECT pid,product_code,related_product FROM geopos_products ";
        $query .= " $join WHERE (geopos_products.qty>0) $qw   ";
        $query .= " GROUP BY product_code DESC ";
        $query = $this->db->query($query);
        $result = $query->result_array();
        $extra =  array () ;  
        $result =  relateds_loop($result,$extra);
        pre($result) ;
    }
    
    public function index(){
        if (!$this->registerlog->check($this->aauth->get_user()->id)) {
            redirect('register/create');
        }
        $this->load->model('customers_model', 'customers');
        $this->load->model('categories_model'); 
        $this->load->model('Detailed_products_model', 'globalsearch');
        $this->load->model('plugins_model', 'plugins');
        $this->load->library("Common");
        $data['taxlist'] = $this->common->taxlist($this->config->item('tax'));
        $data['gateway'] = $this->invocies->gateway_list('Yes');
        $data['exchange'] = $this->plugins->universal_api(5);
        $data['enable_card'] = $this->plugins->universal_api(54);
        $data['customergrouplist'] = $this->customers->group_list();
        $data['lastinvoice'] = $this->invocies->lastinvoice();
        $data['draft_list'] = $this->invocies->drafts();
        $data['terms'] = $this->invocies->billingterms();
        $data['currency'] = $this->invocies->currencies();
        $head['title'] = "New Invoice";
        $head['usernm'] = $this->aauth->get_user()->username;
        $data['cat'] = $this->categories_model->category_list();
        $data['sub_cat'] = $this->categories_model->all_sub_cat_list();
        $data['warehouse'] = $this->globalsearch->warehouse_list();
        $warehouse = $this->globalsearch->warehouse_list();
        $data['locations'] = $this->globalsearch->locations_list();
        $data['taxdetails'] = $this->common->taxdetail();
        $data['acc_list'] = $this->invocies->accountslist();
        $head['s_mode'] = false;




        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////    S    T    A    R    T       ::::       T    E    S    T    I    N    G    ///////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $products   = $this->products->out_transfered_products();
        pre($products);


    /*
     *
     * 
     * 
     * 
     * 
     
     













        if ($this->aauth->get_user()->loc) {
            $this->db->group_start();
            $this->db->where('geopos_warehouse.loc', $this->aauth->get_user()->loc);

            if (BDATA) $this->db->or_where('geopos_warehouse.loc', 0);
            $this->db->group_end();
        } elseif (!BDATA) {
            $this->db->where('geopos_warehouse.loc', 0);
        }



        // re($this->globalsearch->main_date(53));


            $query5 = "SELECT * FROM geopos_products";
            $query5 = $this->db->query($query5);
            $data['products_list'] = $query5->result_array();

        //                        ($TABLE , $ALL_NEW_DATA , when condition $ALL_NEW_DATA[$keys])
        // $this->db->update_batch('geopos_products', $old_data, 'pid');











     *
     * 
     * 
     * 
     * 
     */












    // Don't remove us    
    }
}
