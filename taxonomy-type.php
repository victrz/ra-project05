<?php echo "taxonomy type page";
get_header();
print_r($echo);
$term = get_query_var( 'term' );?>
<div id="test" class="flex flex-col flex-align-items-center">
  <h1><?php echo $term;?></h1>
  <p><?php echo term_description();?></p>
  <div class="horizontal_dotted_line"></div>
  <section class="parent">
  <?php while ( have_posts() ) : the_post();?>

  <div class="width25 flex flex-col padding-left-item">
    <div class="h-20vh">
      <img class="h-20vh width100" src="<?php echo the_field('image'); ?>" onClick="parent.location='<?php the_permalink()?>'" >
    </div>
    <div class="product-border width100 flex-grow">
      <div>
        <p style="text-align: center;"><?php the_title(); ?> ......... $<?php echo get_field('price');?> </p>
      </div>
    </div>
  </div>
  <?php endwhile;?>
</section>
