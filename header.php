<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->

<!--<html lang="pt-br"> -->

<html lang="pt-br">

<!--<![endif]--><head>

<!-- Basic Page Needs

================================================== -->

<meta charset="UTF-8">

<?php

if ( ! function_exists( '_wp_render_title_tag' ) ) {

  function theme_slug_render_title() {

?>

<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php

  }

  add_action( 'wp_head', 'theme_slug_render_title' );

}

?>



<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta http-equiv="Content-type" content="text/php; charset=utf-8">
<meta content="" name="description" />
<meta content="" name="Neodream websolutions" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN THEME STYLES -->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/base/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/base/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" /> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/sweetalert2.min.css">  



<?php wp_head(); ?>


</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
            <div class="c-topbar c-topbar-light">
                <div class="container">
                    <!-- BEGIN: INLINE NAV -->
                    <nav class="c-top-menu c-pull-left">
                        <ul class="c-icons c-theme-ul">
                            
                            <li >
                                <span><i class="fa fa-phone"></i> Centro: 11 3229 3116 | Tatuapé: 11 2091 2515</span>
                            </li>
                        </ul>
                    </nav>
                    <!-- END: INLINE NAV -->
                    <!-- BEGIN: INLINE NAV -->
                    <nav class="c-top-menu c-pull-right">
                        <ul class="c-icons c-theme-ul">
                            <li>
                                <a href="#">
                                   <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/instyle.lentes">
                                    <i class="fa fa-facebook-official"></i>
                                </a>
                            </li>
                           
                            <li >
                                
                            </li>
                        </ul>
                    </nav>
                    <!-- END: INLINE NAV -->
                </div>
            </div>
            <div class="c-navbar">
                <div class="container">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="<?php echo get_option('home'); ?>/" class="c-logo">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/img/layout/logos/logo-3.png" alt="Instyle lentes" class="c-desktop-logo">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/img/layout/logos/logo-3.png" alt="Instyle lentes" class="c-desktop-logo-inverse">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/img/layout/logos/logo-3.png" alt="Instyle lentes" class="c-mobile-logo"> </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                        </div>
                        <!-- END: BRAND -->
                        
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                       <!-- BEGIN: MENU -->
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li><a href="<?php echo get_option('home'); ?>/" class="c-link dropdown-toggle">Home</a> </li>
                                <li><a href="<?php echo get_option('home'); ?>/empresa" class="c-link dropdown-toggle">Empresa</a> </li>
                
                                <li class="c-menu-type-classic">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Produtos
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                     
                                         <?php
                                            $args = array('hide_empty'=>1);
                                            $my_categories = get_categories($args);
                                         ?>
                                              <?php foreach( $my_categories as $category ):

                                                    if($category->term_id != 4):
                                         ?>
                                                <li class="dropdown-submenu"><a href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name;?><span class="c-arrow c-toggler"></span></a><li>
                                              <?php 

                                                    endif;


                                              endforeach; ?>
                                    </ul>
                                <li>
                
                                <li><a href="<?php echo get_option('home'); ?>/servicos" class="c-link dropdown-toggle">Serviços</a> </li>
                                <li><a href="<?php echo get_option('home'); ?>/dicas" class="c-link dropdown-toggle">Dicas e cuidados</a> </li>
                                <li><a href="<?php echo get_option('home'); ?>/unidades" class="c-link dropdown-toggle">Unidades</a> </li>
                                <li><a href="<?php echo get_option('home'); ?>/contato" class="c-link dropdown-toggle">Contato</a> </li>
                            </ul>    
                        </nav>
                        <!-- BEGIN: END MENU -->
                        <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->
                    </div>
                </div>
            </div>
        </header>
        <!-- END: HEADER -->
        <!-- END: LAYOUT/HEADERS/HEADER-1 -->









                      



