<?php
/* 
 * template name: Unidades
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
            
              <!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-3 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="c-content-media-1 c-bordered wow animated fadeInLeft" style="min-height: 380px;">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Nossas unidades</div>
                                <p><br>
<b>Centro:</b> <br>
Avenida Senador Queiroz, 605 13º andar sala 1306<br>
CEP 01.026-001<br>
Tel: 11 3229-3113 | 3315-9208<br><br>

<b>Tatuapé:</b><br>
Rua Padre Estevão Pernet, 160 sala 1405<br>
CEP 03315-000<br>
Tel: 11 2091-2515<br>




</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="c-content-media-2-slider wow animated fadeInRight" data-slider="owl" data-single-item="true" data-auto-play="4000">                    
                                <div class="owl-carousel owl-theme c-theme owl-single">
                                    <div class="item">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/base/img/content/stock3/2.jpg); min-height: 380px;">
                                            <div class="c-panel"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/base/img/content/stock3/1.jpg); min-height: 380px;">
                                            <div class="c-panel">  
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="item">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/); min-height: 380px;">
                                            <div class="c-panel">  
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/MISC/LATEST-ITEMS-3 -->

	
<?php endwhile; endif; ?>

<?php get_footer(); ?>