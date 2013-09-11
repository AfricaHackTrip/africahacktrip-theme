<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

</div><!-- #main -->

<footer id="page-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3>Contact/follow</h3>
        <ul>
          <li class="twitter"><a href="https://twitter.com/AfricaHackTrip">@AfricaHackTrip</a></li>
          <li class="github"><a href="https://github.com/AfricaHackTrip">github.com/AfricaHackTrip</a></li>
          <li class="email"><a href="mailto:hello@AfricaHackTrip.org">hello@AfricaHackTrip.org</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>Press</h3>
        <ul>
          <li class="presskit"><a href="https://github.com/AfricaHackTrip/PressKit/archive/master.zip">Press kit download</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>Supporters</h3>
        <div class="sponsor-logos">
          <p><a href="https://github.com" class="github">GitHub</a></p>
          <p><a href="http://geeksphone.com" class="geeksphone">Geeksphone</a></p>
        </div>
      </div>
      <div class="col-md-3">
        <h3>Media Partners</h3>
        <h4><a href="http://www.eufrika.org/">Eufrika.org</a></h4>
        <p>
          Eufrika is a blog focusing on independent news for an African-European public.
        </p>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript">
  <?php if(get_post_custom_values("location")) : ?>
    window.mapCity = '<?php get_post_custom_values("location") ; ?>';
  <?php endif ?>
  <?php if(get_post_custom_values("markers")) : ?>
    window.mapMarkers = '<?php get_post_custom_values("markers") ; ?>';
  <?php endif ?>
</script>


</body>
</html>