<!--Wrapper Section Start Here -->
<div id="wrapper" class="homepage common-page shop-listing-page about">

    <?php $this->load->view($header); ?>

<!--Section area starts Here -->
<section id="section">
    <!--Section box starts Here -->
    <div class="section">
        <div class="contact-form">
            <div class="container">

                <!-- display global alert messages -->
                <?php if(!empty($notice)) { ?><div class="alert-success" style="text-align: center; padding: 10px;"><?php echo $notice; ?></div><br> <?php } ?>
                <!--end global message-->

                <?php echo validation_errors('<div class="alert-danger" style="text-align: center; padding: 10px;">', '</div>'); ?>

                <div class="row">

                    <?php

                    foreach($get_quoted_item_details as $row){
                        $inv_id = $row->inv_id;
                        $desc = $row->description;
                        $spec = $row->specification;
                        $cat  = $row->category;
                        $item_name = $row->item_name;
                    }

                    ?>

                    <form name="contactForm" method="post" id="contact" action="<?=base_url('item_quote_form?name='.$item_name.'&inventory_number='.$inv_id)?>">

                        <input type="hidden" name="inv_id" value="<?=$inv_id?>" />

                    <div class="col-xs-12 col-sm-6">
                        <div class="heading ">
                            <h5>contact information</h5>
                        </div>

                        <div class="contact-form-box" >

                                <div class="row">
                                    <input id="name" name="customer_name" class="contact-name" type="text" placeholder="Name*" />
                                    <input id="email" name="email" class="contact-mail" type="text" placeholder="Email*" />
                                    <input id="email" name="company_name" class="contact-mail" type="text" placeholder="Company Name*" />
                                    <input id="sub" name="phone" class="contact-subject" type="text" placeholder="Phone Number*" />
                                </div>

                        </div>
                    </div>

                        <div class="col-xs-12 col-sm-1">

                        </div>

                    <div class="col-xs-12 col-sm-5">
                        <div class="heading ">
                            <h5>shipping information</h5>
                        </div>

                        <div class="contact-form-box">

                            <div class="row">

                                <textarea placeholder="Description*" id="message" required="required" readonly><?=$desc?></textarea>
                                <input id="name" class="contact-name" type="text" value="<?=$item_name?>" required="required" readonly/>
                                <input id="email" class="contact-mail" type="text" value="<?=$spec;?>" required="required" readonly/>
                                <input id="sub" class="contact-subject" type="text" value="<?=$cat?>" required="required" readonly/>

                            </div>

                        </div>
                    </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="heading ">
                                <h5>shipping destination information</h5>
                            </div>

                            <div class="contact-form-box " ng-controller="FormController">

                                <div class="row">
                                    <input id="name" name="city" class="contact-name" type="text" placeholder="City*" />
                                    <input id="email" name="province" class="contact-mail" type="text" placeholder="Province*" />

                                    <textarea placeholder="Address*" id="message" name="address" ></textarea>

                                    <label>Preferred Date of Delivery</label>
                                    <input id="delivery_date" name="delivery_date" class="contact-name" type="date" placeholder="City*"/>

                                    <textarea placeholder="Any Extra Message*" name="quote_details" id="message"></textarea>

                                    <input type="submit" class="comment-submit qoute-sub" value="Submit"/>
                                </div>

                            </div>
                        </div>

                    </form>

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