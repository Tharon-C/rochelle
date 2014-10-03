<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="page-title-bkg"></div>
		<div class="content-bkg"></div>
		<section class="page-title color-1 txt-wht">
		<?php the_title(); ?>
		<a href="<?php echo do_shortcode('[page_path id="302"]'); ?>" class="cart-link p-r txt-wht"><i class="fa fa-shopping-cart"></i></a>
	</section>
		<section class="content clear">
			
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
        <div class="mobile-show">
	 <footer class="footer-2">  
    <div class="footer-items footer-1">
                <div class=" clear">
                   
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
			</div>    
          <p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?><br>
                All Rights Reserved. <br>
                <a href="http://taglinegroup.com" target="_blank" class="border-t-1 pad-s-20px marg-t-10px block col-3-4 p-c">Design by Tagline.</a>
				</p>  
			</footer>
	</div>
		<?php wp_footer(); ?>
	</body>
</html>


