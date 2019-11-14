<?php 
    //pre($products);
?>
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5><?php echo $this->lang->line('Received Transfer') ?></h5>
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
                    <?php 
                        if(is_array($products) &&  count($products) >  0 ) { ?>
                        <table class="table table-striped table-bordered" id='data-table'>
                            <tr>
                                <td><strong><?php echo $this->lang->line('Product Name') ?></strong></td>
                                <td><strong><?php echo $this->lang->line('Code') ?></strong></td>
                                <td>
                                    <strong><?php echo $this->lang->line('Qty from :  ') .  $products[0]['w_from_name'] ?> </strong>
                                    <input type="hidden" name="from" value="<?php echo $products[0]['w_from']; ?>">
                                    <input type="hidden" name="to" value="<?php echo $products[0]['w_to']; ?>">
                                </td>
                            </tr>
                            <?php
                                foreach ($products as $key => $product) { ?>
                                    <tr id="tr-<?php echo  $key; ?>">
                                        <td>
                                            <?php echo $product['product_name']; ?>
                                            <input type="hidden" name="pids[]" value="<?php echo $product['pid']; ?>">
                                            <input type="hidden" name="ids[]" value="<?php echo $product['id']; ?>">
                                        </td>
                                        <td id="code-0"><?php echo $product['product_code']; ?></td>
                                        <td id="transfered-qty-0"><input type="number" value="<?php echo number_format($product['qty']); ?>" min= "0" placeholder= "max is <?php echo number_format($product['max_available']); ?>" max="<?php echo $product['max_available']; ?>" class="form-control margin-bottom required" name="qty[]" onkeypress="return isNumber(event)"></td>
                                    </tr>
                                <?php }
                            ?>
                        </table>
                        <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                                value="<?php echo $this->lang->line('Approve Recieving') ?>"
                                data-loading-text="Adding...">
                            <input type="hidden" value="products/received_transfer" id="action-url">
                        </div>
                    </div>
                        <?php }else {
                            echo "<h1> No Available Products to be recieved </h1>" ;
                        }  
                    ?>
                </div>
            </form>
        </div>
    </div>