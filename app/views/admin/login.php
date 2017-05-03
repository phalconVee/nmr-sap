<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NMR Admin Backend">
    <meta name="author" content="bigbroslab">
    
    <link rel="shortcut icon" href="img/favicon.png">

    <title><?=$meta_title?></title>

    <!-- Bootstrap CSS -->
    <link href="<?=base_url();?>resources/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?=base_url();?>resources/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?=base_url();?>resources/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?=base_url();?>resources/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?=base_url();?>resources/admin/css/ugo-styles.css" rel="stylesheet">
    <link href="<?=base_url();?>resources/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-img3-body">

<div class="container">

<?php if(!empty($notice)) { ?><div class="alert-success" style="padding:10px; text-align: center;"><?php echo $notice; ?></div><br/> <?php } ?>

    <form method="post" class="login-form" action="<?=base_url('admin/login')?>" autocomplete="off">

        <?php if(!empty($error_msg)) { echo  "<div class='alert-danger' style='padding:10px;''>$error_msg</div>"; } ?>

        <?php echo validation_errors('<div class="alert-danger" style="padding:10px;">', '</div>'); ?>


        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>

            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">

                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            
        </div>
    </form>

</div>


</body>
</html>
