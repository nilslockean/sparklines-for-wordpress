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
function atf_spark_shortcode( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'start' => '10',
			'end' => '20',
      'type' => 'bar-medium',
		),
		$atts,
		'spark'
	);

  // Filter data
  $noSpaces = str_replace(" ", "", $content);
  $allValues = explode(",", $noSpaces);
  $validValues = array_filter($allValues, function($x) {
    return is_numeric($x);
  });
  $dataString = implode(",", $validValues);

  // Return HTML
	return '<span class="atf-spark--' . $atts['type'] . '">'
    . $atts['start']
    . '{'
    . $dataString
    . '}'
    . $atts['end']
    . '</span>';
}
add_shortcode( 'spark', 'atf_spark_shortcode' );

?>
