<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5><?php echo $this->lang->line('Edit Product') ?></h5>
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
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">
                <form method="post" id="data_form" class="form-horizontal">


                    <input type="hidden" name="pid" value="<?php echo $product['pid'] ?>">


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="product_name"><?php echo $this->lang->line('Product Name') ?>*</label>

                        <div class="col-sm-6">
                            <input type="text" placeholder="Product Name"
                                   class="form-control margin-bottom  required" name="product_name" id="product_name"
                                   value="<?php echo $product['product_name'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-sm-6"><label class="col-form-label"
                                                     for="product_cat"><?php echo $this->lang->line('Product Category') ?>
                                *</label>
                            <select name="product_cat" class="form-control" id="product_cat">
                            <option value=''>Select</option>
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

                        <div class="col-sm-6"><label class="col-form-label" for="sub_cat"><?php echo $this->lang->line('Sub') ?> <?php echo $this->lang->line('Category') ?></label>
                            <select id="normal_sub_cat" name="sub_cat" class="form-control required">
                            </select>
                        </div>
                    </div>
                



<script>
 $("#product_cat").change(function () {
    calculate_prices();
});
$("#normal_sub_cat").change(function () {
    calculate_prices();
});
$("#fproduct_price").on('change' , function () {
    alert('sssssss');
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
        if ( fproduct_price> 0 ) { //  category
            var cat = document.getElementById('product_cat').value
            if (cat !== '' ) { //  category
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


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="product_cat"><?php echo $this->lang->line('Warehouse') ?>*</label>

                        <div class="col-sm-6">
                            <select name="product_warehouse" id="wfrom" required="required"  class="form-control">
                            <option value=''>Select</option>
                            <?php
                            foreach ($warehouse as $row) {
                                $cid = $row['id'];
                                $title = $row['title'];
	                                $v =  $product['warehouse'];
	                                $sel = ($cid == $v) ? 'selected="selected"' : '';
                                echo "<option value=".$cid." ".$sel.">".$title."</option>";
                            }
                            ?>
                            </select>



                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <div class="input-group mt-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" <?php echo ($product['favorite'] ? 'checked' : '') ?> name="favorite" id="favorite">
                                    <label class="custom-control-label" for="favorite"><?php echo $this->lang->line('Favorite') ?></label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="product_code"><?php echo $this->lang->line('Product Code') ?></label>

                        <div class="col-sm-6">
                            <input type="text" placeholder="Product Code"
                                   class="form-control required" name="product_code"
                                   value="<?php echo $product['product_code'] ?>">
                        </div>
                        <label class="col-sm-1 col-form-label"><?php echo $this->lang->line('Wholesale-Price') ?>*</label>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon"><?php echo $this->config->item('currency') ?></span>
                                <input type="text" name="wholesale"  id="wholesale" class="form-control required" placeholder="0.00"
                                    aria-describedby="sizing-addon" onkeypress="return isNumber(event)" value="<?php echo edit_amountExchange_s($product['wholesale'], 0, $this->aauth->get_user()->loc) ?>">
                            </div>
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
                                       onkeypress="return isNumber(event)"
                                       value="<?php echo edit_amountExchange_s($product['product_price'], 0, $this->aauth->get_user()->loc) ?>">
                            </div>
                        </div>
                        <label class="col-sm-1 control-label"
                        for="product_status"><?php echo $this->lang->line('Product Status') ?>*</label>

                        <div class="col-sm-3">
                            <select name="product_status" id="product_status" class="form-control required">
                                <option <?php echo ($product['product_status'] == 1 ? 'selected' : '') ?> value='1'><?php echo $this->lang->line('New') ?></option>
                                <option <?php echo ($product['product_status'] == 2 ? 'selected' : '') ?> value='2'><?php echo $this->lang->line('Used') ?></option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"><?php echo $this->lang->line('Purchased Price') ?></label>

                        <div class="col-sm-5">
                            <div class="input-group">
                                <span class="input-group-addon"><?php echo $this->config->item('currency') ?></span>
                                <input type="text" name="fproduct_price" class="form-control" id="fproduct_price"
                                       placeholder="0.00" aria-describedby="sizing-addon1"
                                       onkeypress="return isNumber(event)"
                                       value="<?php echo edit_amountExchange_s($product['fproduct_price'], 0, $this->aauth->get_user()->loc) ?>">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group mt-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" <?php echo ($product['is_bundle'] ? 'checked' : '') ?> class="custom-control-input" name="bundle" id="bundle">
                                    <label class="custom-control-label" for="bundle"><?php echo $this->lang->line('Bundle Products') ?></label>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-2">
                            <div class="input-group mt-1">
                                <label class="" ><?php echo $this->lang->line('Auto Profit'); ?></label>
                                <input type="checkbox" class="" name="calculate_profit" id="calculate_profit" onchange="calculate_prices()">
                                <input type="hidden" class="" name="calculate_profit_value" id="calculate_profit_value" value = '0'>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"><?php echo $this->lang->line('Default TAX Rate') ?></label>

                        <div class="col-sm-4">
                            <div class="input-group">

                                <input type="text" name="product_tax" class="form-control"
                                       placeholder="0.00" aria-describedby="sizing-addon1"
                                       onkeypress="return isNumber(event)"
                                       value="<?php echo amountFormat_general($product['taxrate']) ?>"><span
                                        class="input-group-addon">%</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <small><?php echo $this->lang->line('Tax rate during') ?></small>
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"><?php echo $this->lang->line('Default Discount Rate') ?></label>

                        <div class="col-sm-4">
                            <div class="input-group">

                                <input type="text" name="product_disc" class="form-control"
                                       placeholder="0.00" aria-describedby="sizing-addon1"
                                       onkeypress="return isNumber(event)"
                                       value="<?php echo amountFormat_general($product['disrate']) ?>"><span
                                        class="input-group-addon">%</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <small><?php echo $this->lang->line('Discount rate during') ?></small>
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"><?php echo $this->lang->line('Stock Units') ?>*</label>

                        <div class="col-sm-4">
                            <input type="text" placeholder="Total Items in stock"
                                   class="form-control margin-bottom required" name="product_qty"
                                   onkeypress="return isNumber(event)"
                                   value="<?php echo amountFormat_general($product['qty']) ?>">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="product_cat"><?php echo $this->lang->line('Measurement Unit') ?></label>

                        <div class="col-sm-4">
                            <select name="unit" class="form-control">
                                <?php
                                echo "<option value='" . $product['unit'] . "'>" . $this->lang->line('Do not change') . "</option><option value=''>None</option>";
                                foreach ($units as $row) {
                                    $cid = $row['code'];
                                    $title = $row['name'];
                                    echo "<option value='$cid'>$title</option>";
                                }
                                ?>
                            </select>


                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"><?php echo $this->lang->line('Alert Quantity') ?></label>

                        <div class="col-sm-4">
                            <input type="text" placeholder="Low Stock Alert Quantity"
                                   class="form-control margin-bottom" name="product_qty_alert"
                                   value="<?php echo $product['alert'] ?>"
                                   onkeypress="return isNumber(event)">
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"><?php echo $this->lang->line('BarCode') ?></label>
                        <div class="col-sm-2">
                            <select class="form-control" name="code_type">
                                <?php echo $product['barcode'] ?>
                                <option value="  <?php echo $product['code_type'] ?>">  <?php echo $product['code_type'] ?>
                                    *
                                </option>
                                <option value="EAN13">EAN13 - Default</option>
                                <option value="UPCA">UPC</option>
                                <option value="EAN8">EAN8</option>
                                <option value="ISSN">ISSN</option>
                                <option value="ISBN">ISBN</option>
                                <option value="C128A">C128A</option>
                                <option value="C39">C39</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="BarCode Numeric Digit 123112345671"
                                   class="form-control margin-bottom" name="barcode"
                                   value="<?php echo $product['barcode'] ?>"
                                   onkeypress="return isNumber(event)">

                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"><?php echo $this->lang->line('Description') ?></label>

                        <div class="col-sm-8">
                        <textarea placeholder="Description"
                                  class="form-control margin-bottom" name="product_desc"
                        ><?php echo $product['product_des'] ?></textarea>
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
                                        <?php
                                        foreach ($products_list as $row) {
                                            $cid = $row['pid'];
                                            $title = $row['product_name'];
                                            $row['wholesale'] = is_numeric($row['wholesale']) ? $row['wholesale'] : 0;
                                            $row['product_price'] = is_numeric($row['product_price']) ? $row['product_price'] : 0;
                                            $title_full =  $row['product_name'] . ':' . $row['product_price']. ':' .$row['wholesale'];
	                                	$v =  json_decode($product['related_product']);
	                                	$sel = (is_array($v) && in_array($cid, $v)) ? 'selected="selected"' : '';
                                   	    echo "<option value=".$cid." ".$sel.">".$title_full."</option>";
                                        }
                                        ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row bundel_select"><label class="col-sm-2 col-form-label"
                            for="bundle_products"><?php echo $this->lang->line('Bundle Products') ?></label>
                            <div class="col-sm-6">
		                        <select id="bundle_products" name="bundle_products[]" class="form-control required select-box"
		                                    multiple="multiple">
		                                    <?php
		                                foreach ($products_list as $row) {
		                                    $cid = $row['pid'];
		                                    $title = $row['product_name'];
                                                    $row['wholesale'] = is_numeric($row['wholesale']) ? $row['wholesale'] : 0;
                                                    $row['product_price'] = is_numeric($row['product_price']) ? $row['product_price'] : 0;
                                                    $title_full =  $row['product_name'] . ':' . $row['product_price']. ':' .$row['wholesale'];
			                                $v =  json_decode($product['bundle_products']);
			                                $sel = (is_array($v) && in_array($cid, $v)) ? 'selected="selected"' : '';
		                                    echo "<option value=".$cid." ".$sel.">".$title_full."</option>";
		                                }
		                                ?>
		                        </select>
                            </div>


                        <div class="col-sm-12">
                       		 <br />
                                 <?php
                                 	$bundle_discount = json_decode($product['bundle_discount']);
                                        $bundle_p_discount_amount = json_decode($bundle_discount->bundle_p_discount_amount);
                                        $bundle_p_discount_factor = json_decode($bundle_discount->bundle_p_discount_factor);
                                        $bundle_w_discount_amount = json_decode($bundle_discount->bundle_w_discount_amount);
                                        $bundle_w_discount_factor = json_decode($bundle_discount->bundle_w_discount_factor);
                                 ?>
		                <div class="form-group row">
                                    <!-- inner product discount row : start -->
                                    <label class="col-sm-2 col-form-label" for="bundle_products"><?php echo $this->lang->line('Default Discount Rate') ?></label>
		                    <div class="col-sm-3">
		                        <input type="text" placeholder="<?php echo $this->lang->line('Default Discount Rate') ?>"
		                        class="form-control margin-bottom required" id="bundle_p_discount_amount" name="bundle_p_discount_amount"  value="<?php echo $bundle_p_discount_amount ? $bundle_p_discount_amount : 0; ?>"
		                        onkeypress="return isNumber(event)">
                                    </div>

		                    <div class="col-sm-1">
	                    		<select id="bundle_p_discount_factor" name="bundle_p_discount_factor" class="form-control">
                                        	<option value="percent" <?php echo ($bundle_p_discount_factor == 'percent') ? 'selected' : ''; ?>>   (%)</option>
                                                <option value="value" <?php echo ($bundle_p_discount_factor == 'value') ? 'selected' : ''; ?>>  ($)</option>
	                                </select>
		                    </div>
                                    <!-- inner product discount row : end -->
		                </div>

		                <div class="form-group row">
                                    <!-- inner product discount row : start -->
                                    <label class="col-sm-2 col-form-label" for="bundle_products">Wholesale <?php echo $this->lang->line('Default Discount Rate') ?></label>
		                    <div class="col-sm-3">
		                        <input type="text" placeholder="<?php echo $this->lang->line('Default Discount Rate') ?>"
		                        class="form-control margin-bottom required" id="bundle_w_discount_amount" name="bundle_w_discount_amount"  value="<?php echo $bundle_w_discount_amount ? $bundle_w_discount_amount : 0; ?>" value="0"
		                        onkeypress="return isNumber(event)">
                                    </div>

		                    <div class="col-sm-1">
	                    		<select id="bundle_w_discount_factor" name="bundle_w_discount_factor" class="form-control">
                                        	<option value="percent" <?php echo ($bundle_w_discount_factor == 'percent') ? 'selected' : ''; ?>>   (%)</option>
                                                <option value="value" <?php echo ($bundle_w_discount_factor == 'value') ? 'selected' : ''; ?>>  ($)</option>
	                                </select>
		                    </div>
                                    <!-- inner product discount row : end -->
		                </div>
                        </div>


                    </div>
                    <?php foreach ($custom_fields as $row) {
                        if ($row['f_type'] == 'text') { ?>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="docid"><?= $row['name'] ?></label>

                                <div class="col-sm-8">
                                    <input type="text" placeholder="<?= $row['placeholder'] ?>"
                                           class="form-control margin-bottom b_input"
                                           name="custom[<?= $row['id'] ?>]"
                                           value="<?= $row['data'] ?>">
                                </div>
                            </div>

                            <?php } else if ($row['f_type'] == 'select') { ?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="docid"><?= $row['name'] ?></label>

                            <div class="col-sm-6">
                                <select name="custom[<?= $row['id'] ?>]" class="form-control b_input">
                                    <?php
                                                foreach (json_decode($row['value_data']) as $data) {
                                                    echo "<option ". ($row['data'] == $data ? 'selected' : '' ) ." value='$data'>$data</option>";
                                                }
                                                ?>
                                </select>
                            </div>
                        </div>
                        <?php } else if ($row['f_type'] == 'image') {?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?= $row['name'] ?></label>
                                <div class="col-sm-6">
                                    <input type="file" name="files" id="files-<?php echo $row['id'] ?>" />
                                    <?php if($row['data']) { ?>
                                    <img class="images_display-<?php echo $row['id'] ?>" src="<?php echo base_url() ?>userfiles/custom_images/<?php echo $row['data'] ?>" width="200px" alt="">
                                    <input type="hidden" name="custom[<?= $row['id'] ?>]" value="<?php echo $row['data'] ?>">
                                    <?php } ?>
                                    <div id="uploaded_images-<?php echo $row['id'] ?>" class="row"></div>
                                </div>
                            </div>
                            <?php } else if ($row['f_type'] == 'images')  { ?>
                                <div class="form-group row"><label
                                        class="col-sm-2 col-form-label"><?= $row['name'] ?></label>
                                    <div class="col-sm-6">
                                        <input type="file" name="files" id="files-<?php echo $row['id'] ?>" multiple />
                                        <?php 
                                            if( is_array(json_decode($row['data'])) && count(json_decode($row['data'])) >  0 ){
                                            foreach (json_decode($row['data']) as $key => $image) { ?>
                                            <img class="images_display-<?php echo $row['id'] ?>" src="<?php echo base_url() ?>userfiles/custom_images/<?php echo $image ?>" width="200px" alt="">
                                            <input type="hidden" name="images[<?= $row['id'] ?>][<?php echo $key ?>]" value="<?php echo $image ?>">                                            
                                        <?php }} ?>
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
                            <table id="files" class="files">
                                <tr>
                                    <td>
                                        <a data-url="<?= base_url() ?>products/file_handling?op=delete&name=<?php echo $product['image'] ?>"
                                           class="aj_delete"><i
                                                    class="btn-danger btn-sm icon-trash-a"></i><?php echo $product['image'] ?>
                                        </a><img style="max-height:200px;"
                                                 src="<?= base_url() ?>userfiles/product/<?php echo $product['image'] . '?c=' . rand(1, 999) ?>">
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Select files...</span>
                                <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]">
    </span>
                            <br>
                            <pre>Allowed: gif, jpeg, png</pre>
                            <br>
                            <!-- The global progress bar -->

                        </div>
                    </div>
                    <div class="form-group row">
                        <input type="hidden" name="image" id="image" value="<?php echo $product['image'] ?>">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-4">
                            <input type="submit" id="submit-data" class="btn btn-success margin-bottom free-disapled-inputs"
                                   value="<?php echo $this->lang->line('Update') ?>"
                                   data-loading-text="Updating...">
                            <input type="hidden" value="products/editproduct" id="action-url">
                        </div>
                    </div>


                </form>
            </div>
        </div>
<script>
     $(document).on('click', ".free-disapled-inputs", function (e) {
    document.getElementById('wholesale').disabled = false;
    document.getElementById('product_price').disabled = false; 
    document.getElementById('fproduct_price').disabled = false;

});
</script>
        <script src="<?php echo assets_url('assets/myjs/jquery.ui.widget.js');
        $invoice['tid'] = 0; ?>"></script>
        <script src="<?php echo assets_url('assets/myjs/jquery.fileupload.js') ?>"></script>
        <script>
            /*jslint unparam: true */
            /*global window, $ */
            $(function () {
                'use strict';
                // Change this to the location of your server-side upload handler:
                var url = '<?php echo base_url() ?>products/file_handling?id=<?php echo $invoice['tid'] ?>';
                $('#fileupload').fileupload({
                    url: url,
                    dataType: 'json',
                    formData: {'<?=$this->security->get_csrf_token_name()?>': crsf_hash},
                    done: function (e, data) {
                        var img = 'default.png';
                        $.each(data.result.files, function (index, file) {
                            $('#files').html('<tr><td><a data-url="<?php echo base_url() ?>products/file_handling?op=delete&name=' + file.name + '&invoice=<?php echo $invoice['tid'] ?>" class="aj_delete"><i class="btn-danger btn-sm icon-trash-a"></i> ' + file.name + ' </a><img style="max-height:200px;" src="<?php echo base_url() ?>userfiles/product/' + file.name + '"></td></tr>');
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
    $('#bundle').change(function() {
        if (this.checked) {
            $(".bundel_select").show();
            $(".select2-container--default").width('100%');
            document.getElementById('product_price').disabled  = document.getElementById('wholesale').disabled = true;
            document.getElementById('product_price').value = document.getElementById('wholesale').value = 0;
        } else {
            $(".bundel_select").hide();
            document.getElementById('product_price').disabled = document.getElementById('wholesale').disabled  = false;
            document.getElementById('product_price').value = document.getElementById('wholesale').value = 0;
        }
    });
    $("#bundle_products").select2();
            
            $("#related_product").select2();
            <?php if ($product['related_product'] != 'null' && $product['bundle_products']) { ?>
                const related_val = <?php echo ($product['related_product'] != 'null' && $product['bundle_products'] ? $product['related_product'] : '') ?>;
                $('#related_product').val(related_val).trigger('change');
            <?php } ?>
            <?php if ($product['is_bundle']) { ?>
		            $(".bundel_select").show();
		            $(".select2-container--default").width('100%');
		            document.getElementById('product_price').disabled  = document.getElementById('wholesale').disabled = true;
		            document.getElementById('product_price').value = document.getElementById('wholesale').value = 0;

            	            update_bundle_prices();
	    <?php } else {   ?>
		            $(".bundel_select").hide();
		            document.getElementById('product_price').disabled  = document.getElementById('wholesale').disabled = false;
		            document.getElementById('product_price').value = 0;
		            document.getElementById('wholesale').value = 0;
            <?php } ?>
            
            $("#wfrom").on('change', function () {
                //$('#related_product, #bundle_products').empty().trigger("change");
                var tips = $('#wfrom').val();
                update_categories_from_warehouse(tips);
            });
            <?php if ($product['warehouse']) { ?>
            	 var tips = <?php echo $product['warehouse'];?>;
                 update_categories_from_warehouse(tips);
            <?php } ?>
     function update_categories_from_warehouse(tips){
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
     }
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
	    		//return $(el).val();
		}).get();
                retail_price = apply_discount(retail_price, bundle_p_discount_amount, bundle_p_discount_factor);
                wholesale_price = apply_discount(wholesale_price, bundle_w_discount_amount, bundle_w_discount_factor);
                document.getElementById('product_price').value= retail_price;
                document.getElementById('wholesale').value= wholesale_price;
     }
	$("#bundle_products, #bundle_p_discount_factor, #bundle_w_discount_factor").on('change', function () {
		update_bundle_prices();
	});
	$("#bundle_p_discount_amount, #bundle_w_discount_amount").on("input",function(e){
        	update_bundle_prices();
	});
            $("#sub_cat").select2();
            $("#product_cat").on('change', function () {
                $("#sub_cat").val('').trigger('change');
                var tips = $('#product_cat').val();
                $("#sub_cat").select2({
                    ajax: {
                        url: baseurl + 'products/sub_cat?id=' + tips,
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
        </script>
<script>
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
            console.log(name)
            
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
                    $('.images_display-<?php echo $row['id'] ?>').remove();
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
