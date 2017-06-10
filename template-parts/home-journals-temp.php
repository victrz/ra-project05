<?php  $journals = new WP_Query( array( 'posts_per_page' => 3,'post_type' => 'post') );?>
<section class="flex flex-col flex-align-items-center padding20">
  <h1>INHABITENT JOURNAL</h1>
  <div class="flex flex-row width100 flex-just-between">
    <?php  while ( $journals->have_posts() ) : $journals->the_post();?>
      <div class="journal-category flex flex-col padding-left-item">
        <div class="journal-entry1 width100">
          <img class="entry-img width100" src="<?php the_post_thumbnail_url('medium_large'); ?>">
        </div>
        <div class="journal-border flex flex-col flex-grow width100 flex-just-between">
          <div class="journal-info flex flex-col">
            <p><?php echo get_the_date();?> / 3 Comments</p>
            <h2><?php the_title(); ?></h2>
          </div>
          <input type=button class="width50 button-journal " onClick="parent.location='<?php the_permalink()?>'" value='READ ENTRY'>
        </div>
      </div>
    <?php endwhile;?>
  </div>
</section>
