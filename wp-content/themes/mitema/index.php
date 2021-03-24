<?php echo get_header(); ?>
<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2">
        <?php
        global $post;

        $last_posts = get_posts(array('posts_per_page' => 3));

        foreach ($last_posts as $post) :
            setup_postdata($post); ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block text-primary"><?php the_category(', '); ?></strong>
                        <h3 class="mb-0"><?php the_title(); ?></h3>
                        <div class="mb-1 text-muted"><?php echo get_the_date(); ?> / <?php the_author(); ?> </div>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
        <?php endforeach;
        wp_reset_postdata();
        ?>
    </div>

    <div class="row">
        <div class="col-md-8">

            <article class="blog-post">
                <h2 class="blog-post-title">Principal information</h2>
                <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                <p>I am ready for the road less traveled. Already <a href="#">brushing off the dust</a>. Yeah,
                    you're lucky if you're on her plane. I used to bite my tongue and hold my breath. Uh, She’s a
                    beast. I call her Karma (come back). Black ray-bans, you know she's with the band. I can't sleep
                    let's run away and don't ever look back, don't ever look back.</p>
                <blockquote>
                    <p>Growing fast into a <strong>bolt of lightning</strong>. Be careful Try not to lead her on</p>
                </blockquote>
                <p>I'm intrigued, for a peek, heard it's fascinating. Oh oh! Wanna be a victim ready for abduction.
                    She's got that international smile, oh yeah, she's got that one international smile. Do you ever
                    feel, feel so paper thin. I’m gon’ put her in a coma. Sun-kissed skin so hot we'll melt your
                    popsicle.</p>
                <p>This is transcendental, on another level, boy, you're my lucky star.</p>
            </article><!-- /.blog-post -->
            <article class="blog-post">
                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                <p>From Tokyo to Mexico, to Rio. Yeah, you take me to utopia. I'm walking on air. We'd make out in
                    your Mustang to Radiohead. I mean the ones, I mean like she's the one. Sun-kissed skin so hot
                    we'll melt your popsicle. Slow cooking pancakes for my boy, still up, still fresh as a Daisy.
                </p>
                <ul>
                    <li>I hope you got a healthy appetite.</li>
                    <li>You're never gonna be unsatisfied.</li>
                    <li>Got a motel and built a fort out of sheets.</li>
                </ul>
                <p>Don't need apologies. Boy, you're an alien your touch so foreign, it's <em>supernatural</em>,
                    extraterrestrial. Talk about our future like we had a clue. I can feel a phoenix inside of me.
                </p>
            </article><!-- /.blog-post -->

            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>
        </div>

        <div class="col-md-4">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">Saw you downtown singing the Blues. Watch you circle the drain. Why don't you let me
                    stop by? Heavy is the head that <em>wears the crown</em>. Yes, we make angels cry, raining down
                    on earth from up above.</p>
            </div>

            <div class="p-4">
                <h4 class="fst-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>

            <div class="p-4">
                <h4 class="fst-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div>

    </div><!-- /.row -->

</main><!-- /.container -->
<?php get_footer(); ?>