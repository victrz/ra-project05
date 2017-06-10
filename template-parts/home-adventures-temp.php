<section class="flex flex-col flex-align-items-center padding20 ">
  <h1>LATEST ADVENTURES</h1>
  <div class="adventure-wrap width100 flex flex-just-between" >

    <?php  $adventures = new WP_Query( array( 'posts_per_page' => 4,'post_type' => 'adventures') );
    $x=1;
    while ( $adventures->have_posts() ) : $adventures->the_post();
    switch($x){
    case 1:?>
      <div class="adventure1 overflow-hidden background-img-prop flex flex-col padding20" style="width: 50%; background-image:url('<?php the_field('image') ?>')">
        <h3 class="width100 line-space-5 text-shadow"><?php the_title();?></h3>
        <input type=button class="button-readmore text-shadow" onClick="parent.location='<?php the_permalink()?>'" value='READ MORE'>
      </div>
    <?php $x=2;
    break;
  case 2:?>
    <div class="flex flex-col flex-just-between" style="width: 50%;">
      <div class="adventure2 overflow-hidden background-img-prop flex flex-col flex-grow padding20" style="background-image:url('<?php the_field('image') ?>')">
        <h3 class="width100 line-space-5 text-shadow"><?php the_title();?></h3>
        <input type=button class="button-readmore text-shadow" onClick="parent.location='<?php the_permalink()?>'" value='READ MORE'>
      </div>
  <?php $x=3;
  break;
  case 3:
  ?>
  <div class="flex flex-row ">
    <div class="adventure3 overflow-hidden width50 background-img-prop flex flex-grow flex-col padding20 " style="background-image:url('<?php the_field('image') ?>')">
     <h3 class="width100 line-space-5 text-shadow"><?php the_title();?></h3>
     <input type=button class="button-readmore text-shadow" onClick="parent.location='<?php the_permalink()?>'" value='READ MORE'>
    </div>
  <?php $x=4;
  break;
  case 4:
    ?>
    <div class="adventure4 overflow-hidden width50 background-img-prop flex flex-col flex-grow padding20" style="background-image:url('<?php the_field('image') ?>')">
      <h3 class="width100 line-space-5 text-shadow"><?php the_title();?></h3>
      <input type=button class="button-readmore text-shadow" onClick="parent.location='<?php the_permalink()?>'" value='READ MORE'>
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
