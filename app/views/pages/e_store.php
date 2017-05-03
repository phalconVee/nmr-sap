<!--Wrapper Section Start Here -->
<div id="wrapper" class="homepage common-page shop-listing-page about">

<?php $this->load->view($header);?>

<!--Section area starts Here -->
<section id="section">

<!--Section box starts Here -->
<div class="section shop-section">
<div class="shop">
    <div class="container">
        <div class="row">

            <?php $this->load->view($store_sidebar);?>

            <div class="col-xs-12 col-sm-9" id="postList">
                <div class="search-results ">
                    <span class="result-value"><ul class="list-pages"><?php echo $this->ajax_pagination->create_links(); ?></ul></span>


                </div>

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
                                    <a href="<?=base_url('e_store/pro_details')."?source=3MD".strtoupper(uniqid())."&item_name=".$row->item_name."&inv_id=".$row->inv_id;?>" class="btn btn-warning btn-lg">VIEW DETAILS</a>
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

            </div>
        </div>
    </div>
</div>


<div class="query ">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10">
                <h5>DO YOU STILL HAVE A QUESTION REGARDING OUR SERVICES?</h5>
                <p>
                    Feel free to contact us anytime, we are available 24/7.
                </p>
            </div>
            <div class="col-xs-12 col-sm-2">
                <a href="<?=base_url('contact');?>" class="button contact-us">contact us</a>
            </div>
        </div>
    </div>
</div>
</div>
<!--Section box ends Here -->
</section>
<!--Section area ends Here -->