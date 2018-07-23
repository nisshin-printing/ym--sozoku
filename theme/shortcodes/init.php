<?php
/**
 * 子ページ一覧
 */
add_shortcode( 'show_children', 'show_children_page' );
function show_children_page() {
	global $post;
	$page_id = $post->ID;
	$args = array(
		'post_type' => 'page',
		'posts_per_page' => -1,
		'post_parent' => $page_id,
	);
	$posts = new WP_Query( $args );
	$return = '<ul>';
	if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post();
	$return .= '<li><a href="' . get_the_permalink( $post->ID ) . '">' . get_the_title( $post->ID ) . '</a></li>';
	endwhile; endif;
	$return .= '</ul>';
	return $return;
}
