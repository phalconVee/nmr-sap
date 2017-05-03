<!--Wrapper Section Start Here -->
<div id="wrapper" class="homepage common-page shop-details-page about">

    <?php $this->load->view($header);?>

<!--Section area starts Here -->
<section id="section">

    <!--Section box starts Here -->
    <div class="section shop-section">

        <?php if(!is_null($get_details)): ?>

        <?php if(!empty($get_details)){ ?>

        <?php foreach($get_details as $row): ?>


        <div class="shop">
            <div class="container">
                <div class="row">

                    <?php $this->load->view($store_sidebar);?>

                    <div class="col-xs-12 col-sm-9">

                        <div class="our-products ">
                            <div class="product-display">
                                <div class="product-1">
                                    <img src="<?php echo base_url("resources/inventory")."/".$row->image; ?>" alt="<?php echo $row->item_name ;?>"/>
                                </div>

                            </div>

                            <div class="product-detail">
                                <h5><?=$row->item_name;?></h5>
                                <span class="product-detail-price"><?=$row->category;?></span>

                                <div class="selection">
                                    <div class="color-selection">
                                        <h6>sap id</h6>
                                        <span class="product-detail-price"><?=$row->sap_id;?></span>
                                    </div>
                                    <div class="size-selection">
                                        <h6>specification</h6>
                                        <span class="product-detail-price"><?=$row->specification;?></span>
                                    </div>
                                </div>
                                <div class="place-order">
                                    <a href="<?=base_url('item_quote_form?name='.$row->item_name.'&inventory_number='.$row->inv_id);?>" class="add-to-cart">quote for this item</a>

                                </div>
                                <div class="product-description">
                                    <h6>description</h6>
                                    <p>
                                        <?=$row->description;?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="similar-products result-display ">
                            <h5>similar products</h5>
                            <ul>

                            <?php foreach($similar as $show){ ?>

                                <li>
                                    <figure class="zoom">
                                        <a href="<?=base_url('e_store/pro_details')."?source=3MD".strtoupper(uniqid())."&item_name=".$show->item_name."&inv_id=".$show->inv_id;?>">
                                            <img src="<?php echo base_url();?>image.php/<?php echo $show->image;?>?width=260&height=298&cropratio=1:1&image=<?php echo base_url();?>resources/inventory/<?php echo $show->image;?>" />
                                        </a>
                                    </figure>

                                    <span class="pricing">Category: <?=$show->category;?></span>
                                    <a href="<?=base_url('e_store/pro_details')."?source=3MD".strtoupper(uniqid())."&item_name=".$show->item_name."&inv_id=".$show->inv_id;?>"><?=$show->item_name;?></a>

                                </li>

                            <?php } ?>

                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>

                <?php endforeach; ?>

            <?php }else{ ?>

        <div class="shop">
            <div class="container">
                <div class="row">

                    <?php $this->load->view($store_sidebar);?>

                    <div class="col-xs-12 col-sm-9">
                        <p>
                            <code>This product is not available</code>
                        </p>
                    </div>
                </div>

            </div>
        </div>

            <?php } ?>

        <?php endif; ?>

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