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
    We decided to explore the African tech community ourselves and share our impressions on the web and with a video documentary.<br />
  </p>
  <p>
    The journey begins in September 2013.
  </p>
</div>

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="teaser">
  <h1 class="home-title"><?php the_title(); ?></h1>
  <div class="teaser-video">
    <iframe width="560" height="315" src="//www.youtube-nocookie.com/embed/w-QbKIctz60" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="">
    <?php the_content(); ?>
  </div>
</div>

<?php endwhile; ?>

<style type="text/css">
  .leaflet-container {
    height: 400px;
  }
</style>
<script type="text/javascript">
  $(function() { Hackmap.moveToOverview() });
</script>
<?php get_footer(); ?>