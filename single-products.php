<?php get_header();?>
<section id="test" class="padding30">
  <div class="flex width70 margin-auto">
    <?php while ( have_posts() ) : the_post();?>
    <img class="h-50vh"src=" <?php the_field("image");?> " ><br>
    <div class="margin-10 width33 h-50vh flex flex-col">
      <h1 class="uppercase color-secondary-accent"><?php echo the_title();?></h1>
      <p style="font-family: 'Novecento-Normal.ttf'">$<?php the_field("price");?>.00</p>
      <?php the_content();?>
    </div>
    <?php endwhile;?>
  </div>
</section>
<?php get_footer(); ?>
