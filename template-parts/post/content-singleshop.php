<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	<imageshop class="entry-image-shop">

		<?php 
				echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );

    $ids = get_post_meta($post->ID, 'vdw_gallery_id', true);
    if ($ids):
        foreach ($ids as $key => $value):
            $image = wp_get_attachment_image_src($value,'full');
?>
                <img class="image-shop-preview" src="<?php
            echo $image[0];
?>">
              </li>
    
            <?php
        endforeach;
    endif;
		?>
	</imageshop>

<singleshop id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->
	<!-- price -->
	<span class="price-data">
	<?php 
	        $price_data = get_post_meta($post->ID, '_price_value_key', true);
	        if($price_data !== ''){
	    			        echo $price_data;
	    			        ?><span class="price-vnd"> vnđ</span><?php
			}else{
	    			        echo '999999';
	    			        ?><span class="price-vnd"> vnđ</span><?php	    		
	    	}
	?>
	</span>
	<!-- end price -->
	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>

	</div><!-- .entry-content -->

	<sizeshop>
		<div class="content-size-shop">
		<?php
        $size = get_post_meta($post->ID, '_size_value', true);
            $j = 0;
    if (is_array($size) || is_object($size)):
        foreach ($size as $key => $value):
            $j++;
        ?>            
                		<div class="size-div size-div[<?php echo $j; ?>]">
        	<label class="text-size-shop">
<span id="_size_value" name="_size_value[<?php echo $j; ?>]" value="<?php echo $value; ?>"><?php echo $value; ?> </span>
			</label>
			</div>

        <?php
        endforeach;
    endif;
		?>
	</div>
	</sizeshop>
	<span class="size-choose" value="" style="display: none"></span>
	<div class="size-guide-btn">
		<a class="size-guide" href="#0" tabindex="0">Hướng dẫn về cỡ</a>
	</div>
	<div class="error-choose"></div>
<button type="submit" class="button button-primaryB button-big _add-to-cart-btn" tabindex="0"><span class="button-text _add-to-cart-text">Thêm</span></button>
<a href="<?php echo get_site_url(); ?>/cart">
<div class="cart-button">
	<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g transform="translate(0,-952.36218)"><path d="m 40.99998,958.36217 c -8.2754,0 -15,6.7246 -15,15 l 0,9.00001 -10,0 c -1.0872,0.022 -1.89874,0.9677 -2,1.8125 l -4.9999996,60.00002 c -0.1042,1.1078 0.88732,2.1923 1.9999996,2.1875 l 60.00004,0 c 1.1126,0 2.1042,-1.0797 2,-2.1875 l -0.15629,-1.8125 -4.03121,0 -23.81254,0 -31.8125,0 4.65625,-56.00002 8.15625,0 0,6.3438 c -2.32014,0.8317 -4,3.066 -4,5.6562 0,3.29002 2.70996,6.00002 6,6.00002 3.29004,0 6,-2.71 6,-6.00002 0,-2.5902 -1.67985,-4.8245 -4,-5.6562 l 0,-6.3438 22,0 0,4 4,0 0,-4 8.15625,0 0.34379,4 4,0 -0.5,-6.1875 c -0.093,-0.9832 -1.0125,-1.8168 -2,-1.8125 l -10.00004,0 0,-9.00001 c 0,-8.2754 -6.72459,-15 -15,-15 z m 0,4 c 6.1286,0 11,4.8714 11,11 l 0,9.00001 -22,0 0,-9.00001 c 0,-6.1286 4.87142,-11 11,-11 z m 6,31.81251 -4,44.00002 c -0.1042,1.1078 0.88732,2.1923 2,2.1875 l 44.00004,0 c 1.1126,0 2.1042,-1.0797 2,-2.1875 l -4,-44.00002 c -0.093,-0.9832 -1.0125,-1.8168 -2,-1.8125 l -36.00004,0 c -1.0419,0 -1.89874,0.9677 -2,1.8125 z m -19,2.1875 c 1.12824,0 2,0.8718 2,2 0,1.1282 -0.87176,2.00002 -2,2.00002 -1.12824,0 -2,-0.87182 -2,-2.00002 0,-1.1282 0.87176,-2 2,-2 z m 22.84375,0 32.3125,0 3.65629,40.00002 -39.62504,0 z m 6.15625,2 c -1.10449,0 -2,0.8954 -2,2.00002 l 0,4 c 0,6.6134 5.38654,12 12.00004,12 6.61341,0 12,-5.3866 12,-12 l 0,-4 c 0,-1.10462 -0.8955,-2.00002 -2,-2.00002 -1.1046,0 -2,0.8954 -2,2.00002 l 0,4 c 0,4.4666 -3.5335,8 -8,8 -4.46659,0 -8.00004,-3.5334 -8.00004,-8 l 0,-4 c 0,-1.10462 -0.8954,-2.00002 -2,-2.00002 z" style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;" fill="#ffffff" fill-opacity="1" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"></path></g></svg>
	<span class="cb-counter">
		<span class="cb-counter-label">0</span>
	</span>
	</div>
</a>
<div class="add-cart-div" style="display: none;"></div>
<?php

?>

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</singleshop><!-- #post-## -->
