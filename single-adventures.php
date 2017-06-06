<?php get_header();
?>

<?php  while ( have_posts() ) : the_post();?>
<div style="width: 85%; margin: auto;">
  <h1><?php the_title();?></h1>
  <h1> BY <?php echo the_field('author');?></h1>
  <p><?php the_content();?></p>
</div>
 <?php endwhile;?>

 <?php get_footer();?>
