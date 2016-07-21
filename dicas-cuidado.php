<?php
/* 
 * template name: Dicas e Cuidado
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
            <div class="c-content-box c-size-md ">
                <div class="container">
                    <div class="cbp-panel">
                        <div class="cbp-panel">
                        <div id="grid-container" class="cbp cbp-l-grid-faq">                         

                           <?php
                               $r = 0;
                                if( have_rows('itens') ):
                                   
                                    while ( have_rows('itens') ) : the_row();

                          ?>

                            <div class="cbp-item buying<?php echo $r; ?>">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <i class="fa fa-check-circle-o"></i> <?php the_sub_field('titulo_pergunta'); ?> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-body">
                                            <?php the_sub_field('resposta_pergunta'); ?>
                                        </div>
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
            </div>
            <!-- END: PAGE CONTENT -->
            <br><br><br><br>
	
<?php endwhile; endif; ?>

<?php get_footer(); ?>