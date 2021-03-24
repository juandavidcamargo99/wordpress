<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
<main class="container pt-3">
    <article class="blog-post">
        <h2 class="blog-post-title"><?php the_title();?></h2>
        <p class="blog-post-meta"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
        <p class="blog-post-meta">Categories: <?php the_category(', '); ?></p>
        <hr>
        <div class="m-3">
        <?php the_content();?>
        </div>
        <hr>
        <i><?php the_tags($before = null, $sep = ' ', $after = ''); ?></i>
    </article> 
</main>
<?php
    endwhile;
endif;
?>
<?php get_footer(); ?>