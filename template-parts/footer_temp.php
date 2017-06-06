<footer>
  <section>
    <div class="flex flex-just-between">
      <div>
        <h4>CONTACT INFO</h4>
        <p class="body-font text-white"><span class="fa fa-envelope" aria-hidden="true"></span>info@inhabitent.com</p>
        <p class="body-font text-white"><span class="fa fa-phone" aria-hidden="true"></span> 778-456-7891</p>
        <p class="text-white"><span class="fa fa-facebook-official" aria-hidden="true"></span> <span class="fa fa-twitter-square" aria-hidden="true"></span> <span class="fa fa-google-plus-square" aria-hidden="true"></span>
      </div>
      <div>
        <h4>BUSINESS HOURS</h4>
        <p class="body-font text-white"><span class="text-footer-bold">monday-friday</span> 9am to 5pm</p>
        <p class="body-font text-white"><span class="text-footer-bold">saturday</span> 10am to 2pm</p>
        <p class="body-font text-white"><span class="text-footer-bold">sunday</span> Closed</p>
      </div>
      <div class="flex">
      <?php  echo '<img src="'.get_bloginfo('stylesheet_directory').'/assets/images/logos/inhabitent-logo-text.svg" height="50px" />';?>
      </div>
    </div>
    <div>
      <p class="text-footer-copyright">COPYRIGHT 2016 INHABITENT</p>
    </div>
  </section>
</footer>
<style>

footer{
  background-image: url("<?php bloginfo('stylesheet_directory')?>/assets/images/dark-wood@2x.png");
  height: 50vh;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  padding: 20px;
}
</style>
