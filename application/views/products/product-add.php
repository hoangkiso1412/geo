<div class="content-body">
    <div class="card">
        <div class="card-header pb-0">
            <h5><?php echo $this->lang->line('Add New Product') ?></h5>
            <hr>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>

        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">
            <form method="post" id="data_form">
                <input type="hidden" name="act" value="add_product">
                <div class="form-group row">
                    <div class="col-sm-6"><label class="col-form-label"
                                                 for="product_name"><?php echo $this->lang->line('Product Name') ?>
                            *</label>
                        <input type="text" placeholder="Product Name"
                               class="form-control margin-bottom required" name="product_name" id="product_name">
                    </div>


                    <div class="col-sm-6"><label class="col-form-label"
                                                 for="product_code"><?php echo $this->lang->line('Product Code') ?></label>
                        <input type="text" placeholder="Product Code"
                               class="form-control required" name="product_code">
                    </div>
                </div>
                <div class="form-group row">

                    <div class="col-sm-6"><label class="col-form-label"
                                                 for="product_cat"><?php echo $this->lang->line('Product Category') ?>
                            *</label>
                        <select name="product_cat" id="product_cat" class="form-control required">
                            <option r-sale = 'notset' w-sale = 'notset' value="" disabled="disabled" selected> -- Select Category -- </option>
                            <?php
                                foreach ($cat as $row) {
                                    $cid = $row['id'];
                                    $title = $row['title'];
                                    $rsale = $row['retail_discount'];
                                    $wsale = $row['wholesale_discount'];
                                    echo "<option r-sale = '$rsale' w-sale = '$wsale' value='$cid'>$title</option>";
                                }
                            ?>
                        </select>
                    </div>
                    

			<div class="col-sm-6"><label class="col-form-label"
                                                 for="sub_cat"><?php echo $this->lang->line('Sub') ?> <?php echo $this->lang->line('Category') ?></label>
                        <select id="normal_sub_cat" name="sub_cat" class="form-control required">

                        </select>

                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_cat"><?php echo $this->lang->line('Warehouse') ?>*</label>

                    <div class="col-sm-6">
                    <select name="product_warehouse" id="wfrom" required="required" class="form-control required">
                            <option value=''>Select</option>
                            <?php
                            foreach ($warehouse as $row) {
                                $cid = $row['id'];
                                $title = $row['title'];
                                echo "<option value='$cid'>$title</option>";
                            }
                            ?>
                        </select>


                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <div class="input-group mt-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="favorite" id="favorite">
                                <label class="custom-control-label" for="favorite"><?php echo $this->lang->line('Favorite') ?></label>
                            </div>

                        </div>

                        <div class="input-group mt-1">
                            <div class="custom-control custom-checkbox">
                            <label class="col-sm-12 col-form-label" for="product_cat"><?php echo $this->lang->line('Auto Profit') ? $this->lang->line('Auto Profit') : 'Auto Profit' ?></label>
                                <input type="checkbox" class="" name="calculate_profit" id="calculate_profit" onchange="calculate_prices()">
                                <input type="text" class="" name="calculate_profit_value" id="calculate_profit_value" value = "0" >
                            </div>

                        </div>

                        <input type="hidden" name="cat_retail_discount" id="cat_retail_discount" value="" />
                        <input type="hidden" name="cat_wholesale_discount" id="cat_wholesale_discount" value="" />

                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 control-label"
                           for="product_price"><?php echo $this->lang->line('Product Retail Price') ?>*</label>

                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo $this->config->item('currency') ?></span>
                            <input type="text" name="product_price" id="product_price" class="form-control required"
                                   placeholder="0.00" aria-describedby="sizing-addon"
                                   onkeypress="return isNumber(event)">
                        </div>


                    </div>
                    <label class="col-sm-1 control-label"
                    for="wholesale"><?php echo $this->lang->line('Wholesale-Price') ?>*</label>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo $this->config->item('currency') ?></span>
                            <input type="text" name="wholesale" id="wholesale" class="form-control required" placeholder="0.00"
                                aria-describedby="sizing-addon" onkeypress="return isNumber(event)">
                        </div>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"><?php echo $this->lang->line('Purchase Order') . $this->lang->line('Price') ?></label>

                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo $this->config->item('currency') ?></span>
                            <input type="text" name="fproduct_price" id="fproduct_price" class="form-control"
                                   placeholder="0.00" aria-describedby="sizing-addon1"
                                   onkeypress="return isNumber(event)" onchange="calculate_prices()" >
                        </div>
                    </div>
                    <label class="col-sm-1 control-label"
                        for="product_status"><?php echo $this->lang->line('Product Status') ?>*</label>

                    <div class="col-sm-3">
                        <select name="product_status" class="form-control">
                            <option value='1'><?php echo $this->lang->line('New') ?></option>
                            <option value='2'><?php echo $this->lang->line('Used') ?></option>
                            <option value='3'><?php echo $this->lang->line('As New') ?></option>
                        </select>
                    </div>

                </div>
                <hr>
                <div class="form-group row">


                    <div class="col-sm-4">
                        <div class="input-group">

                            <input type="text" name="product_tax" class="form-control"
                                   placeholder="<?php echo $this->lang->line('Default TAX Rate') ?>"
                                   aria-describedby="sizing-addon1"
                                   onkeypress="return isNumber(event)"><span
                                    class="input-group-addon">%</span>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="input-group">

                            <input type="text" name="product_disc" class="form-control"
                                   placeholder="<?php echo $this->lang->line('Default Discount Rate') ?>"
                                   aria-describedby="sizing-addon1"
                                   onkeypress="return isNumber(event)"><span
                                    class="input-group-addon">%</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <small><?php echo $this->lang->line('Discount rate during') ?></small>

                        <small><?php echo $this->lang->line('Tax rate during') ?></small>
                    </div>
                </div>
                <div class="form-group row">


                    <div class="col-sm-4">
                        <input type="text" placeholder="<?php echo $this->lang->line('Stock Units') ?>*"
                               class="form-control margin-bottom required" name="product_qty"
                               onkeypress="return isNumber(event)"></div>

                    <div class="col-sm-4">
                        <input type="text" placeholder="<?php echo $this->lang->line('Alert Quantity') ?>"
                               class="form-control margin-bottom" name="product_qty_alert"
                               onkeypress="return isNumber(event)">
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mt-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="bundle" id="bundle">
                                <label class="custom-control-label" for="bundle"><?php echo $this->lang->line('Bundle Products') ?></label>
                            </div>

                        </div>

                    </div>

                </div>
                <hr>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_cat"><?php echo $this->lang->line('Measurement Unit') ?>*</label>

                    <div class="col-sm-4">
                        <select name="unit" class="form-control">
                            <option value=''>None</option>
                            <?php
                            foreach ($units as $row) {
                                $cid = $row['code'];
                                $title = $row['name'];
                                echo "<option value='$cid'>$title - $cid</option>";
                            }
                            ?>
                        </select>


                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><?php echo $this->lang->line('BarCode') ?></label>
                    <div class="col-sm-2">
                        <select class="form-control" name="code_type">
                            <option value="EAN13">EAN13 - Default</option>
                            <option value="UPCA">UPC</option>
                            <option value="EAN8">EAN8</option>
                            <option value="ISSN">ISSN</option>
                            <option value="ISBN">ISBN</option>
                            <option value="C128A">C128A</option>
                            <option value="C39">C39</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" placeholder="BarCode Numeric Digit 123112345671"
                               class="form-control margin-bottom" name="barcode"
                               onkeypress="return isNumber(event)">
                        <small>Leave blank if you want auto generated in EAN13.</small>
                    </div>

                    <label class="col-sm-1 col-form-label"><?php echo $this->lang->line('Extra BarCodes') ?></label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="seperate your barcodes with comma(,)"
                               class="form-control margin-bottom" name="extrabarcodes"
                               >
                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"><?php echo $this->lang->line('Description') ?></label>

                    <div class="col-sm-8">
                        <textarea placeholder="Description"
                                  class="form-control margin-bottom" name="product_desc"
                        ></textarea>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 control-label"
                           for="edate"><?php echo $this->lang->line('Valid') . ' (' . $this->lang->line('To Date') ?>
                        )</label>

                    <div class="col-sm-2">
                        <input type="text" class="form-control required"
                               placeholder="Expiry Date" name="wdate"
                               data-toggle="datepicker" autocomplete="false">
                    </div>
                    <small>Do not change if not applicable</small>
                </div>
                <div class="form-group row"><label class="col-sm-2 col-form-label"
                        for="related_product"><?php echo $this->lang->line('Related Product') ?></label>
                        <div class="col-sm-6">
                    <select id="related_product" name="related_product[]" class="form-control required select-box"
                                multiple="multiple">

                    </select>
                        </div>

                </div>
                <div class="form-group row bundel_select" style="display: none">
                	<div class="col-sm-12">
                        	<div class="form-group row">
	                	<label class="col-sm-2 col-form-label" for="bundle_products"><?php echo $this->lang->line('Bundle Products') ?></label>
	                        <div class="col-sm-6">
	                    		<select id="bundle_products" name="bundle_products[]" class="form-control required select-box"  multiple="multiple">
	                                </select>
	                    	</div>
                                </div>
                        </div>

                        <div class="col-sm-12">
		                <div class="form-group row">
                                    <!-- inner product discount row : start -->
                                    <label class="col-sm-2 col-form-label" for="bundle_products"><?php echo $this->lang->line('Default Discount Rate') ?></label>
		                    <div class="col-sm-3">
		                        <input type="text" placeholder="<?php echo $this->lang->line('Default Discount Rate') ?>"
		                        class="form-control margin-bottom required" id="bundle_p_discount_amount" name="bundle_p_discount_amount"  value="0"
		                        onkeypress="return isNumber(event)">
                                    </div>

		                    <div class="col-sm-1">
	                    		<select id="bundle_p_discount_factor" name="bundle_p_discount_factor" class="form-control">
                                        	<option value="percent">   (%)</option>
                                                <option value="value">  ($)</option>
	                                </select>
		                    </div>
                                    <!-- inner product discount row : end -->
		                </div>

		                <div class="form-group row">
                                    <!-- inner product discount row : start -->
                                    <label class="col-sm-2 col-form-label" for="bundle_products">Wholesale <?php echo $this->lang->line('Default Discount Rate') ?></label>
		                    <div class="col-sm-3">
		                        <input type="text" placeholder="<?php echo $this->lang->line('Default Discount Rate') ?>"
		                        class="form-control margin-bottom required" id="bundle_w_discount_amount" name="bundle_w_discount_amount"  value="0"
		                        onkeypress="return isNumber(event)">
                                    </div>

		                    <div class="col-sm-1">
	                    		<select id="bundle_w_discount_factor" name="bundle_w_discount_factor" class="form-control">
                                        	<option value="percent">   (%)</option>
                                                <option value="value">  ($)</option>
	                                </select>
		                    </div>
                                    <!-- inner product discount row : end -->
		                </div>
                        </div>

                </div>



                <?php
                foreach ($custom_fields as $row) {
                    if ($row['f_type'] == 'text') { ?>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="custom"><?= $row['name'] ?></label>

                    <div class="col-sm-8">
                        <input type="text" placeholder="<?= $row['placeholder'] ?>"
                            class="form-control margin-bottom b_input <?= $row['other'] ?>"
                            name="custom[<?= $row['id'] ?>]">
                    </div>
                </div>

                <?php } else if ($row['f_type'] == 'select') { ?>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="docid"><?= $row['name'] ?></label>

                    <div class="col-sm-6">
                        <select name="custom[<?= $row['id'] ?>]" class="form-control b_input">
                            <?php
                                echo "<option value=''>".$row['name']."</option>";
                                foreach (json_decode($row['value_data']) as $data) {
                                    echo "<option value='$data'>$data</option>";
                                }
                                ?>
                        </select>
                    </div>
                </div>
                <?php } else if ($row['f_type'] == 'image') {?>
                <div class="form-group row"><label
                        class="col-sm-2 col-form-label"><?= $row['name'] ?></label>
                    <div class="col-sm-6">
                        <input type="file" name="files" id="files-<?php echo $row['id'] ?>" />
                        <div id="uploaded_images-<?php echo $row['id'] ?>" class="row"></div>
                    </div>
                </div>
                <?php } else if ($row['f_type'] == 'images')  { ?>
                    <div class="form-group row"><label
                            class="col-sm-2 col-form-label"><?= $row['name'] ?></label>
                        <div class="col-sm-6">
                            <input type="file" name="files" id="files-<?php echo $row['id'] ?>" multiple />
                            <div id="uploaded_images-<?php echo $row['id'] ?>" class="row"></div>
                        </div>
                    </div>
                <?php }
                }
                ?>


                <hr>
                <div class="form-group row"><label
                            class="col-sm-2 col-form-label"><?php echo $this->lang->line('Image') ?></label>
                    <div class="col-sm-6">
                        <div id="progress" class="progress">
                            <div class="progress-bar progress-bar-success"></div>
                        </div>
                        <!-- The container for the uploaded files -->
                        <table id="files" class="files"></table>
                        <br>
                        <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Select files...</span>
                            <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]">
    </span>
                        <br>
                        <pre>Allowed: gif, jpeg, png (Use light small weight images for fast loading - 200x200)</pre>
                        <br>
                        <!-- The global progress bar -->

                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="submit-data" class="btn btn-lg btn-blue margin-bottom free-disapled-inputs"
                               value="<?php echo $this->lang->line('Add product') ?>" data-loading-text="Adding...">
                        <input type="hidden" value="products/addproduct" id="action-url">
                    </div>
                </div>
                <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">

                    <div id="coupon4" class="card-header">
                        <a data-toggle="collapse" data-parent="#accordionWrapa1" href="#accordion41"
                           aria-expanded="true" aria-controls="accordion41"
                           class="card-title lead collapsed"><i class="fa fa-plus-circle"></i>
                            <?php echo $this->lang->line('Products') . ' ' . $this->lang->line('Variations') ?></a>
                    </div>
                    <div id="accordion41" role="tabpanel" aria-labelledby="coupon4"
                         class="card-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="row p-1">
                            <div class="col">
                                <button class="btn btn-blue tr_clone_add">Add Row</button>
                                <hr>
                                <table class="table" id="v_var">
                                    <tr>
                                        <td><select name="v_type[]" class="form-control">
                                                <?php
                                                foreach ($variables as $row) {
                                                    $cid = $row['id'];
                                                    $title = $row['name'];
                                                    $title = $row['name'];
                                                    $variation = $row['variation'];
                                                    echo "<option value='$cid'>$variation - $title </option>";
                                                }
                                                ?>
                                            </select></td>
                                        <td><input value="" class="form-control" name="v_stock[]"
                                                   placeholder="<?php echo $this->lang->line('Stock Units') ?>*">
                                        </td>
                                        <td><input value="" class="form-control" name="v_alert[]"
                                                   placeholder="<?php echo $this->lang->line('Alert Quantity') ?>*">
                                        </td>
                                        <td>
                                            <button class="btn btn-red tr_delete">Delete</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="accordionWrapa2" role="tablist" aria-multiselectable="true">

                    <div id="coupon5" class="card-header">
                        <a data-toggle="collapse" data-parent="#accordionWrapa2" href="#accordion42"
                           aria-expanded="true" aria-controls="accordion41"
                           class="card-title lead collapsed"><i class="fa fa-plus-circle"></i>
                            <?php echo $this->lang->line('Add') . ' ' . $this->lang->line('Products') . ' ' . $this->lang->line('Warehouse') ?>
                        </a>
                    </div>
                    <div id="accordion42" role="tabpanel" aria-labelledby="coupon5"
                         class="card-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="row p-1">
                            <div class="col">
                                <button class="btn btn-blue tr_clone_add_w">Add Row</button>
                                <hr>
                                <table class="table" id="w_var">
                                    <tr>
                                        <td>
                                            <select name="w_type[]" class="form-control">
                                                <?php
                                                foreach ($warehouse as $row) {
                                                    $cid = $row['id'];
                                                    $title = $row['title'];
                                                    echo "<option value='$cid'>$title</option>";
                                                }
                                                ?>
                                            </select></td>
                                        <td><input value="" class="form-control" name="w_stock[]"
                                                   placeholder="<?php echo $this->lang->line('Stock Units') ?>*">
                                        </td>
                                        <td><input value="" class="form-control" name="w_alert[]"
                                                   placeholder="<?php echo $this->lang->line('Alert Quantity') ?>*">
                                        </td>
                                        <td>
                                            <button class="btn btn-red tr_delete">Delete</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


                <input type="hidden" name="image" id="image" value="default.png">

            </form>
        </div>
    </div>
</div>
<script src="<?php echo assets_url('assets/myjs/jquery.ui.widget.js'); ?>"></script>
<script src="<?php echo assets_url('assets/myjs/jquery.fileupload.js') ?>"></script>
<script>
 $("#product_cat").change(function () {
    calculate_prices();
});
$("#normal_sub_cat").change(function () {
    calculate_prices();
});

function numberizing(num){
    num = parseFloat(num, 10);
    if ( isNaN(num) ) {
        num = parseFloat(0,10) ;
    }
    return num
};

function calculate_prices() {
    var checkBox = document.getElementById("calculate_profit");
    if (checkBox.checked == true){ // check box
        var fproduct_price = parseFloat(document.getElementById('fproduct_price').value , 10);
        if ( fproduct_price> 0 ) { //  purchased price
            var cat = document.getElementById('product_cat').value;
            if (cat !== '' ) { //  category
                // update the status of auto calculate 
                document.getElementById('calculate_profit_value').value = 1 ;

                // fields
                var sub_cat = document.getElementById('normal_sub_cat').value
                // sale ratios
                var w_sale = numberizing($('#product_cat option:selected').attr('w-sale'));
                var r_sale = numberizing($('#product_cat option:selected').attr('r-sale'));
                var sub_w_sale = numberizing($('#normal_sub_cat option:selected').attr('w-sale'));
                var sub_r_sale = numberizing($('#normal_sub_cat option:selected').attr('r-sale'));
                // values
                var current_r_price = 0 ;
                var current_w_price = 0 ;

                if (sub_cat  !== '' && sub_w_sale > 0 && sub_r_sale > 0) { //  sub category
                    var current_w_price = fproduct_price +  fproduct_price * sub_w_sale / 100 ;
                    var current_r_price = fproduct_price + fproduct_price * sub_r_sale / 100  ;
                }else if(w_sale > 0 && r_sale > 0){
                    var current_r_price = fproduct_price + ( fproduct_price * r_sale / 100 ) ;
                    var current_w_price = fproduct_price + ( fproduct_price * w_sale / 100 ) ;
                }else{
                    var current_r_price = fproduct_price ;
                    var current_w_price = fproduct_price ;
                }

                // set values
                document.getElementById("product_price").value = current_r_price ;
                document.getElementById("wholesale").value = current_w_price ;
                // disabling
                document.getElementById("product_price").disabled = true;
                document.getElementById("wholesale").disabled = true;
            }else{
                alert('Please select Product Category first');
                document.getElementById("calculate_profit").checked = false;
            }

        }else{
            alert('Please insert Purchace Price first');
            document.getElementById("calculate_profit").checked = false;
        }
    } else {
        document.getElementById("product_price").disabled = false;
        document.getElementById("wholesale").disabled = false;
        // update the status of auto calculate 
        document.getElementById('calculate_profit_value').value = 0 ;
    }

  
  

};
    $("#product_cat").on('change', function() {
        parent_cat = $('#product_cat').val(); 
        $.ajax({
            url: baseurl + 'products/sub_cat?id='+parent_cat,
            dataType: 'json',
            type: 'POST',
            quietMillis: 50,
            data: function (product) {
                return {
                    product: product,
                    '<?=$this->security->get_csrf_token_name()?>': crsf_hash
                };
            },
            success: function(data){
                console.log(data);
                var category = document.getElementById('product_cat');
                category = category.options[category.selectedIndex].text;

                if(data.length > 0){
                    var options = "<option>Sub of "+ category +" </option>";
                    $.each(data, function(key, option) {
                        options += '<option r-sale = "'+option['retail_discount']+'" w-sale = "'+option['wholesale_discount']+'" value="'+option['id']+'">'+option['title']+'</option>' 
                    });
                    document.getElementById("normal_sub_cat").disabled = false;
                }else{
                    var options = "<option>NO SUBS for "+ category +" </option>";
                    document.getElementById("normal_sub_cat").disabled = true;
                }
                document.getElementById('normal_sub_cat').innerHTML = options;
            }
	});

    });
</script>
<script>
    /*jslint unparam: true */
    /*global window, $ */
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = '<?php echo base_url() ?>products/file_handling';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            formData: {'<?=$this->security->get_csrf_token_name()?>': crsf_hash},
            done: function (e, data) {
                var img = 'default.png';
                $.each(data.result.files, function (index, file) {
                    $('#files').html('<tr><td><a data-url="<?php echo base_url() ?>products/file_handling?op=delete&name=' + file.name + '" class="aj_delete"><i class="btn-danger btn-sm icon-trash-a"></i> ' + file.name + ' </a><img style="max-height:200px;" src="<?php echo base_url() ?>userfiles/product/' + file.name + '"></td></tr>');
                    img = file.name;
                });

                $('#image').val(img);
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });

    $(document).on('click', ".aj_delete", function (e) {
        e.preventDefault();

        var aurl = $(this).attr('data-url');
        var obj = $(this);

        jQuery.ajax({

            url: aurl,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                obj.closest('tr').remove();
                obj.remove();
            }
        });

    });


    $(document).on('click', ".tr_clone_add", function (e) {
        e.preventDefault();
        var n_row = $('#v_var').find('tbody').find("tr:last").clone();

        $('#v_var').find('tbody').find("tr:last").after(n_row);

    });
    $(document).on('click', ".tr_clone_add_w", function (e) {
        e.preventDefault();
        var n_row = $('#w_var').find('tbody').find("tr:last").clone();

        $('#w_var').find('tbody').find("tr:last").after(n_row);

    });

    $(document).on('click', ".tr_delete", function (e) {
        e.preventDefault();
        $(this).closest('tr').remove();
    });


    $('#bundle').change(function() {
        if (this.checked) {
            $(".bundel_select").show();
            $(".select2-container--default").width('100%');
            document.getElementById('product_price').disabled  = document.getElementById('wholesale').disabled = true;
            document.getElementById('product_price').value = document.getElementById('wholesale').value = 0;
        } else {
            $(".bundel_select").hide();
            document.getElementById('product_price').disabled  = document.getElementById('wholesale').disabled = false;
            document.getElementById('product_price').value = document.getElementById('wholesale').value = 0;
        }
    });






    $("#sub_cat").select2();

    $("#product_cat").on('change', function () {
        var cat_id = $('#product_cat').val();

        // get prices and set to hidden input
        var purchase_price = parseFloat( document.getElementById('fproduct_price').value );
        $.ajax({
                url: baseurl + 'products/cat_details?id=' + cat_id,
                dataType: 'json',
                type: 'POST',
                quietMillis: 50,
                data: function (product) {
                    return {
                        product: product,
                        '<?=$this->security->get_csrf_token_name()?>': crsf_hash
                    };
                },
            	success: function(data){
                	var retail_discount = data.retail_discount = isNumeric(data.retail_discount) ? parseFloat(data.retail_discount) : 0;
                        var wholesale_discount = data.wholesale_discount = isNumeric(data.wholesale_discount) ? parseFloat(data.wholesale_discount) : 0;

                	document.getElementById('cat_retail_discount').value =   retail_discount;
                	document.getElementById('cat_wholesale_discount').value =   wholesale_discount;
	   	 }
	});


        $("#sub_cat").select2({

            ajax: {
                url: baseurl + 'products/sub_cat?id=' + cat_id,
                dataType: 'json',
                type: 'POST',
                quietMillis: 50,
                data: function (product) {
                    return {
                        product: product,
                        '<?=$this->security->get_csrf_token_name()?>': crsf_hash
                    };
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.title,
                                id: item.id
                            }
                        })
                    };
                },
            }
        });
    });

    $("#bundle_products").select2();
    $("#related_product").select2();
    $("#wfrom").on('change', function () {
        var tips = $('#wfrom').val();
        $("#related_product, #bundle_products").select2({

            tags: [],
            ajax: {
                url: baseurl + 'products/stock_transfer_products?wid=' + tips,
                dataType: 'json',
                type: 'POST',
                quietMillis: 50,
                data: function (product) {

                    return {
                        product: product,
                        '<?=$this->security->get_csrf_token_name()?>': crsf_hash

                    };
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {

			    // check if prices are correct
			    item.wholesale = isNumeric(item.wholesale) ? item.wholesale : 0;

			    // check if prices are correct
			    item.product_price = isNumeric(item.product_price) ? item.product_price : 0;
                            return {
                                text: item.product_name + ':' + item.product_price + ':' + item.wholesale,
                                id: item.pid
                            }
                        })
                    };
                },
            }
        });
    });



     function isNumeric(n) {
    	return !isNaN(parseFloat(n)) && isFinite(n);
     }

     function apply_discount(total_price, discount_amount, discount_factor){
	if(discount_factor == 'percent'){
		return ( parseFloat( total_price ) - ( parseFloat( total_price ) *  parseFloat( discount_amount )  / 100 ) ).toFixed(2);
	}else if(discount_factor == 'value'){
		return ( parseFloat( total_price ) -  parseFloat( discount_amount ) ).toFixed(2) ;
	}else{
                return ( parseFloat( total_price ) ).toFixed(2);
        }
     }

    function update_bundle_prices(){
        var retail_price = 0;
        var wholesale_price = 0;
        var bundle_p_discount_amount = document.getElementById('bundle_p_discount_amount').value;
        var bundle_p_discount_factor = document.getElementById('bundle_p_discount_factor').value;
        var bundle_w_discount_amount = document.getElementById('bundle_w_discount_amount').value;
        var bundle_w_discount_factor = document.getElementById('bundle_w_discount_factor').value;
        $("#bundle_products :selected").map(function(i, el) {
            var current_item =  $(el).text();
            var current_item_spilit = current_item.split(":");
            retail_price = ( parseFloat( retail_price ) + parseFloat( current_item_spilit[1] ) ).toFixed(2);
            wholesale_price = ( parseFloat( wholesale_price ) +  parseFloat( current_item_spilit[2] ) ).toFixed(2);
        }).get();
        retail_price = apply_discount(retail_price, bundle_p_discount_amount, bundle_p_discount_factor);
        wholesale_price = apply_discount(wholesale_price, bundle_w_discount_amount, bundle_w_discount_factor);
        document.getElementById('product_price').value= retail_price;
        document.getElementById('wholesale').value= wholesale_price;
    }
	$("#bundle_products, #bundle_p_discount_factor, #bundle_w_discount_factor").on('change', function () {
		update_bundle_prices();
	});
	$("#bundle_p_discount_amount, #bundle_w_discount_amount").on("change",function(e){
        var bundle_p_discount_amount = document.getElementById('bundle_p_discount_amount').value;
        if(bundle_p_discount_amount.length === 0){
            document.getElementById('bundle_p_discount_amount').value = 0;
        }
        var bundle_w_discount_amount = document.getElementById('bundle_w_discount_amount').value;
        if(bundle_w_discount_amount.length === 0){
            document.getElementById('bundle_p_discount_amount').value = 0;
        }

    	update_bundle_prices();
	});

 $(document).on('click', ".free-disapled-inputs", function (e) {
    document.getElementById('wholesale').disabled = false;
    document.getElementById('product_price').disabled = false; 
    document.getElementById('fproduct_price').disabled = false; 
});

<?php foreach ($custom_fields as $row) { ?>
    $('#files-<?php echo $row['id'] ?>').change(function(e){
        e.preventDefault();
        var files = $('#files-<?php echo $row['id'] ?>')[0].files;
        var error = '';
        var form_data = new FormData();
        for(var count = 0; count<files.length; count++) {
            var name = files[count].name;
            var extension = name.split('.').pop().toLowerCase();
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1) {
                error += "Invalid " + count + " Image File"
            }
            else {
                form_data.append("files[]", files[count]);
            }
        }
        if(error == '') {
            $.ajax({
                url: baseurl + 'customers/upload_images?id=<?php echo $row['id'] ?>&type=<?php echo $row['f_type'] ?>',
                method:"POST",
                data: form_data,
                contentType:false,
                cache:false,
                processData:false,
                beforeSend:function() {
                    $('#uploaded_images'-<?php echo $row['id'] ?>).html("<label class='text-success'>Uploading...</label>");
                },
                success:function(data) {
                    $('#uploaded_images-<?php echo $row['id'] ?>').html(data);
                }
            })
        } else {
            alert(error);
        }
    });
<?php } ?>
</script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {

        function return_product_id(prod, values) {
        for (var i = 0, len = values.length; i < len; i++) {
            if (values[i][1] == prod) {
                var edit_location = baseurl + 'products/edit?id=' + values[i][0];
            //alert(edit_location);
            document.location.href = edit_location;
            break;
            }
        }
        }

        var Product_List = [
            <?php
            foreach ($products_list as $row) {
                        $pid = $row['pid'];
                        $title = $row['product_name'];
                echo '["'.$pid.'", "'.$title.' : Edit "],';
            }
            ?>
        ];

        $( "#product_name" ).autocomplete({
            source: Product_List.map(function(val){return val[1]}),
        select: function (event, ui) {
            return_product_id(ui.item.value, Product_List);
        }
        });
    } );
</script>  
