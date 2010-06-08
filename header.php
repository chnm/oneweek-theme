<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="Shortcut Icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrap">	
		<div id="header">
			<a id="logo" href="<?php bloginfo('url'); ?>/"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/oneweek-logo.gif" alt="<?php echo bloginfo('name'); ?>"/></a>
			<p id="desc"><?php bloginfo('description'); ?></p>			
		</div>
		<ul id="nav">
		    <?php wp_list_pages('title_li=&depth=1&exclude=46,48'); ?>
		</ul>
		<div id="content" class="group">
		    <div id="primary">