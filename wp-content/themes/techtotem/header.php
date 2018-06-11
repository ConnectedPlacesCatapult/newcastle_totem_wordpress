<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!--meta name="viewport" content="width=device-width, initial-scale=1.0"--> 

	<?php
	/* PAGE TITLE */
	if ( ! function_exists( '_wp_render_title_tag' ) ) {
		function theme_slug_render_title() { ?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php }
			add_action( 'wp_head', 'theme_slug_render_title' );
	}

	/* STOP IE TURNING PHONE NUMBERS INTO UGLY FORMATTED LINKS */
	?>
	<meta name="format-detection" content="telephone=no" />

	<?php
	/* RSS FEED */
	?>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<?php
	/* WORDPRESS HEAD
	 * Do not remove. Needed by WordPress and plugins to insert scripts into the head
	 */
	wp_head();
	?>

</head>

<body id="totem-<?php echo get_current_blog_id(); ?>" <?php body_class(); ?>>

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- CONTENT: MAIN -->
		<div class="content-main">