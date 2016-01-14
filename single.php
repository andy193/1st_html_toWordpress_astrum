<?php get_header(); ?>

    <?php while(have_posts()) : the_post(); ?>
        <div class="container">

        <div class="twelve alt columns">

            <!-- Post -->
            <article class="post medium">

                <div class="five alt columns alpha">
                    <figure class="post-img media">
                        <div class="mediaholder">
                            <a href="blog-post.html">
                                <img src="images/blog-01b.jpg" alt=""/>
                                <div class="hovercover">
                                    <div class="hovericon"><i class="hoverlink"></i></div>
                                </div>
                            </a>
                        </div>
                    </figure>
                </div>

                <div class="seven columns">
                    <section class="post-content">

                        <header class="meta">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <ul>
                                <li>By <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a> - <?php the_time('F jS, Y' ); ?></li>
                                <li><a href="<?php comments_link(); ?>"><?php comments_number('0 Comments', '1 Comments', '% responses'); ?></a></li>
                                <li><a href="<?php the_permalink(); ?>">Full article</a></li>
                            </ul>
                        </header>

                            <?php the_content('Read More'); ?>

                        <a href="blog-post.html" class="button color">Read More</a>

                    </section>
                </div>
                <div class="clearfix"></div>

            </article>
            </div>
            </div>
    <?php endwhile; ?>

    <?php comments_template( ); ?>

<?php get_footer(); ?>