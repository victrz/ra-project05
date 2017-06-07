<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>


			</div><!-- #content -->
			<footer>
			  <section>

			    <div class="flex" id="test">
						<?php dynamic_sidebar('footer-sidebar');?>
			    </div>
			    <div>
			      <p class="text-footer-copyright">&copy;<?php echo date('Y'); ?> INHABITENT</p>
			    </div>
			  </section>
			</footer>
			<style>
			#test{margin: 10px;}
			#test .testing:last-of-type{
				text-align: right;
				flex-grow: 1;

				}

			footer{
			  background-image: url("<?php bloginfo('stylesheet_directory')?>/assets/images/dark-wood@2x.png");
			  height: 50vh;
			  background-position: center;
			  background-size: cover;
			  background-repeat: no-repeat;
			}

			.testing h2{
				padding: 0px;
				color: #d99054;
			}
			.testing{
				padding: 20px;
			}
			</style>		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
