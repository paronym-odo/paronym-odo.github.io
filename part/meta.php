<title><?php if (get_field('meta_title')) : ?><?php the_field('meta_title'); ?><?php endif; ?></title>
<meta name="description" content="<?php if (get_field('meta_description')) : ?><?php the_field('meta_description'); ?><?php endif; ?>">
<meta property="og:url" content="<?php echo get_the_permalink();?>">
<meta property="og:type" content="<?php if (get_field('meta_ogType')) : ?><?php the_field('meta_ogType'); ?><?php endif; ?>">
<meta property="og:title" content="<?php if (get_field('meta_title')) : ?><?php the_field('meta_title'); ?><?php endif; ?>">
<meta property="og:description" content="<?php if (get_field('meta_description')) : ?><?php the_field('meta_description'); ?><?php endif; ?>">
<meta property="og:site_name" content="<?php if (get_field('meta_ogSiteName')) : ?><?php the_field('meta_ogSiteName'); ?><?php endif; ?>">
<meta property="og:image" content="<?php if (get_field('meta_ogImage')) : ?><?php the_field('meta_ogImage'); ?><?php endif; ?>">
