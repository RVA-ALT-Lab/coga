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

		<?php echo get_the_post_thumbnail( $post->ID, 'medium', array( 'class' => 'researcher-bio-pic' ) ); ?>

		<?php the_title( '<h1 class="entry-title researcher-name">', '</h1>' ); ?>

		<div class="entry-meta researcher-details">

			<h2><?php echo get_researcher_generic('researcher_title') ;?></h2>
			<p><?php echo get_researcher_generic('researcher_bio') ;?></p>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php the_content(); ?>

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
