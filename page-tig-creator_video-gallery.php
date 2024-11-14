<?php
/*
Template Name: Tig Creator 動画ギャラリー
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W2HKK4D');</script>
	<!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<?php get_template_part('part/meta'); ?>
	<link href="<?php echo cv_s3url_creator(); ?>/css/sanitize.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
	<link href="<?php echo cv_s3url_creator(); ?>/css/form.min.css?ver=0.1.1" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W2HKK4D"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<header class="l_header">
			<h1><a href="<?php echo home_url(); ?>/tig-creator/"><img src="<?php echo cv_s3url_creator(); ?>/img/form/logo_tigCreator.webp" width="233" height="48" loading="lazy" alt="Tig Creator"></a></h1>
		</header>
		<section class="l_pageTitle c_tigCreator_pageTitle">
			<div class="l_container">
				<h1>お客様訪問！with Tig Creator<span>Short Video Gallery</span></h1>
			</div>
		</section>
		<section class="l_pageBody">
			<div class="l_container">
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; endif; ?>
	<footer class="l_footer">
		<div class="l_container">
			<div class="l_footer_title"><img src="<?php echo cv_s3url_creator(); ?>/img/form/logo_paronym.webp" width="307" height="25" loading="lazy" alt="PARONYM"></div>
			<address class="l_footer_address">TEL 03-6894-4086　[受付]　平日 10:00 〜 19:00 （土日祝除く）<br>
			〒104-0045　東京都中央区築地7-2-1　THE TERRACE TSUKIJI 6階 WEST</address>
			<div class="l_footer_copyright">&copy;PARONYM INC.</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
