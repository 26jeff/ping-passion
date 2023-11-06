<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-pong
 */
$dataRevetement = get_fields();
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ping_pong' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ping_pong' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>

		<?php endwhile; // End of the loop.
		?>

		<section>
			<h2>Informations nutritionelles</h2>
			<p>Rapidité : <?= $dataRevetement['rapidite'] ?></p>
			<p>Contrôle : <?= $dataRevetement['controle'] ?></p>
			<p>Adhérence: <?= $dataRevetement['adherence'] ?></p>
			<p>Epaisseur: <?= $dataRevetement['epaisseur'] ?></p>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
