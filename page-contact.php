<?php
get_header();
while ( have_posts() ) : the_post(); ?>

  <div style="width: 80%; margin: auto;"><?php get_template_part( 'template-parts/content', 'page' ); ?></div>

<?php endwhile; ?>
<?php get_footer(); ?>
