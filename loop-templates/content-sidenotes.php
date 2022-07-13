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
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top &#x2191;</button>
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	
	<aside id="aud-page-menu--flex">
		<div class="aud-menu-title--flex">Alcohol Genetics Sections</div>
		<ul>
			<li>• <a href="https://rampages.us/coga/aud/genes-in-aud/" aria-label="Genes in AUD">How do genes influence the risk for alcohol use disorders?</a></li>
			<li>• <a href="https://rampages.us/coga/aud/alcohol-use-across-the-lifespan/" aria-label="Alcohol use across the lifespan">Alcohol use across the lifespan</a></li>
			<li>• <a href="https://rampages.us/coga/aud/heritability/" aria-label="Heritability">Heritability</a></li>
			<li>• <a href="https://rampages.us/coga/aud/genes-and-environment/" aria-label="Heritability">Genes and Environment</a></li>
			<li>• <a href="https://rampages.us/coga/aud/gene-identification/" aria-label="Gene Identification">Gene Identification</a></li>
			<li>• <a href="https://rampages.us/coga/aud/response-to-alcohol/" aria-label="Response to Alcohol">Response to alcohol</a></li>
			<li>• <a href="https://rampages.us/coga/aud/externalizing-alcohol-use-disorders/" aria-label="Externalizing Alcohol Use Disorders">Externalizing and Alcohol Use Disorders</a></li>
			<li>• <a href="https://rampages.us/coga/aud/internalizing-alcohol-use-disorders/" aria-label="Internalizing Alcohol Use Disorders">Internalizing and Alcohol Use Disorders</a></li>
			<li>• <a href="https://rampages.us/coga/aud/brain-function/" aria-label="Brain Function">Brain Function</a></li>
			<li>• <a href="https://rampages.us/coga/aud/polygenic-risk-scores/" aria-label="Polygenic Risk Scores">Polygenic Risk Scores</a></li>
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
			<div class="aud-menu-title">Alcohol Genetics Sections</div>
			<ul>
				<li><a href="https://rampages.us/coga/aud/genes-in-aud/" aria-label="Genes in AUD">How do genes influence the risk for alcohol use disorders?</a></li>
				<li><a href="https://rampages.us/coga/aud/alcohol-use-across-the-lifespan/" aria-label="Alcohol use across the lifespan">Alcohol use across the lifespan</a></li>
				<li><a href="https://rampages.us/coga/aud/heritability/" aria-label="Heritability">Heritability</a></li>
				<li><a href="https://rampages.us/coga/aud/genes-and-environment/" aria-label="Heritability">Genes and Environment</a></li>
				<li><a href="https://rampages.us/coga/aud/gene-identification/" aria-label="Gene Identification">Gene Identification</a></li>
				<li><a href="https://rampages.us/coga/aud/response-to-alcohol/" aria-label="Response to Alcohol">Response to alcohol</a></li>
				<li><a href="https://rampages.us/coga/aud/externalizing-alcohol-use-disorders/" aria-label="Externalizing Alcohol Use Disorders">Externalizing and Alcohol Use Disorders</a></li>
				<li><a href="https://rampages.us/coga/aud/internalizing-alcohol-use-disorders/" aria-label="Internalizing Alcohol Use Disorders">Internalizing and Alcohol Use Disorders</a></li>
				<li><a href="https://rampages.us/coga/aud/brain-function/" aria-label="Brain Function">Brain Function</a></li>
				<li><a href="https://rampages.us/coga/aud/polygenic-risk-scores/" aria-label="Polygenic Risk Scores">Polygenic Risk Scores</a></li>
			</ul>
			<div class="aud-menu-title-bottom"></div>
		</aside>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
