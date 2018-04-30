<?php
	$news_pages = array( '5644', '5483', '5485' );
?>
<aside id="js--sidebar" class="sidebar">
<button class="sidenav--trigger__wrap">
	<a href="#" class="js--sidenav--button sidenav--trigger">
		<span></span>
		<span></span>
		<span></span>
	</a>
</button>
<div class="sidebar--item">
	<h5 class="sidebar--title">相談予約</h5>
	<p class="free-call"><a href="tel:0120783409"><?php NID_SVG::icon( 'phone', array( 'class' => 'free-call--icon' ), '電話する' ); ?>0120-7834-09</a></p>
	<p class="free-call--hours">平日9時～18時<br>土曜10時～17時</p>
	<p class="free-call--button"><a href="https://www.law-yamashita.com/contact" class="button large">お問い合わせ</a></p>
</div>
<div class="sidebar--item">
<h5 class="sidebar--title">メインメニュー</h5>
	<?php
		NID_Menu::nav_menu( 'primary', array(
			'container_class' => 'menu--side__wrap',
			'menu_direction' => 'vertical',
			'show_level_class' => true
		) );
	?>
</div>
</aside>
