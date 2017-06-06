<?php  $journals = new WP_Query( array( 'posts_per_page' => 3,'post_type' => 'post') );
// echo "<pre>";
// print_r ($loop);
// print_r($loop->posts[0]);
?>
<section class="flex flex-col flex-align-items-center padding20">
  <h1>INHABITENT JOURNAL</h1>
  <div class="flex flex-row" style="width: 100%">


          <?php  while ( $journals->have_posts() ) : $journals->the_post();
          ?>

          <div class="journal-category flex flex-col padding-left-item">
            <div class="journal-entry1">
              <img class="entry-img" src="<?php the_post_thumbnail_url('medium_large'); ?>">
            </div>
            <div class="journal-border">
              <div class="journal-info">
                <p><?php echo get_the_date();?> / 3 Comments</p>
                <h2><?php the_title(); ?></h2>
              </div>
              <input type=button class="button-journal" onClick="parent.location='<?php the_permalink()?>'" value='READ ENTRY'>
            </div>
          </div>


<?php endwhile;?>
</div>
</section>
