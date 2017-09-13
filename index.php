<?php
/*
  Plugin Name: Sparkline
  Plugin URI: https://github.com/nilspersson/AtF-Spark
  Description: A simple plugin to enable inline charts powered by the Spark font by After the Flood.
  Version: 0.1
  Author: Nils Persson
  Author URI: http://nilspersson.se/
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// The Shortcode
function atf_spark_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'start' => '123',
      'data' => '10,20,30,40,50,60,70,80,90,100',
			'end' => '789',
      'type' => 'bar-medium',
		),
		$atts,
		'spark'
	);

  // Filter data
  $noSpaces = str_replace(" ", "", $atts['data']);
  $allValues = explode(",", $noSpaces);
  $validValues = array_filter($allValues, function($x) {
    return is_numeric($x);
  });
  $dataString = implode(",", $validValues);

  // Return HTML
	return '<span class="atf-spark atf-spark--' . $atts['type'] . '">'
    . $atts['start']
    . '{'
    . $dataString
    . '}'
    . $atts['end']
    . '</span>';
}
add_shortcode( 'spark', 'atf_spark_shortcode' );

function atf_spark_css() {
  global $post;
  if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'spark') ) {
    wp_enqueue_style('atf-spark-css', plugin_dir_url( __FILE__ ) . '/atf-spark.css?ver=' . (string)rand());
  }
}
add_action( 'wp_enqueue_scripts', 'atf_spark_css' )

?>
