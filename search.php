<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package cornerstone
 */

get_header(); ?>
<h1>search.php</h1>
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


			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'cs' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'search' ); ?>

					<?php endwhile; ?>

					<?php cs_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</section><!-- #primary -->
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
