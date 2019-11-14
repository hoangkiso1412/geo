<div id="purchase">
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
                                                        class="btn btn-primary btn-sm rounded" data-toggle="modal"
                                                        data-target="#addCustomer">
                                                        <?php echo $this->lang->line('Add Supplier') ?>
                                                    </a>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="frmSearch col-sm-12"><label for="cst"
                                                    class="caption"><?php echo $this->lang->line('Search Supplier') ?>
                                                </label>
                                                <input type="text" class="form-control" name="cst" id="supplier-box"
                                                    placeholder="Enter Supplier Name or Mobile Number to search"
                                                    autocomplete="off" />

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

                                            <div class="col-sm-12">
                                                <h3 class="title"><?php echo $this->lang->line('Purchase Order') ?>
                                                </h3>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6"><label for="invocieno"
                                                    class="caption"><?php echo $this->lang->line('Order Number') ?>
                                                </label>

                                                <div class="input-group">
                                                    <div class="input-group-addon"><span class="icon-file-text-o"
                                                            aria-hidden="true"></span></div>
                                                    <input type="text" class="form-control" placeholder="Invoice #"
                                                        name="invocieno" value="<?php echo $lastinvoice + 1 ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6"><label for="invocieno"
                                                    class="caption"><?php echo $this->lang->line('Reference') ?>
                                                </label>

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
                                                    class="caption"><?php echo $this->lang->line('Order Date') ?>
                                                </label>

                                                <div class="input-group">
                                                    <div class="input-group-addon"><span class="icon-calendar4"
                                                            aria-hidden="true"></span></div>
                                                    <input type="text" class="form-control required"
                                                        placeholder="Billing Date" name="invoicedate"
                                                        data-toggle="datepicker" autocomplete="false">
                                                </div>
                                            </div>
                                            <div class="col-sm-6"><label for="invocieduedate"
                                                    class="caption"><?php echo $this->lang->line('Order Due Date') ?>
                                                </label>

                                                <div class="input-group">
                                                    <div class="input-group-addon"><span class="icon-calendar-o"
                                                            aria-hidden="true"></span></div>
                                                    <input type="text" class="form-control required" id="tsn_due"
                                                        name="invocieduedate" placeholder="Due Date"
                                                        data-toggle="datepicker" autocomplete="false">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label for="taxformat"
                                                    class="caption"><?php echo $this->lang->line('Tax') ?> </label>
                                                <select class="form-control round"
                                                    onchange="changeTaxFormat(this.value)" id="taxformat">
                                                    <?php echo $taxlist; ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label for="discountFormat"
                                                        class="caption"><?php echo $this->lang->line('Discount') ?></label>
                                                    <select class="form-control"
                                                        onchange="changeDiscountFormat(this.value)" id="discountFormat">
                                                        <?php echo $this->common->disclist() ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="toAddInfo"
                                                    class="caption"><?php echo $this->lang->line('Order Note') ?>
                                                </label>
                                                <textarea class="form-control" name="notes" rows="2"></textarea></div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div id="saman-row">
                                <a href="#" class="btn btn-info mb-2" data-toggle="modal"
                                    data-target="#selectProducts">Select Products</a>
                                <table class="table-responsive tfr my_stripe">
                                    <thead>
                                        <tr class="item_header bg-gradient-directional-amber">
                                            <th width="30%" class="text-center">
                                                <?php echo $this->lang->line('Item Name') ?>
                                            </th>
                                            <th width="10%" class="text-center">
                                                <?php echo $this->lang->line('Qty') ?>
                                            </th>
                                            <th width="10%" class="text-center"><?php echo $this->lang->line('Purchase Price') ?>
                                            </th>
                                            <th width="10%" class="text-center"><?php echo $this->lang->line('Retail Price') ?>
                                            </th>
                                            <th width="10%" class="text-center"><?php echo $this->lang->line('Wholesale Price') ?>
                                            </th>
                                            <th width="10%" class="text-center">
                                                <?php echo $this->lang->line('Tax') ?>(%)
                                            </th>
                                            <th width="10%" class="text-center"><?php echo $this->lang->line('Tax') ?>
                                            </th>
                                            <th width="10%" class="text-center">
                                                <?php echo $this->lang->line('Discount') ?>
                                            </th>
                                            <th width="10%" class="text-center">
                                                <?php echo $this->lang->line('Amount') ?>
                                                (<?php echo $this->config->item('currency'); ?>)
                                            </th>
                                            <th width="5%" class="text-center"><?php echo $this->lang->line('Action') ?>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="jquery-tbody" v-show="checkProducts.length == 0">
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control text-center"
                                                name="product_name[]"
                                                placeholder="<?php echo $this->lang->line('Enter Product name') ?>"
                                                id='productname-0'>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control req amnt" name="product_qty[]"
                                                id="amount-0" onkeypress="return isNumber(event)"
                                                onkeyup="rowTotal('0'), billUpyog()" autocomplete="off" value="1">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control req prc" name="product_price[]"
                                                id="price-0" onkeypress="return isNumber(event)"
                                                onkeyup="rowTotal('0'), billUpyog()" autocomplete="off">
                                            </td>
                                            <td><input type="text" class="form-control req prc" name="retail_price[]"
                                                id="retail-price-0" onkeypress="return isNumber(event)"
                                                onkeyup="rowTotal('0'), billUpyog()" autocomplete="off">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control req prc" name="wholesale_price[]"
                                                id="wholesale-price-0" onkeypress="return isNumber(event)"
                                                onkeyup="rowTotal('0'), billUpyog()" autocomplete="off">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control vat " name="product_tax[]"
                                                id="vat-0" onkeypress="return isNumber(event)"
                                                onkeyup="rowTotal('0'), billUpyog()" autocomplete="off">
                                            </td>
                                            <td class="text-center" id="texttaxa-0">0</td>
                                            <td>
                                                <input type="text" class="form-control discount"
                                                name="product_discount[]" onkeypress="return isNumber(event)"
                                                id="discount-0" onkeyup="rowTotal('0'), billUpyog()"
                                                autocomplete="off">
                                            </td>
                                            <td>
                                                <span class="currenty"><?php echo $this->config->item('currency'); ?></span>
                                                <strong><span class='ttlText' id="result-0">0</span></strong></td>
                                            <td class="text-center">

                                            </td>
                                            <input type="hidden" name="taxa[]" id="taxa-0" value="0">
                                            <input type="hidden" name="disca[]" id="disca-0" value="0">
                                            <input type="hidden" class="ttInput" name="product_subtotal[]" id="total-0"
                                                value="0">
                                            <input type="hidden" class="pdIn" name="pid[]" id="pid-0" value="0">
                                            <input type="hidden" name="unit[]" id="unit-0" value=""><input type="hidden"
                                                name="hsn[]" id="hsn-0" value="">
                                        </tr>
                                        <tr>
                                            <td colspan="1">
                                                <p><?php echo $this->lang->line('Want to calculate the prices depend on old profit ratio ?') ?></p>
                                            </td>
                                            <td colspan="1" class="text-center">
                                                <input type="checkbox" id="calculate-prices-0" >
                                            </td>
                                            <td colspan="1">
                                                <input type="text" class="form-control req prc"
                                                id="old-purchase-price-0" onkeypress="return isNumber(event)"
                                                autocomplete="off" disabled>
                                            </td>
                                            <td colspan="1">
                                                <input type="text" class="form-control req prc" 
                                                id="old-retail-price-0" onkeypress="return isNumber(event)"
                                                onkeyup="rowTotal('0'), billUpyog()" autocomplete="off" disabled>
                                            </td>
                                            <td colspan="1">
                                                <input type="text" class="form-control req prc" 
                                                id="old-wholesale-price-0" onkeypress="return isNumber(event)"
                                                onkeyup="rowTotal('0'), billUpyog()" autocomplete="off" disabled>
                                            </td>
                                            <td colspan="5"><textarea id="dpid-0" class="form-control"
                                                    name="product_description[]"
                                                    placeholder="<?php echo $this->lang->line('Enter Product description'); ?>"
                                                    autocomplete="off"></textarea><br>
                                            </td>

                                        </tr>

                                        <tr class="last-item-row">
                                            <td class="add-row">
                                                <button type="button" class="btn btn-success" aria-label="Left Align"
                                                    id="addproduct">
                                                    <i class="fa fa-plus-square"></i>
                                                    <?php echo $this->lang->line('Add Row') ?>
                                                </button>
                                            </td>
                                            <td colspan="7"></td>
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
                                                    onkeypress="return isNumber(event)" placeholder="Value"
                                                    name="shipping" autocomplete="off" onkeyup="billUpyog();" >
                                                ( <?php echo $this->lang->line('Tax') ?>
                                                <?= $this->config->item('currency'); ?>
                                                <span id="ship_final">0</span> )
                                            </td>
                                        </tr>

                                        <tr class="sub_c" style="display: table-row;">
                                            <td colspan="2">
                                                <?php if ($exchange['active'] == 1){
                                            echo $this->lang->line('Payment Currency client') . ' <small>' . $this->lang->line('based on live market') ?></small>
                                                <select name="mcurrency" class="selectpicker form-control">
                                                    <option value="0">Default</option>
                                                    <?php foreach ($currency as $row) {
                                                    echo '<option value="' . $row['id'] . '">' . $row['symbol'] . ' (' . $row['code'] . ')</option>';
                                                } ?>

                                                </select><?php } ?></td>
                                            <td colspan="4" align="right">
                                                <strong><?php echo $this->lang->line('Grand Total') ?>
                                                    (<span
                                                        class="currenty lightMode"><?php echo $this->config->item('currency'); ?></span>)</strong>
                                            </td>
                                            <td align="left" colspan="2"><input type="text" name="total"
                                                    class="form-control" id="invoiceyoghtml" readonly="" value="10">

                                            </td>
                                        </tr>
                                        <tr class="sub_c" style="display: table-row;">
                                            <td colspan="2"><?php echo $this->lang->line('Payment Terms') ?> <select
                                                    name="pterms" class="selectpicker form-control"><?php foreach ($terms as $row) {
                                                    echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
                                                } ?>

                                                </select></td>
                                            <td colspan="2">
                                                <div>
                                                    <label><?php echo $this->lang->line('Update Stock') ?></label>
                                                    <fieldset class="right-radio">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                name="update_stock" id="customRadioRight1" value="yes"
                                                                checked="">
                                                            <label class="custom-control-label"
                                                                for="customRadioRight1"><?php echo $this->lang->line('Yes') ?></label>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="right-radio">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                name="update_stock" id="customRadioRight2" value="no">
                                                            <label class="custom-control-label"
                                                                for="customRadioRight2"><?php echo $this->lang->line('No') ?></label>
                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </td>
                                            <td align="right" colspan="4"><input type="submit"
                                                    class="btn btn-success sub-btn"
                                                    value="<?php echo $this->lang->line('Generate Order') ?>"
                                                    id="submit-data" @click="normalSubmit" data-loading-text="Creating...">

                                            </td>
                                        </tr>

                                    </tbody>
                                    <tbody id="vue-tbody" v-show="checkProducts.length != 0">
                                        <template v-for="(product, key) in checkProducts">
                                        <tr>
                                            <td><input type="text" class="form-control text-center"
                                                    name="product_name[]"
                                                    placeholder="<?php echo $this->lang->line('Enter Product name') ?>"
                                                    :id="'productname-'+key" :value="product.product_name">
                                            </td>
                                            <td><input type="text" class="form-control req amnt" name="product_qty[]"
                                                    :id="'amount-'+key" onkeypress="return isNumber(event)"
                                                    onkeyup="rowTotal('0'), billUpyog()" autocomplete="off" value="1">
                                            </td>
                                            <td><input type="text" class="form-control req prc" name="product_price[]"
                                                    :id="'price-'+key" onkeypress="return isNumber(event)"
                                                    onkeyup="rowTotal('0'), billUpyog()" autocomplete="off" :value="product.fproduct_price"></td>
                                            <td><input type="text" class="form-control vat " name="product_tax[]"
                                                    :id="'vat-'+key" onkeypress="return isNumber(event)"
                                                    onkeyup="rowTotal('0'), billUpyog()" autocomplete="off" :value="product.taxrate"></td>
                                            <td class="text-center" :id="'texttaxa-'+key" v-html="((product.fproduct_price * product.taxrate) / 100).toFixed(2)"></td>
                                            <td><input type="text" class="form-control discount"
                                                    name="product_discount[]" onkeypress="return isNumber(event)"
                                                    :id="'discount-'+key" onkeyup="rowTotal('0'), billUpyog()"
                                                    autocomplete="off" :value="product.disrate"></td>
                                            <td><span
                                                    class="currenty"><?php echo $this->config->item('currency'); ?></span>
                                                <strong><span class='ttlText' :id="'result-'+key" v-html="((((product.fproduct_price * product.taxrate) / 100) + + product.fproduct_price) - (((((product.fproduct_price * product.taxrate) / 100) + + product.fproduct_price) * product.disrate) / 100)).toFixed(2)">0</span></strong></td>
                                            <td class="text-center">

                                            </td>
                                            <input type="hidden" name="taxa[]" :id="'taxa-'+key" :value="((product.fproduct_price * product.taxrate) / 100).toFixed(2)">
                                            <input type="hidden" name="disca[]" :id="'disca-'+key" :value="((((((product.fproduct_price * product.taxrate) / 100) + + product.fproduct_price) * product.disrate) / 100)).toFixed(2)">
                                            <input type="hidden" class="ttInput" name="product_subtotal[]" :id="'total-'+key"
                                                :value="((((product.fproduct_price * product.taxrate) / 100) + + product.fproduct_price) - (((((product.fproduct_price * product.taxrate) / 100) + + product.fproduct_price) * product.disrate) / 100)).toFixed(2)">
                                            <input type="hidden" class="pdIn" name="pid[]" :id="'pid-'+key" :value="product.pid">
                                            <input type="hidden" name="unit[]" :id="'unit-'+key" :value="product.unit"><input type="hidden"
                                                name="hsn[]" :id="'hsn-'+key" :value="product.product_code">
                                        </tr>
                                        <tr>
                                            <td colspan="8"><textarea id="dpid-0" class="form-control"
                                                    name="product_description[]"
                                                    placeholder="<?php echo $this->lang->line('Enter Product description'); ?>"
                                                    autocomplete="off"></textarea><br></td>
                                        </tr>
                                        </template>

                                        <tr class="sub_c" style="display: table-row;">
                                            <td colspan="6" align="right"><input type="hidden" :value="totalAmount" id="subttlform"
                                                    name="subtotal"><strong><?php echo $this->lang->line('Total Tax') ?></strong>
                                            </td>
                                            <td align="left" colspan="2"><span
                                                    class="currenty lightMode"><?php echo $this->config->item('currency'); ?></span>
                                                <span id="taxr" class="lightMode" v-html="totalTax">0</span></td>
                                        </tr>
                                        <tr class="sub_c" style="display: table-row;">
                                            <td colspan="6" align="right">
                                                <strong><?php echo $this->lang->line('Total Discount') ?></strong></td>
                                            <td align="left" colspan="2"><span
                                                    class="currenty lightMode"><?php echo $this->config->item('currency'); ?></span>
                                                <span id="discs" class="lightMode" v-html="totalDiscount">0</span></td>
                                        </tr>

                                        <tr class="sub_c" style="display: table-row;">
                                            <td colspan="6" align="right">
                                                <strong><?php echo $this->lang->line('Shipping') ?></strong></td>
                                            <td align="left" colspan="2"><input type="text" class="form-control shipVal"
                                                    onkeypress="return isNumber(event)" placeholder="Value"
                                                    name="shipping" autocomplete="off" onkeyup="billUpyog();" v-model="shipValue">
                                                ( <?php echo $this->lang->line('Tax') ?>
                                                <?= $this->config->item('currency'); ?>
                                                <span id="ship_final" v-html="shipFinal">0</span> )
                                            </td>
                                        </tr>

                                        <tr class="sub_c" style="display: table-row;">
                                            <td colspan="2">
                                                <?php if ($exchange['active'] == 1){
                                            echo $this->lang->line('Payment Currency client') . ' <small>' . $this->lang->line('based on live market') ?></small>
                                                <select name="mcurrency" class="selectpicker form-control">
                                                    <option value="0">Default</option>
                                                    <?php foreach ($currency as $row) {
                                                    echo '<option value="' . $row['id'] . '">' . $row['symbol'] . ' (' . $row['code'] . ')</option>';
                                                } ?>

                                                </select><?php } ?></td>
                                            <td colspan="4" align="right">
                                                <strong><?php echo $this->lang->line('Grand Total') ?>
                                                    (<span
                                                        class="currenty lightMode"><?php echo $this->config->item('currency'); ?></span>)</strong>
                                            </td>
                                            <td align="left" colspan="2"><input type="text" name="total"
                                                    class="form-control" id="invoiceyoghtml" :value="totalAmount" readonly="">

                                            </td>
                                        </tr>
                                        <tr class="sub_c" style="display: table-row;">
                                            <td colspan="2"><?php echo $this->lang->line('Payment Terms') ?> <select
                                                    name="pterms" class="selectpicker form-control"><?php foreach ($terms as $row) {
                                                    echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
                                                } ?>

                                                </select></td>
                                            <td colspan="2">
                                                <div>
                                                    <label><?php echo $this->lang->line('Update Stock') ?></label>
                                                    <fieldset class="right-radio">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                name="update_stock" id="customRadioRight3" value="yes"
                                                                checked="">
                                                            <label class="custom-control-label"
                                                                for="customRadioRight3"><?php echo $this->lang->line('Yes') ?></label>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="right-radio">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                name="update_stock" id="customRadioRight4" value="no">
                                                            <label class="custom-control-label"
                                                                for="customRadioRight4"><?php echo $this->lang->line('No') ?></label>
                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </td>
                                            <td align="right" colspan="4"><input type="submit"
                                                    class="btn btn-success sub-btn"
                                                    value="<?php echo $this->lang->line('Generate Order') ?>"
                                                    id="submit-data-vue" @click="submit" data-loading-text="Creating...">

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <input type="hidden" value="purchase/action" id="action-url">
                            <input type="hidden" value="puchase_search" id="billtype">
                            <input type="hidden" value="0" name="counter" id="ganak">
                            <input type="hidden" value="<?php echo $this->config->item('currency'); ?>" name="currency">
                            <input type="hidden" value="<?= $taxdetails['handle']; ?>" name="taxformat" id="tax_format">

                            <input type="hidden" value="<?= $taxdetails['format']; ?>" name="tax_handle"
                                id="tax_status">
                            <input type="hidden" value="yes" name="applyDiscount" id="discount_handle">

                            <input type="hidden" value="<?= $this->common->disc_status()['disc_format']; ?>"
                                name="discountFormat" id="discount_format">
                            <input type="hidden"
                                value="<?= amountFormat_general($this->common->disc_status()['ship_rate']); ?>"
                                name="shipRate" id="ship_rate">
                            <input type="hidden" value="<?= $this->common->disc_status()['ship_tax']; ?>"
                                name="ship_taxtype" id="ship_taxtype">
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

                            <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('Add Supplier') ?>
                            </h4>
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
                                    <input type="text" placeholder="Name" class="form-control margin-bottom"
                                        id="mcustomer_name" name="name" required>
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                    for="phone"><?php echo $this->lang->line('Phone') ?></label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="Phone" class="form-control margin-bottom"
                                        name="phone" id="mcustomer_phone">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label" for="email">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" placeholder="Email" class="form-control margin-bottom crequired"
                                        name="email" id="mcustomer_email">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                    for="address"><?php echo $this->lang->line('Address') ?></label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="Address" class="form-control margin-bottom "
                                        name="address" id="mcustomer_address1">
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-4">
                                    <input type="text" placeholder="City" class="form-control margin-bottom" name="city"
                                        id="mcustomer_city">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" placeholder="Region" class="form-control margin-bottom"
                                        name="region">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" placeholder="Country" class="form-control margin-bottom"
                                        name="country" id="mcustomer_country">
                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-sm-6">
                                    <input type="text" placeholder="PostBox" class="form-control margin-bottom"
                                        name="postbox">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="TAX ID" class="form-control margin-bottom"
                                        name="taxid" id="tax_id">
                                </div>
                            </div>

                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                data-dismiss="modal"><?php echo $this->lang->line('Close') ?></button>
                            <input type="submit" id="msupplier_add" class="btn btn-primary submitBtn"
                                value="<?php echo $this->lang->line('ADD') ?>" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="selectProducts" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="post" action.prevent="" class="form-horizontal">
                        <!-- Modal Header -->
                        <div class="modal-header bg-gradient-directional-info white">

                            <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('Select Products') ?></h4>
                            <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('Select Products2') ?></h4>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only"><?php echo $this->lang->line('Close') ?></span>
                            </button>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <p id="statusMsg"></p><input type="hidden" name="mcustomer_id" id="mcustomer_id" value="0">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="product_cat"
                                        class="caption"><?php echo $this->lang->line('Category') ?></label>
                                    <select v-model="category" @change="categoryChange" class="form-control" id="product_cat">
                                        <option value="0">All</option>
                                        <?php
                                            foreach ($cat as $row) {
                                                $cid = $row['id'];
                                                $title = $row['title'];
                                                echo "<option value='$cid'>$title</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sub_cat"
                                        class="caption"><?php echo $this->lang->line('Sub') ?><?php echo $this->lang->line('Category') ?></label>
                                    <select id="sub_cat" name="sub_cat" v-on:change="fetch" v-model='sub_cat' v-select='sub_cat' class="form-control required select-box">

                                    </select>
                                </div>
                            </div>

                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="form-checkbox">
                                                <input type="checkbox" v-model="selectAll" @click="select">
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
                                <tbody>
                                    <tr v-for="product in products" :key="product.pid">
                                        <th scope="row"><input type="checkbox" v-model="checkProducts"
                                                :value="product"></th>
                                        <td v-html="product.product_name"></td>
                                        <td v-html="product.category_title"></td>
                                        <td v-html="product.sub_cat_title"></td>
                                        <td v-html="product.warehouse_title"></td>
                                        <td v-html="Math.round(product.qty)"></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                data-dismiss="modal" @click="emptySelect"><?php echo $this->lang->line('Close') ?></button>
                            <input type="submit" class="btn btn-primary"
                            data-dismiss="modal" value="<?php echo $this->lang->line('ADD') ?>" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/vue"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.min.js"></script>
    <script>
        Vue.directive('select', {
        twoWay: true,
        bind: function (el, binding, vnode) {
            $(el).select2().on("select2:select", (e) => {
            // v-model looks for
            //  - an event named "change"
            //  - a value with property path "$event.target.value"
            el.dispatchEvent(new Event('change', { target: e.target }));
            });
        },
        });
        const app = new Vue({
            el: '#purchase',
            data: {
                products: [],
                checkProducts: [],
                selectAll: false,
                sub_cat: 0,
                category: 0,
                shipValue: 0,
            },
            computed: {
                totalAmount: function () {
                    var sum = 0;
                    this.checkProducts.forEach(e => {
                        total = ((((e.fproduct_price * e.taxrate) / 100) + + e.fproduct_price) - (((((e.fproduct_price * e.taxrate) / 100) + + e.fproduct_price) * e.disrate) / 100)).toFixed(2)
                        sum = sum + + total;
                    });
                    sum = sum + + this.shipValue
                    return sum.toFixed(2)
                },
                totalTax: function () {
                    var tax = 0;
                    this.checkProducts.forEach(e => {
                        totalTax = ((e.fproduct_price * e.taxrate) / 100).toFixed(2)
                        tax = tax + + totalTax;
                    });
                    return tax.toFixed(2)
                },
                totalDiscount: function () {
                    var discount = 0;
                    this.checkProducts.forEach(e => {
                        totalDicsount = ((((((e.fproduct_price * e.taxrate) / 100) + + e.fproduct_price) * e.disrate) / 100)).toFixed(2)
                        discount = discount + + totalDicsount;
                    });
                    return discount.toFixed(2) 
                },
                shipFinal: function () {
                    var tax_status = $("#ship_taxtype").val();
                    var ship_rate = $("#ship_rate").val();
                    var shipFinal = 0;
                    if (tax_status == 'excl') {
                        shipFinal = ((ship_rate * this.shipValue) / 100)

                    } else if (tax_status == 'incl') {
                        
                        shipFinal = ((ship_rate * this.shipValue) / (100 + + ship_rate))

                    }
                    return shipFinal.toFixed(2)
                }
            },
            mounted() {
                this.fetch()
            },
            methods: {
                emptySelect() {
                    this.checkProducts = []
                },
                select() {
                    this.checkProducts = [];
                    if (!this.selectAll) {
                        for (let i in this.products) {
                            this.checkProducts.push(this.products[i]);
                        }
                    }
                },
                fetch() {
                    var self = this;
                    $.ajax({
                        url: baseurl + 'purchase/product_fetching?category=' + self.category + '&sub_cat=' + self.sub_cat,
                        method: "POST",
                        data: function () {
                            return {
                                '<?=$this->security->get_csrf_token_name()?>': crsf_hash
                            };
                        },
                        success: function (response) {
                            self.products = JSON.parse(response)
                        }
                    })
                },
                categoryChange() {
                    this.sub_cat = 0
                    this.fetch()
                },
                submit() {
                    $('#jquery-tbody').empty()
                },
                normalSubmit() {
                    $('#vue-tbody').empty()
                }
            }
        })

    </script>
    <script>
        $("#sub_cat").select2();
        $(".select2-container--default").width('100%');
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
        //universal create
        $("#submit-data-vue").on("click", function (e) {
                        e.preventDefault();
                        var o_data = $("#data_form").serialize();
                        var action_url = $('#action-url').val();
                        addObject(o_data, action_url);
                    });
        

                    function addObject(action, action_url) {
                        var errorNum = farmCheck();
                        var $btn;
                        if ($("#notify").length == 0) {
                            $("#c_body").html('<div id="notify" class="alert" style="display:none;"><a href="#" class="close" data-dismiss="alert">&times;</a><div class="message"></div></div>');
                        }
                        if (errorNum > 0) {
                            $("#notify").removeClass("alert-success").addClass("alert-warning").fadeIn();
                            $("#notify .message").html("<strong>Error</strong>: It appears you have forgotten to complete something!");
                            $("html, body").scrollTop($("body").offset().top);
                        } else {
                            jQuery.ajax({
                                url: baseurl + action_url,
                                type: 'POST',
                                data: action + '&' + crsf_token + '=' + crsf_hash,
                                dataType: 'json',
                                success: function (data) {

                                    if (data.status == "Success") {
                                        $("#notify .message").html("<strong>" + data.status + "</strong>: " + data.message);
                                        $("#notify").removeClass("alert-danger").addClass("alert-success").fadeIn();
                                        $("html, body").scrollTop($("body").offset().top);
                                        $("#data_form").remove();
                                    } else {
                                        $("#notify .message").html("<strong>" + data.status + "</strong>: " + data.message);
                                        $("#notify").removeClass("alert-success").addClass("alert-danger").fadeIn();
                                        $("html, body").scrollTop($("body").offset().top);
                                    }
                                },
                                error: function (data) {
                                    $("#notify .message").html("<strong>" + data.status + "</strong>: " + data.message);
                                    $("#notify").removeClass("alert-success").addClass("alert-warning").fadeIn();
                                    $("html, body").scrollTop($("body").offset().top);
                                }
                            });
                        }
                    }

    </script>