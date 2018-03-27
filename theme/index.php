<?php
if ( is_archive() || is_single() || is_home() ) {
	$title = 'お知らせ';
} else {
	$title = get_the_title();
}

	get_header();
?>
	<main>
		<header class="pageheader">
			<div class="row">
				<div class="column">
					<h1 class="pageheader--title">
						<?php echo $title; ?>
					</h1>
				</div>
			</div>
		</header>
		<?php NID_Crumbs::crumbs(); ?>
		<div class="row contents--wrap">
			<div class="column large-3 sidebar--wrap">
				<?php get_sidebar(); ?>
			</div>
			<div class="sidenav--overlay js--sidenav--button"></div>
			<div class="column contents">
				<?php
				if ( have_posts() ) {
					if ( is_page( 'service' ) ) {
						get_template_part( 'templates/page--service' );

					} else if ( is_page( 'cases' ) || is_page( 'voice' ) ) {
						$is_tag = false;
						$is_type = ( is_page( 'cases' ) ) ? 'cases' : 'voice';
						$show_cat = ( is_page( 'cases' ) ) ? '89' : '125';
						include locate_template( './templates/page--cases-voice.php' );

					} else if ( is_page( 'cases/head' ) ) {
						$is_tag = true;
						$is_type = 'cases';
						$show_cat = '111';
						include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/neck' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '110';
							include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/spinal' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '112';
							include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/shoulder' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '113';
							include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/arm' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '114';
							include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/pelvis' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '115';
							include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/leg' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '117';
							include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/knee' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '116';
							include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/face' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '118';
							include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/fatal-accident' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '119';
							include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/jyudo_syogai' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '364';
							include locate_template( './templates/page--cases-voice.php' );

						} else if ( is_page( 'cases/other' ) ) {
							$is_tag = true;
							$is_type = 'cases';
							$show_cat = '120';
							include locate_template( './templates/page--cases-voice.php' );

					} else if ( is_page( 'members' ) ) {
						get_template_part( './templates/page--members' );

					} else if ( is_page( 'access' ) ) {
						$page_id = '281';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'firm/dedication' ) ) {
						$page_id = '360';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'firm' ) ) {
						$page_id = '151';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'flow' ) ) {
						while( have_posts() ) : the_post();
							the_content();
						endwhile;
						$page_id = '423';
						include locate_template( './templates/page.php' );

					} else if ( is_singular( 'dtdsh-lp' ) ) {
						if ( is_single( 'jiko' ) ) {
							get_template_part( './templates/lp/jiko' );
						}

					} else if ( is_page() ) {
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;


					} else {
						while ( have_posts() ) : the_post();
							get_template_part( './templates/content' );
						endwhile;
					}

				} else {
					echo '<h2 class="text-center">記事がありません。</h2>';
				}
			?>
			</div>
			<div class="column small-12">
				<?php NID_Pagination::pagination(); ?>
			</div>
		</div>
	</main>
	<?php
	get_footer();
