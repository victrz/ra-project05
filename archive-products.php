<?php echo "products archive";
get_header();
$queried_object= get_queried_object();
$title=$queried_object->name;
$products = new WP_Query( array( 'posts_per_page' => 16,'post_type' => 'products') );
$terms = get_terms([
  'taxonomy' => type,
  'hide_empty' => false,
  ]);
?>
<div id="terms" class="flex flex-col flex-align-items-center">

  <h1><?php echo $title;?></h1><ul>
  <?php
  foreach($terms as $term){ ?>
    <li><a href='<?php echo get_term_link($term->term_id) ?>'><?php echo strtoupper($term->name); ?></a></li>
    <?php }?></ul>
 <!--  tax terms links here-->
  <div class="horizontal_dotted_line"></div>
  <section class="parent">
<?php while ( $products->have_posts() ) : $products->the_post();?>

<div class="each-product flex flex-col padding-left-item">
  <div class="journal-entry1">
    <img class="product-img" src="<?php echo the_field('image'); ?>" onClick="parent.location='<?php the_permalink()?>'" >
  </div>
  <div class="product-border flex" >
      <p style="margin-bottom:0;"><?php the_title(); ?></p>
      <div class="flex-grow dot-dot-dot"></div>
      <p style="margin-bottom:0;">$<?php echo get_field('price');?></p>
  </div>
</div>

<?php endwhile;?>

</section>

<style>
.each-product{
  width: 25%;
  display: flex;
  flex-direction: column;
  margin: 10px 0;
  /*justify-content: center;*/
  /*align-items: center;*/
  /*text-align: center;*/
}
.journal-entry1{
  border-style: solid;
  border-width: 3px 1px 1px 1px;
  border-color: #c3c3c3;
  height: 20vh;

}
.product-img{
  height: 20vh;
  width: 100%;
}
.product-border{
  border-style: solid;
  border-width: 3px 1px 1px 1px;
  border-color: #c3c3c3;
  width: 100%;
  position: relative;
  padding: 5px;
  height: auto;
}
</style>

<?php get_footer();
?>
