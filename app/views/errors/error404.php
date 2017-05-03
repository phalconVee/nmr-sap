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
    <link href="<?=base_url();?>resources/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?=base_url();?>resources/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>resources/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body>
   <div class="page-404">
    <p class="text-404">404</p>

    <h2>Aww Snap!</h2>

       <?php if(!empty($_SESSION['w3_admin_id'])){ ?>
    <p>Something went wrong or that page doesn’t exist yet. <br><a href="<?=base_url('admin/');?>">Return Home</a></p>
       <?php }else{ ?>
           <p>Something went wrong or that page doesn’t exist yet. <br><a href="<?=base_url('');?>">Return Home</a></p>
       <?php } ?>
  </div>
  
  </body>
</html>
