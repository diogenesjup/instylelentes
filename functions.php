<?php
/* WIDGETS */
//SUPORTE PARA FEATURED IMAGES
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
//DEFINIÇÃO DO TAMANHO DA IMAGEM
set_post_thumbnail_size(100, 75, true);
//SUPORTE PARA THEMES FORMAT
add_theme_support( 'post-formats', array( 'aside', 'gallery','status','video') );
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'Sidebar',
        'before_widget'	=> '<div class="widget">',
        'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
    ));
}


function set_newuser_cookie() {
	if ( is_front_page()) {
		setcookie( "googtrans", 1, time()+3600*24*100, "/", "patientcc.com", false);
	}
}
add_action( 'init', 'set_newuser_cookie');