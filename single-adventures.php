<?php get_header();
?>

<?php  while ( have_posts() ) : the_post();?>
<div class="width70 margin-auto padding30">
  <h2 class="uppercase margin-bottom-30" ><?php the_title();?></h2>
  <h3 class="uppercase margin-bottom-30"> BY <?php the_author();?></h3>
  <p><?php the_content();?></p>
</div>
 <?php endwhile;?>

 <?php get_footer();?>
