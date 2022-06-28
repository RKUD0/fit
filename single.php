<?php get_header(); ?>

<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
       <div class="article_container">
            <article id="<?php the_ID(); ?> " <?php post_class('article'); ?>>
                <header class="article_header">
                    <h2 class="article_title"><?php the_title(); ?></h2>
                    <div class="article_meta">
                        <?php the_category(); ?>
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </div>
                </header>
                <div class="article_body">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        </div>
    <?php endwhile ; ?>
<?php endif ;?>

<?php get_footer(); ?>