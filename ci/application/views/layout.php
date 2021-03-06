<?php
/* jenal<warungkopidigital.blogspot.com> */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$baseurl = $this->config->item("base_url"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap, from Twitter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo $baseurl; ?>/public/css/bootstrap.css" rel="stylesheet">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <link href="<?php echo $baseurl; ?>/public/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="<?php echo $baseurl; ?>/public/js/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Project name</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            <?php
            $this->load->view($page);
            ?>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo $baseurl; ?>/public/js/jquery.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-transition.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-alert.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-modal.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-dropdown.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-scrollspy.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-tab.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-tooltip.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-popover.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-button.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-collapse.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-carousel.js"></script>
        <script src="<?php echo $baseurl; ?>/public/js/bootstrap-typeahead.js"></script>

    </body>
</html>
