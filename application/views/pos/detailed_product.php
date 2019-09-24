<form method="post" id="data_form">
    <div class="row ">

        <div class="col-md-12 card  order-sm-first  order-md-2 border-amber bg-lighten-1 bg-faded round pt-1">


            <div class="row border-bottom-grey-blue  border-bottom-lighten-4">


                <div class="col-md-3 pb-1">
                    <input type="text" class="form-control text-center round mousetrap"
                           name="product_barcode"
                           placeholder="Enter Product name, scan barcode " id="search_bar"
                           autocomplete="off" autofocus="autofocus">
                </div>
                <div class="col-md-3  grey text-xs-center"><select
                            id="categories"
                            class="form-control round teal">
                        <option value="0"><?php echo $this->lang->line('All') ?></option><?php
                        foreach ($cat as $row) {
                            $cid = $row['id'];
                            $title = $row['title'];
                            echo "<option value='$cid'>$title</option>";
                        }
                        ?>
                    </select></div>
                <div class="col-md-3  grey text-xs-center"><select
                            id="warehouses"
                            class="form-control round teal">
                        <option value="0"><?php echo $this->lang->line('All') ?></option><?php
                        foreach ($warehouse as $row) {
                            $cid = $row['id'];
                            $title = $row['title'];
                            echo "<option value='$cid'>$title</option>";
                        }
                        ?>
                    </select></div>
                <div class="col-md-3  grey text-xs-center"><select
                            id="product_status"
                            class="form-control round teal">
                        <option value="0"><?php echo $this->lang->line('All') ?></option>
                        <option value="1"><?php echo $this->lang->line('New') ?></option>
                        <option value="2"><?php echo $this->lang->line('Used') ?></option>
                </select></div>



            </div>


            <div class="row">
                <div class="col-md-12 pt-0" id="pos_item">
                    <!-- pos items -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <input type="hidden" value="pos_invoices/action" id="action-url">
    <input type="hidden" value="search" id="billtype">
    <input type="hidden" value="0" name="counter" id="ganak">
    <input type="hidden" value="<?php echo $this->config->item('currency'); ?>" name="currency">
    <input type="hidden" value="<?= $taxdetails['handle']; ?>" name="taxformat" id="tax_format">
    <input type="hidden" value="<?= $taxdetails['format']; ?>" name="tax_handle" id="tax_status">
    <input type="hidden" value="yes" name="applyDiscount" id="discount_handle">
    <input type="hidden" value="<?= $this->common->disc_status()['disc_format']; ?>" name="discountFormat"
           id="discount_format">
    <input type="hidden" value="<?= amountFormat_general($this->common->disc_status()['ship_rate']); ?>" name="shipRate"
           id="ship_rate">
    <input type="hidden" value="<?= $this->common->disc_status()['ship_tax']; ?>" name="ship_taxtype"
           id="ship_taxtype">
    <input type="hidden" value="0" name="ship_tax" id="ship_tax">
</form>

<div id="shortkeyboard" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">ShortCuts</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <td>Alt+X</td>
                        <td>Focus to products search</td>
                    </tr>
                    <tr>
                        <td>Alt+C</td>
                        <td>Focus to customer search</td>
                    </tr>

                    <tr>
                        <td>Alt+S (twice)</td>
                        <td>PayNow + Thermal Print</td>
                    </tr>
                    <tr>
                        <td>Alt+Z</td>
                        <td>Make Card Payment</td>
                    </tr>
                    <tr>
                        <td>Alt+Q</td>
                        <td>Select First product</td>
                    </tr>
                    <tr>
                        <td>Alt+N</td>
                        <td>Create New Invoice</td>
                    </tr>


                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


   





<script type="text/javascript">
    $.ajax({
        url: baseurl + 'search_products/detailed_product_search',
        dataType: 'html',
        method: 'POST',
        data: 'cid=' + $('#categories').val() + '&wid=' + $('#warehouses option:selected').val() + '&' + crsf_token + '=' + crsf_hash + '&status=' + $('#product_status').val(),
        success: function (data) {
            $('#pos_item').html(data);
        }
    });




                $(document).on('click', ".view-object", function (e) {
                    e.preventDefault();
                    $('#view-object-id').val($(this).attr('data-object-id'));

                    $('#view_model').modal({backdrop: 'static', keyboard: false});

                    var actionurl = $('#view-action-url').val();
                    $.ajax({
                        url: baseurl + actionurl,
                        data: 'id=' + $('#view-object-id').val() + '&' + crsf_token + '=' + crsf_hash,
                        type: 'POST',
                        dataType: 'html',
                        success: function (data) {
                            $('#view_object').html(data);

                        }

                    });

                });



</script>





        <div id="view_model" class="modal  fade">

            <div class="modal-dialog modal-lg">
                <div class="modal-content ">

                    <div class="modal-header">

                        <h4 class="modal-title"><?php echo $this->lang->line('View') ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" id="view_object">
                        <p></p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="view-object-id" value="">
                        <input type="hidden" id="view-action-url" value="detailed_products/view_over">

                        <button type="button" data-dismiss="modal"
                                class="btn"><?php echo $this->lang->line('Close') ?></button>
                    </div>
                </div>
            </div>
        </div>



<div id="FileViewermyModal" class="FileViewer">

        <!-- The Close Button -->
        <span class="FileViewerClose" style=" font-size:20pt;">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="FileViewer-content" id="imageToView" class="img-responsive"
            style="max-width: 800px; max-height800px">
        <iframe _ngcontent-c9="" height="60%" width="60%" style="margin: auto" id="FileViewerIframe"
            style='display:none'>
        </iframe>
        <!-- Modal Caption (Image Text) -->

 </div>
<!-- BEGIN VENDOR JS-->

<!-- Vendor libraries -->














<script src="<?php echo assets_url(); ?>assets/myjs/jquery-ui.js"></script>
<script type="text/javascript">var dtformat = $('#hdata').attr('data-df');
    var currency = $('#hdata').attr('data-curr');
    ;</script>
<script src="<?php echo assets_url('assets/myjs/detailed_products.js') . APPVER; ?>"></script>
<script src="<?php echo assets_url('assets/myjs/detailed_products_control.js') . APPVER; ?>"></script>




<script type="text/javascript">

    $("#view_model .modal-body").on('click','img',function(){

	const modal = document.getElementById('FileViewermyModal') ;

	    const modalImg = document.getElementById('imageToView');
	    const modalIFrame = document.getElementById(
	      'FileViewerIframe'
	    );

	    modal.style.display = 'block';
	    modalIFrame.style.display = 'none';
	    modalImg.style.display = 'block';
	    modalImg.setAttribute('src', $(this).attr('src'));

	    const span = document.getElementsByClassName(
	      'FileViewerClose'
	    )[0] ;

	    span.onclick = function() {
	      modal.style.display = 'none';
	    };
	    modal.onclick = function() {
	      modal.style.display = 'none';
	    };
	    modalImg.onclick = function(event) {
	      event.stopPropagation();
	    };

    });

</script>


</body>
</html>


