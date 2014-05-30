<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cornerstone
 */

get_header(); ?>
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
					<h1>Sidebar?</h1>
					<?php 
						$side = dynamic_sidebar(apply_filters( 'ups_sidebar', 'default-sidebar-id' ) );
						if ($side !=null)

							echo '<h1>'.$side.' </h1>';
					?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // end of the loop. ?>

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
			<?php //get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
