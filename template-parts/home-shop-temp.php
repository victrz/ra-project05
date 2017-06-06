<section class="flex flex-col flex-align-items-center padding20">
  <h1>SHOP STUFF</h1>
  <div class="flex flex-row flex-just-between">

    <?php $terms = get_terms([
    'taxonomy' => type,
    'hide_empty' => false,
]);?>
  <?php
  foreach($terms as $term){ ?>

    <div class="shop-category flex">
      <img src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/images/product-type-icons/<?php echo $term->name ?>.svg" height="50px" alt="do icon" width="80px" class="padding10"/>
      <p><?php echo $term->description?></p>
      <input type=button class="button-shop" onClick="parent.location='../project05/type/<?php echo $term->name ?>/'" value='<?php echo strtoupper($term->name)?> STUFF'>
    </div>
    <?php }?>

  </div>
</section>
