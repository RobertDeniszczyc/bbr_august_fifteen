<?php get_header(); ?>

<article class="primary-content type-page">
	<div class="content textcenter" role="main">

		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<ul class="list-square">
		<?php
                    $recent_posts = wp_get_recent_posts();
                    foreach( $recent_posts as $recent ){
                            echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a></li>';
                    }
		?>
                </ul>
	</div>
</article>

<?php get_footer( 'no-sidebar' ); ?>
