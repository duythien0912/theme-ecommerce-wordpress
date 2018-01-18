<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrapp">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="content-products">

		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'shop' );

			endwhile;

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

</div>
		</main><!-- #main -->
		
	</div><!-- #primary -->
<a href="<?php echo get_site_url(); ?>/cart">
<div class="cart-button">
	<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g transform="translate(0,-952.36218)"><path d="m 40.99998,958.36217 c -8.2754,0 -15,6.7246 -15,15 l 0,9.00001 -10,0 c -1.0872,0.022 -1.89874,0.9677 -2,1.8125 l -4.9999996,60.00002 c -0.1042,1.1078 0.88732,2.1923 1.9999996,2.1875 l 60.00004,0 c 1.1126,0 2.1042,-1.0797 2,-2.1875 l -0.15629,-1.8125 -4.03121,0 -23.81254,0 -31.8125,0 4.65625,-56.00002 8.15625,0 0,6.3438 c -2.32014,0.8317 -4,3.066 -4,5.6562 0,3.29002 2.70996,6.00002 6,6.00002 3.29004,0 6,-2.71 6,-6.00002 0,-2.5902 -1.67985,-4.8245 -4,-5.6562 l 0,-6.3438 22,0 0,4 4,0 0,-4 8.15625,0 0.34379,4 4,0 -0.5,-6.1875 c -0.093,-0.9832 -1.0125,-1.8168 -2,-1.8125 l -10.00004,0 0,-9.00001 c 0,-8.2754 -6.72459,-15 -15,-15 z m 0,4 c 6.1286,0 11,4.8714 11,11 l 0,9.00001 -22,0 0,-9.00001 c 0,-6.1286 4.87142,-11 11,-11 z m 6,31.81251 -4,44.00002 c -0.1042,1.1078 0.88732,2.1923 2,2.1875 l 44.00004,0 c 1.1126,0 2.1042,-1.0797 2,-2.1875 l -4,-44.00002 c -0.093,-0.9832 -1.0125,-1.8168 -2,-1.8125 l -36.00004,0 c -1.0419,0 -1.89874,0.9677 -2,1.8125 z m -19,2.1875 c 1.12824,0 2,0.8718 2,2 0,1.1282 -0.87176,2.00002 -2,2.00002 -1.12824,0 -2,-0.87182 -2,-2.00002 0,-1.1282 0.87176,-2 2,-2 z m 22.84375,0 32.3125,0 3.65629,40.00002 -39.62504,0 z m 6.15625,2 c -1.10449,0 -2,0.8954 -2,2.00002 l 0,4 c 0,6.6134 5.38654,12 12.00004,12 6.61341,0 12,-5.3866 12,-12 l 0,-4 c 0,-1.10462 -0.8955,-2.00002 -2,-2.00002 -1.1046,0 -2,0.8954 -2,2.00002 l 0,4 c 0,4.4666 -3.5335,8 -8,8 -4.46659,0 -8.00004,-3.5334 -8.00004,-8 l 0,-4 c 0,-1.10462 -0.8954,-2.00002 -2,-2.00002 z" style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;" fill="#ffffff" fill-opacity="1" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"></path></g></svg>
	<span class="cb-counter">
		<span class="cb-counter-label">0</span>
	</span>
	</div>
</a>
<div class="add-cart-div" style="display: none;"></div>

	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
