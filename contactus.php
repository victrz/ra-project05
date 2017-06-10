<?php
/* Template Name: Contact Us*/
get_header();?>
<content class="flex">
  <div class="flex flex-col flex-grow">
<?php while ( have_posts() ) : the_post(); ?>

  <div style="width: 80%; margin: auto;"><?php get_template_part( 'template-parts/content', 'page' ); ?></div>

<?php endwhile; ?>
</div>
<div class="aside">
  <?php get_sidebar(); ?>
</div>
</content>
<?php get_footer(); ?>
