<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post() ?>
        <?php
        $posttags = get_the_tags();
        $posttags = $posttags ? $posttags : array();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class("post"); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
            <div class="article-item">
                <header class="post-header">
                    <h2 class="post-title" itemprop="name">
                        <a itemprop="url" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </h2>                    
                    <div class="post-meta">
                        <time datetime="<?php get_the_date('d-m-Y'); ?><?php get_post_time('H:i', TRUE); ?>"><?php echo get_the_date('d-m-Y'); ?></time>
                        <?php foreach ($posttags as $tag) { ?>
                            <span class="post-tag-<?php echo $tag->slug; ?>">
                                <a href="<?php echo get_tag_link($tag->term_id) ?>">#<?php echo $tag->name; ?></a>
                            </span>
                        <?php } ?>
                    </div>
                </header>
                <section class="post-excerpt" itemprop="description" itemprop="articleBody"><?php the_content(); ?><?php wp_link_pages(); ?></section>
            </div>
            <?php comments_template(); ?>
        </article>
    <?php endwhile; ?>
    <div class="nav-previous alignleft"><?php next_posts_link('Older posts'); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link('Newer posts'); ?></div> 
<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>