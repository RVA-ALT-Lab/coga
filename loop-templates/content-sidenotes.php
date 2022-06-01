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

	<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	<aside id="aud-page-menu--flex">
		<ul>
			<li><a href="https://rampages.us/coga/aud/genes-in-alcoholism/" aria-label="Genes in Alcohol">Home section</a></li>
			<li><a href="https://rampages.us/coga/aud/alcohol-use-across-the-lifespan/" aria-label="Alcohol use across the lifespan">Alcohol use across the lifespan</a></li>
			<li><a href="https://rampages.us/coga/aud/heritability/" aria-label="Heritability">Heritability</a></li>
			<li><a href="https://rampages.us/coga/aud/gene-identification/" aria-label="Gene Identification">Gene Identification</a></li>
			<li><a href="https://rampages.us/coga/aud/sensitivity-to-alcohol/" aria-label="Sensitivity to Alcohol">Response to Alcohol</a></li>
			<li><a href="https://rampages.us/coga/aud/relationship-of-diagnoses-of-externalizing-alcohol-use-disorders/" aria-label="Relationship of Diagnoses of Externalizing Alcohol Use Disorders">Externalizing Alcohol Use Disorders</a></li>
			<li><a href="https://rampages.us/coga/aud/internalizing-symptoms/" aria-label="Internalizing Symptoms">Internalizing Alcohol Use Disorders</a></li>
			<li><a href="https://rampages.us/coga/aud/brain-function/" aria-label="">Brain Function</a></li>
			<li><a href="https://rampages.us/coga/aud/polygenic-risk-scores/" aria-label="Polygenic Risk Scores ">Polygenic Risk Scores</a></li>
		</ul>
	</aside>
	<div class="entry-content sidenotes-container">
		<article class="article">
	
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<?php the_content(); ?>

				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					)
				);
				?>
		</article>
		<aside id="aud-page-menu">
			<ul>
				<li><a href="https://rampages.us/coga/aud/genes-in-alcoholism/" aria-label="Genes in Alcohol">Home section</a></li>
				<li><a href="https://rampages.us/coga/aud/alcohol-use-across-the-lifespan/" aria-label=Alcohol use across the lifespan>Alcohol use across the lifespan</a></li>
				<li><a href="https://rampages.us/coga/aud/heritability/" aria-label="Heritability">Heritability</a></li>
				<li><a href="https://rampages.us/coga/aud/gene-identification/" aria-label="Gene Identification">Gene Identification</a></li>
				<li><a href="https://rampages.us/coga/aud/sensitivity-to-alcohol/" aria-label="Sensitivity to Alcohol">Response to Alcohol</a></li>
				<li><a href="https://rampages.us/coga/aud/relationship-of-diagnoses-of-externalizing-alcohol-use-disorders/" aria-label="Relationship of Diagnoses of Externalizing Alcohol Use Disorders">Externalizing Alcohol Use Disorders</a></li>
				<li><a href="https://rampages.us/coga/aud/internalizing-symptoms/" aria-label="Internalizing Symptoms">Internalizing Alcohol Use Disorders</a></li>
				<li><a href="https://rampages.us/coga/aud/brain-function/" aria-label="">Brain Function</a></li>
				<li><a href="https://rampages.us/coga/aud/polygenic-risk-scores/" aria-label="Polygenic Risk Scores">Polygenic Risk Scores</a></li>
			</ul>
		</aside>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
