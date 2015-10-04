<?php if (is_single()) : ?>
    <div class="bottom-closer">
        <div class="background-closer-image"><?php bloginfo('name'); ?></div>
        <div class="inner">
            <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
            <h2 class="blog-description"><?php bloginfo('description'); ?></h2>
            <a class="btn" href="/">Back to Overview</a>
        </div>
    </div>
<?php endif; ?>
<footer class="footer" role="contentinfo"> 
    <p class="navbar-right">&copy; 2013 - <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>