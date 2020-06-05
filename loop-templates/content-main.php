<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php
		the_title(
			sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h1>'
		);
		?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<!-- <div class="row full-width-div" id="top-row">
			<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full');?>" alt="A portrait of the COGA participants with the COGA logo." width="100%" height="auto" class="aligncenter size-full wp-image-82 img-fluid" id="front-image">
		</div>
		 -->
		<!--INTRO TEXT-->
		<?php home_intro_text();?>

		<div class="row nav-row">
			<!--BIG MID PAGE MENU-->
			<?php home_nav_menu();?>
		</div>

		<div class="row row-light-blue full-width-div">
			<!--INFO PANELS-->
			<?php main_info_panels();?>
		</div>
		<!-- <div class="row">
			<div class="col-md-4 entry-content">
				<h2>News</h2>
				<p>Look to us to see what’s going on in the realm of genetics and alcoholism.</p>
			</div>
			<div class="col-md-8">
				<div class="display-news-posts">
					<?php //home_news();?>
				</div>
			</div>
		</div> -->
		<!-- <div class="row row-orange full-width-div">
			<div class="col-md-12">
				<div class="super-text white">Did you know?</div>
			</div>
			<?php 
				//$cat_id = home_facts();
				//fact_builder($cat_id);
			?>
		</div>
		 -->

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
