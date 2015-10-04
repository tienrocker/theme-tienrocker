<?php get_header(); ?>
<main role="main" class="content">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('parts/loop', 'single'); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part('parts/content', 'missing'); ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>