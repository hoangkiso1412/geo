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
        $head['title'] = "Global Search";
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
        $this->load->model('Detailed_products_model', 'globalsearch');
        $pid  = $this->input->post('id');
        $data['data'] = $this->globalsearch->popup_data($pid);
        $this->load->view('pos/detailed-product-view-over', $data);
    }
}
