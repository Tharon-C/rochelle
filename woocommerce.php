<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="content-bkg"></div>
		
		<section class="content clear">
			<section class="page-title color-1 txt-wht">
		<?php the_title(); ?>
	</section>
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



