<?php
/**
 * The template for displaying site archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">


<!-- TODO: Move this to an actual stylesheet -->
<style>

#scrolly {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        /* background-color: #f3f3f3; */
        padding: 1rem;
      }

      #scrolly > * {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
      }

      article {
        position: relative;
        padding: 0 1rem;
        max-width: 30rem;
      }

      figure {
        position: -webkit-sticky;
        position: sticky;
        width: 100%;
        margin: 0;
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        background-color: #8a8a8a;
        z-index: 0;
        top: 250px;
      }

      figure p {
        text-align: center;
        padding: 1rem;
        position: absolute;
        top: 50%;
        left: 50%;
        -moz-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-size: 8rem;
        font-weight: 900;
        color: #fff;
      }

      .step {
        margin: 0 auto 2rem auto;
        /* background-color: #3b3b3b; */
        color: #fff;
      }

      .step:last-child {
        margin-bottom: 0;
      }

      .step.is-active {
        background-color: goldenrod;
        color: #3b3b3b;
      }

      .step p {
        padding: 1rem 1rem 0 0;
        font-size: 1.5rem;
      }

      #stickyArea {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      }
      #intro {
        margin-bottom: 5rem;
      }
    </style>
					<header class="page-header">
						<h1><?php the_title(); ?></h1>
					</header><!-- .page-header -->
                    <section id="intro">
                      <?php the_content(); ?>
                    </section>
                    <section id="scrolly">
                        <article>
                        <?php 
                        $story = get_field('story', get_the_ID());
                        if ($story) {
                            foreach($story as $section){
                                $step = '<div class="step" ';
                                $step .= ' data-media="';
                                $step .= $section['section_image'];
                                $step .= '">';
                                $step .= $section['section_text'];
                                $step .= '</div>';
                                echo $step;
                            }

                        }
                        ?>
                        </article>
                        <figure id="stickyArea" style="height: 500px;">

                        </figure>
                    </section>

                    

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div> <!-- .row -->

	</div><!-- #content -->

	</div><!-- #archive-wrapper -->
    <script src="https://unpkg.com/intersection-observer"></script>
    <script src="https://unpkg.com/scrollama"></script>
    <script>
        // instantiate the scrollama
        const scroller = scrollama();
        const stickyArea = document.querySelector('#stickyArea')


        // setup the instance, pass callback functions
        scroller
        .setup({
            step: ".step",
        })
        .onStepEnter((response) => {
            console.log(response)
            console.log(response.element.dataset.media)
            stickyArea.style.backgroundImage = `url(${response.element.dataset.media})`

            // { element, index, direction }
        })
        .onStepExit((response) => {
            console.log(response)
            // { element, index, direction }
        });

        // setup resize event
        window.addEventListener("resize", scroller.resize);
    </script>
<?php get_footer();
