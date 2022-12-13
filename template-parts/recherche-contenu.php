<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
            $nombre_cours = 0;
            while ( have_posts() ) :
				the_post();
                $thumbnail = get_the_post_thumbnail();
                // $thumbnail = set_post_thumbnail_size( 50, 50);
                $thumbnail;
                $nombre_cours++;
				$titre = get_the_title();
				$code_cours = substr($titre,0,7);
				$heure_cours = substr($titre,strrpos($titre,'('));
				$titre = substr($titre,8);
				$longueur = strlen($titre);
                $permalien = get_permalink();
                $excerpt = get_the_excerpt();
                $excerpt = substr($excerpt,0,120);
                

				$titre = substr($titre, 0, strrpos($titre,'(') - $longueur);
				?>
			<header class="recherche">
                <div class="thumbnail__container">
                    <span class="thumbnail"><?= $thumbnail ?></span>	
                </div>
                <div>
                    <h5><?= $code_cours ?><?= $titre  ?><?= $heure_cours ?></h5>
                    <code><?= $excerpt  ?></code>
                    <code><a href= <?= $permalien  ?> >&#8594;</a> </code>
                </div>
                <hr>
			</header>

            <?php endwhile;
?>
<p>Nombre de résultat: <?= $nombre_cours ?>
</p>


			<!-- ?> -->
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<!-- <?php post_thumbnails(); ?> -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->



</article><!-- #post-<?php the_ID(); ?> -->
