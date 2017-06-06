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

  <div class="each-product flex flex-col padding-left-item">
    <div class="journal-entry1">
      <img class="product-img" src="<?php echo the_field('image'); ?>" onClick="parent.location='<?php the_permalink()?>'" >
    </div>
    <div class="product-border">
      <div>
        <p style="text-align: center;"><?php the_title(); ?> ......... $<?php echo get_field('price');?> </p>
      </div>
    </div>
  </div>
  <?php endwhile;?>
</section>

<style>
.each-product{
  width: 25%;
  display: flex;
  flex-direction: column;
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
  flex-grow: 1;
  position: relative;
  height: auto;
}
</style>
