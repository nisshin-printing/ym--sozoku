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
					if ( is_page( 'cases' ) || is_page( 'voice' ) ) {
						$is_tag = false;
						$is_type = ( is_page( 'cases' ) ) ? 'cases' : 'voice';
						$show_cat = ( is_page( 'cases' ) ) ? '92' : '124';
						include locate_template( './templates/page--cases-voice.php' );

					} else if ( is_page( 'members' ) ) {
						get_template_part( './templates/page--members' );

					} else if ( is_page( 'knowledge/contract/buying-point' ) ) {
						$page_id = '5601';
						include locate_template( './templates/page--kigyo.php' );

					} else if ( is_page( 'knowledge/contract/lease' ) ) {
						$page_id = '5604';
						include locate_template( './templates/page--kigyo.php' );

					} else if ( is_page( 'knowledge/contract/surrender' ) ) {
						$page_id = '5606';
						include locate_template( './templates/page--kigyo.php' );

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

					} else if ( is_page( 'fee' ) ) {
						$page_id = '459';
						include locate_template( './templates/page.php' );

					} else if ( is_singular( 'dtdsh-lp' ) ) {
						if ( is_single( 'jiko' ) ) {
							get_template_part( './templates/lp/jiko' );
						}

					} else if ( is_page() ) {
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
						echo '<p class="text-center"><a href="https://www.law-yamashita.com/contact" target="_blank"><img src="', get_template_directory_uri(), '/assets/img/banner_01.jpg" alt="広島の弁護士による労働災害の無料相談"></a></p>';


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
