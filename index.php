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

// get_header();
 wp_head();


?>
    <h1>Index.php</h1>
	<ul>
        <li>Bonjour</li>
        <li>Mon nom</li>
        <li>est</li>
        <li>Gabriel</li>
    </ul>

    <div>
        <h2>Oii!</h2>
            <p>Je suis joyeux de faire cet excercice!</p>
    </div>

<?php
get_footer();

