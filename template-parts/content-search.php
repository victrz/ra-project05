<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="color-primary"><?php the_title()?></h1>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php the_title() ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<!-- <input type=button style="width: 20vh; background: none;   border: 1px solid #000000;   padding: 10px ; color: black;
"onClick="parent.location='<?php the_permalink()?>'" value='READ MORE &rarr;'> -->
<a href="<?php the_permalink();?>" class="button-journal button-journal-arrow w-20vh padding10 flex flex-just-center" >READ MORE </a>


</article><!-- #post-## -->
