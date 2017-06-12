<?php  $journals = new WP_Query( array( 'posts_per_page' => 3,'post_type' => 'post') );?>
<section class="flex flex-col flex-align-items-center padding20">
  <h1>INHABITENT JOURNAL</h1>
  <div class="flex flex-row width100 flex-just-between">
    <?php  while ( $journals->have_posts() ) : $journals->the_post();?>
      <div class="width33 margin-10 flex flex-col padding-left-item">
        <div class="border-solid h-30vh width100">
          <img class="h-30vh width100" src="<?php the_post_thumbnail_url('medium_large'); ?>">
        </div>
        <div id="journal-grid" class="padding10 journal-info border-solid flex flex-col flex-grow width100 flex-just-between">
          <!-- <div class="flex-just-start padding10 journal-info flex flex-col"> -->
            <p ><?php echo get_the_date();?> / 3 Comments</p>
            <h1 class="font-secondary uppercase"><?php the_title(); ?></h2>
          <!-- </div> -->
          <a href="<?php echo the_permalink()?>" class="button-journal w-20vh padding10 flex flex-just-center">READ ENTRY</a>
        </div>
      </div>
    <?php endwhile;?>
  </div>
</section>
