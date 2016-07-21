<?php
/* 
 * template name: Serviços
 * 
 * 
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                            <a href=""><?php the_title(); ?></a>
                        </li>                    
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <!-- BEGIN: PAGE CONTENT -->
            
            <!-- BEGIN: CONTENT/FEATURES/FEATURES-13-2 -->
            <!-- BEGIN: FEATURES 13.4 -->
                <div class="c-content-box c-size-md c-no-padding c-bg-img-center" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/base/img/content/backgrounds/bg-3.jpg)">
                    <div class="c-content-feature-13">
                        <div class="row c-reset">
                            <div class="col-md-6 col-md-offset-6 c-bg-white">
                                <div class="c-feature-13-container">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">
                                        <?php the_field("subtitulo_da_pagina"); ?>
                                        </h3>
                                        <div class="c-line-left c-theme-bg"></div>
                                    </div>
                                    <div class="row">

                                        <?php

                                            if( have_rows('blocos_de_descrição') ):
                                               
                                                while ( have_rows('blocos_de_descrição') ) : the_row();

                                          ?>

                                        <div class="c-feature-13-tile">
                                            <i class="icon-star c-theme-font c-font-24"></i>
                                            <div class="c-feature-13-content">
                                                <h4 class="c-font-uppercase c-theme-font c-font-bold"> <?php the_sub_field('titulo_bloco'); ?></h4>
                                                <?php the_sub_field('texto_bloco'); ?>
                                            </div>
                                        </div>


                                        <?php          

                                                endwhile;

                                            endif;

                                          ?>
                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: FEATURES 13-4 -->
            <!-- END: CONTENT/FEATURES/FEATURES-13-2 -->

            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
	
<?php endwhile; endif; ?>

<?php get_footer(); ?>