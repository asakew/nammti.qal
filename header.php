<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/bootstrap.min.css">
		<?php
		if( is_front_page() ) { ?>
			<link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/carousel.css">
		<?php }?>
	</head>
	<body>
		<?php //get_template_part( 'inc/navbar' ); ?>
		<?php //get_template_part( 'inc/front-carousel' ); ?>