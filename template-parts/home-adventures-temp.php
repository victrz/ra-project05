<section class="flex flex-col flex-align-items-center padding20 ">
  <h1>LATEST ADVENTURES</h1>
  <div class="adventure-wrap width100 flex flex-just-between" >

    <?php  $adventures = new WP_Query( array( 'posts_per_page' => 4,'post_type' => 'adventures') );
    $x=1;
    while ( $adventures->have_posts() ) : $adventures->the_post();
    switch($x){
    case 1:?>
      <div class="adventure1 width50 overflow-hidden background-img-prop flex flex-col" style="margin:0 2.5px 0 10px;background-image:url('<?php the_field('image') ?>')">
        <h3 class="width100 line-space-5 text-shadow color-primary margin-10"><?php the_title();?></h3>
        <a href="<?php echo the_permalink()?>" class="button-readmore padding10 w-20vh flex flex-just-center text-shadow">READ MORE</a>
      </div>
    <?php $x=2;
    break;
  case 2:?>
    <div class="flex flex-col flex-just-between width50" style="margin: 0 10px 0 2.5px">
      <div class="adventure2 width100 overflow-hidden background-img-prop flex flex-col flex-grow" style="background-image:url('<?php the_field('image') ?>')">
        <h3 class="width100 line-space-5 text-shadow color-primary margin-10"><?php the_title();?></h3>
        <a href="<?php echo the_permalink()?>" class="button-readmore padding10 w-20vh flex flex-just-center text-shadow">READ MORE</a>
      </div>
  <?php $x=3;
  break;
  case 3:
  ?>
      <div class="flex flex-row ">
        <div class="adventure3 overflow-hidden width50 background-img-prop flex flex-grow flex-col" style="background-image:url('<?php the_field('image') ?>')">
         <h3 class="width100 line-space-5 text-shadow color-primary margin-10"><?php the_title();?></h3>
         <a href="<?php echo the_permalink()?>" class="button-readmore padding10 w-20vh flex flex-just-center text-shadow">READ MORE</a>
        </div>
  <?php $x=4;
  break;
  case 4:
    ?>
        <div class="adventure4 overflow-hidden width50 background-img-prop flex flex-col flex-grow" style="background-image:url('<?php the_field('image') ?>')">
          <h3 class="width100 line-space-5 text-shadow color-primary margin-10"><?php the_title();?></h3>
          <a href="<?php echo the_permalink()?>" class="button-readmore padding10 w-20vh flex flex-just-center text-shadow">READ MORE</a>
        </div>
      </div>
    </div>
<?php break;?>
<?php
}
  endwhile;
?>
  </div>
  <a href="<?php echo site_url().'/adventures'?>" class="button-more-adventures margin-10 flex-align-start flex flex-just-center">MORE ADVENTURES</a>

</section>
