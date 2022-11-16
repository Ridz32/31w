/* page a des modèle, article n'a pas de modèle */

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
 * @package igc31w - template
 */

get_header();

?>
<h1>single.php</h1>
	<main class="site__main">
    <h1>--- template evenement.
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
				the_post(); ?>
			<h1><?= get_the_title(); ?></h1>
			<?php the_content();?>
            <p>L'adresse de l'événement<?php the_field('adresse')		
			endif;	
		?><p>
	</main><!-- #main -->
<?php
get_footer();

/*

champs perso:

cours
sigle, duree, 

evenements
adresse, date et heure de l'événement
(faut ajouter des champs)

titre

Reglage
Publication
model de page est egal a evenements