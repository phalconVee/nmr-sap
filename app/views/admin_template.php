<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NMR Admin">
    <meta name="author" content="bigbroslabs">
    <link rel="shortcut icon" href="<?=base_url('resources/img/favicon.png');?>">

    <title><?=$meta_title;?></title>

    <!-- Bootstrap CSS -->    
    <link href="<?=base_url();?>resources/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?=base_url();?>resources/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?=base_url();?>resources/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?=base_url();?>resources/admin/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?=base_url();?>resources/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?=base_url();?>resources/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?=base_url();?>resources/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="<?=base_url();?>resources/admin/stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="<?=base_url();?>resources/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="<?=base_url();?>resources/admin/stylesheet" href="css/fullcalendar.css">
	<link href="<?=base_url();?>resources/admin/css/widgets.css" rel="stylesheet">
    <link href="<?=base_url();?>resources/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>resources/admin/css/style-responsive.css" rel="stylesheet" />
	<link href="<?=base_url();?>resources/admin/css/xcharts.min.css" rel=" stylesheet">	
	<link href="<?=base_url();?>resources/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">

    <!--add header here-->
    <?php $this->load->view($header);?>
    <!--end header-->

    <!--add sidebar here-->
    <?php $this->load->view($sidebar);?>
    <!--end sidebar-->

    <!-- page content -->
    <?php $this->load->view($page_content);?>
    <!--end page content -->

   


  </section>
  <!-- container section start -->


  </body>
</html>
