<?php
	/**
	 * Template Name: フロントページ
	 */

	get_header();
?>
	<main>
		<?php get_template_part( './elements/fp-topheader' ); ?>


		<?php get_template_part( './elements/fp-welcome-mess' ); ?>


		<?php // get_template_part( 'elements/cta--jiko-lp' ); ?>



		<div class="row">
			<div class="column large-3 sidebar--wrap">
				<?php get_sidebar(); ?>
			</div>
			<div class="sidenav--overlay js--sidenav--button"></div>
			<div class="column small-12 large-8 contents --mt0 --pt0">
				<section class="contents--section contents--section__flow">
					<p>
						<img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/va.jpg'; ?>" alt="就業中や通勤中の思わぬ事故！私たちは被災者に寄り添い共に解決を目指します。">
					</p>
					<h2>発生から解決までの流れ</h2>
					<div class="box02">
						<table>
							<tbody>
								<tr>
									<th class="icon1">
										<img src="<?php echo get_template_directory_uri(), '/assets/img/icon_01.jpg'; ?>">事故発生</th>
									<td>
										<p class="text">
											業務中に事故にあわれたら治療を最優先してください。また、業務中や通勤途中の「交通」事故の場合には、警察や保険会社へも連絡する必要があります。事故発生時の事実関係を把握しておくことも重要です。</p>
									</td>
									<td class="box--button">
										<a href="<?php echo get_page_link( '6349' ), '#1'; ?>" target="_blank" class="button">詳しくはこちら</a>
									</td>
								</tr>
							</tbody>
						</table>
						<p class="arrow">
							<img alt="矢印" height="12" src="<?php echo get_template_directory_uri(), '/assets/img/arrow_flow.jpg'; ?>" width="54" />
						</p>
						<table>
							<tbody>
								<tr>
									<th class="icon2">
										<img src="<?php echo get_template_directory_uri(), '/assets/img/icon_02.jpg'; ?>">労災保険
										<br> 給付申請</th>
									<td>
										<p class="text">
											事故が起こったら労災保険の給付を受けるために、労働基準監督署へ給付申請をする必要があります。会社が労災の申請に協力してくれない場合は労働基準監督署や専門家にご相談することをお勧めいたします。</p>
									</td>
									<td class="box--button">
										<a href="<?php echo get_page_link( '6349' ), '#2'; ?>" target="_blank" class="button">詳しくはこちら</a>
									</td>
								</tr>
							</tbody>
						</table>
						<p class="arrow">
							<img alt="矢印" height="12" src="<?php echo get_template_directory_uri(), '/assets/img/arrow_flow.jpg'; ?>" width="54" />
						</p>
						<table>
							<tbody>
								<tr>
									<th class="icon3">
										<img src="<?php echo get_template_directory_uri(), '/assets/img/icon_03.jpg'; ?>">会社との
										<br /> 交渉
									</th>
									<td>
										<p class="text">
											会社側が提示する賠償金額が明らかに低い場合や、事故の責任を全否定し賠償金の支払いに応じてこない場合があります。弁護士に依頼をしていただくことで、使用者との対等な交渉が可能になります。</p>
									</td>
									<td class="box--button">
										<a href="<?php echo get_page_link( '6349' ), '#3'; ?>" target="_blank" class="button">詳しくはこちら</a>
									</td>
								</tr>
							</tbody>
						</table>
						<p class="arrow">
							<img alt="矢印" height="12" src="<?php echo get_template_directory_uri(), '/assets/img/arrow_flow.jpg'; ?>" width="54" />
						</p>
						<table>
							<tbody>
								<tr>
									<th class="icon4">
										<img src="<?php echo get_template_directory_uri(), '/assets/img/icon_04.jpg'; ?>">裁判
										<br /> 手続き
									</th>
									<td>
										<p class="text">
											会社との交渉が成立しない場合には、裁判によって最終的な賠償金額を争うことになります。労災保険では補えない、使用者の安全配慮義務違反や不法行為についても争うことができます。</p>
									</td>
									<td class="box--button">
										<a href="<?php echo get_page_link( '6349' ), '#4'; ?>" target="_blank" class="button">詳しくはこちら</a>
									</td>
								</tr>
							</tbody>
						</table>
						<p class="arrow">
							<img alt="矢印" height="12" src="<?php echo get_template_directory_uri(), '/assets/img/arrow_flow.jpg'; ?>" width="54" />
						</p>
						<table>
							<tbody>
								<tr>
									<th class="icon5">
										<img src="<?php echo get_template_directory_uri(), '/assets/img/icon_05.jpg'; ?>">解決</th>
									<td>
										<p class="text">
											労災に遭われた相談者の適切な賠償金の獲得を目指します。 &nbsp; &nbsp; &nbsp;</p>
									</td>
									<td class="box--button">
										<a href="<?php echo get_page_link( '5483' ); ?>" target="_blank" class="button">詳しくはこちら</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>


				<?php get_template_part( './elements/fp--access' ); ?>



				<?php
				$args = array(
					'posts_per_page' => 4,
					'post_status'    => 'publish'
				);
				$news = new WP_Query( $args );
				if ( $news->have_posts() ) :
			?>
					<div class="contents--section">
						<h2>
							<a href="<?php echo get_page_link( '5749' ); ?>">最新情報
								<span class="badge">　></span>
							</a>
						</h2>
						<?php
					while ( $news->have_posts() ) : $news->the_post();
				?>
							<dl>
								<dt>
									<span class="label secondary">
										<?php the_time( 'Y-m-d' ); ?>
									</span>
									<?php the_category( '　' ); ?>
								</dt>
								<dd>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</dd>
							</dl>
							<?php
					endwhile;
				?>
							<p class="text-center contents--section_button" style="margin-top: 2rem">
								<a href="<?php echo get_page_link( '5749' ); ?>" class="button large">
									<?php NID_SVG::icon( 'list', array() ); ?>お知らせ一覧</a>
							</p>
					</div>
					<?php endif; ?>


					<div class="contents--section">
						<h2>
							<a href="https://www.law-yamashita.com/topics" target="_blank">事務所の最新情報
								<span class="badge">　></span>
							</a>
						</h2>
						<?php
					$url = 'https://www.law-yamashita.com/feed';
					$url = sprintf( esc_html( "%s" ), $url );
					add_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					include_once( ABSPATH . WPINC . '/feed.php' );
					$feed = fetch_feed( $url );
					remove_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					$maxitems = 3;
					if ( ! is_wp_error( $feed ) ) {
						$maxitems = $feed->get_item_quantity( $maxitems );
						$rss_items = $feed->get_items( 0, $maxitems );
					}
					$site_title = $feed->get_title();
					$site_url = $feed->get_permalink();

					$output = '';
					date_default_timezone_set( 'Asia/Tokyo' );
					foreach ( $rss_items as $item ) {
						$f_link = esc_url( $item->get_permalink() );
						$f_date = $item->get_date( 'Y-m-d' );
						$f_title = esc_html( $item->get_title() );
						$f_category = '';
						foreach ( $item->get_categories() as $category ) {
							$f_category .= $category->get_label();
						}
						$output .= <<< EOM
<dl>
	<dt><span class="label secondary">{$f_date}</span>　<span class="label">{$f_category}</span></dt>
	<dd><a href="{$f_link}" target="_blank">{$f_title}</a></dd>
</dl>
EOM;
					}
					echo $output;
				?>
							<p class="text-center contents--section_button" style="margin-top: 2rem">
								<a href="https://www.law-yamashita.com/topics" class="button large" target="_blank">
									<?php NID_SVG::icon( 'list', array() ); ?>メインサイトのお知らせ一覧
									<br>
									<br>
									<span style="font-size:0.8em">※メインサイトへ移行します。</span>
								</a>
							</p>
					</div>

			</div>
		</div>
	</main>
	<?php get_footer(); ?>
