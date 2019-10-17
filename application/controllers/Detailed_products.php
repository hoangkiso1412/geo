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


class Detailed_products extends CI_Controller
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
    }

    public function search(){
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
        $data['locations'] = $this->globalsearch->locations_list();
        $data['taxdetails'] = $this->common->taxdetail();
        $data['acc_list'] = $this->invocies->accountslist();
        $head['s_mode'] = false;
        $this->load->view('fixed/header-pos', $head);
        $this->load->view('pos/detailed_product', $data);
    }

    public function view_over(){
        $pid = $this->input->post('id');
        $this->db->select('geopos_products.*,geopos_warehouse.title,geopos_locations.cname');
        $this->db->from('geopos_products');
        $this->db->where('geopos_products.pid', $pid);
        $this->db->join('geopos_warehouse', 'geopos_warehouse.id = geopos_products.warehouse');
        $this->db->join('geopos_locations', 'geopos_warehouse.loc = geopos_locations.id');
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
        $product_code = $data['product']['product_code'];

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

        //  For Warahouses Table
        $this->db->select('geopos_products.*,geopos_warehouse.title,geopos_locations.cname');
        $this->db->from('geopos_products');
        $this->db->join('geopos_warehouse', 'geopos_products.warehouse =  geopos_warehouse.id');
        $this->db->join('geopos_locations', 'geopos_warehouse.loc = geopos_locations.id');
        $this->db->where('geopos_products.product_code', $product_code);
        $query = $this->db->get();
        $data['product_warehouse'] = $query->result_array();

        $group_data = array();
        foreach ($data['product_warehouse'] as $key=> $product) {
            $group_data[$product['pid']]['warehouse'] = $product['title'];
            $group_data[$product['pid']]['location'] = $product['cname'];
        }
        $data['group_data'] = $group_data;

        $this->load->library("Custom");
        $data['custom_fields'] = $this->custom->view_edit_fields($pid, 4);

        $this->load->model('categories_model');
        $cats_list = $this->categories_model->category_list();
        $cat_name = '';
        foreach ($cats_list as $row) {
            $cid = $row['id'];
            $title = $row['title'];

            if($cid == $data['product']['pcat']){
                $cat_name = $title;
            }
        }
        $data['cat_name'] = $cat_name;

        // Sales Report
        $sales_query = "SELECT geopos_invoices.tid,geopos_invoice_items.pid,geopos_invoice_items.qty,geopos_invoice_items.price,geopos_invoices.invoicedate ";
        $sales_query .= " FROM geopos_invoice_items ";
        $sales_query .= " LEFT JOIN geopos_invoices ON geopos_invoices.id=geopos_invoice_items.tid ";
        $sales_query .= " WHERE geopos_invoices.status!='canceled' AND (  ";
        $counter =  0 ;
        $or = '';
        foreach ($group_data as $key => $id) {
            if($counter > 0 ){
                $or = " OR ";
            }
            $sales_query .= " $or geopos_invoice_items.pid= '$key' ";
            $counter ++ ;
        }
        $sales_query .= " )";
        $sales_query = $this->db->query($sales_query);
        $sales_result = $sales_query->result_array();
        $data['sales'] = $sales_result;
        $this->load->view('pos/detailed-product-view-over', $data);
    }
}
