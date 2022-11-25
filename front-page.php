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
 * @package igc31w
 */

get_header();

?>
	<main class="site__main">

        <?php  wp_nav_menu(array(
			"menu" => "evenement",
			"container" => "nav",
			"container_class" => "evenement"
		));
?>


<section class="grille">
	<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
				<article class="grille__article">
            <?php
                $titre = get_the_title();
				$code_cours = substr($titre,0,7);
				$heure_cours = substr($titre,strrpos($titre,'('));
				$titre = substr($titre,8);
				$longueur = strlen($titre);

				$titre = substr($titre, 0, strrpos($titre,'(') - $longueur);
				?>
                
			<h6><?= get_the_title(); ?></h6>

			<?php 
			$le_permalien = "<a href='" . get_the_permalink() . "'>... Suite</a>";
			?>
			<h6><?= $titre; ?></h6>
			<p><?= wp_trim_words(get_the_excerpt(), 15, $le_permalien) ; ?></p>
			

			</article>
			<?php
			endwhile;
			endif;	
			?>
		</section>
	</main><!-- #main -->
<?php
get_footer();