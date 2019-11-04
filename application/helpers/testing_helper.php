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


if (!defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors', 1);

function pre($array , $title= NULL){
    echo "<h3>$title</h3><pre>";
    print_r ($array);
    echo "</pre></br>";
}
function text( $text= NULL){
    global $post_owner;
    global $post_screen;
    global $post_process;

    if ($text == NULL) {
        echo "<h6> A long text to be shown in places when you can't see results so perhaps you will need to make a standard check . You can serchh for me in the page with sssss .</h6>";
    }else {
        echo "<h3> $text </h3>";
    }
}
function random($input){
    $value = "";
    if( isset($input) &&  $input  !=  "" ){
        $value .=  $input."_";
    }
    $value  .=  rand (100 , 1000);
    $value .=  rand (100 , 1000);
    echo $value ;
};