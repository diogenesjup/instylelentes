<?php
/* 
 * template name: Contato
 * 
 * 
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
   <!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
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
            <!-- BEGIN: CONTENT/CONTACT/CONTACT-1 -->
            <div class="c-content-box c-size-md c-bg-img-top c-no-padding c-pos-relative">
                <div class="container">
                    <div class="c-content-contact-1 c-opt-1">
                        <div class="row" data-auto-height=".c-height">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/CONTACT/CONTACT-1 -->
            <!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-feedback-1 c-option-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-container c-bg-green c-bg-img-bottom-right" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/base/img/content/misc/feedback_box_1.png)">
                                    <div class="c-content-title-1 c-inverse">
                                        <h3 class="c-font-uppercase c-font-bold">Telefones:</h3> <div class="c-line-left"></div>
                                        <p class="c-font-lowercase"><?php echo the_field("telefones",15); ?></p><br>
                                        
                                        <h3 class="c-font-uppercase c-font-bold">Whatsapp:</h3> <div class="c-line-left"></div>
                                        <p class="c-font-lowercase"><?php echo the_field("whatssapp",15); ?></p><br>
                                        
                                        <h3 class="c-font-uppercase c-font-bold">Skype:</h3> <div class="c-line-left"></div>
                                        <p class="c-font-lowercase"><?php echo the_field("skype",15); ?></p>
                                        <h3 class="c-font-uppercase c-font-bold">Facebook:</h3> <div class="c-line-left"></div>
                                        <p class="c-font-lowercase"><?php echo the_field("facebook",15); ?></p>
                                        

                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">Fale conosco</h3>
                                        <div class="c-line-left"></div>
                                        <p class="c-font-lowercase">Entre em contato conosco para tirar suas dúvidas.</p>
                                    </div>
                                    <form action="<?php bloginfo('stylesheet_directory'); ?>/send.php" method="post" onSubmit="return ajaxSubmit(this);">
                                        <div class="form-group">
                                            <input type="text" placeholder="Nome" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="E-mail" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Telefone" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <textarea rows="8" name="Mensagem" placeholder="Sua mensagem" class="form-control c-theme c-square input-lg"></textarea>
                                        </div>
                                        <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/CONTACT/FEEDBACK-1 -->
            
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->

	
<?php endwhile; endif; ?>

<?php get_footer(); ?>