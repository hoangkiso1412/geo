<?php 
    //  pre();
?>
<style>
.oooonly {
  background-color: #ddd;
  border-color: #a8a8a8;
}
</style>
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5><?php echo $this->lang->line('Create Transfer') ?></h5>
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
                    <input type="hidden" name="act" value="add_product">
                    <table class="table table-striped table-bordered" id='data-table'>
                            <tr>
                                <td colspan="5"><strong><?php echo $this->lang->line('Product') ?></strong></td>
                                <td colspan="1">
                                    <strong><?php echo $this->lang->line('From') ?></strong>
                                    <select id="from" name="from" required class="form-control">
                                        <option value='0'><?php echo $this->lang->line('Select') ?></option>
                                        <?php
                                        foreach ($warehouse as $row) {
                                            $cid = $row['id'];
                                            $title = $row['title'];
                                            $loc =  $row['cname'] != NULL ? $row['cname'] : 'Main Location';
                                            echo "<option value='$cid'>$title - $loc</option>";
                                        }
                                        ?>
                                    </select>
                                    <input type="text" name="from_value" id="from_value" style="display:none">
                                </td>
                                <td colspan="1">
                                    <strong><?php echo $this->lang->line('To') ?></strong>
                                    <select id="to" name="to" required class="form-control">
                                        <option value='0'><?php echo $this->lang->line('Select') ?></option>
                                        <?php
                                        foreach ($warehouse as $row) {
                                            $cid = $row['id'];
                                            $title = $row['title'];
                                            echo "<option value='$cid'>$title - $loc</option>";
                                        }
                                        ?>
                                    </select>
                                    <input type="text" name="to_value" id="to_value" style="display:none">
                                </td>
                                <td>
                                    <button id="get_products" type="button" class="btn btn-blue margin-bottom pull-right  " ><?php echo $this->lang->line('Get Products') ?></button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $this->lang->line('Product Name') ?></strong></td>
                                <td><strong><?php echo $this->lang->line('Code') ?></strong></td>
                                <td><strong><?php echo $this->lang->line('Cat') ?></strong></td>
                                <td><strong><?php echo $this->lang->line('Sub Cat') ?></strong></td>
                                <td><strong><?php echo $this->lang->line('Transfered Qty') ?></strong></td>
                                <td><strong><?php echo $this->lang->line('Current warehouse Stock') ?></strong></td>
                                <td><strong><?php echo $this->lang->line('Distination warehouse Stock') ?></strong></td>
                            </tr>
                    </table>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button id="remove-0" type="button"  onclick="add_tr()" class="btn btn-blue margin-bottom pull-right  " ><?php echo $this->lang->line('Add New Row') ?></button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                                value="<?php echo $this->lang->line('Stock Transfer') ?>"
                                data-loading-text="Adding...">
                            <input type="hidden" value="products/create_transfer" id="action-url">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        // Globals
        options = "";
        trs_counter = 0;
        from =  0; 
        to =  0  ; 

        function get_id(id){
            id = id.split("-");
            id = id[1];
            return id ;
        }
        function tr_id(id){
            id =  "tr-"+id;
            return id ; 
        }
        function remove_tr(id){
            id = get_id(id);
            id = tr_id(id);
            var tr = document.getElementById(id);
            tr.parentNode.removeChild(tr);
        }
        function add_tr(){
            var tr =  '<tr id="tr-'+trs_counter+'">';
                    tr += '<td>';
                        tr += '<select name="products[]" id="select-'+trs_counter+'" class="form-control products_select">';
                            tr += '<option>Select</option>' ;
                            tr += options ;
                        tr += '</select>' ;
                    tr += '</td>';
                    tr += '<td id="code-'+trs_counter+'"></td>';
                    tr += '<td id="cat-'+trs_counter+'"></td>';
                    tr += '<td id="sub-cat-'+trs_counter+'"></td>';
                    tr += '<td id="transfered-qty-'+trs_counter+'" ><input type="number" value ="1" class="form-control margin-bottom required" name="qty[]" onkeypress="return isNumber(event)"></td>';
                    tr += '<td id="from-stock-'+trs_counter+'"></td>';
                    tr += '<td id="to-stock-'+trs_counter+'"></td>';
                    tr += '<td><button type="button" id="delete-'+trs_counter+'" onclick="remove_tr(this.id)" class="btn btn-danger margin-bottom"><?php echo $this->lang->line('X') ?></button></td>';
                tr +=  '</tr>';
                $("#data-table").last().append(tr);
            trs_counter ++ ;
        }

        $("#get_products").on('click', function () {
            from =  document.getElementById('from').value ;
            to =  document.getElementById('to').value ; 
            
            if(from != '0'  &&  to !=  '0'  &&  to !=  from ){
                // Put the warehouse ids into hidden input so we can disable the selects if we want
                document.getElementById('from_value').value =  from;
                document.getElementById('to_value').value   =  to;

                //  Get list of the products 
                $.ajax({
                    url: baseurl + 'products/new_stock_transfer_products?from='+from,
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
                        if(data.length >  0){
                            $.each(data, function(key, option) {
                                options += '<option value="'+option['pid']+'">'+option['product_name']+'</option>' 
                            });
                            //  add new row 
                            add_tr();
                            document.getElementById('get_products').disabled = true;
                            document.getElementById('from').disabled = true;
                            document.getElementById('to').disabled = true;
                        }else{
                            alert('Seems this WareHouse Do not have Products in it');
                        }
                    }
                });
            }else{
                alert('Select 2 defiirent WareHouses before');
            };
        });

        $(document.body).on('change',".products_select",function (e) {
            var select_id = get_id(this.id);
            var pid = this.value; 

            if(pid > 0){
                //  Get list of the products 
                $.ajax({
                    url: baseurl + 'products/product_transfer_data?pid='+pid+'&from='+from+'&to='+to,
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
                        document.getElementById('code-'+select_id).innerHTML =  data[0]['product_code'];
                        document.getElementById('cat-'+select_id).innerHTML =  data[0]['cat'];
                        document.getElementById('sub-cat-'+select_id).innerHTML =  data[0]['sub_cat'];
                        document.getElementById('transfered-qty-'+select_id).innerHTML =  '<input type="number" placeholder="max is '+data[0]['from_qty']+'" min ="1" max="'+data[0]['from_qty']+'" value = "1" class="form-control margin-bottom required" name="qty[]" onkeypress="return isNumber(event)">';
                        document.getElementById('from-stock-'+select_id).innerHTML =  data[0]['from_qty'];
                        document.getElementById('to-stock-'+select_id).innerHTML =  data[0]['to_qty'];
                    }
                });
            }else{
                document.getElementById('code-'+select_id).innerHTML = '';
                document.getElementById('cat-'+select_id).innerHTML =  '';
                document.getElementById('sub-cat-'+select_id).innerHTML =  '';
                document.getElementById('transfered-qty-'+select_id).innerHTML =  '<input disabled type="number" value = "" class="form-control margin-bottom" name="qty[]" >';
                document.getElementById('from-stock-'+select_id).innerHTML =  '';
                document.getElementById('to-stock-'+select_id).innerHTML =  '';
            }
        });
    </script>