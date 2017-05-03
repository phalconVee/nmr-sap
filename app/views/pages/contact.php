<!--Wrapper Section Start Here -->
<div id="wrapper" class="homepage common-page contact-us-page">

    <?php $this->load->view($header);?>

<!--Section area starts Here -->
<section id="section">
    <!--Section box starts Here -->
    <div class="section">
        <div class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="heading "> <span>our</span>
                            <h3>contact form</h3>
                        </div>
                        <div class="contact-form-box " ng-controller="FormController">

                            <!-- display global alert messages -->
                            <?php if(!empty($notice)) { ?><div class="alert-success" style="text-align: center; padding: 10px;"><?php echo $notice; ?></div><br> <?php } ?>
                            <!--end global message-->

                            <?php echo validation_errors('<div class="alert-danger" style="text-align: center; padding: 10px;">', '</div>'); ?>

                            <form name="contactForm" method="post" action="<?=current_url();?>">

                                <div id="success"></div>

                                <div class="row">

                                    <input id="name" name="name" class="contact-name" type="text" placeholder="Name*" required="required"/>
                                    <input id="email" name="email" class="contact-mail" type="text" placeholder="Email*" required="required"/>
                                    <input id="sub" name="subject" class="contact-subject" type="text" placeholder="Subject*" required="required"/>
                                    <textarea name="message" placeholder="message*" id="message" required="required"></textarea>

                                    <button type="submit" name="submit" class="comment-submit qoute-sub">Send</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="map-box " id="map-box"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="location parallax">
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading"> <span>more</span>
                                <h3>locations</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div id="location-slides" class="location-slider">
                            <div class="location-slide-tab">
                                <h6>lagos</h6>
                                <address>
                                    23 Acme House, Ogba, Ikeja, <br />
                                    Lagos, -110001, Nigeria
                                </address>
                                <span class="call">call : <a href="tel:+234 806 4135 352">+234 806 4135 352</a></span> <span class="location-email">email : <a href="mailto:info@nmr-int.com"> info@nmr-int.com</a></span> </div>

                            <div class="location-slide-tab">
                                <h6>ibadan</h6>
                                <address>
                                    Second Street Nager <br />
                                    Howysala tower, canada 8856
                                </address>
                                <span class="call">call : <a href="tel:+234 806 4135 352">+234 806 4135 352</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info-ibadan@nmr-int.com</a></span> </div>

                            <div class="location-slide-tab">
                                <h6>abuja</h6>
                                <address>
                                    COMING SOON <br />

                                </address>
                                <span class="call">call : <a href="tel:+234 806 4135 352">+234 806 4135 352</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info-abuja@nmr-int.com</a></span> </div>
                        </div>
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