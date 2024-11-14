<?php
/*
Template Name: Tig Creator お問い合わせ
*/
?>
<?php get_header('form'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<header class="l_header">
		<h1><a href="<?php echo home_url(); ?>/tig-creator/"><img src="<?php echo cv_s3url_creator(); ?>/img/form/logo_tigCreator.webp" width="233" height="48" loading="lazy" alt="Tig Creator"></a></h1>
	</header>
	<section class="l_pageTitle c_tigCreator_pageTitle">
		<div class="l_container">
			<h1>お問い合わせ<span>Contact</span></h1>
		</div>
	</section>
	<section class="l_pageBody">
		<div class="l_container">
			<?php the_content(); ?>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer('form'); ?>
