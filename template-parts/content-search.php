<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
<h1><?php the_title()?></h1>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php the_title() ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<input type=button style="width: 20%; background: none;   border: 1px solid #000000;   padding: 10px ; color: black;

"onClick="parent.location='<?php the_permalink()?>'" value='READ MORE &rarr;'>

</article><!-- #post-## -->
