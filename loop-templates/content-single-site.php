<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php echo get_the_post_thumbnail( $post->ID, 'medium',array( 'class' => 'img-fluid site-logo', 'alt' => 'University logo.' ) ); ?>	
		<?php the_title( '<h1 class="entry-title site-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php //understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top &#x2191;</button>

	<div class="entry-content">

		<?php the_content(); ?>
		<div class="site-researchers">
			<?php 
			$location = wp_get_post_terms($post->ID, 'location')[0]->slug;
			echo get_researchers($location);?>
		</div>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
