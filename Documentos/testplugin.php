<?php
/**
 * Plugin Name: Prueba_Ilumno
 * Plugin URI: 
 * Description: Inserta un banner de publicidad con el shortcode banner
 * Version: 1.0.0
 * Author: Ivan Franco
 * Author URI: 
 * License: 
 */


 function mi_plugin_activate() {
	// Consulta la base de datos para ver si existe una página con el título "Página de Wordpress"
	$pagina = get_page_by_title( 'Página de Wordpress', OBJECT, 'page' );
	// Si existe, obtiene el número de consecutivo de la última página creada
	if ( $pagina ) {
	  $consecutivo = intval( substr( $pagina->post_title, -1 ) );
	}
	// Si no existe, establece el número de consecutivo a 1
	else {
	  $consecutivo = 1;
	}
	// Crea un nuevo título de página con el número de consecutivo encontrado más uno
	$titulo = "Página de Wordpress " . ( $consecutivo + 1 );
	// Crea el array con los datos de la página
	// Crea el array con los datos de la página

	$pagina = array(
	  'post_title' => $titulo,
	  'post_name' => 'test_wordpress', // Establece el slug de la página
	  'post_content' => '[test_add_message] Contenido de la página',
	  'post_status' => 'publish',
	  'post_type' => 'page'
	);
	// Inserta la página en la base de datos
	wp_insert_post( $pagina );
  }
 register_activation_hook( __FILE__, 'mi_plugin_activate' );
  
  function mi_plugin_deactivate() {
	// Consulta la base de datos para obtener la página creada por el plugin
	$pagina = get_page_by_title( 'Página de Wordpress', OBJECT, 'page' );
	// Si existe, elimina la página
	if ( $pagina ) {
	  wp_delete_post( $pagina->ID, true );
	}
  }
  register_deactivation_hook( __FILE__, 'mi_plugin_deactivate' );
  
  function test_add_message_shortcode() {
	return 'Mensaje añadido por el shortcode';
  }
  
  add_shortcode( 'test_add_message', 'test_add_message_shortcode' );

/*
add_shortcode( "banner", function($atts, $content){
	$output = '<div style="background-color: #00A9FF; font-size: 14px; line-height: 24px; color: #070707; text-align: center; padding: 6px 18px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,</div>';
	return $output;
});*/
?>