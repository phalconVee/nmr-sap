<!--Wrapper Section Start Here -->
<div id="wrapper" class="homepage common-page shop-listing-page about">

    <?php $this->load->view($header); ?>

    <!--Section area starts Here -->
    <section id="section">
        <!--Section box starts Here -->
        <div class="section">
            <div class="contact-form">
                <div class="container">

                    <div class="row">
                        <!-- display global alert messages -->
                        <?php if(!empty($notice)) { ?><div class="alert-success" style="text-align: center; padding: 10px; font-size:16px;"><?php echo $notice; ?></div><br> <?php } ?>
                        <!--end global message-->
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