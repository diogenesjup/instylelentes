<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
  <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold"><?php the_title(); ?></h3>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="<?php echo get_option('home'); ?>/">Home</a>
                        </li>
                        <li>/</li>
                        <li>
                            <a href="#"><?php the_title(); ?></a>
                        </li>                    
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/MISC/ABOUT-2 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 wow animate fadeInUp">
                           
                           <?php the_content(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/MISC/ABOUT-2 -->
            <!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-4 -->
            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="c-content-media-2-slider" data-slider="owl" data-single-item="true" data-auto-play="4000">
                                <div class="c-content-label c-font-uppercase c-font-bold">Nosso escritório</div>
                                <div class="owl-carousel owl-theme c-theme owl-single">

                                  <?php

                                    if( have_rows('fotos_do_escritorio',13) ):

                                        while ( have_rows('fotos_do_escritorio',13) ) : the_row();

                                            ?>

                                            <div class="item">
                                                <div class="c-content-media-2 c-bg-img-center" style="background-image: url(<?php the_sub_field('foto'); ?>); min-height: 380px;">
                                                    <div class="c-panel"> 
                                                    </div>
                                                </div>
                                            </div>

                                            <?php

                                        endwhile;

                                    endif;

                                    ?>
                                                                            
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="c-content-media-1" style="height: 380px;">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Missão</div>
                                <a href="#" class="c-title c-font-uppercase  c-font-bold c-theme-on-hover">Oferecer produtos e serviços de qualidade</a>
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Valores</div>
                                <a href="#" class="c-title c-font-uppercase  c-font-bold c-theme-on-hover">Valores: Respeito, comprometimento e transparência.</a>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/MISC/LATEST-ITEMS-4 -->
                      
           
                    </div>
                    <!-- End-->
                </div>
            </div>
            <!-- END: CONTENT/SLIDERS/CLIENT-LOGOS-1 -->
            
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->


<?php endwhile; endif; ?>

<?php get_footer(); ?>