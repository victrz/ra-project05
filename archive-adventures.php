<?php get_header();?>

<div class="flex flex-col flex-align-items-center width70 margin-auto padding30">
  <h1 class="padding30">LATEST ADVENTURES</h1>
  <div class="horizontal-dotted-line width100">
  </div>
  <section class="flex flex-wrap width100 flex-just-center">

    <?php while ( have_posts() ) : the_post();?>
      <div class="w-50vh margin-10 flex flex-col h-50vh background-img-prop" style='background-image: url("<?php the_field('image');?>");'>
        <h3 class="base-font width70 line-space-5 text-shadow color-primary margin-10"><?php the_title(); ?></h3>
        <a href="<?php echo the_permalink()?>" class="button-readmore padding10 w-20vh flex flex-just-center text-shadow">READ MORE</a>
      </div>
    <?php endwhile;?>
  </section>
</div>
<?php get_footer();?>
