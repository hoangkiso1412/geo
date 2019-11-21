var billtype = $('#billtype').val();
var d_csrf = crsf_token + '=' + crsf_hash;

//caculations
var precentCalc = function (total, percentageVal) {
    var pr = (total / 100) * percentageVal;
    return parseFloat(pr);
};
//format


var rowTotal = function (numb) {
    //most res
    var result;
    var page = '';
    var totalValue = 0;
    var amountVal = accounting.unformat($("#amount-" + numb).val(), accounting.settings.number.decimal);
    var priceVal = accounting.unformat($("#price-" + numb).val(), accounting.settings.number.decimal);
    var discountVal = accounting.unformat($("#discount-" + numb).val(), accounting.settings.number.decimal);
    var vatVal = accounting.unformat($("#vat-" + numb).val(), accounting.settings.number.decimal);
    var taxo = 0;
    var disco = 0;
    var totalPrice = amountVal.toFixed(two_fixed) * priceVal;
    var tax_status = $("#taxformat option:selected").val();
    var disFormat = $("#discount_format").val();
    if ($("#inv_page").val() == 'new_i' && formInputGet("#pid", numb) > 0) {
        var alertVal = accounting.unformat($("#alert-" + numb).val(), accounting.settings.number.decimal);
        if (alertVal <= +amountVal) {
            var aqt = alertVal - amountVal;
            alert('Low Stock! ' + accounting.formatNumber(aqt));
        }
    }
    //tax after bill
    if (tax_status == 'yes') {
        if (disFormat == '%' || disFormat == 'flat') {
            //tax
            var Inpercentage = precentCalc(totalPrice, vatVal);
            totalValue = totalPrice + Inpercentage;
            taxo = accounting.formatNumber(Inpercentage);
            if (disFormat == 'flat') {
                disco = accounting.formatNumber(discountVal);
                totalValue = totalValue - discountVal;
            } else if (disFormat == '%') {
                var discount = precentCalc(totalValue, discountVal);
                totalValue = totalValue - discount;
                disco = accounting.formatNumber(discount);
            }
        } else {
            //before tax
            if (disFormat == 'bflat') {
                disco = accounting.formatNumber(discountVal);
                totalValue = totalPrice - discountVal;
            } else if (disFormat == 'b_p') {
                var discount = precentCalc(totalPrice, discountVal);
                totalValue = totalPrice - discount;
                disco = accounting.formatNumber(discount);
            }

            //tax
            var Inpercentage = precentCalc(totalValue, vatVal);
            totalValue = totalValue + Inpercentage;
            taxo = accounting.formatNumber(Inpercentage);
        }
    } else if (tax_status == 'inclusive') {
        if (disFormat == '%' || disFormat == 'flat') {
            //tax
            var Inpercentage = (totalPrice * vatVal) / (100 + vatVal);
            totalValue = totalPrice;
            taxo = accounting.formatNumber(Inpercentage);
            if (disFormat == 'flat') {
                disco = accounting.formatNumber(discountVal);
                totalValue = totalValue - discountVal;
            } else if (disFormat == '%') {
                var discount = precentCalc(totalValue, discountVal);
                totalValue = totalValue - discount;
                disco = accounting.formatNumber(discount);
            }
        } else {
            //before tax
            if (disFormat == 'bflat') {
                disco = accounting.formatNumber(discountVal);
                totalValue = totalPrice - discountVal;
            } else if (disFormat == 'b_p') {
                var discount = precentCalc(totalPrice, discountVal);
                totalValue = totalPrice - discount;
                disco = accounting.formatNumber(discount);
            }
            //tax
            var Inpercentage = (totalPrice * vatVal) / (100 + vatVal);
            totalValue = totalValue;
            taxo = accounting.formatNumber(Inpercentage);
        }
    } else {
        taxo = 0;
        if (disFormat == '%' || disFormat == 'flat') {
            if (disFormat == 'flat') {
                disco = accounting.formatNumber(discountVal);
                totalValue = totalPrice - discountVal;
            } else if (disFormat == '%') {
                var discount = precentCalc(totalPrice, discountVal);
                totalValue = totalPrice - discount;
                disco = accounting.formatNumber(discount);
            }

        } else {
            //before tax
            if (disFormat == 'bflat') {
                disco = accounting.formatNumber(discountVal);
                totalValue = totalPrice - discountVal;
            } else if (disFormat == 'b_p') {
                var discount = precentCalc(totalPrice, discountVal);
                totalValue = totalPrice - discount;
                disco = accounting.formatNumber(discount);
            }
        }
    }
    $("#result-" + numb).html(accounting.formatNumber(totalValue));
    $("#taxa-" + numb).val(taxo);
    $("#texttaxa-" + numb).text(taxo);
    $("#disca-" + numb).val(disco);
    $("#total-" + numb).val(accounting.formatNumber(totalValue));
    samanYog();
};



$(document).on('click', ".select_pos_item", function (e) {
    var pid = $(this).attr('data-pid');
    var stock = accounting.unformat($(this).attr('data-stock'), accounting.settings.number.decimal);
    var flag = true;
    var discount = $(this).attr('data-discount');
    var custom_discount = accounting.unformat($('#custom_discount').val(), accounting.settings.number.decimal);
    if (custom_discount > 0) discount = accounting.formatNumber(custom_discount);

    $('.pdIn').each(function () {
        if (pid == $(this).val()) {

            var pi = $(this).attr('id');
            var arr = pi.split('-');
            pi = arr[1];
            $('#discount-' + pi).val(discount);
            var stotal = accounting.unformat($('#amount-' + pi).val(), accounting.settings.number.decimal) + 1;

            if (stotal <= stock) {
                $('#amount-' + pi).val(accounting.formatNumber(stotal));
                $('#search_bar').val('').focus();
            } else {
                $('#stock_alert').modal('toggle');
            }
            rowTotal(pi);
            billUpyog();
            $('#amount-' + pi).focus();
            flag = false;
        }
    });
    var t_r = $(this).attr('data-tax');
    if ($("#taxformat option:selected").attr('data-trate')) {

        var t_r = $("#taxformat option:selected").attr('data-trate');
    }
    if (flag) {
        var ganak = $('#ganak').val();
        var cvalue = parseInt(ganak);
        var functionNum = "'" + cvalue + "'";
        count = $('#saman-row div').length;
        var data = '<tr id="ppid-' + cvalue + '" class="mb-1"><td colspan="7" ><input type="text" class="form-control text-center p-mobile" name="product_name[]" placeholder="Enter Product name or Code" id="productname-' + cvalue + '" value="' + $(this).attr('data-name') + '-' + $(this).attr('data-pcode') + '"><input type="hidden" id="alert-' + cvalue + '" value="' + $(this).attr('data-stock') + '"  name="alert[]"></td></tr><tr><td><input type="text" class="form-control p-mobile req amnt" name="product_qty[]" id="amount-' + cvalue + '" onkeypress="return isNumber(event)" onkeyup="rowTotal(' + functionNum + '), billUpyog()" autocomplete="off" value="1" ></td> <td><input type="text" class="form-control p-mobile req prc" name="product_price[]" id="price-' + cvalue + '" onkeypress="return isNumber(event)" onkeyup="rowTotal(' + functionNum + '), billUpyog()" autocomplete="off"  value="' + ($('#customer_wholesale').val() == 1 ? $(this).attr('data-wholesale') : $(this).attr('data-price')) + '"></td><td> <input type="text" class="form-control p-mobile vat" name="product_tax[]" id="vat-' + cvalue + '" onkeypress="return isNumber(event)" onkeyup="rowTotal(' + functionNum + '), billUpyog()" autocomplete="off"  value="' + t_r + '"></td>  <td><input type="text" class="form-control p-mobile discount pos_w" name="product_discount[]" onkeypress="return isNumber(event)" id="discount-' + cvalue + '" onkeyup="rowTotal(' + functionNum + '), billUpyog()" autocomplete="off"  value="' + discount + '"></td> <td><span class="currenty">' + currency + '</span> <strong><span class=\'ttlText\' id="result-' + cvalue + '">0</span></strong></td> <td class="text-center"><input type="checkbox" class="form-control p-mobile pay pos_w" name="pay[]" checked onkeypress="return isNumber(event)" date-role="paycheckbok" id="pay-' + cvalue + '" autocomplete="off"></td> <td class="text-center"><button type="button" data-rowid="' + cvalue + '" class="btn btn-danger removeItem" title="Remove" > <i class="fa fa-minus-square"></i> </button> </td><input type="hidden" name="taxa[]" id="taxa-' + cvalue + '" value="0"><input type="hidden" name="disca[]" id="disca-' + cvalue + '" value="0"><input type="hidden" class="ttInput" name="product_subtotal[]" id="total-' + cvalue + '" value="0"> <input type="hidden" class="pdIn" name="pid[]" id="pid-' + cvalue + '" value="' + $(this).attr('data-pid') + '"> <input type="hidden" name="unit[]" id="unit-' + cvalue + '" value="' + $(this).attr('data-unit') + '"> <input type="hidden" name="hsn[]" id="hsn-' + cvalue + '" value="' + $(this).attr('data-pcode') + '"><tr id="bundle-group-' + cvalue + '"></tr></tr>';


        var product_image = '<div class=" text-center"><img class="round" id="popup_product_image" src="'+$(this).attr('data-image')+'"  style="max-height: 100%;max-width: 100%"> </div>';



        //ajax request
        $('#basicPay #popup_main_title').empty();
        $('#basicPay #popup_main_title').append( $(this).attr('data-name') );

        $('#basicPay #product-inner').empty();
        $('#basicPay #product-inner').append(product_image);

        document.getElementById('popup_product_name').value = $(this).attr('data-name');
        document.getElementById('popup_product_price').value = $(this).attr('data-price');
        document.getElementById('popup_product_wholesale').value = $(this).attr('data-wholesale');
        document.getElementById('popup_product_stock').value = $(this).attr('data-stock');
        document.getElementById('popup_product_url').setAttribute("href", $(this).attr('data-url') );


        rowTotal(cvalue);
        billUpyog();
        $('#ganak').val(cvalue + 1);
        $('#amount-' + cvalue).focus();
    }
});


