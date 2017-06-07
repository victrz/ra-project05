<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header();?>
 <content class="flex" >
	<div id="primary" class="content-area flex flex-col flex-grow">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="entry-footer"><?php the_post_navigation(); ?></div>

<section class="comments">
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
</section>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="aside">
	<?php get_sidebar(); ?>
</div>

</content>
<?php get_footer(); ?>
