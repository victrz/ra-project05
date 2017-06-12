<section class="flex flex-col flex-align-items-center padding20">
  <h1>SHOP STUFF</h1>
  <div class="flex flex-row flex-just-between">

    <?php $terms = get_terms([
    'taxonomy' => type,
    'hide_empty' => false,
]);?>
  <?php
  foreach($terms as $term){ ?>

    <div class="width25 margin-10 text-align-cent border-solid flex flex-col flex-align-items-center">
      <img src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/images/product-type-icons/<?php echo $term->name ?>.svg" height="50px" alt="do icon" width="80px" class="flex padding10"/>
      <p class="flex"><?php echo $term->description?></p>
      <a href="<?php echo site_url()?>/type/<?php echo $term->name?>" class="button-shop flex flex-just-center"><?php echo strtoupper($term->name)?> STUFF</a>
    </div>
    <?php }?>

  </div>
</section>
