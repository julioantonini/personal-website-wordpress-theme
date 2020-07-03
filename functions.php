<?php

add_theme_support( 'post-thumbnails' );

add_image_size( 'thumb_galeria', 500, 360, true );




function custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

remove_filter('the_excerpt', 'wpautop');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



define('WPLANG', 'pt_BR');
define ( 'AUTOMATIC_UPDATER_DISABLED' , true);
define( 'WP_AUTO_UPDATE_CORE', false );





function annointed_admin_bar_remove() {
        global $wp_admin_bar;

        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);



function remove_footer_admin () {
	echo '';
}
add_filter('admin_footer_text', 'remove_footer_admin');

/*  /*fim  */













/**
 * SEND FORM CONTATO
 */

function send_form_contato() {

  $to = 'seuemail@gmail.com';
  $subject = "[Personal site] Formulário de contato";
  $body = '
    <h1>Contato pelo Site</h1>
    <p><b>Nome:</b> </p> '.$_POST['nome'].'<br>
    <p><b>E-mail:</b> </p> '.$_POST['email'].'<br>
    <p><b>Mensagem:</b> </p> '.$_POST['mensagem'].'<br>
  ';
  $headers = array('Content-Type: text/html; charset=UTF-8', 'From: '.$_POST['nome'].' <'.$_POST['email'].'>');

  if(wp_mail($to, $subject, $body, $headers)) {
    $retorno = array(
      'titulo' => 'Pronto!',
      'mensagem' => 'Contato enviado com sucesso.'
    );
    echo json_encode($retorno);
  }
  else {
    $retorno = array(
      'titulo' => 'Ops...',
      'mensagem' => 'Ocorreu um erro ao tentar enviar sua mensagem, por favor tente novamente mais tarde.'
    );
    echo json_encode($retorno);
  }

  die();

}
add_action("wp_ajax_send_form_contato", "send_form_contato");
add_action("wp_ajax_nopriv_send_form_contato", "send_form_contato");
