<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/sass/style.css'; ?>">
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/main.js'; ?>"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
