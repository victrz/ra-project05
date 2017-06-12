<?php
get_header();
$term = get_query_var( 'term' );?>
<div class="flex flex-col flex-align-items-center width70 margin-auto padding30" id="term">
  <h1 class="uppercase"><?php echo $term;?></h1>
  <?php echo term_description();?>
  <div class="horizontal-dotted-line width100"></div>
  <section class="flex flex-wrap flex-just-center" style="overflow: visible;">
  <?php while ( have_posts() ) : the_post();?>
    <div class="margin-10 width20 flex flex-col">
      <div class="h-20vh border-solid">
        <a href="<?php echo the_permalink()?>" ><img class="h-20vh width100" src="<?php echo the_field('image'); ?>"></a>
      </div>
      <div id="product-info"class="border-solid width100 flex flex-grow">
        <p class="small-font"><?php the_title(); ?></p>
        <div class="flex-grow dot-dot-dot"></div>
        <p class="small-font">$<?php echo get_field('price');?></p>
      </div>
    </div>
  <?php endwhile;?>
</section>
