<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

          <h1 class="leading">NAVE AGENCY</h1>
          <div class="row">
            <div class="col">
              We’re an award-winning, purpose-driven, creative agency specializing in strategy, content creation, and social media. Our mission is to leverage the power of technology, art, and culture to create a more connected, engaging, and just world.
            </div>
            <div class="col">
              We’re an award-winning, purpose-driven, creative agency specializing in strategy, content creation, and social media. Our mission is to leverage the power of technology, art, and culture to create a more connected, engaging, and just world.
            </div>
            <div class="col">
              We’re an award-winning, purpose-driven, creative agency specializing in strategy, content creation, and social media. Our mission is to leverage the power of technology, art, and culture to create a more connected, engaging, and just world.
            </div>
          </div>
          <div class="row mb-0">
            <div class="col-card mb-60">
              <div class="img-wrapper">
                <div class="img-text">
                  Holly is a creative swiss army knife with a skillset that spans illustration, graphic design, photography, apparel design, and more. She does it all, which allows her to see visual executions through 360° lens. Her vivid personal style, love of travel, and penchant for working on JDM cars brings an  effortless creative energy to any team or project.
                </div>
                <img src="https://cdn.consumidormoderno.com.br/wp-content/uploads/2020/05/streamers-isolamento-social-5.jpg">
              </div>
              <h3 class="title">TITULO</h3>
              <h5 class="subtitle">SUBTITULO</h5>
            </div>
            <div class="col-card mb-60">
              <div class="img-wrapper">
                <div class="img-text">
                  Holly is a creative swiss army knife with a skillset that spans illustration, graphic design, photography, apparel design, and more. She does it all, which allows her to see visual executions through 360° lens. Her vivid personal style, love of travel, and penchant for working on JDM cars brings an  effortless creative energy to any team or project.
                </div>
                <img src="https://cdn.consumidormoderno.com.br/wp-content/uploads/2020/05/streamers-isolamento-social-5.jpg">
              </div>
              <h3 class="title">TITULO</h3>
              <h5 class="subtitle">SUBTITULO</h5>
            </div>
            <div class="col-card mb-60">
              <div class="img-wrapper">
                <div class="img-text">
                  Holly is a creative swiss army knife with a skillset that spans illustration, graphic design, photography, apparel design, and more. She does it all, which allows her to see visual executions through 360° lens. Her vivid personal style, love of travel, and penchant for working on JDM cars brings an  effortless creative energy to any team or project.
                </div>
                <img src="https://cdn.consumidormoderno.com.br/wp-content/uploads/2020/05/streamers-isolamento-social-5.jpg">
              </div>
              <h3 class="title">TITULO</h3>
              <h5 class="subtitle">SUBTITULO</h5>
            </div>
          </div>
		<?php

// 	if ( have_posts() ) {

// 		$i = 0;

// 		while ( have_posts() ) {
// 			$i++;
// 			if ( $i > 1 ) {
// 				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
// 			}
// 			the_post();

// 			get_template_part( 'template-parts/content', get_post_type() );

// 		}
// 	} elseif ( is_search() ) {
		?>

		<!--<div class="no-search-results-form section-inner thin">-->

		<?php
// 			get_search_form(
// 				array(
// 					'aria_label' => __( 'search again', 'twentytwenty' ),
// 				)
// 			);
		?>

		<!--</div><!-- .no-search-results -->

		<?php
// 	}
	?>

	<?php //get_template_part( 'template-parts/pagination' ); ?>


    <?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
