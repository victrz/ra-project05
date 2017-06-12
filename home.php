<?php get_header();?>
<content class="flex">
  <div class="flex flex-col flex-grow">
  <?php while( have_posts() ) : the_post();?>
    <div id="journal-wrap" class="flex flex-col">
      <div id="journal-banner-1" style="background-image: url('<?php the_post_thumbnail_url('medium_large');?>');" class="flex flex-col flex-just-between h-50vh background-img-prop">
        <h2 class="flex padding10 uppercase"><?php the_title(); ?></h1>
        <h3 class="flex flex-align-end padding10 uppercase"><?php echo get_the_date();?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php the_author(); ?></h2>
      </div>
      <?php the_excerpt();?><br>
      <a href="<?php the_permalink();?>" class="button-journal w-20vh padding10 flex flex-just-center button-journal-arrow" >READ MORE </a>
    </div>
  <?php endwhile;?>
  </div>
  <div class="aside">
    <?php get_sidebar(); ?>
  </div>
</content>
<?php get_footer();?>
