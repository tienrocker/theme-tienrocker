<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="pingback" href="<?php bloginfo("pingback_url"); ?>"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="fa fa-home logo-fixed" href="/"></a>
    <?php if(is_home()) : ?>
    <div class="page-image">
        <div class="page-image-content"><?php bloginfo('description'); ?></div>
    </div>
    <header class="blog-header">
        <a class="blog-logo" href="/"><?php bloginfo('name'); ?></a>
        <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
        <h2 class="blog-description"><?php bloginfo('description'); ?></h2>
        <div class="social-links">
            <a class="icon-social[:icon]" target="_blank" href="http://www.facebook.com/i.do.game"><i class="fa fa-facebook"></i></a>
            &nbsp;&nbsp;·&nbsp;&nbsp;
            <a class="icon-social[:icon]" target="_blank" href="https://twitter.com/tienrocker"><i class="fa fa-twitter"></i></a>
            &nbsp;&nbsp;·&nbsp;&nbsp;
            <a class="icon-social[:icon]" target="_blank" href="https://github.com/tienrocker"><i class="fa fa-github"></i></a>
        </div>
    </header>
    <?php endif; ?>