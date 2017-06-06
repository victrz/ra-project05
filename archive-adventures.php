<?php echo "adventures archive";
get_header();?>

<div id="test" class="flex flex-col flex-align-items-center">
  <h1>LATEST ADVENTURES</h1>
  <div class="horizontal_dotted_line"></div>

<section class="parent">

  <?php while ( have_posts() ) : the_post();?>
  <div class="child" style='background-image: url("<?php the_field('image');?>");'>
    <h3><?php the_title(); ?></h3>
    <input type=button class="button-readmore" onClick="parent.location='<?php the_permalink()?>'" value='READ MORE'>
  </div>

  <?php endwhile;?>
</section>

<?php get_footer();?>
