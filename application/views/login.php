<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
    <!-- Le styles -->
	<link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/stylesheet.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.html">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.html">
                    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.html">
                                   <link rel="shortcut icon" href="img/favicon.png">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">+</h1>

            </div>
            <h3>Welcome to Puskesmas+</h3>
            <p>
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" id="logform" name="logform" role="form" action="<?php echo base_url()?>home/loginAct" method="post">
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>


                
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>

</body>

  <!-- <body class="blue-login">

    <div class="login-container">
        <div class="login-header bordered">
            <h4>Login Pegawai</h4>
        </div>
        <form id="logform" name="logform" action="<?php echo base_url() ?>home/loginAct" method="post">
            <div class="login-field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <i class="icon-user"></i>
            </div>
            <div class="login-field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <i class="icon-lock"></i>
            </div>
            <div class="login-button clearfix">
                <button type="submit" class="pull-right btn btn-large blue">Login</button>
            </div>
        </form>
    </div>

    <div id="forgot-pw" class="modal hide fade" tabindex="-1" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
            <h3>Forgot your password?</h3>
        </div>
        <div class="modal-body">
            <div class="row-fluid">
                <div class="span12">
                    <div class="form_row">
                        <label class="field_name">Email address</label>
                        <div class="field">
                            <div class="row-fluid">
                                <div class="span8">
                                    <input type="text" class="span12" name="email" placeholder="example@domain.com">
                                </div>
                                <div class="span4">
                                    <a href="#" class="btn btn-block blue">Reset password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url()?>js/jquery-ui-1.10.3.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>



    <script>
        jQuery(document).ready(function($) {
            $('.uniform').uniform();
        });
    </script>

  </body>
</html>
