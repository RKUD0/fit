<?php get_header(); ?>
<div class="archive-wrap">
    <?php if(have_posts()):?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="coulumn">
                    <article id="<?php the_ID(); ?>" <?php post_class('topic'); ?>>
                        <div class="topic_meta">
                            <time class="topic_time" datetime="<?php the_time('Y-m-d'); ?>">
                                <?php the_time('Y.m.d'); ?> 
                            </time>
                            <?php the_category(); ?>
                            <h2 class="topic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
            
            <div class="navigation">
                <?php if(function_exists('wp_pagenavi')): ?>
                <?php wp_pagenavi(array()); ?> 
                <?php else : ?>
                <?php endif; ?>
            </div>
                <?php endif ; ?>
</div>

<?php get_footer(); ?>