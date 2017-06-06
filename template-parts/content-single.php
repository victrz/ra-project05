<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<style>
#journal-banner-1{
  height: 50vh;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
#journal-banner-1 h1{
  font-family: "Novecento-Normal.ttf";
  font-size: 2em;
  padding: 20px;
  width: 75%;
  color: white;
  background-color: #248A83;
}
#journal-banner-1 h2{
  font-family: "Novecento-DemiBold.ttf";
  font-size: 1.4em;
  line-height: 0.8em;
  padding: 10px 35px;
  color: #008080;
  text-align: left;
  width: 45%;
  color: white;
  background-color: #248A83;
}
</style>
<article style="width: 80%; margin: auto;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<div id="journal-banner-1" style="background-image: url('<?php the_post_thumbnail_url('medium_large');?>');" class="flex flex-col">
	    <h1 class="flex"><?php the_title(); ?></h1>
	    <h2 class="flex flex-align-end"><?php the_date();?> / <?php red_starter_comment_count(); ?> /<?php the_author(); ?></h2>
	  </div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<section class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</section><!-- .entry-footer -->
</article><!-- #post-## -->
