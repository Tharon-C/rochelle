<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="content-bkg"></div>
		
		<section class="content clear">
			<section class="page-title color-1 txt-wht">
		<?php the_title(); ?>
	</section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="content-int  clear" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
	</div>
		<!-- /wrapper -->
        
		<?php wp_footer(); ?>
	</body>
</html>



