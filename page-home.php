<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<div id="intro">
  <h1 id="tagline">
    We are a group of developers & designers from Europe, curious about the emerging African tech hubs.
  </h1>
  <p>
    The trip has started on September 23, and it's been an amazing experience so far! African hackers: Munavutia &lt;3
    	</p>
    <p>
    Check out our <a href="https://africahacktrip.org/blog/">Blog</a> or <a href="http://africahacktrip.tumblr.com">Tumblr</a> and see what's happening on <a href="https://twitter.com/search?q=%23aht13&src=typd&f=realtime">Twitter</a>! <br />
	</p>
</div>

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="teaser">
  <h1 class="home-title"><?php the_title(); ?></h1>
	<div class="teaser-video">
    <iframe src="//player.vimeo.com/video/76040355" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
  <div class="teaser-content">
    <?php the_content(); ?>
  </div>
</div>

<?php endwhile; ?>

<div class="row">
  <div class="twitter col-md-4">
    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%23aht13" data-widget-id="385411029292691456">Tweets about "#aht13"</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>

  <div class="flickr col-md-4">
    <!-- Start of Flickr Badge -->
    <style type="text/css">
    /*
    * Images are wrapped in divs classed "flickr_badge_image" with ids "flickr_badge_imageX" where "X" is an integer specifying ordinal position. Below are some styles to get you started!
    * */
    #flickr_badge_uber_wrapper {text-align:center; width:150px;}
    #flickr_badge_wrapper {padding:10px 0 10px 0;}
.flickr_badge_image {margin:0 10px 10px 10px; float:left;}
.flickr_badge_image img {border: 1px solid black !important;}
#flickr_badge_source {text-align:left; margin:0 10px 0 10px;}
#flickr_badge_icon {float:left; margin-right:5px;}
#flickr_www {display:block; padding:0 10px 0 10px !important; font: 11px Arial, Helvetica, Sans serif !important; color:#3993ff !important;}
#flickr_badge_uber_wrapper a:hover,
#flickr_badge_uber_wrapper a:link,
#flickr_badge_uber_wrapper a:active,
#flickr_badge_uber_wrapper a:visited {text-decoration:none !important; background:inherit !important;color:#ea9629;}
#flickr_badge_wrapper {}
#flickr_badge_source {padding:0 !important; font: 11px Arial, Helvetica, Sans serif !important; color:#666666 !important;}
</style>
<div id="flickr_badge_uber_wrapper"><a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a><div id="flickr_badge_wrapper">
<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=10&display=latest&size=t&layout=x&context=in%2Fpool-africahacktrip%2F&source=group&group=2303076%40N24"></script>
</div></div>
<!-- End of Flickr Badge -->

  </div>
<div class="facebook col-md-4">


</div>

</div>



<style type="text/css">
  @media (min-width: 785px) {
    .leaflet-container {
      height: 400px;
    }
  }
</style>
<script src="/wp-content/themes/africahacktrip/js/masonry.min.js"></script>
<script type="text/javascript">
  $(function() { 
    msnry = new Masonry( $("#get-excited").get(0), {
      itemSelector: '.tile'
    });  
    if(!window.SMALL_SCREEN) {
      Hackmap.moveToOverview();
    }
  });
</script>
<?php get_footer(); ?>
