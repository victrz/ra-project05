<?php
get_header();
$queried_object= get_queried_object();
$title=$queried_object->name;
//add action
// $products = new WP_Query( array( 'posts_per_page' => 16,'post_type' => 'products') );
$terms = get_terms([
  'taxonomy' => type,
  'hide_empty' => false,
  ]);
?>
<div class="flex flex-col flex-align-items-center width70 margin-auto padding30">
  <h1>SHOP STUFF</h1>
    <div id="terms" class="width33 margin-auto flex flex-just-between padding30">
      <?php
      foreach($terms as $term){ ?>
        <a href='<?php echo get_term_link($term->term_id) ?>'><?php echo strtoupper($term->name); ?></a>
      <?php }?>
   </div>
  <div class="horizontal-dotted-line width100"></div>
  <section class="flex flex-wrap flex-just-center">
    <?php while ( have_posts() ) : the_post();?>
      <div class="margin-10 content-box width20 flex flex-col">
        <div class="h-20vh border-solid">
          <a href="<?php echo the_permalink()?>" ><img class="h-20vh width100" src="<?php echo the_field('image'); ?>"></a>
        </div>
        <div class="width100 border-solid flex">
            <p class="small-font"><?php the_title(); ?></p>
            <div class="flex-grow dot-dot-dot"></div>
            <p class="small-font">$<?php echo get_field('price');?></p>
        </div>
      </div>
    <?php endwhile;?>
  </section>
</div>

<?php get_footer();?>
