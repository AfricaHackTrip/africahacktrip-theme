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
    From September 23rd to November 1st we have been exploring the East African tech szene. <br />
    Our goal was to document our experience and to kick off a <a href="http://www.eurohacktrip.org/">continuous exchange</a> between the continents. 
  </p>
    <p>
    Check out our <a href="https://africahacktrip.org/blog/">Blog</a> or <a href="http://africahacktrip.tumblr.com">Tumblr</a>.
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
