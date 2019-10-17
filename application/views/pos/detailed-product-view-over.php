<?php
    echo "<pre>";
    // print_r()
    echo "</pre>";
?>

<div class="text-center modal-header">
    <h2><?php echo $product['product_name'] ; ?></h2> 
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span   aria-hidden="true">&times;</span></button>
</div>

<table class="table table-striped table-bordered">
    <?php echo '<tr><td>' . $this->lang->line('Cat') . ' :'.$cat_name.'</td> <td> '.$this->lang->line('Code').' : ' . $product['product_code'] . '</td>  </tr>'; ?>
</table>

<table class="table table-striped table-bordered">
    <?php echo '<tr><td> ' . $this->lang->line('Barcodes') . ' : ' . $product['barcode'] . '</td></tr>'; ?>
</table> 

<?php $images_count = 1;?>

<div class="text-center">
            <div class="form-group row">
                <div class="col-sm-6">
                    <div class="bzoom_wrap">
                        <ul id="bzoom">
                            <li>
                                <img class="round bzoom_thumb_image" src="<?php echo base_url('userfiles/product/' . $product['image']);?>" title="first img" />
                                <img class="round bzoom_big_image" src="<?php echo base_url('userfiles/product/' . $product['image']);?>"/>
                            </li>
                            <?php foreach ($custom_fields as $row) {  ?>
                                <?php  if ($row['f_type'] == 'images'  && $row['data'] != '' )  { ?>
                                <?php foreach (json_decode($row['data']) as $key => $image) { ?>
                                                <?php $images_count++; ?>
                                <li>
                                    <img class="round bzoom_thumb_image" src="<?php echo base_url() ?>userfiles/custom_images/<?php echo $image ?>"/>
                                    <img class="round bzoom_big_image" src="<?php echo base_url() ?>userfiles/custom_images/<?php echo $image ?>"/>
                                </li>
                                <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php }
        }
        ?>
</div>


<script src="<?php echo assets_url('assets/myjs/jqzoom.js') . APPVER; ?>"></script>
<script type="text/javascript">
$("#bzoom").zoom({
	zoom_area_width: 300,
    autoplay_interval :2000,
    small_thumbs : <?php echo $images_count;?>,
    autoplay : false
});
</script>


<!--
<h5><?php echo $product['product_name'] . ' (' . $product['title'] . ')'; ?></h5>
<table class="table">
    <?php echo '<tr><td>' . $product['product_name'] . '</td><td>Code : ' . $product['product_code'] . '</td><td> ' . $this->lang->line('Stock') . ' : ' . $product['qty'] . '<br><br><a href="' . base_url() . 'products/edit?id=' . $product['pid'] . '" class="btn btn-primary btn-sm"><span class="icon-pencil"></span> ' . $this->lang->line('Edit') . '</a>  <div class="btn-group">
                    <button type="button" class="btn btn-blue dropdown-toggle   btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-print"></i>  ' . $this->lang->line('Print') . '                                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="' . base_url() . 'products/barcode?id=' . $product['pid'] . '" target="_blank"> ' . $this->lang->line('BarCode') . '</a>

                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="' . base_url() . 'products/posbarcode?id=' . $product['pid'] . '" target="_blank"> ' . $this->lang->line('BarCode') . ' - Compact</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="' . base_url() . 'products/label?id=' . $product['pid'] . '" target="_blank"> ' . $this->lang->line('Product') . ' Label</a>

                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="' . base_url() . 'products/poslabel?id=' . $product['pid'] . '" target="_blank"> Label - Compact</a>

                    </div>
                </div>   <a class="btn btn-pink  btn-sm" href="' . base_url() . 'products/report_product?id=' . $product['pid'] . '" target="_blank"> <span class="icon-pie-chart2"></span> ' . $this->lang->line('Sales') . '</a> </td></tr>'; ?>
</table>

-->

<?php if ($product_variations) {

    echo '<h6>' . $this->lang->line('Products') . ' ' . $this->lang->line('Variations') . '</h6>';
    ?>

    <table class="table table-striped table-bordered">
        <?php

        foreach ($product_variations as $product_variation) {
            echo '<tr><td><a href="' . base_url() . 'products/edit?id=' . $product_variation['pid'] . '" class="btn btn-primary btn-sm"><span class="icon-pencil"></span> ' . $this->lang->line('Edit') . '</a>  <div class="btn-group">
                    <button type="button" class="btn btn-blue dropdown-toggle   btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-print"></i>  ' . $this->lang->line('Print') . '                                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="' . base_url() . 'products/barcode?id=' . $product_variation['pid'] . '" target="_blank"> ' . $this->lang->line('BarCode') . '</a>

                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="' . base_url() . 'products/posbarcode?id=' . $product_variation['pid'] . '" target="_blank"> ' . $this->lang->line('BarCode') . ' - Compact</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="' . base_url() . 'products/label?id=' . $product_variation['pid'] . '" target="_blank"> ' . $this->lang->line('Product') . ' Label</a>

                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="' . base_url() . 'products/poslabel?id=' . $product_variation['pid'] . '" target="_blank"> Label - Compact</a>

                    </div>
                </div>   <a class="btn btn-pink  btn-sm" href="' . base_url() . 'products/report_product?id=' . $product_variation['pid'] . '" target="_blank"> <span class="icon-pie-chart2"></span> ' . $this->lang->line('Sales') . '</a>  ' . $product_variation['product_name'] . '</td><td>Code : ' . $product_variation['product_code'] . '</td><td> ' . $this->lang->line('Stock') . ' : ' . $product_variation['qty'] . ' </td></tr>';
        } ?>
    </table>
<?php } ?>
    <h5><?php echo  $this->lang->line('Stocks'); ?></h5>
    <table class="table table-striped table-bordered">
            <tr>
                <td><strong><?php echo $this->lang->line('Location') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Warehouse') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Stock') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Purchase Price') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Retail Price') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Wholesale Price') ?></strong></td>
            </tr>
        <?php
            $stock = 0 ;
            foreach ($product_warehouse as $product_variation) {
                echo '<tr><td>' .$product_variation['cname']. '</td><td>' . $product_variation['title'] . '</td><td> ' . $product_variation['qty'] . '  </td> <td> ' . $product_variation['fproduct_price'] . '</td>  <td>' .$product_variation['product_price'].'</td> <td> '. $product_variation['wholesale'] . '</td>';
                    echo '</tr>';
                    $stock += (int)$product_variation['qty'] ;
            } 
        ?>
        <tr>
            <td colspan="2"><strong><?php echo $this->lang->line('Stock') ?></strong></td>
            <td><strong><?php echo $stock; ?></strong></td>
        </tr>
    </table>
<?php //}
?>
<hr>



<h5><?php echo  $this->lang->line('Sales') . ' ( ' . $this->lang->line('Invoices').' : '.count($sales) . ' )'; ?></h5>
<table class="table table-striped table-bordered">

            <tr>
                <td><strong><?php echo $this->lang->line('Location') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Invoice') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Date') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Qty') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Price') ?></strong></td>
            </tr>
            <?php 
            foreach ($sales as $purchase) { 
                
                ?>

                <tr>
                <td><strong><?php echo $group_data[$purchase['pid']]['location']; ?></strong></td>
                <td><strong><?php echo $purchase['tid'] ?></strong></td>
                <td><strong><?php echo $purchase['invoicedate'] ?></strong></td>
                <td><strong><?php echo $purchase['qty'] ?></strong></td>
                <td><strong><?php echo $purchase['price'] ?></strong></td>
            </tr>
            <?php } ?>
</table> <hr>