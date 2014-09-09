<?php

function excerpt($limit) {

	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt)>=$limit)
	{
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} 
	else 
	{
		$excerpt = implode(" ",$excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);

	return $excerpt;

}

function themeblvd_time_ago() {
 
	global $post;
 
	$date = get_post_time('G', true, $post);
 
	/**
	 * Where you see 'themeblvd' below, you'd
	 * want to replace those with whatever term
	 * you're using in your theme to provide
	 * support for localization.
	 */ 
 
	// Array of time period chunks
	$chunks = array(
		array( 60 * 60 * 24 * 365 , __( 'año', 'themeblvd' ), __( 'años', 'themeblvd' ) ),
		array( 60 * 60 * 24 * 30 , __( 'mes', 'themeblvd' ), __( 'meses', 'themeblvd' ) ),
		array( 60 * 60 * 24 * 7, __( 'semana', 'themeblvd' ), __( 'semanas', 'themeblvd' ) ),
		array( 60 * 60 * 24 , __( 'día', 'themeblvd' ), __( 'días', 'themeblvd' ) ),
		array( 60 * 60 , __( 'hora', 'themeblvd' ), __( 'horas', 'themeblvd' ) ),
		array( 60 , __( 'minuto', 'themeblvd' ), __( 'minutos', 'themeblvd' ) ),
		array( 1, __( 'segundo', 'themeblvd' ), __( 'segundos', 'themeblvd' ) )
	);
 
	if ( !is_numeric( $date ) ) {
		$time_chunks = explode( ':', str_replace( ' ', ':', $date ) );
		$date_chunks = explode( '-', str_replace( ' ', '-', $date ) );
		$date = gmmktime( (int)$time_chunks[1], (int)$time_chunks[2], (int)$time_chunks[3], (int)$date_chunks[1], (int)$date_chunks[2], (int)$date_chunks[0] );
	}
 
	$current_time = current_time( 'mysql', $gmt = 0 );
	$newer_date = strtotime( $current_time );
 
	// Difference in seconds
	$since = $newer_date - $date;
 
	// Something went wrong with date calculation and we ended up with a negative date.
	if ( 0 > $since )
		return __( 'alguna vez', 'themeblvd' );
 
	/**
	 * We only want to output one chunks of time here, eg:
	 * x years
	 * xx months
	 * so there's only one bit of calculation below:
	 */
 
	//Step one: the first chunk
	for ( $i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];
 
		// Finding the biggest chunk (if the chunk fits, break)
		if ( ( $count = floor($since / $seconds) ) != 0 )
			break;
	}
 
	// Set output var
	$output = ( 1 == $count ) ? '1 '. $chunks[$i][1] : $count . ' ' . $chunks[$i][2];
 
 
	if ( !(int)trim($output) ){
		$output = '0 ' . __( 'segundos', 'themeblvd' );
	}
 
	//$output .= __(' ago', 'themeblvd');
 
	return $output;
}
 
// Filter our themeblvd_time_ago() function into WP's the_time() function
add_filter('the_time', 'themeblvd_time_ago');


function get_avatar_url($get_avatar){
    preg_match("/src='(.*?)'/i", $get_avatar, $matches);
    return $matches[1];
}



/**
 * Get the post views num
 * @param  int $postID ID of the post
 * @return int         count
 */
function getPostViews($postID){  
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

/**
 * Count views
 * @param id $postID ID of the post
 */
function setPostViews($postID) {  
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

/**
 * Count View when we load the_content and the_excerpt
 * @param  [type] $content [description]
 * @return [type]          [description]
 */
function count_views_automatically($content) {  
    // Count
    setPostViews($GLOBALS['post']->ID);
    // And return content
    return $content;
}
add_filter( 'the_content', 'count_views_automatically' );  
//add_filter( 'the_excerpt', 'count_views_automatically' );


function fields_profile( $contactmethods ){
 
	// Agregamos los nuevos campos, que necesitamos
	$contactmethods['twitter'] = 'Twitter';
	$contactmethods['facebook'] = 'Facebook';
	$contactmethods['plus'] = 'Google+';
 
	// Quitamos los campos que no necesitamos usar
	unset($contactmethods['aim']);  
	unset($contactmethods['jabber']);  
	unset($contactmethods['yim']);
 
	return $contactmethods;
}
add_filter('user_contactmethods','fields_profile',10,1);

if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );

function allow_contributor_uploads() {
		$contributor = get_role('contributor');
		$contributor->add_cap('upload_files');
}

add_filter('next_posts_link_attributes', 'next_link_attributes');
add_filter('previous_posts_link_attributes', 'prev_link_attributes');
 
function next_link_attributes() {
    return 'class="button right fi-arrow-right"';
}

function prev_link_attributes() {
    return 'class="button left fi-arrow-left"';
}
/*
function removeHeadLinks() {  
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');  
*/
?>