<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="page-title-bkg"></div>
		<div class="content-bkg"></div>
		<section class="page-title color-1 txt-wht">
		<?php the_title(); ?>
	</section>
		<section class="content clear">
			
	<article class="content-int  clear" >
		<?php woocommerce_content(); ?>
				<br class="clear">

			</article>
			<!-- /article -->
		</section>
		<!-- /section -->

	</main>
	</div>
		<!-- /wrapper -->
        
		<?php wp_footer(); ?>
	</body>
</html>



