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
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

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

				$titre = substr($titre, 0, strrpos($titre,'(') - $longueur);
				?>
			<header class="recherche">
                <div class="thumbnail__container">
                    <span class="thumbnail"><?= $thumbnail ?></span>	
                </div>
                <div>
                    <h5><?= $titre  ?></h5>
                    <code>Code du cours:<?= $code_cours  ?></code>
                    <code>Nombre d'heures<?= $heure_cours  ?></code>
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
