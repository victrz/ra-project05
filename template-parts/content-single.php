<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="journal-wrap" class="flex flex-col" style="margin-top: 20px;" <?php post_class(); ?>>
	<div id="journal-banner-1" style="background-image: url('<?php the_post_thumbnail_url('medium_large');?>');" class="flex flex-col flex-just-between h-50vh background-img-prop">
    <h2 class="flex padding10 uppercase"><?php the_title(); ?></h1>
    <h3 class="flex flex-align-end padding10 uppercase"><?php the_date();?> / <?php red_starter_comment_count(); ?> /<?php the_author(); ?></h2>
  </div>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

	<section class="entry-footer flex flex-just-between">
		<?php red_starter_entry_footer(); ?>
	</section><!-- .entry-footer -->
