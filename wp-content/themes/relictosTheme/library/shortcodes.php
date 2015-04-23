<?php

// shortcodes

// Gallery shortcode
remove_shortcode('gallery');
add_shortcode('gallery', 'parse_gallery_shortcode');

function parse_gallery_shortcode($atts) {
 
    global $post;
 
    if ( ! empty( $atts['ids'] ) ) {
        // 'ids' is explicitly ordered, unless you specify otherwise.
        if ( empty( $atts['orderby'] ) )
            $atts['orderby'] = 'post__in';
        $atts['include'] = $atts['ids'];
    }
 
    extract(shortcode_atts(array(
        'orderby' => 'menu_order ASC, ID ASC',
        'include' => '',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => '900-450',
        'link' => 'file'
    ), $atts));
 
 
    $args = array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'post_mime_type' => 'image',
        'link' => 'file',
        'orderby' => $orderby
    );
 
    if ( !empty($include) )
        $args['include'] = $include;
    else {
        $args['post_parent'] = $id;
        $args['numberposts'] = -1;
    }
 
    $images = get_posts($args);

	if ($images) {
		$output = '<ul class="slides">';
		foreach ( $images as $image ) {
			$output .= '<li>';
			$att_title = apply_filters( 'the_title' , $attachment->post_title );
			$output .= wp_get_attachment_image( $image->ID , $size );
			$output .= '</li>';
		}
		$output .= '</ul>';
	}
	return $output;
     
    // foreach ( $images as $image ) {     
    //     $caption = $image->post_excerpt;
 
    //     $description = $image->post_content;
    //     if($description == '') $description = $image->post_title;
 
    //     $image_alt = get_post_meta($image->ID,'_wp_attachment_image_alt', true);
 
    //     // render your gallery here
    //     echo wp_get_attachment_image($image->ID, $size);        
    // }
}

// remove the standard shortcode
//remove_shortcode('gallery', 'gallery_shortcode');
//add_shortcode('gallery', 'gallery_shortcode_tbs');

// function gallery_shortcode_tbs($attr) {
// 	global $post, $wp_locale;

// 	$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
// 	$attachments = get_posts($args);
// 	if ($attachments) {
// 		$output = '<ul class="block-grid four-up">';
// 		foreach ( $attachments as $attachment ) {
// 			$output .= '<li>';
// 			$att_title = apply_filters( 'the_title' , $attachment->post_title );
// 			$output .= wp_get_attachment_link( $attachment->ID , 'thumbnail', true );
// 			$output .= '</li>';
// 		}
// 		$output .= '</ul>';
// 	}

// 	return $output;
// }

// Buttons
function buttons( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'type' => 'radius', /* radius, round */
	'size' => 'medium', /* small, medium, large */
	'color' => 'blue',
	'nice' => 'false',
	'url'  => '',
	'text' => '', 
	), $atts ) );
	
	$output = '<a href="' . $url . '" class="button '. $type . ' ' . $size . ' ' . $color;
	if( $nice == 'true' ){ $output .= ' nice';}
	$output .= '">';
	$output .= $text;
	$output .= '</a>';
	
	return $output;
}

add_shortcode('button', 'buttons'); 

// Alerts
function alerts( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'type' => '	', /* warning, success, error */
	'close' => 'false', /* display close link */
	'text' => '', 
	), $atts ) );
	
	$output = '<div class="fade in alert-box '. $type . '">';
	
	$output .= $text;
	if($close == 'true') {
		$output .= '<a class="close" href="#">×</a></div>';
	}
	
	return $output;
}

add_shortcode('alert', 'alerts');

// Panels
function panels( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'type' => '	', /* warning, success, error */
	'close' => 'false', /* display close link */
	'text' => '', 
	), $atts ) );
	
	$output = '<div class="panel">';
	$output .= $text;
	$output .= '</div>';
	
	return $output;
}

add_shortcode('panel', 'panels');
?>