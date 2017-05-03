<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?=$meta_title;?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>resources/assets/images/favicon.png">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url();?>resources/assets/css/font-awesome.min.css" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url();?>resources/assets/css/bootstrap.css" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>resources/assets/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>resources/assets/css/dropdown.css" />

    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url();?>resources/assets/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url();?>resources/assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="<?=base_url();?>resources/assets/css/global.css" />
    <link rel="stylesheet" href="<?=base_url();?>resources/assets/css/style.css" />
    <link rel="stylesheet" href="<?=base_url();?>resources/assets/css/homepage-6.css" />
    <link rel="stylesheet" href="<?=base_url();?>resources/assets/css/responsive.css" />
    <link href="<?=base_url();?>resources/assets/css/skin.less" rel="stylesheet/less">
</head>


<body>
<!-- Loader Starts here -->
<div class="loader-block">
    <div class="loader">
        Loading...
    </div>
</div>
<!-- Loader Ends here -->

<?php $this->load->view($page_content);?>

<?php $this->load->view($footer);?>


</body>
</html>