<!-- Footer Area Starts here -->
<footer id="footer">
    <!--Footer box starts Here -->
    <div class="footer footer-styling-6 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="about-company">
                        <a class="footer-logo" href="../"> <img src="<?=base_url();?>resources/assets/images/nmr-footer-logo.png" alt="" /> </a>
                        <p>
                            You can use the icons above to access more information about our credentials,
                            providing solutions in a host of specific industries.
                            However, these are far from the only industries that NMR has proudly served.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="our-address">
                        <h5>contact us</h5>
                        <div class="address">
                            <h6>NMR Intercontinental Ltd.</h6>
                            <address>
                                23 Acme House, Ogba,
                                Ikeja, Lagos, -110001, Nigeria
                            </address>
                            <div class="phone">
                                <span>phone : <a href="tel:5917890123">+234 806 4135 352</a></span>
                                <span>email : <a href="mail">info@nmr-int.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="sign-up">
                        <h5>twitter feed</h5>

                        <a class="twitter-timeline" href="https://twitter.com/mfmyc_awka" width="250" height="200">Tweets by LK_wapiti</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
            <div class="row custom-row">
                <div class="col-xs-12 col-sm-5">
                    <div class="copyright">
                        <span>Copyright &copy; NMR Intercontinental Limited. <?=date("Y")?></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Footer box ends Here -->
</footer>
<!-- Footer Area Ends here -->

</div>
<!--Wrapper Section Ends Here -->

<script type="text/javascript" src="<?=base_url();?>resources/assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>resources/assets/js/less.js"></script>
<script type="text/javascript" src="<?=base_url();?>resources/assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?=base_url();?>resources/assets/js/jquery.selectbox-0.2.min.js"></script>
<!--Parrallax -->
<script type="text/javascript" src="<?=base_url();?>resources/assets/js/parallax.js"></script>
<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="<?=base_url();?>resources/assets/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>resources/assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>resources/assets/js/revolution-home-4.js"></script>

<script src="<?=base_url();?>resources/assets/js/angular.js"></script>
<script type="text/javascript" src="<?=base_url();?>resources/assets/js/app.js"></script>

<script src="<?=base_url();?>resources/assets/js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>resources/assets/js/site.js"></script>

<script src="<?=base_url('resources/assets/bootstrap-daterangepicker/daterangepicker.js');?>"></script>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyBu0S3nKbSNtI_gW82zJnCM4STAqq8JC3w"></script>
<script type="text/javascript" src="<?=base_url();?>resources/assets/js/gmap.js"></script>

<?php if($navigation == 'item_quote_form'){ ?>

<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function() {
        $('#delivery_date').daterangepicker({
            singleDatePicker: true,
            startDate: '-0m',
            format: "yyyy-mm-dd",
            calender_style: "picker_4"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<!-- /bootstrap-daterangepicker -->

<?php } ?>