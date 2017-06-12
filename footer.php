<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>
			</div><!-- #content -->
			<footer class="background-img-prop h-30vh" style="background-image: url('<?php echo bloginfo('stylesheet_directory');?>/assets/images/dark-wood@2x.png');">
			  <section>
			    <div class="flex" id="footer-columns">
						<?php dynamic_sidebar('footer-sidebar');?>
			    </div>
			    <div>
			      <p class="text-footer-copyright">&copy;<?php echo date('Y'); ?> INHABITENT</p>
			    </div>
			  </section>
			</footer>
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
