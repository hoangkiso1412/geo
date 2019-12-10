<?php
    // Passed one variable named data hava all the data
    $product =  $data['product'];
    $custom_fields = $data['custom_fields'];
    $product_code = $product['cat_name'];
    $product_stocks =  $data['product_stocks'];
    $sales = $data['sales'];
    $Locs_n_wars = $data['Locs_n_wars'] ;
    
    $sales_per_div =  5 ;
?>

<div class="text-center modal-header">
    <h2><?php echo $product['product_name'] ; ?></h2> 
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span   aria-hidden="true">&times;</span></button>
</div>

<table class="table table-striped table-bordered">
    <?php echo '<tr><td>' . $this->lang->line('Cat') . ' :'.$product['cat_name'].'</td> <td> '.$this->lang->line('Code').' : ' . $product['product_code'] . '</td>  </tr>'; ?>
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
        foreach ($product_stocks as $product_variation) {
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
<hr>
<?php 
if(count($sales) >  0 ){ ?>
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
            foreach ($sales as $key => $purchase) { 
                $num = $key +  1;  
                $pagination = ceil($num /$sales_per_div);
                ?>
                <tr id='sales-result-<?php echo $num ;?>'  data-pagination='<?php echo  $pagination ;  ?>' >
                    <td><strong><?php echo $Locs_n_wars[$purchase['pid']]['location']; ?></strong></td>
                    <td><strong><?php echo $purchase['tid'] ?></strong></td>
                    <td><strong><?php echo $purchase['invoicedate'] ?></strong></td>
                    <td><strong><?php echo $purchase['qty'] ?></strong></td>
                    <td><strong><?php echo $purchase['price'] ?></strong></td>
                </tr>
            <?php }
            ?>            
            </table>
            <?php
                if($pagination >  1 ){
                    for ($i=1; $i <= $pagination ; $i++) { 
                        echo '<button type="button" class="btn" style="margin: 3px;" onclick="pagination('.$i.')">'.$i.'</button>';
                    }
                }
            ?>
            <script>
                function pagination(pagination){
                    var rows = document.querySelectorAll("[data-pagination]");
                    rows.forEach(function(row){
                        var current_id  = row.id ;
                        var current_pagination  = row.getAttribute('data-pagination');
                        document.getElementById(row.id).style.display = "none"; 
                        if(pagination  == current_pagination){
                            // document.getElementById(row.id).style.display = "inline"; 
                            $('#'+current_id).attr("style", "");
                        }
                    });
                }

                // show the pagination 1 on load
                pagination(1);
            </script>






<?php 
            
}   
    echo "<pre>";
    //print_r($Locs_n_wars);
    echo "</pre>";
?>
