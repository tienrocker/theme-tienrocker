<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<?php wp_head(); ?>
<style type="text/css">
    .footer{background-color: #f5f5f5;color: #999999;line-height: 40px}.source-org{margin: 0; padding: 0}
</style>
</head>
<body <?php body_class(); ?>>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <div id="container">
            <header class="header" role="banner">
                <?php get_template_part('parts/nav', 'top-offcanvas'); ?>
            </header>
            <!-- end .header -->