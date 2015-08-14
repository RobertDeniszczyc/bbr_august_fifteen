<?php get_header(); ?>

        <?php if ( have_posts() ) { while ( have_posts() ) : the_post() ; ?>

        <article role="main" class="primary-content type-post" id="post-<?php the_ID(); ?>">
            <header>
                <h1 class="beta"><?php the_title(); ?></h1>
            </header>

            <?php the_post_thumbnail('full');?>

            <section class="primary-content_the-content">
                <?php the_content(); ?>
            </section>

            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>

            <footer class="entry-meta">
            	<p>Posted on <time datetime="<?php the_time('l, F jS, Y') ?>" pubdate><?php the_time('l, F jS, Y') ?></time> &middot; <a href="<?php the_permalink(); ?>">Permalink</a></p>
            </footer>

        <?php endwhile; } // end of the loop. ?>
        </article>

<?php get_footer('no-sidebar'); ?>