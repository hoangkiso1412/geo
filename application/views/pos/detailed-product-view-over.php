<h5><?php echo $product['product_name'] . ' ( ' . $this->lang->line('Category').' : '.$cat_name . ' )'; ?></h5>


<table class="table table-striped table-bordered">
    <?php echo '<tr><td>' . $this->lang->line('Price') . ' :'.$product['product_price'].'</td> <td> '.$this->lang->line('Product Wholesale Price').' : ' . $product['wholesale'] . '</td> <td> ' . $this->lang->line('Stock') . ' : ' . $product['qty'] . '</td> </tr>'; ?>
</table>


<div class="text-center">

     <div class="form-group row">
    	  <label  class="col-sm-2 col-form-label"><?php echo $this->lang->line('Image') ?></label>
          <div class="col-sm-6">
          	<img class="round" src="<?php echo base_url('userfiles/product/' . $product['image']);?>"  style="max-height: 100px; margin:0px auto 10px;">
          </div>
     </div>
</div>





<div class="text-center">
	<?php foreach ($custom_fields as $row) {  ?>

        <?php  if ($row['f_type'] == 'images')  { ?>
            <div class="form-group row">
            	<label  class="col-sm-2 col-form-label"><?= $row['name'] ?></label>
                <div class="col-sm-6">
                    <?php foreach (json_decode($row['data']) as $key => $image) { ?>
                        <img class="round" src="<?php echo base_url() ?>userfiles/custom_images/<?php echo $image ?>" style="max-height: 100px; margin:0px auto 10px;" alt="">
                    <?php } ?>
                </div>
            </div>
        <?php }
        }
        ?>
</div>



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

<?php if ($product_warehouse) {
    echo '<h6> ' . $this->lang->line('Warehouse') . '</h6>';
    ?>
    <table class="table table-striped table-bordered">
        <?php
        foreach ($product_warehouse as $product_variation) {
            echo '<tr><td><a href="' . base_url() . 'products/edit?id=' . $product_variation['pid'] . '" class="btn btn-primary btn-sm"><span class="icon-pencil"></span> ' . $this->lang->line('Edit') . '</a> <div class="btn-group">
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
                                </div>   <a class="btn btn-pink  btn-sm" href="' . base_url() . 'products/report_product?id=' . $product_variation['pid'] . '" target="_blank"> <span class="icon-pie-chart2"></span> ' . $this->lang->line('Sales') . '</a> ' . $product_variation['product_name'] . '</td><td>Code : ' . $product_variation['product_code'] . '</td><td>' . $product_variation['title'] . '</td><td> ' . $this->lang->line('Stock') . ' : ' . $product_variation['qty'] . '  </td></tr>';
        } ?>
    </table>
<?php } ?>
<hr>

