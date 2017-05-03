<!--header Section Start Here -->
<header id="header" class="header">
    <!-- primary header Start Here -->
    <div class="primary-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="mail">
                        <img src="<?=base_url();?>resources/assets/images/icon-mail.png" alt="" />
                        <span>Email us at : <a class="email-us" href="mailto:info@nmr-int.com">info@nmr-int.com</a></span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="social-wrap clearfix">
                        <a href="<?=base_url('contact');?>" class="request">contact us</a>
                        <ul class="social">
                            <li>
                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-google-plus"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- primary header Ends Here -->
    <!-- main header Starts Here -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-xs">

                    <div class="call-us">
                        <ul>
                            <li>
                                <img src="<?=base_url()?>resources/assets/images/iphone.png" alt="" />
                                <span class="transport">CALL US NOW FOR <span></span> ENQUIRIES</span>
                            </li>
                            <li>
                                <a href="tel:+234 806 4135 352">+234 806 4135 352</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <a href="<?=base_url();?>" class="logo"> <img src="<?=base_url()?>resources/assets/images/nmr-logo.png" alt="" /> </a>

                </div>
                <div class="col-xs-12 col-sm-9 custom-nav">
                    <nav>
                        <div id='cssmenu'>
                            <ul class="navigation">
                                <li class="<?php echo ($navigation == 'homepage') ? 'active' : 'not_active'?>">
                                    <a href="<?=base_url();?>">Home</a>
                                </li>
                                <li class="<?php echo ($navigation == 'about_us') ? 'active' : 'not_active'?>">
                                    <a href="<?=base_url('pages/about_us');?>">about us</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">services</a>
                                    <ul class="sub-menu">
                                        <li class="<?php echo ($navigation == 'engineering_solutions') ? 'active' : 'not_active'?>">
                                            <a href="<?=base_url('pages/engineering');?>">Engineering Solutions</a>
                                        </li>
                                        <li class="<?php echo ($navigation == 'vmi') ? 'active' : 'not_active'?>">
                                            <a href="<?=base_url('pages/vmi');?>">Vendor Managed Inventory</a>
                                        </li>
                                        <li class="<?php echo ($navigation == 'logistics') ? 'active' : 'not_active'?>">
                                            <a href="<?=base_url('pages/logistics');?>">Procurement &amp; Logistics</a>
                                        </li>
                                        <li class="<?php echo ($navigation == 'equipment_leasing') ? 'active' : 'not_active'?>">
                                            <a href="<?=base_url('pages/leasing');?>">Equipment Leasing</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://localhost/NMR-media-website/one-page_parallax.html" target="_blank">media</a>
                                </li>

                                <li class="<?php echo ($navigation == 'e_store') ? 'active' : 'not_active'?>">
                                    <a href="<?=base_url('e_store');?>">e-store</a>
                                </li>

                                <li>
                                    <a href="#">pages</a>
                                    <ul class="sub-menu">

                                        <li class="<?php echo ($navigation == 'achievements') ? 'active' : 'not_active'?>">
                                            <a href="<?=base_url('pages/awards');?>">achievements</a>
                                        </li>

                                        <li class="<?php echo ($navigation == 'team') ? 'active' : 'not_active'?>">
                                            <a href="<?=base_url('pages/team');?>">team</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="<?php echo ($navigation == 'career') ? 'active' : 'not_active'?>">
                                    <a href="<?=base_url('pages/career');?>">career</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header Ends Here -->
</header>
<!--header Section Ends Here -->

<!--banner Section starts Here -->
<div class="banner service-banner spacetop">
    <div class="banner-image-plane parallax">

    </div>
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="#" class="shipping">nmr services</a>
                    <h1>our services</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner Section ends Here -->