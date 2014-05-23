<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cornerstone
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<!-- 

			#phpneeded

			If dynamic_sidebar() =! false/null...

				<div class="col-sm-9">

			else

				<div class="col-sm-12">

		-->
		<div class="col-sm-9">
			<div id="primary" class="content-area">
				
					<main id="main" class="site-main" role="main">

					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php cs_paging_nav(); ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>

					</main><!-- #main -->
			
			</div><!-- #primary -->
		</div>
		<!-- 

			#phpneeded

			If dynamic_sidebar() =! false/null...

				<div class="col-sm-3">
					<?php //dynamic_sidebar( apply_filters( 'ups_sidebar', 'default-sidebar-id' ) ); ?>
					<?php //get_sidebar(); ?>
				</div>


		-->

		<div class="col-sm-3">
			<?php dynamic_sidebar( apply_filters( 'ups_sidebar', 'default-sidebar-id' ) ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
