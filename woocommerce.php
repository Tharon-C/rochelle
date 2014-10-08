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
				<a class="txt-color-5" href="http://rochelleart.com/return-shipping/"><i class="fa fa-truck"></i>Our Return and Shipping Policy</a>


			</article>

			<!-- /article -->

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







