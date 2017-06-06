<?php echo "products single";
get_header();?>
<section id="test">
  <div class="flex" style="width: 80%; margin: auto">
    <?php while ( have_posts() ) : the_post();?>
    <img class="prod-sing-img" src=" <?php the_field("image");?> " height=150px width=150px><br>
    <div style="margin: 20px;" class="prod-info flex flex-col">
      <h1 style="margin: 0;"><?php the_title();?></h1>
      <p style="font-family: 'Novecento-Normal.ttf'">$<?php the_field("price");?>.00</p>
      <?php the_content();?>
    </div>
    <?php endwhile;?>
  </div>
</section>
<?php get_footer(); ?>

<style>
.prod-sing-img{
  height: 50vh;
  width: auto;
}
.prod-info{
  width: 40%;
  height: 50vh;
}
</style>
