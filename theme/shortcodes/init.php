<?php
/**
 * 子ページ一覧
 */
add_shortcode( 'show_children', 'show_children_page' );
function show_children_page() {
	global $post;
	$page_id = get_the_ID();
	$args = array(
		'posts_per_page' => -1,
		'post_parent' => $page_id,
		'order' => 'ASC',
		'orderby' => 'menu_order'
	);
	$posts = new WP_Query( $args );
	$return = '<ul>';
	if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post();
	$return .= '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
	endwhile; endif;
	$return .= '</ul>';
	return $return;
}
