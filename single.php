<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold"><?php the_category(", "); ?></h3>
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
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->
            <div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
                <div class="container">
                    <div class="c-shop-product-details-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-product-gallery">
                                    <div class="c-product-gallery-content">

                                <?php

                                if( have_rows('fotos_do_produto') ):

                                    while ( have_rows('fotos_do_produto') ) : the_row();

                                ?>
                                        <div class="c-zoom">
                                            <img src="<?php the_sub_field('imagem_produto'); ?>"> 
                                       </div>
                                <?php

                                    endwhile;

                                endif;

                                ?>       
                                       


                                    </div>
                                    <div class="row c-product-gallery-thumbnail">
                                        
                                <?php

                                if( have_rows('fotos_do_produto') ):

                                    while ( have_rows('fotos_do_produto') ) : the_row();

                                ?>
                                        <div class="col-xs-3 c-product-thumb">
                                            <img src="<?php the_sub_field('imagem_produto'); ?>"> 
                                        </div>
                                <?php

                                    endwhile;

                                endif;

                                ?>        
                                        

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="c-product-meta">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold"><?php the_title(); ?></h3>
                                        <h4 class="c-font-uppercase c-font-bold"><?php the_field("codigo"); ?></h4>
                                        <?php the_field("texto_do_produto"); ?>
                                        <div class="c-line-left"></div>
                                    </div>
                                    

                                    <div class="c-product-add-cart c-margin-t-20">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12 c-margin-t-20">
                                                <a href="<?php echo get_option('home'); ?>/contato" class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->            
           
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>