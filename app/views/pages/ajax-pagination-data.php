<div class="row">

    <?php $i=0;  if(!empty($inventory_items)) { ?>

        <?php foreach($inventory_items as $row): ?>

            <div class="col-sm-4">

                <div class="result-display">

                    <figure>
                        <a href="<?=base_url('e_store/pro_details')."?source=3MD".strtoupper(uniqid())."&item_name=".$row->item_name."&inv_id=".$row->inv_id;?>" class="zoom">
                            <img src="<?php echo base_url("resources/inventory")."/".$row->image; ?>" alt="<?php  echo $row->item_name ;?>"/>
                        </a>
                        <div class="cart-button">
                            <a href="<?=base_url('shop/pro_details')."?source=3MD".strtoupper(uniqid())."&item_name=".$row->item_name."&inv_id=".$row->inv_id;?>" class="btn btn-warning btn-lg">VIEW DETAILS</a>
                        </div>
                    </figure>

                    <span class="pricing">Category: <?=$row->category;?></span>
                    <a href="#"><?=$row->item_name;?></a>

                </div>

            </div>

        <?php endforeach; ?>

    <?php }else { ?>
        <div class="col-sm-4"> <h2> No items available at the moment</h2> </div>
    <?php } ?>

</div>

<ul class="list-pages"><?php echo $this->ajax_pagination->create_links(); ?></ul>