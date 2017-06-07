<?php echo "home.php";
get_header();?>
<content class="flex">
<div class="flex flex-col flex-grow">
<?php while( have_posts() ) : the_post();?>

<div id="journal-wrap" class="flex flex-col">
  <div id="journal-banner-1" style="background-image: url('<?php the_post_thumbnail_url('medium_large');?>');" class="flex flex-col">
    <h1 class="flex"><?php the_title(); ?></h1>
    <h2 class="flex flex-align-end"><?php echo get_the_date();?> / comments /<?php the_author(); ?></h2>
  </div>
  <?php the_excerpt();?><br>
  <input type=button style="width: 20%; background: none;   border: 1px solid #000000;   padding: 10px ; color: black;

"onClick="parent.location='<?php the_permalink()?>'" value='READ MORE &rarr;'>

  <!-- <input type=button onClick="parent.location='<?php the_permalink()?>'" value='READ MORE'> -->
</div>

<?php endwhile;?>
</div>
<div class="aside">
  <?php get_sidebar(); ?>
</div>
</content>
<?php get_footer();

?>
<style>
#journal-wrap{
  width: 80%;
  margin: auto;
  margin-top: 20px;
  margin-bottom: 20px;

}
#journal-banner-1{
  height: 50vh;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
#journal-banner-1 h1{
  font-family: "Novecento-Normal.ttf";
  font-size: 2em;
  padding: 20px;
  width: 75%;
  color: white;
  background-color: #248A83;
}
#journal-banner-1 h2{
  font-family: "Novecento-DemiBold.ttf";
  font-size: 1.4em;
  line-height: 0.8em;
  padding: 10px 35px;
  color: #008080;
  text-align: left;
  width: 45%;
  color: white;
  background-color: #248A83;
}
#button-journal{
  /*set button position from bottom left*/
  background-color: #ffffff;
  padding: 10px 24px;
  border: 1px solid #000000;
  color: black;
  display: flex;
  align-self: flex-start;
  margin: 10px 0 10px 30px;
}
</style>
