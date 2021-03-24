<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <main class="container pt-3">
            <article class="blog-post">
                <h2 class="blog-post-title"><?php the_title();?></h2>
                <hr>
                <?php the_content(); ?>
            </article><!-- /.blog-post -->
        </main><!-- /.container -->
<?php
    endwhile;
endif;
?>
<?php get_footer(); ?>