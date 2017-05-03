<!--header Section Start Here -->
<header id="header" class="header header-style-6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 no-padding">
                <div class="logo-wrap">
                    <a href="<?=base_url();?>" class="logo"> <img src="<?=base_url();?>resources/assets/images/nmr-logo.png" alt="" /> </a>
                </div>
                <div class="nav-wrap">
                    <!-- primary header Start Here -->
                    <div class="primary-header clearfix">
                        <div class="mail">
                            <img alt="" src="<?=base_url();?>resources/assets/images/icon-mail2.png">
                            <span> Email us at : <a class="email-us" href="mailto:info@nmr-int.com">info@nmr-int.com</a> </span>
                        </div>
                        <div class="social-wrap clearfix">
                            <a class="request" href="<?=base_url('contact');?>">contact us</a>
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
                    <!-- primary header Ends Here -->
                    <!-- main header Starts Here -->
                    <div class="main-header">
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
                    </div>
                    <!-- main header Ends Here -->

                </div>
            </div>
            <div class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<!--header Section Ends Here -->


<!--banner Section starts Here -->
<div class="bannercontainer bannercontainer-2 spacetop">
    <div class="banner">
        <ul>
            <li data-transition="random" data-slotamount="1">
                <img src="<?=base_url();?>resources/assets/images/slider/8.jpg" alt="" />
                <span class="banner-overlay"></span>
                <div class="banner-text">
                    <div class="caption sft big_white" data-x="0" data-y="100" data-speed="center" data-start="1700" data-easing="Power4.easeInOut">
                        <a href="#" class="shipping">maintenance, repair, &amp; overhaul </a>
                    </div>
                    <div class="caption sfb big_orange clearfix"  data-x="100" data-y="350" data-speed="500" data-start="1900" data-easing="Power4.easeInOut">
                        <h2><span>YOUR ONE STOP ENGINEERING</span> SOLUTIONS PARTNER </h2>
                    </div>
                </div>
            </li>
            <li data-transition="random" data-slotamount="1">
                <img src="<?=base_url();?>resources/assets/images/slider/5.jpg" alt="" />
                <span class="banner-overlay"></span>
                <div class="banner-text">
                    <div class="caption sft big_white" data-x="0" data-y="100" data-speed="center" data-start="1700" data-easing="Power4.easeInOut">
                        <a href="#" class="shipping">engineering solutions</a>
                    </div>
                    <div class="caption sfb big_orange clearfix"  data-x="100" data-y="350" data-speed="500" data-start="1900" data-easing="Power4.easeInOut">
                        <h2><span>YOUR ONE STOP ENGINEERING</span> SOLUTIONS PARTNER </h2>
                    </div>
                </div>
            </li>
            <li data-transition="random" data-slotamount="1">
                <img src="<?=base_url();?>resources/assets/images/slider/10.jpg" alt="" />
                <span class="banner-overlay"></span>
                <div class="banner-text">
                    <div class="caption sft big_white" data-x="0" data-y="100" data-speed="center" data-start="1700" data-easing="Power4.easeInOut">
                        <a href="#" class="shipping">asset management </a>
                    </div>
                    <div class="caption sfb big_orange clearfix"  data-x="100" data-y="350" data-speed="500" data-start="1900" data-easing="Power4.easeInOut">
                        <h2><span>YOUR ONE STOP ENGINEERING</span> SOLUTIONS PARTNER </h2>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--banner Section ends Here -->
