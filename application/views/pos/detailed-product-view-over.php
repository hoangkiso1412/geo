<div class="text-center">
<h5><?php echo $product['product_name'] . ' - ' .  $cat_name . ' -  Code : '. $product['product_code']; ?></h5>
</div>


<table class="table table-striped table-bordered">
    <?php echo '<tr><td>' . $this->lang->line('Price') . ' :'.$product['product_price'].'</td> <td> '.$this->lang->line('Product Wholesale Price').' : ' . $product['wholesale'] . '</td> <td> ' . $this->lang->line('Purchase Order') . ' : ' . $product['fproduct_price'] . '</td> </tr>'; ?>
</table>


 

<?php $images_count = 1;?>

<div class="text-center">
	<?php foreach ($custom_fields as $row) {  ?>

        <?php  if ($row['f_type'] == 'images')  { ?>
            <div class="form-group row">
            	<label  class="col-sm-2 col-form-label"><?= $row['name'] ?></label>
                <div class="col-sm-6">
			    <div class="bzoom_wrap">
			        <ul id="bzoom">
			            <li>
			                <img class="round bzoom_thumb_image" src="<?php echo base_url('userfiles/product/' . $product['image']);?>" title="first img" />
			                <img class="round bzoom_big_image" src="<?php echo base_url('userfiles/product/' . $product['image']);?>"/>
			            </li>
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

<?php //if ($product_warehouse) {
    echo '<h6> ' . $this->lang->line('Warehouse') . '</h6>';
    ?>
    <table class="table table-striped table-bordered">

            <tr>
                <td><strong><?php echo $this->lang->line('Warehouse') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Stock') ?></strong></td>

                <td><strong><?php echo $this->lang->line('Purchase Order') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Price') ?>#</strong></td>

                <td><strong><?php echo $this->lang->line('Wholesale-Price') ?></strong></td>


            </tr>

        <?php



            echo '<tr><td>' . $product['title'] . '</td><td> ' . $product['qty'] . '  </td> <td> '  . $product['fproduct_price'] . '</td>  <td>' .$product['product_price'].'</td> <td> '. $product['wholesale'] . '</td> ';
                                 /*
				 echo' <td><a href="' . base_url() . 'products/edit?id=' . $product['pid'] . '" class="btn btn-primary btn-sm"><span class="icon-pencil"></span> ' . $this->lang->line('Edit') . '</a> <div class="btn-group">
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
                                </div>   <a class="btn btn-pink  btn-sm" href="' . base_url() . 'products/report_product?id=' . $product['pid'] . '" target="_blank"> <span class="icon-pie-chart2"></span> ' . $this->lang->line('Sales') . '</a>  </td>'; */
				echo '</tr>';


        foreach ($product_warehouse as $product_variation) {
            echo '<tr> <td>' . $product_variation['title'] . '</td><td> ' . $product_variation['qty'] . '  </td> <td> ' . $product_variation['fproduct_price'] . '</td>  <td>' .$product_variation['product_price'].'</td> <td> '. $product_variation['wholesale'] . '</td>';
                               /*
			       	echo '<td><a href="' . base_url() . 'products/edit?id=' . $product_variation['pid'] . '" class="btn btn-primary btn-sm"><span class="icon-pencil"></span> ' . $this->lang->line('Edit') . '</a> <div class="btn-group">
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
                                </div>   <a class="btn btn-pink  btn-sm" href="' . base_url() . 'products/report_product?id=' . $product_variation['pid'] . '" target="_blank"> <span class="icon-pie-chart2"></span> ' . $this->lang->line('Sales') . '</a> </td> '; */
				echo '</tr>';

        } ?>
    </table>
<?php //}
?>
<hr>



<h5><?php echo  $this->lang->line('Sales') . ' ( ' . $this->lang->line('Invoices').' : '.count($sales) . ' )'; ?></h5>
<table class="table table-striped table-bordered">

            <tr>
                <td><strong><?php echo $this->lang->line('Invoice') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Warehouse') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Stock') ?></strong></td>

                <td><strong><?php echo $this->lang->line('Purchase Order') ?></strong></td>
                <td><strong><?php echo $this->lang->line('Price') ?></strong></td>

                <td><strong><?php echo $this->lang->line('Wholesale-Price') ?></strong></td>


            </tr>

            <?php
            $fill = false;
            $price = 0;
            foreach ($sales as $row) {
                $balance += $row['qty'];
                if ($fill == true) {
                    $flag = ' mfill';
                } else {
                    $flag = '';
                }

	                // get_warehouse name for this invoice
	                $warehouse_name = '';
                        $warehouse_stock = '';
                        $warehouse_order_price = '';
                        $warehouse_retail_price = '';
                        $warehouse_wholesale_price = '';

                	if($product['pid'] == $row['pid']){
                               		$warehouse_name = $product['title'];
		                        $warehouse_stock = $product['qty'];
		                        $warehouse_order_price = $product['fproduct_price'];
		                        $warehouse_retail_price = $product['product_price'];
		                        $warehouse_wholesale_price = $product['wholesale'];
                	}else{
          			foreach ($product_warehouse as $house) {
                         		if($house['pid'] == $row['pid']){
                        			$warehouse_name = $house['title'];
			                        $warehouse_stock = $house['qty'];
			                        $warehouse_order_price = $house['fproduct_price'];
			                        $warehouse_retail_price = $house['product_price'];
			                        $warehouse_wholesale_price = $house['wholesale'];
	                        	}else{
	                        		$warehouse_name = '--';
			                        $warehouse_stock = '';
			                        $warehouse_order_price = '';
			                        $warehouse_retail_price = '';
			                        $warehouse_wholesale_price = '';
	                        	}
                                }
                        }



                $price += $row['qty'] * $row['price'];

                echo '<tr class="item' . $flag . '"><td>' .$row['tid']. '</td><td>' . $warehouse_name .'</td><td>' . $warehouse_stock . '</td><td>' . $warehouse_order_price . '</td><td>' . $warehouse_retail_price . '</td><td>' . $warehouse_wholesale_price . '</td></tr>';
                $fill = !$fill;
            }


                echo '<tr class="item' . $flag . '"><td style="background:#ccc; text-align:center;">Total</td><td colspan="4">' . amountExchange($price, 0, $this->aauth->get_user()->loc) . '</td>  </tr>';

        ?>
</table>


<hr>



