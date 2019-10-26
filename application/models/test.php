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

class test extends CI_Model
{
    var $table = 'geopos_invoices';
    var $column_order = array(null, 'geopos_invoices.tid', 'geopos_customers.name', 'geopos_invoices.invoicedate', 'geopos_invoices.total', 'geopos_invoices.status', null);
    var $column_search = array('geopos_invoices.tid', 'geopos_customers.name', 'geopos_invoices.invoicedate', 'geopos_invoices.total','geopos_invoices.status');
    var $order = array('geopos_invoices.tid' => 'desc');

    public function __construct(){
        parent::__construct();
    }
    public function pre($array , $title= NULL , $columns =  NULL){
        $title =  $title . " ->  count " .  count($array);
        if($columns !=  NULL){
            $new_array =  array();
            $columns = explode(',', $columns);
            foreach ($array as $key => $item) {
                foreach ($columns as $column) {
                    $new_array[$key][$column] =  $item[$column];
                }
            }
            echo "<h3>$title</h3><pre>";
            print_r ($new_array);
            echo "</pre></br>";
        }else {
            echo "<h3>$title</h3><pre>";
            print_r ($array);
            echo "</pre></br>";
        }
    }
    public function text( $text= NULL){
        global $post_owner;
        global $post_screen;
        global $post_process;

        if ($text == NULL) {
            echo "<h6> A long text to be shown in places when you can't see results so perhaps you will need to make a standard check . You can serchh for me in the page with sssss .</h6>";
        }else {
            echo "<h3> $text </h3>";
        }
    }
    public function random($input){
        $value = "";
        if( isset($input) &&  $input  !=  "" ){
            $value .=  $input."_";
        }
        $value  .=  rand (100 , 1000);
        $value .=  rand (100 , 1000);
        echo $value ;
    }
}
