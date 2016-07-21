<?php get_header(); ?>
 <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold"><?php echo single_cat_title(); ?></h3>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="<?php echo get_option('home'); ?>/">Home</a>
                        </li>
                        <li>/</li>
                        <li>
                            <a href="#"><?php echo single_cat_title(); ?></a>
                        </li>                    
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <!-- BEGIN: PAGE CONTENT -->
            <!-- Begin: Content box -->
            <div class="c-content-box c-size-md">
                <div class="container">
                    <!-- Begin: Cubeportfolio grid -->
                    <div class="cbp-panel">
            
                        <div id="grid-container" class="cbp">
                           

                               <?php                                                  

                                  while ( have_posts() ) : the_post(); 
                                  $foto_destaque = get_field("foto_destaque_produto");

                              ?>              
                                  <!-- produto-->
                                  <div class="cbp-item graphic" style="width:33%;">
                                                    <div class="cbp-caption">
                                                        <div class="cbp-caption-defaultWrap">
                                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $foto_destaque; ?>" alt=""></a> </div>
                                                    </div>
                                                    <a href="<?php the_permalink(); ?>" class="cbp-singlePage cbp-l-grid-masonry-projects-title"><?php the_title(); ?></a>
                                                    <div class="cbp-l-grid-masonry-projects-desc"><?php the_field("codigo"); ?></div>
                                                </div>
                                  <!-- produto-->
                              <?php 
                                 
                                 endwhile;?>

  <div class="c-margin-t-60"></div>

    <ul class="c-content-pagination c-square c-theme pull-left">      
           <?php previous_posts_link('<li class="c-prev"><i class="fa fa-angle-left"></i></li>', $the_query->max_num_pages) ?>
           <?php next_posts_link('<li class="c-next"><i class="fa fa-angle-right"></i></li>', $the_query->max_num_pages) ?>        
    </ul>


                                 <?php
                                 wp_reset_postdata();

                              ?>

                        </div>
                        <!-- END: CONTENT/SHOPS/SHOP-2-8 -->
                        
                        
                    </ul>
                    <!-- END: PAGE CONTENT -->
                    </div>
                    <!-- End-->
                </div>
            </div>
            <!-- End-->            
            
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->



  <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
 <a name="footer"></a>
        <footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
              <div class="c-postfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-col">
                            <p class="c-copyright c-font-grey">2016 &copy; Instyle lentes | &nbsp;&nbsp;
                                <i class="fa fa-phone"></i>&nbsp;&nbsp;Centro: 11 3229-3113 | Tatuapé: 11 2091 2515</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END: LAYOUT/FOOTERS/GO2TOP -->
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
  <script src="../<?php bloginfo('stylesheet_directory'); ?>/assets/global/plugins/excanvas.min.js"></script> 
  <![endif]-->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/js/components.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/js/components-shop.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/js/app.js" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- BEGIN: PAGE SCRIPTS -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/js/scripts/pages/extended-portfolio.js" type="text/javascript"></script>
        <!-- END: PAGE SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
        <?php wp_footer(); ?>
    </body>

</html>