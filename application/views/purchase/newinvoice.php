<?php 
    // pre($cats);
?>
<div class="content-body">
    <div class="card">
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <div class="message"></div>
            </div>
            <div class="card-body">
                <form method="post" id="data_form">

                    <div class="row">

                        <div class="col-sm-4">

                        </div>

                        <div class="col-sm-3"></div>

                        <div class="col-sm-2"></div>

                        <div class="col-sm-3">

                        </div>

                    </div>

                    <div class="row">


                        <div class="col-sm-6 cmp-pnl">
                            <div id="customerpanel" class="inner-cmp-pnl">
                                <div class="form-group row">
                                    <div class="fcol-sm-12">
                                        <h3 class="title">
                                            <?php echo $this->lang->line('Bill From') ?> <a href='#'
                                                                                            class="btn btn-primary btn-sm rounded"
                                                                                            data-toggle="modal"
                                                                                            data-target="#addCustomer">
                                                <?php echo $this->lang->line('Add Supplier') ?>
                                            </a>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="frmSearch col-sm-12"><label for="cst"
                                                                            class="caption"><?php echo $this->lang->line('Search Supplier') ?> </label>
                                        <input type="text" class="form-control" name="cst" id="supplier-box"
                                               placeholder="Enter Supplier Name or Mobile Number to search"
                                               autocomplete="off"/>

                                        <div id="supplier-box-result"></div>
                                    </div>

                                </div>
                                <div id="customer">
                                    <div class="clientinfo">
                                        <?php echo $this->lang->line('Supplier Details') ?>
                                        <hr>
                                        <input type="hidden" name="customer_id" id="customer_id" value="0">
                                        <div id="customer_name"></div>
                                    </div>
                                    <div class="clientinfo">

                                        <div id="customer_address1"></div>
                                    </div>

                                    <div class="clientinfo">

                                        <div type="text" id="customer_phone"></div>
                                    </div>
                                    <hr><?php echo $this->lang->line('Warehouse') ?> <select id="s_warehouses"
                                                                                             class="selectpicker form-control">
                                        <?php echo $this->common->default_warehouse();
                                        echo '<option value="0">' . $this->lang->line('All') ?></option><?php foreach ($warehouse as $row) {
                                            echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
                                        } ?>

                                    </select>
                                </div>


                            </div>
                        </div>
                        <div class="col-sm-6 cmp-pnl">
                            <div class="inner-cmp-pnl">


                                <div class="form-group row">

                                    <div class="col-sm-12"><h3
                                                class="title"><?php echo $this->lang->line('Purchase Order') ?> </h3>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6"><label for="invocieno"
                                                                 class="caption"><?php echo $this->lang->line('Order Number') ?> </label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-file-text-o"
                                                                                 aria-hidden="true"></span></div>
                                            <input type="text" class="form-control" placeholder="Invoice #"
                                                   name="invocieno"
                                                   value="<?php echo $lastinvoice + 1 ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><label for="invocieno"
                                                                 class="caption"><?php echo $this->lang->line('Reference') ?> </label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-bookmark-o"
                                                                                 aria-hidden="true"></span></div>
                                            <input type="text" class="form-control" placeholder="Reference #"
                                                   name="refer">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-sm-6"><label for="invociedate"
                                                                 class="caption"><?php echo $this->lang->line('Order Date') ?> </label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-calendar4"
                                                                                 aria-hidden="true"></span></div>
                                            <input type="text" class="form-control required"
                                                   placeholder="Billing Date" name="invoicedate"
                                                   data-toggle="datepicker"
                                                   autocomplete="false">
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><label for="invocieduedate"
                                                                 class="caption"><?php echo $this->lang->line('Order Due Date') ?> </label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-calendar-o"
                                                                                 aria-hidden="true"></span></div>
                                            <input type="text" class="form-control required" id="tsn_due"
                                                   name="invocieduedate"
                                                   placeholder="Due Date" data-toggle="datepicker" autocomplete="false">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="taxformat"
                                               class="caption"><?php echo $this->lang->line('Tax') ?> </label>
                                        <select class="form-control round"
                                                onchange="changeTaxFormat(this.value)"
                                                id="taxformat">
                                            <?php echo $taxlist; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="discountFormat"
                                                   class="caption"><?php echo $this->lang->line('Discount') ?></label>
                                            <select class="form-control" onchange="changeDiscountFormat(this.value)"
                                                    id="discountFormat">
                                                <?php echo $this->common->disclist() ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="toAddInfo"
                                               class="caption"><?php echo $this->lang->line('Order Note') ?> </label>
                                        <textarea class="form-control" name="notes" rows="2"></textarea></div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div id="saman-row">
                        <table class="table-responsive tfr my_stripe">
                            <thead>
                            <tr class="item_header bg-gradient-directional-amber">
                                <th width="30%" class="text-center"><?php echo $this->lang->line('Item Name') ?></th>
                                <th width="8%" class="text-center"><?php echo $this->lang->line('Quantity') ?></th>
                                <th width="10%" class="text-center"><?php echo $this->lang->line('Purchase') ?></th>
                                <th width="10%" class="text-center"><?php echo $this->lang->line('Retail') ?></th>
                                <th width="10%" class="text-center"><?php echo $this->lang->line('WHolesale') ?></th>
                                <th width="10%" class="text-center"><?php echo $this->lang->line('Tax') ?>(%)</th>
                                <th width="10%" class="text-center"><?php echo $this->lang->line('Tax') ?></th>
                                <th width="7%" class="text-center"><?php echo $this->lang->line('Discount') ?></th>
                                <th width="10%" class="text-center">
                                    <?php echo $this->lang->line('Amount') ?>
                                    (<?php echo $this->config->item('currency'); ?>)
                                </th>
                                <th width="5%" class="text-center"><?php echo $this->lang->line('Action') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="last-item-row">
                                <td class="add-row">
                                    <button type="button" class="btn btn-success" aria-label="Left Align" id="addproductrow">
                                        <i class="fa fa-plus-square"></i> <?php echo $this->lang->line('Add Row') ?>
                                    </button>
                                    <button id = "products_list_model" type="button" class="btn btn-primary" onclick="get_and_open()">
                                        <i class="fa fa-plus-square"></i> <?php echo $this->lang->line('Add Product/s') ?>
                                    </button>
                                </td>
                                <td colspan="9"></td>
                            </tr>

                            <tr class="sub_c" style="display: table-row;">
                                <td colspan="6" align="right"><input type="hidden" value="0" id="subttlform"
                                                                     name="subtotal"><strong><?php echo $this->lang->line('Total Tax') ?></strong>
                                </td>
                                <td align="left" colspan="2"><span
                                            class="currenty lightMode"><?php echo $this->config->item('currency'); ?></span>
                                    <span id="taxr" class="lightMode">0</span></td>
                            </tr>
                            <tr class="sub_c" style="display: table-row;">
                                <td colspan="6" align="right">
                                    <strong><?php echo $this->lang->line('Total Discount') ?></strong></td>
                                <td align="left" colspan="2"><span
                                            class="currenty lightMode"><?php echo $this->config->item('currency'); ?></span>
                                    <span id="discs" class="lightMode">0</span></td>
                            </tr>

                            <tr class="sub_c" style="display: table-row;">
                                <td colspan="6" align="right">
                                    <strong><?php echo $this->lang->line('Shipping') ?></strong></td>
                                <td align="left" colspan="2"><input type="text" class="form-control shipVal"
                                                                    onkeypress="return isNumber(event)"
                                                                    placeholder="Value"
                                                                    name="shipping" autocomplete="off"
                                                                    onkeyup="billUpyog();">
                                    ( <?php echo $this->lang->line('Tax') ?> <?= $this->config->item('currency'); ?>
                                    <span id="ship_final">0</span> )
                                </td>
                            </tr>

                            <tr class="sub_c" style="display: table-row;">
                                <td colspan="2"><?php if ($exchange['active'] == 1){
                                    echo $this->lang->line('Payment Currency client') . ' <small>' . $this->lang->line('based on live market') ?></small>
                                    <select name="mcurrency"
                                            class="selectpicker form-control">
                                        <option value="0">Default</option>
                                        <?php foreach ($currency as $row) {
                                            echo '<option value="' . $row['id'] . '">' . $row['symbol'] . ' (' . $row['code'] . ')</option>';
                                        } ?>

                                    </select><?php } ?></td>
                                <td colspan="4" align="right"><strong><?php echo $this->lang->line('Grand Total') ?>
                                        (<span
                                                class="currenty lightMode"><?php echo $this->config->item('currency'); ?></span>)</strong>
                                </td>
                                <td align="left" colspan="2"><input type="text" name="total" class="form-control"
                                                                    id="invoiceyoghtml" readonly="">

                                </td>
                            </tr>
                            <tr class="sub_c" style="display: table-row;">
                                <td colspan="2"><?php echo $this->lang->line('Payment Terms') ?> <select name="pterms"
                                                                                                         class="selectpicker form-control"><?php foreach ($terms as $row) {
                                            echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
                                        } ?>

                                    </select></td>
                                <td colspan="2">
                                    <div>
                                        <label><?php echo $this->lang->line('Update Stock') ?></label>
                                        <fieldset class="right-radio">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="update_stock"
                                                       id="customRadioRight1" value="yes" checked="">
                                                <label class="custom-control-label"
                                                       for="customRadioRight1"><?php echo $this->lang->line('Yes') ?></label>
                                            </div>
                                        </fieldset>
                                        <fieldset class="right-radio">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="update_stock"
                                                       id="customRadioRight2" value="no">
                                                <label class="custom-control-label"
                                                       for="customRadioRight2"><?php echo $this->lang->line('No') ?></label>
                                            </div>
                                        </fieldset>

                                    </div>
                                </td>
                                <td align="right" colspan="4"><input type="submit" class="btn btn-success sub-btn"
                                                                     value="<?php echo $this->lang->line('Generate Order') ?>"
                                                                     id="submit-data" data-loading-text="Creating...">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Select products</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <div class="col-sm-6"><label class="col-form-label" for="product_cat">Product Category</label>
                                        <select name="product_cat" id="product_cat" class="form-control" onchange="get_products()">
                                            <option value="0"> -- Select Category -- </option>
                                            <?php
                                                foreach ($cats as $key => $cat) {
                                                    $cid = $cat['id'];
                                                    $title = $cat['title'];            
                                                    echo "<option value='$cid'>$title</option>";
                                                };
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6"><label class="col-form-label" for="sub_cat">Sub Category</label>
                                        <select id="normal_sub_cat" name="sub_cat" class="form-control required" disabled onchange="get_products()">
                                        </select>
                                    </div>
                                </div>
                                <table class="table table-responsive" id="popup-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="form-checkbox">
                                                <input type="checkbox" id="select_all">
                                                <i class="form-icon"></i>
                                            </label>
                                        </th>
                                        <th scope="col"><?php echo $this->lang->line('Product Name') ?></th>
                                        <th scope="col"><?php echo $this->lang->line('Category') ?></th>
                                        <th scope="col">
                                            <?php echo $this->lang->line('Sub') ?><?php echo $this->lang->line('Category') ?>
                                        </th>
                                        <th scope="col"><?php echo $this->lang->line('Warehouse') ?></th>
                                        <th scope="col"><?php echo $this->lang->line('Stock Units') ?></th>
                                    </tr>
                                </thead>
                                <tbody id='popup-table-body'> 
                                    <tr>
                                        <td scope="col"><?php echo $this->lang->line('Warehouse') ?></td>
                                        <td scope="col"><?php echo $this->lang->line('Stock Units') ?></td>
                                    </tr>

                                </tbody>
                            </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="add_products_rows()" >Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" value="purchase/action" id="action-url">
                    <input type="hidden" value="puchase_search" id="billtype">
                    <input type="hidden" value="0" name="counter" id="ganak">
                    <input type="hidden" value="<?php echo $this->config->item('currency'); ?>" name="currency">
                    <input type="hidden" value="<?= $taxdetails['handle']; ?>" name="taxformat" id="tax_format">

                    <input type="hidden" value="<?= $taxdetails['format']; ?>" name="tax_handle" id="tax_status">
                    <input type="hidden" value="yes" name="applyDiscount" id="discount_handle">

                    <input type="hidden" value="<?= $this->common->disc_status()['disc_format']; ?>"
                           name="discountFormat" id="discount_format">
                    <input type="hidden" value="<?= amountFormat_general($this->common->disc_status()['ship_rate']); ?>"
                           name="shipRate"
                           id="ship_rate">
                    <input type="hidden" value="<?= $this->common->disc_status()['ship_tax']; ?>" name="ship_taxtype"
                           id="ship_taxtype">
                    <input type="hidden" value="0" name="ship_tax" id="ship_tax">

                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="addCustomer" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="product_action" class="form-horizontal">
                <!-- Modal Header -->
                <div class="modal-header bg-gradient-directional-success white">

                    <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('Add Supplier') ?></h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only"><?php echo $this->lang->line('Close') ?></span>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <p id="statusMsg"></p><input type="hidden" name="mcustomer_id" id="mcustomer_id" value="0">

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="name"><?php echo $this->lang->line('Name') ?></label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Name"
                                   class="form-control margin-bottom" id="mcustomer_name" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="phone"><?php echo $this->lang->line('Phone') ?></label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Phone"
                                   class="form-control margin-bottom" name="phone" id="mcustomer_phone">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label" for="email">Email</label>

                        <div class="col-sm-10">
                            <input type="email" placeholder="Email"
                                   class="form-control margin-bottom crequired" name="email" id="mcustomer_email">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="address"><?php echo $this->lang->line('Address') ?></label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Address"
                                   class="form-control margin-bottom " name="address" id="mcustomer_address1">
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-4">
                            <input type="text" placeholder="City"
                                   class="form-control margin-bottom" name="city" id="mcustomer_city">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Region"
                                   class="form-control margin-bottom" name="region">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Country"
                                   class="form-control margin-bottom" name="country" id="mcustomer_country">
                        </div>

                    </div>

                    <div class="form-group row">


                        <div class="col-sm-6">
                            <input type="text" placeholder="PostBox"
                                   class="form-control margin-bottom" name="postbox">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="TAX ID"
                                   class="form-control margin-bottom" name="taxid" id="tax_id">
                        </div>
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal"><?php echo $this->lang->line('Close') ?></button>
                    <input type="submit" id="msupplier_add" class="btn btn-primary submitBtn"
                           value="<?php echo $this->lang->line('ADD') ?>"/>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    row_counter =  0 ; // counter of the added products AS GLOBAL VARIABLE 
    add_empty_row();
    function  add_products_rows(){
        var products = document.querySelectorAll("[data-role ='checkproduct']");
        products.forEach(function(product){
            var checked = product.checked ;
            var added_row_id = "";
            if(checked ==  true){
                added_row_id = add_empty_row();
                fill_row_data_from_popup(product.id,added_row_id)
            }
        });

    };
    function get_and_open(){
        get_products();
        $('#exampleModal').modal();
    };

    function get_products(){
        // reset select all checkbox
        document.getElementById('select_all').checked = false ; 


        var sub = $('#normal_sub_cat').val();
        var  cat= $('#product_cat').val();
        if(!(sub > 0) ){
            sub =  0 ;
        }
        $.ajax({
            url: baseurl + 'purchase/product_fetching?category='+cat+'&sub_cat='+sub,
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
                var rows = "";
                if(data.length > 0){
                    $.each(data, function(key, product) {
                        rows += '<tr>';
                            rows += '<td>'; 
                            rows += '<input id="'+product['pid']+'" type="checkbox" data-role ="checkproduct" >';
                            rows += '<input id="data-disrate-'+product['pid']+'" type="hidden" value="'+product['disrate']+'">';
                            rows += '<input id="data-pprice-'+product['pid']+'" type="hidden" value="'+product['fproduct_price']+'">';
                            rows += '<input id="data-pid-'+product['pid']+'" type="hidden" value="'+product['pid']+'">';
                            rows += '<input id="data-des-'+product['pid']+'" type="hidden" value="'+product['product_des']+'">';
                            rows += '<input id="data-name-'+product['pid']+'" type="hidden" value="'+product['product_name']+'">';
                            rows += '<input id="data-rprice-'+product['pid']+'" type="hidden" value="'+product['product_price']+'">';
                            rows += '<input id="data-qty-'+product['pid']+'" type="hidden" value="'+product['qty']+'">';
                            rows += '<input id="data-subid-'+product['pid']+'" type="hidden" value="'+product['sub_id']+'">';
                            rows += '<input id="data-taxrate-'+product['pid']+'" type="hidden" value="'+product['taxrate']+'">';
                            rows += '<input id="data-unit-'+product['pid']+'" type="hidden" value="'+product['unit']+'">';
                            rows += '<input id="data-wholesale-'+product['pid']+'" type="hidden" value="'+product['wholesale']+'">';
                            rows += '<input id="data-code-'+product['pid']+'" type="hidden" value="'+product['product_code']+'">';

                            rows += '<input id="data-cat-'+product['pid']+'" type="hidden" value="'+product['pcat']+'">';
                            rows += '<input id="data-sub-cat-'+product['pid']+'" type="hidden" value="'+product['sub_id']+'">';
                            rows += '<input id="data-auto-prices-'+product['pid']+'" type="hidden" value="'+product['auto_prices']+'">';

                            rows += '</td>'; 
                            rows += '<td>'+product['product_name']+'</td>'; 
                            rows += '<td>'+product['category_title']+'</td>';
                            if(product['sub_cat_title'] == null ){
                                rows += '<td>-</td>'; 
                            }else{
                                rows += '<td>'+product['sub_cat_title']+' 888</td>'; 
                            }
                            rows += '<td>'+product['warehouse_title']+'</td>'; 
                            rows += '<td>'+product['qty']+'</td>'; 
                        rows += '</tr>'; 
                    });
                    // popup-table-body
                    $("#popup-table tbody tr").remove();
                    $("#popup-table-body").html(rows);
                }else{
                    $("#popup-table-body").html("No Products Here");
                    document.getElementById("normal_sub_cat").disabled = true;
                }
            }
	    });
    }
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
                var category = document.getElementById('product_cat');
                category = category.options[category.selectedIndex].text;

                if(data.length > 0){
                    var options = "<option value='0'>Sub of "+ category +" </option>";
                    $.each(data, function(key, option) {
                        options += '<option value="'+option['id']+'">'+option['title']+'</option>' 
                    });
                    document.getElementById("normal_sub_cat").disabled = false;
                }else{
                    var options = "<option value='0'>NO SUBS for "+ category +" </option>";
                    document.getElementById("normal_sub_cat").disabled = true;
                }
                document.getElementById('normal_sub_cat').innerHTML = options;
            }
	    });
    });

    function add_empty_row(){
        var nxt = parseInt(row_counter);
        var currency = $('#hdata').attr('data-curr');
        $('#ganak').val(nxt);
        var functionNum = "'" + row_counter + "'";
        count = $('#saman-row div').length;
        //product row
        var data = '<tr><td><input type="text" class="productname form-control" onkeypress="autocomplete_product_name(this.id)" name="product_name[]" placeholder="Enter Product name or Code" id="productname-' + row_counter + '"></td><td><input type="text" class="form-control req amnt" name="product_qty[]" id="amount-' + row_counter + '" onkeypress="return isNumber(event)" onkeyup="rowTotal(' + functionNum + '), billUpyog()" autocomplete="off" value="1" ><input type="hidden" id="alert-' + row_counter + '" value=""  name="alert[]"> </td> <td><input type="text" class="form-control req prc" name="product_price[]" id="price-' + row_counter + '" onkeypress="return isNumber(event)" onkeyup="rowTotal(' + functionNum + '), billUpyog()" autocomplete="off"></td>';
        data +='<td><input type="text" class="form-control req prc" name="retail_price[]" id="retail-price-' + row_counter + '" onkeypress="return isNumber(event)" onkeyup="rowTotal(' + functionNum + '), billUpyog()" autocomplete="off"></td>'
        data +='<td><input type="text" class="form-control req prc" name="wholesale_price[]" id="wholesale-price-' + row_counter + '" onkeypress="return isNumber(event)" onkeyup="rowTotal(' + functionNum + '), billUpyog()" autocomplete="off"></td>'
        data +='<td> <input type="text" class="form-control vat" name="product_tax[]" id="vat-' + row_counter + '" onkeypress="return isNumber(event)" onkeyup="rowTotal(' + functionNum + '), billUpyog()" autocomplete="off"></td> <td id="texttaxa-' + row_counter + '" class="text-center">0</td> <td><input type="text" class="form-control discount" name="product_discount[]" onkeypress="return isNumber(event)" id="discount-' + row_counter + '" onkeyup="rowTotal(' + functionNum + '), billUpyog()" autocomplete="off"></td> <td><span class="currenty">' + currency + '</span> <strong><span class=\'ttlText\' id="result-' + row_counter + '">0</span></strong></td> <td class="text-center"><button type="button" data-rowid="' + row_counter + '" class="btn btn-danger removeProd" title="Remove" > <i class="fa fa-minus-square"></i> </button> </td><input type="hidden" name="taxa[]" id="taxa-' + row_counter + '" value="0"><input type="hidden" name="disca[]" id="disca-' + row_counter + '" value="0"><input type="hidden" class="ttInput" name="product_subtotal[]" id="total-' + row_counter + '" value="0"> <input type="hidden" class="pdIn" name="pid[]" id="pid-' + row_counter + '" value="0"> <input type="hidden" name="unit[]" id="unit-' + row_counter + '" value=""> <input type="hidden" name="hsn[]" id="hsn-' + row_counter + '" value=""> </tr>';
        data += '<tr>';
        data += '<td colspan="1">';
            data += '<p>Want to calculate the prices depend on old profit ratio ?</p>';
            data += '<input id="hidden-old-pprice-'+row_counter+'" type="hidden" style="display:block" name="old_pprice[]" >';
            data += '<input id="hidden-old-rprice-'+row_counter+'" type="hidden" style="display:block" name="old-rprice[]" >';
            data += '<input id="hidden-old-wprice-'+row_counter+'" type="hidden" style="display:block" name="old-wprice[]" >';
            data += '<input id="hidden-old-qty-'+row_counter+'" type="hidden" style="display:block" name="old_qty[]" >';
            data += '</td>';
            data += '<td colspan="1"><input onclick="calculate_prices(this.id)" type="checkbox" id="calculate-prices-' + row_counter + '" ><input type="hidden" value= "0" id="calculate-prices-value-' + row_counter + '" ></td>';
            data += '<td colspan="1"><input type="text" class="form-control req prc "id="old-price-' + row_counter + '"  onkeypress="return isNumber(event)" autocomplete="off"  disabled></td>';
            data += '<td colspan="1"><input type="text" class="form-control req prc" id="old-retail-price-' + row_counter + '"    onkeypress="return isNumber(event)" autocomplete="off"  disabled></td>';
            data += '<td colspan="1"><input type="text" class="form-control req prc" id="old-wholesale-price-' + row_counter + '" onkeypress="return isNumber(event)" autocomplete="off"  disabled></td>';
            data += '<td colspan="7"><textarea class="form-control"  id="dpid-' + row_counter + '" name="product_description[]" placeholder="Enter Product description" autocomplete="off"></textarea><br></td>';
        data += '</tr>';
        //ajax request
        // $('#saman-row').append(data);
        $('tr.last-item-row').before(data);
        var current_row_id = row_counter; 
        row_counter ++ ;
        return current_row_id;
    }

    $('#addproductrow').on('click', function (e) {
        add_empty_row(row_counter);
    });
    function calculate_prices (checkbox_id){
        var status =  document.getElementById(checkbox_id).checked;
        id = checkbox_id.split("-");
        id = id[2];
        if (status == true ) { // if checked
            var price =  parseInt(document.getElementById("price-"+id).value);
            if( price >  0 && document.getElementById("pid-"+id).value !=  '' ){
                var old_price  =  parseInt(document.getElementById("old-price-"+id).value) ; 
                var old_retial =  parseInt(document.getElementById("old-retail-price-"+id).value) ; 
                var old_whole  =  parseInt(document.getElementById("old-wholesale-price-"+id).value) ; 

                document.getElementById("retail-price-"+id).value    = old_retial * price /  old_price ; 
                if( !(document.getElementById("retail-price-"+id).value > 0 ) ){
                    document.getElementById("retail-price-"+id).value  =  0 ;
                }
                document.getElementById("wholesale-price-"+id).value = old_whole  * price /  old_price ; 
                if( !(document.getElementById("wholesale-price-"+id).value > 0 ) ){
                    document.getElementById("wholesale-price-"+id).value  =  0 ;
                }
            }else{
                alert('<?php echo $this->lang->line('PLease Insert Correct Purshase Price') ?>');
                document.getElementById(checkbox_id).checked = false ;
            }
        }else{
            document.getElementById("calculate-prices-value-"+id).value = 0;   
        }


    }

    function autocomplete_product_name(id){
        row =  id ;
        cvalue = id ;
        $('#' + id).autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: baseurl + 'search_products/puchase_search',
                    dataType: "json",
                    method: 'post',
                    data: 'name_startsWith=' + request.term + '&type=product_list&row_num=' + row + '&wid=' + $("#s_warehouses option:selected").val() + '&' + d_csrf,
                    success: function (data) {
                        response($.map(data, function (item) {
                            var product_d = item[0];
                            return {
                                label: product_d,
                                value: product_d,
                                data: item
                            };
                        }));
                    }
                });
            },
            autoFocus: true,
            minLength: 0,
            select: function (event, ui) {
                id_arr = $(this).attr('id');
                fill_row_data(ui.item.data ,id_arr );
            },
            create: function (e) {
                $(this).prev('.ui-helper-hidden-accessible').remove();
            }
        });
    }
    function autocomplete_product_row(id){
        row =  id ;
        cvalue = id ;
        $('#' + id).autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: baseurl + 'search_products/puchase_search',
                    dataType: "json",
                    method: 'post',
                    data: 'name_startsWith=' + request.term + '&type=product_list&row_num=' + row + '&wid=' + $("#s_warehouses option:selected").val() + '&' + d_csrf,
                    success: function (data) {
                        fill_row_data(full_data ,id_arr);
                    }
                });
            },
        });
    }

    function fill_row_data(full_data ,id_arr){
        id = id_arr.split("-");
        var t_r = full_data[3];
        if ($("#taxformat option:selected").attr('data-trate')) {
            t_r = $("#taxformat option:selected").attr('data-trate');
        }
        var discount = full_data[4];
        var custom_discount = $('#custom_discount').val();
        if (custom_discount > 0) discount = deciFormat(custom_discount);
        $('#amount-' + id[1]).val(1);
        $('#old-price-' + id[1]).val(full_data[1]);
        $('#hidden-old-pprice-' +  id[1]).val(full_data[1]);
        $('#hidden-old-rprice-' +  id[1]).val(full_data[9]);
        $('#hidden-old-wprice-' +  id[1]).val(full_data[10]);
        $('#hidden-old-qty-' +  id[1]).val(full_data[11]);
        $('#old-retail-price-' + id[1]).val(full_data[9]);
        $('#old-wholesale-price-' + id[1]).val(full_data[10]);
        $('#pid-' + id[1]).val(full_data[2]);
        $('#vat-' + id[1]).val(t_r);
        $('#discount-' + id[1]).val(discount);
        $('#dpid-' + id[1]).val(full_data[5]);
        $('#unit-' + id[1]).val(full_data[6]);
        $('#hsn-' + id[1]).val(full_data[7]);
        $('#alert-' + id[1]).val(full_data[8]);
        rowTotal(cvalue);
        billUpyog();




    }
    function fill_row_data_from_popup(product_id ,row_id){
        var disrate =  $('#data-disrate-' + product_id).val();
        var pprice  =  $('#data-pprice-' + product_id).val();
        var pid     =  $('#data-pid-' + product_id).val();
        var des     =  $('#data-des-' + product_id).val();
        var name    =  $('#data-name-' + product_id).val();
        var rprice  =  $('#data-rprice-' + product_id).val();
        var qty     =  $('#data-qty-' + product_id).val();
        var subid   =  $('#data-subid-' + product_id).val();
        var taxrate =  $('#data-taxrate-' + product_id).val();
        var unit    =  $('#data-unit-' + product_id).val();
        var wprice  =  $('#data-wholesale-' + product_id).val();
        var code    =  $('#data-code-' + product_id).val();






        var cat     =  $('#data-cat-' + product_id).val();
        var sub_cat =  $('#data-sub-cat-' + product_id).val();
        var auto_pr =  $('#data-auto-prices-' + product_id).val();
        var t_r = $('#data-taxrate-' + row_id).val();
        if ($("#taxformat option:selected").attr('data-trate')) {
            t_r = $("#taxformat option:selected").attr('data-trate');
        }
        var discount = disrate; 
        var custom_discount = $('#custom_discount').val();
        if (custom_discount > 0) discount = deciFormat(custom_discount);
        $('#productname-' + row_id).val(name);
        $('#amount-' + row_id).val(1);
        $('#old-price-' + row_id).val(pprice);





        $('#hidden-cat-' +  row_id).val(cat);
        $('#hidden-sub-cat-' +  row_id).val(sub_cat);
        $('#hidden-auto-prices-' +  row_id).val(auto_pr);
        $('#hidden-old-pprice-' + row_id).val(pprice);
        $('#hidden-old-rprice-' +  row_id).val(rprice);
        $('#hidden-old-wprice-' +  row_id).val(wprice);
        $('#hidden-old-qty-' + row_id).val(qty);
        $('#old-retail-price-' + row_id).val(rprice);
        $('#old-wholesale-price-' + row_id).val(wprice);
        $('#pid-' + row_id).val(pid);
        $('#vat-' + row_id).val(t_r);
        $('#discount-' + row_id).val(discount);
        $('#dpid-' + row_id).val(des);
        $('#unit-' + row_id).val(unit);
        $('#hsn-' + row_id).val(code); 
        $('#alert-' + row_id).val(row_id);
        rowTotal(row_counter);
        billUpyog();
    }

    $('#select_all').on('click', function (e) {
        var products = document.querySelectorAll("[data-role ='checkproduct']");
        console.log(products);
        products.forEach(function(product){
            document.getElementById(product.id).checked = true ; 
        });
    });

</script>