<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5><?php echo $this->lang->line('Edit Customer Details') ?></h5>

            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <form method="post" id="data_form" class="form-horizontal">
                <div class="row">

                    <div class="col-md-6">
                        <h5><?php echo $this->lang->line('Billing Address') ?></h5>
                        <input type="hidden" name="id" value="<?php echo $customer['id'] ?>">


                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="product_name"><?php echo $this->lang->line('Name') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Name"
                                       class="form-control margin-bottom required" name="name"
                                       value="<?php echo $customer['name'] ?>" id="mcustomer_name">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="product_name"><?php echo $this->lang->line('Company') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Company"
                                       class="form-control margin-bottom" name="company"
                                       value="<?php echo $customer['company'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="phone"><?php echo $this->lang->line('Phone') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="phone"
                                       class="form-control margin-bottom  required" name="phone"
                                       value="<?php echo $customer['phone'] ?>" id="mcustomer_phone">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label" for="email">Email</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="email"
                                       class="form-control margin-bottom required" name="email"
                                       value="<?php echo $customer['email'] ?>" id="mcustomer_email">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="product_name"><?php echo $this->lang->line('Address') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="address"
                                       class="form-control margin-bottom" name="address"
                                       value="<?php echo $customer['address'] ?>" id="mcustomer_address1">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="city"><?php echo $this->lang->line('City') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="city"
                                       class="form-control margin-bottom" name="city"
                                       value="<?php echo $customer['city'] ?>" id="mcustomer_city">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="region"><?php echo $this->lang->line('Region') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="region"
                                       class="form-control margin-bottom" name="region"
                                       value="<?php echo $customer['region'] ?>" id="region">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="country"><?php echo $this->lang->line('Country') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Country"
                                       class="form-control margin-bottom" name="country"
                                       value="<?php echo $customer['country'] ?>" id="mcustomer_country">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="postbox"><?php echo $this->lang->line('PostBox') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="region"
                                       class="form-control margin-bottom" name="postbox"
                                       value="<?php echo $customer['postbox'] ?>" id="postbox">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="postbox"><?php echo $this->lang->line('Tax') ?> ID</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="TAX ID"
                                       class="form-control margin-bottom" name="taxid"
                                       value="<?php echo $customer['taxid'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="postbox"><?php echo $this->lang->line('Document') ?> ID</label>

                            <div class="col-sm-6">
                                <input type="text" placeholder="Document ID"
                                       class="form-control margin-bottom b_input" name="docid"
                                       value="<?php echo $customer['docid'] ?>">
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label"
                                                           for="postbox"><?php echo $this->lang->line('Extra') ?> </label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Custom Field"
                                       class="form-control margin-bottom b_input" name="c_field"
                                       value="<?php echo $customer['custom1'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="customergroup"><?php echo $this->lang->line('Customer group') ?></label>

                            <div class="col-sm-6">
                                <select name="customergroup" class="form-control">
                                    <?php
                                    echo '<option value="' . $customergroup['id'] . '">' . $customergroup['title'] . ' (S)</option>';
                                    foreach ($customergrouplist as $row) {
                                        $cid = $row['id'];
                                        $title = $row['title'];
                                        echo "<option value='$cid'>$title</option>";
                                    }
                                    ?>
                                </select>


                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="customergroup">Language</label>
                            <div class="col-sm-6">
                                <select name="language" class="form-control b_input">
                                    <?php
                                    echo '<option value="' . $customer['lang'] . '">-' . ucfirst($customer['lang']) . '-</option>';
                                    echo $langs;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row"><label class="col-sm-2 col-form-label"
                                                           for="Discount"><?php echo $this->lang->line('Discount') ?> </label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Custom Discount"
                                       class="form-control margin-bottom b_input" name="discount"
                                       value="<?php echo $customer['discount_c'] ?>">
                            </div>
                        </div>

                        <?php
                        foreach ($custom_fields as $row) {
                            if ($row['f_type'] == 'text') { ?>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label" for="docid"><?= $row['name'] ?></label>

                            <div class="col-sm-6">
                                <input type="text" placeholder="<?= $row['placeholder'] ?>"
                                    class="form-control margin-bottom b_input <?= $row['other'] ?>"
                                    name="custom[<?= $row['id'] ?>]" value="<?= $row['data'] ?>">
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
                            <div class="form-group row"><label
                                    class="col-sm-2 col-form-label"><?= $row['name'] ?></label>
                                <div class="col-sm-6">
                                    <div id="progress-<?php echo $row['id'] ?>" class="progress">
                                        <div class="progress-bar progress-bar-success"></div>
                                    </div>
                                    <!-- The container for the uploaded files -->
                                    <table id="files-<?php echo $row['id'] ?>" class="files"></table>
                                    <br>
                                    <span class="btn btn-success fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Select files...</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input id="fileupload-<?php echo $row['id'] ?>" type="file" name="files[]">
                                        <img  class="image_display" src="<?php echo base_url() ?>userfiles/custom_images/<?php $row['data'] ?>" alt="">
                                    </span>
                                    <br>
                                    <pre>Allowed: gif, jpeg, png (Use light small weight images for fast loading - 200x200)</pre>
                                    <br>
                                    <!-- The global progress bar -->
                                    <input type="hidden" name="custom[<?= $row['id'] ?>]" id="image-<?php echo $row['id'] ?>" value="default.png">
                                </div>
                            </div>
                            <?php } else if ($row['f_type'] == 'images')  { ?>
                                <div class="form-group row"><label
                                        class="col-sm-2 col-form-label"><?= $row['name'] ?></label>
                                    <div class="col-sm-6">
                                        <input type="file" name="files" id="files-<?php echo $row['id'] ?>" multiple />
                                        <?php foreach (json_decode($row['data']) as $image) { ?>
                                            <img class="images_display" src="<?php echo base_url() ?>userfiles/custom_images/<?php echo $image ?>" width="200px" alt="">
                                        <?php } ?>
                                        <div id="uploaded_images" class="row"></div>
                                    </div>
                                </div>
                            <?php }
                            }
                            ?>
                    </div>

                    <div class="col-md-6">
                        <h5><?php echo $this->lang->line('Shipping Address') ?></h5>
                        <div class="form-group row">

                            <div class="input-group mt-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customer1"
                                           id="copy_address">
                                    <label class="custom-control-label"
                                           for="copy_address"><?php echo $this->lang->line('Same As Billing') ?></label>
                                </div>

                            </div>

                            <div class="col-sm-10">
                                <?php echo $this->lang->line("leave Shipping Address") ?>
                            </div>
                        </div>

                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="product_name"><?php echo $this->lang->line('Name') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Name"
                                       class="form-control margin-bottom" name="name_s"
                                       value="<?php echo $customer['name_s'] ?>" id="mcustomer_name_s">
                            </div>
                        </div>


                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="phone"><?php echo $this->lang->line('Phone') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="phone"
                                       class="form-control margin-bottom" name="phone_s"
                                       value="<?php echo $customer['phone_s'] ?>" id="mcustomer_phone_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label" for="email">Email</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="email"
                                       class="form-control margin-bottom" name="email_s"
                                       value="<?php echo $customer['email_s'] ?>" id="mcustomer_email_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="product_name"><?php echo $this->lang->line('Address') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="address"
                                       class="form-control margin-bottom" name="address_s"
                                       value="<?php echo $customer['address_s'] ?>" id="mcustomer_address1_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="city"><?php echo $this->lang->line('City') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="city"
                                       class="form-control margin-bottom" name="city_s"
                                       value="<?php echo $customer['city_s'] ?>" id="mcustomer_city_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="region"><?php echo $this->lang->line('Region') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="region"
                                       class="form-control margin-bottom" name="region_s"
                                       value="<?php echo $customer['region_s'] ?>" id="region_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="country"><?php echo $this->lang->line('Country') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Country"
                                       class="form-control margin-bottom" name="country_s"
                                       value="<?php echo $customer['country_s'] ?>" id="mcustomer_country_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="postbox"><?php echo $this->lang->line('PostBox') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="region"
                                       class="form-control margin-bottom" name="postbox_s"
                                       value="<?php echo $customer['postbox_s'] ?>" id="postbox_s">
                            </div>
                        </div>


                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                               value="Update customer" data-loading-text="Updating...">
                        <input type="hidden" value="customers/editcustomer" id="action-url">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo assets_url('assets/myjs/jquery.ui.widget.js'); ?>"></script>
<script src="<?php echo assets_url('assets/myjs/jquery.fileupload.js') ?>"></script>
<script>
<?php foreach ($custom_fields as $row) { ?>
    /*jslint unparam: true */
    /*global window, $ */
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = '<?php echo base_url() ?>products/file_handling';
        $('#fileupload-<?php echo $row['id'] ?>').fileupload({
                url: url,
                dataType: 'json',
                formData: {
                    '<?=$this->security->get_csrf_token_name()?>': crsf_hash
                },
                done: function (e, data) {
                    var img = 'default.png';
                    console.log(data.result.files)
                    $.each(data.result.files, function (index, file) {
                        $('#files-<?php echo $row['id'] ?>').html(
                            '<tr><td><a data-url="<?php echo base_url() ?>products/file_handling?op=delete&name=' +
                            file.name +
                            '" class="aj_delete"><i class="btn-danger btn-sm icon-trash-a"></i> ' +
                            file.name +
                            ' </a><img style="max-height:200px;" src="<?php echo base_url() ?>userfiles/product/' +
                            file.name + '"></td></tr>');
                        img = file.name;
                    });

                    $('#image-<?php echo $row['id'] ?>').val(img);
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress-<?php echo $row['id'] ?> .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
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
                url: baseurl + 'customers/upload_images?id=<?php echo $row['id'] ?>',
                method:"POST",
                data: form_data,
                contentType:false,
                cache:false,
                processData:false,
                beforeSend:function() {
                    $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
                },
                success:function(data) {
                    $('#uploaded_images').html(data);
                    $('.images_display').remove();
                }
            })
        } else {
            alert(error);
        }
    });
<?php } ?>
</script>
