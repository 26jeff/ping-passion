<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-pong
 */

 get_header();
 ?>
 
	 <main id="primary" class="site-main">
 
		 <?php if ( have_posts() ) : ?>
 
			 <header class="page-header">
				 <h1>Nos Bois</h1>
			 </header><!-- .page-header -->
			 <section class="bois-wrapper">
			 <?php
			 /* Start the Loop */
			 while ( have_posts() ) :
				 the_post(); 
			 ?>
					 <?php the_post_thumbnail(); ?>
					 <div class="bois-card__content">
						 <h2><?php the_title(); ?></h2>
						 <?php the_excerpt(); ?>
					 </div>
				 
			 <?php 
			 endwhile; ?>
			 </section>
			 <?php the_posts_navigation();
 
		 else :
 
			 get_template_part( 'template-parts/content', 'none' );
 
		 endif;
		 ?>
 
	 </main><!-- #main -->
 
 <?php
 get_footer();
