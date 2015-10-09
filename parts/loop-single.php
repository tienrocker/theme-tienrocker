<?php
$posttags = get_the_tags();
$posttags = $posttags ? $posttags : array();
$next_post = get_next_post();
$previous_post = get_previous_post();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class("post"); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
    <div class="noarticleimage">
        <div class="post-meta">
            <h1 class="post-title"><?php the_title() ?></h1>
            <div class="cf post-meta-text">
                <div class="author-image"><?php bloginfo('name'); ?></div>
                <h4 itemtype="http://schema.org/Person" itemscope="" itemprop="author" class="author-name"><?php the_author() ?></h4>
                on
                <time datetime="<?php get_the_date('d-m-Y'); ?><?php get_post_time('H:i', TRUE); ?>"><?php echo get_the_date('d-m-Y'); ?></time>
                <?php foreach ($posttags as $tag) { ?> &nbsp; <a href="<?php echo get_tag_link($tag->term_id) ?>">#<?php echo $tag->name; ?></a> <?php } ?>
            </div>
        </div>
    </div>
    <br />  

    <section class="post-excerpt" itemprop="description" itemprop="articleBody"><?php the_content(); ?><?php wp_link_pages(); ?></section> 

    <footer class="post-footer">
        <section class="share">
            <a onclick="window.open(this.href, 'twitter-share', 'width=550,height=255');
                    return false;" href="https://twitter.com/share?text=<?php the_title() ?>&amp;url=<?php the_permalink() ?>" class="icon-twitter">
                <i class="fa fa-twitter"></i><span class="hidden">twitter</span>
            </a>
            <a onclick="window.open(this.href, 'facebook-share', 'width=550,height=255');
                    return false;" href="https://www.facebook.com/sharer.php?t=<?php the_title() ?>&amp;u=<?php the_permalink() ?>" class="icon-facebook">
                <i class="fa fa-facebook"></i><span class="hidden">facebook</span>
            </a>
        </section>
        <section class="post-next-previous">
            <?php if (!empty($previous_post)) : ?>
                <p> Previous: <a href="<?php echo get_permalink($previous_post->ID); ?>" class="button"><?php echo $previous_post->post_title; ?></a></p>                  
            <?php endif; ?> 
            <?php if (!empty($next_post)) : ?>
                <p style="float:right">Next: <a href="<?php echo get_permalink($next_post->ID); ?>" class="button"><?php echo $next_post->post_title; ?></a></p>                  
            <?php endif; ?>
        </section>
    </footer>
    
</article>