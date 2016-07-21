<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
        <a name="footer"></a>
        <footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
              <div class="c-postfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-col">
                            <p class="c-copyright c-font-grey"><?php echo date("Y"); ?> &copy; Instyle lentes | &nbsp;&nbsp;
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
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/js/components.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/js/components-shop.js" type="text/javascript"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/js/app.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/sweetalert2.min.js"></script> 
        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });
        </script>
        <script type="text/javascript">
           // 
            // SCRIPT PARA ATUALIZAÇÂO DE URL SLIDE 1
            //
            var ajaxSubmit = function(form) {
                // fetch where we want to submit the form to
                var url = $(form).attr('action');
                var flag = 9;
                // fetch the data for the form
                var data = $(form).serializeArray();

                // setup the ajax request
                $.ajax({
                    url: url,
                    data: data,
                    dataType: 'json',
                    type:'POST'
                });
              //$('#sucesso').html('<div class="alert alert-success"><b>Mensagem enviada com <b>sucesso</b>!</div>');
                swal("Obrigado!", 'Sua mensagem foi enviada com sucesso', "success");
                           //$("#formE").fadeOut(0);
                // return false so the form does not actually
                // submit to the page
                return false;
            }
    </script>
        <!-- END: THEME SCRIPTS -->
          
           <!-- BEGIN: PAGE SCRIPTS -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/base/js/scripts/pages/faq.js" type="text/javascript"></script>
        <!-- END: PAGE SCRIPTS -->
          
          
          
          
        <!-- BEGIN: PAGE SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                var slider = $('.c-layout-revo-slider .tp-banner');
                var cont = $('.c-layout-revo-slider .tp-banner-container');
                var height = (App.getViewPort().width < App.getBreakpoint('md') ? 400 : 620);
                var api = slider.show().revolution(
                {
                    sliderType: "standard",
                    sliderLayout: "fullwidth",
                    delay: 15000,
                    autoHeight: 'off',
                    touchenabled: "on",
                    navigation:
                    {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        arrows:
                        {
                            style: "circle",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left:
                            {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right:
                            {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        }
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    disableProgressBar: "on",
                    fullScreenOffsetContainer: '.tp-banner-container',
                    hideThumbsOnMobile: "on",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "on",
                    hideArrowsOnMobile: "on",
                    hideThumbsUnderResolution: 0,
                });
            }); //ready
        </script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/zoom-master/jquery.zoom.min.js" type="text/javascript"></script>
        <?php wp_footer(); ?>
        <!-- END: PAGE SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    </body>

</html>