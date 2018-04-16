<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">

    <?php wp_head();?>

</head>

<body>
<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->
<div class="layout-theme header-type-3 animated-css"   data-header="sticky" data-header-top="200"  >
    <!-- Start Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
            <div class="form_holder">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="predefined_styles">
                            <div class="skin-theme-switcher">
                                <h4>Color</h4>
                                <a href="javascript:void(0);" data-switchcolor="color1" class="styleswitch" style="background-color:#fe5656;"> </a> <a href="javascript:void(0);" data-switchcolor="color2" class="styleswitch" style="background-color:#4fb0fd;"> </a> <a href="javascript:void(0);" data-switchcolor="color3" class="styleswitch" style="background-color:#ffc73c;"> </a> <a href="javascript:void(0);" data-switchcolor="color4" class="styleswitch" style="background-color:#ff8300;"> </a> <a href="javascript:void(0);" data-switchcolor="color5" class="styleswitch" style="background-color:#02cc8b;"> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <div id="wrapper">
        <div class="top-nav ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12  col-xs-12">
                        <div class="navbar yamm">
                            <div class="navbar-header hidden-md  hidden-lg  hidden-sm">
                                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                <a href="javascript:void(0);" class="navbar-brand">Menu</a> </div>
                            <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">

                                    <?php
                                        /*wp_nav_menu( array(
                                            'theme_location' => 'primary',
                                            'menu_id'        => 'primary-menu',
                                        ) );*/
                                    ?>
                                    <li><a href="javascript:void(0);">Home</a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li> <a href="home-1.html"> Home 1</a> </li>
                                            <li> <a href="home-2.html"> Home 2</a> </li>
                                            <li> <a href="home-3.html"> Home 3</a> </li>
                                            <li> <a href="home-4.html"> Home 4</a> </li>
                                            <li> <a href="home-5.html"> Home 5</a> </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-fw">
                                        <div class="nav-label-wrap"> <span class="nav-label nav-label_primary">new</span> </div>
                                        <a href="category-1.html">Shop</a> </li>
                                    <li><a href="javascript:void(0);">Category</a> </li>
                                    <li><a href="javascript:void(0);">Pages</a> </li>
                                    <li><a href="blog-1.html">Blog</a> </li>
                                    <li> <a href="about.html"> About Page</a> </li>
                                    <li> <a href="contact.html">Contact page</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end top-nav -->

