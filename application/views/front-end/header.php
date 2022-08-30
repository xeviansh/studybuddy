<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="StudyPro - Education & Courses HTML5 Template" />
    <meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5" />
    <meta name="author" content="ThemeMascot" />




    <!-- Page Title -->
    <title>StudyBuddy</title>

    <!-- Favicon and Touch Icons -->
    <link href="<?php echo base_url(); ?>/assets/front-end/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="<?php echo base_url(); ?>/assets/front-end/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo base_url(); ?>/assets/front-end/images/apple-touch-icon-72x72.png" rel="apple-touch-icon"
        sizes="72x72">
    <link href="<?php echo base_url(); ?>/assets/front-end/images/apple-touch-icon-114x114.png" rel="apple-touch-icon"
        sizes="114x114">
    <link href="<?php echo base_url(); ?>/assets/front-end/images/apple-touch-icon-144x144.png" rel="apple-touch-icon"
        sizes="144x144">


    <!-- Stylesheet -->
    <link href="<?php echo base_url() ; ?>/assets/front-end/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ; ?>/assets/front-end/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ; ?>/assets/front-end/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ; ?>/assets/front-end/css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link href="<?php echo base_url() ; ?>/assets/front-end/css/menuzord-megamenu.css" rel="stylesheet" />
    <link id="menuzord-menu-skins"
        href="<?php echo base_url() ; ?>/assets/front-end/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="<?php echo base_url() ; ?>/assets/front-end/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="<?php echo base_url() ; ?>/assets/front-end/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="<?php echo base_url() ; ?>/assets/front-end/css/custom-bootstrap-margin-padding.css" rel="stylesheet"
        type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="<?php echo base_url() ; ?>/assets/front-end/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="<?php echo base_url() ; ?>/assets/front-end/css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="<?php echo base_url() ; ?>/assets/front-end/js/revolution-slider/css/settings.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() ; ?>/assets/front-end/js/revolution-slider/css/layers.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() ; ?>/assets/front-end/js/revolution-slider/css/navigation.css" rel="stylesheet"
        type="text/css" />


    <!-- CSS | Theme Color -->
    <link href="<?php echo base_url() ; ?>/assets/front-end/css/colors/theme-skin-color-set1.css" rel="stylesheet"
        type="text/css">

    <link href="<?php echo base_url() ; ?>/assets/front-end/css/custom-style.css" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url() ; ?>/assets/front-end/js/jquery-2.2.4.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="">

    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <div class="preloader-dot-loading">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    <header id="header" class="header modern-header modern-header-theme-colored">
        <div class="header-top bg-theme-colored2 sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="widget text-white new">
                            <marquee width="100%" direction="left" height="30%" style="margin-bottom:-13px;">
                                <a href="<?php echo base_url(); ?>"><img
                                        src="<?php echo base_url(); ?>/assets/front-end/images/new-blink.gif"></a>
                                Download the 25-Question PCE Sample Quize for free
                            </marquee>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <ul class="list-inline  text-right flip sm-text-center">
                                <li class="m-0 pl-10"> <a href="<?php echo base_url(); ?>login" class="text-white"><i
                                            class="fa fa-user-o mr-5 text-white"></i> Login /</a> </li>
                                <li class="m-0 pl-0 pr-10">
                                    <a href="<?php echo base_url(); ?>register" class="text-white"><i
                                            class="fa fa-edit mr-5 text-white"></i>Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-nav">
            <div class="header-nav-wrapper navbascrolltofixed">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="widget text-center">
                                <a href="<?php echo base_url(); ?>"><img
                                        src="<?php echo base_url();?>/assets/front-end/images/logo-white2.png"></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-6">
                            <div class="header-nav-wrappers navbascrolltofixed">

                                <nav id="menuzord" class="menuzord green" style="text-align:right">
                                    <ul class="menuzord-menu" style="display:inline-block">
                                        <li><a href="<?php echo base_url();?>">Home</a></li>
                                        <li><a href="<?php echo base_url();?>about">About Us</a></li>


                                        <li><a href="<?php echo base_url();?>course">Courses</a></li>


                                        <li><a href="<?php echo base_url();?>whyus">Why Us</a></li>
                                        <!-- <li><a href="#">Review</a> -->
                                            <!-- <?php echo anchor('https://www.google.com/search?client=ms-android-samsung&cds=0&hl=en-US&v=12.14.7.23.arm&output=search&q=NPTE+STUDYBUDDY&ludocid=5495843451348775121&lsig=AB86z5VqRee5LUXMP_f0-usZmLST&kgs=c4a20d44306707e4&shndl=-1&source=sh/x/kp/local/4&entrypoint=sh/x/kp/local#lrd=0x89c70bba94c020c7:0x4c45288032ccf0d1,1,,,', 'Reviews'); ?> -->


                                            <!-- Button trigger modal -->
                                            <!-- <button type="button" class="" data-toggle="modal" data-target="#myModal">
                                            </button> -->

                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">
                                                            </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <iframe
                                                                src="https://www.google.com/search?client=ms-android-samsung&cds=0&hl=en-US&v=12.14.7.23.arm&output=search&q=NPTE+STUDYBUDDY&ludocid=5495843451348775121&lsig=AB86z5VqRee5LUXMP_f0-usZmLST&kgs=c4a20d44306707e4&shndl=-1&source=sh/x/kp/local/4&entrypoint=sh/x/kp/local#lrd=0x89c70bba94c020c7:0x4c45288032ccf0d1,1,,,"></iframe>
                                                        </div>
                                                        <div class=" modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close</button>
                                                            <!-- <button type="button" class="btn btn-primary">Save
                                                                changes</button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>recentupdate">Recent Updates</a></li>
                                        <li><a href="<?php echo base_url(); ?>faqs">FAQ's</a></li>
                                        <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
                                      </ul>

                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>