<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package igc31w - template
 */

get_header();

?>
	<main class="site__main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
				the_post(); ?>
                <?php the_post_thumbnail( 'miniature' ); ?>
                <?php the_post_thumbnail( 'thumbnail' ); ?>
                <?php the_post_thumbnail( 'medium' ); ?>
                <?php the_post_thumbnail( 'large' ); ?>
			<h1><?= get_the_title(); ?></h1>
			<?php the_content();		
			endif;	
		?>
	</main><!-- #main -->
<?php
get_footer();

