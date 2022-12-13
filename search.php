<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Underscores
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Résultat de la recherche</h1>
                <p>
                    <!-- <p>Élément de recherche<?php get_search_query() ?></p> -->
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Élément de recherche: %s', '31w' ), '<span>' . get_search_query() . '</span>' );
					?>
                </p>
				
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
            $nombre_posts = 0;
			// while ( have_posts() ) :

                
                // ++$nombre_posts;

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
                
                // echo $the_posts;
                get_template_part( 'template-parts/recherche-contenu', 'the_posts()' );
            // endwhile;


            
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/recherche-nulle', 'none' );

		endif;
		?>
        <p>
<?php            echo $nombre_posts;

        printf( esc_html__( 'Nombre de recherche: %s', '31w' ), '<span>' . $nombre_posts . '</span>' );

        ?>

        </p>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
