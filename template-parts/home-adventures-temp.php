<section class="flex flex-col flex-align-items-center padding20">
  <h1>LATEST ADVENTURES</h1>
  <div class="adventure-wrap flex">

    <?php  $adventures = new WP_Query( array( 'posts_per_page' => 4,'post_type' => 'adventures') );
    $x=1;
    while ( $adventures->have_posts() ) : $adventures->the_post();
    switch($x){
    case 1:?>
      <div class="left-adventure flex flex-col">
      <img src="<?php the_field('image') ?>"  alt="" />
      <h3><?php the_title();?></h3>
      <input type=button class="button-readmore" onClick="parent.location='<?php the_permalink()?>'" value='READ MORE'>
      </div>
    <?php $x=2;
    break;
  case 2:?>
    <div class="flex flex-col left-margin width50 flex-grow">
      <div class="right-top-adventure flex flex-grow flex-col">
        <img src="<?php the_field('image') ?>"  alt="" />
        <h3><?php the_title();?></h3>
        <input type=button class="button-readmore" onClick="parent.location='<?php the_permalink()?>'" value='READ MORE'>
      </div>
  <?php $x=3;
  break;
  case 3:
  ?>
  <div class="flex flex-row flex-grow">
    <div class="right-bottom-left-adventure flex flex-col flex-grow">
     <img src="<?php the_field('image') ?>" alt="" />
     <h3><?php the_title();?></h3>
     <input type=button class="button-readmore" onClick="parent.location='<?php the_permalink()?>'" value='READ MORE'>
    </div>
  <?php $x=4;
  break;
  case 4:
    ?>
    <div class="right-bottom-right-adventure flex flex-col flex-grow">
      <img src="<?php the_field('image') ?>" alt="" />
      <h3><?php the_title();?></h3>
      <input type=button class="button-readmore" onClick="parent.location='<?php the_permalink()?>'" value='READ MORE'>
    </div>
  </div>

</div>
<?php break;?>
<?php
}
  endwhile;
?>
</div>
<input type=button class="button-more-adventures flex-align-start" onClick="parent.location='../project05/adventures/'" value='<?php echo strtoupper("more adventures")?>'>


</section>
