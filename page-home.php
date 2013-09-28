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
    The trip has started on September 23, and it's been an amazing experience so far! African hackers: Mnavuita &lt;3
    	</p>
    <p>
    Check out our <a href="https://africahacktrip.org/blog/">Blog</a> or <a href="africahacktrip.tumblr.com">Tumblog</a> and see what's happening on <a href="https://twitter.com/search?q=%23aht13&src=typd&f=realtime">Twitter</a>! <br />
	</p>
</div>

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="teaser">
  <h1 class="home-title"><?php the_title(); ?></h1>
	<div class="teaser-video">
		<iframe width="460" height="259" src="//www.youtube.com/embed/w-QbKIctz60" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="teaser-content">
    <?php the_content(); ?>
  </div>
</div>

<?php endwhile; ?>

<h1 class="home-title">Get excited...</h1>
<div class="row grid" id="get-excited">
<?php
  $args = array('post_type' => 'tile', 'posts_per_page' => 30 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  ?>
<div class="tile tile-<?php echo get_post_custom_values("tile_size")[0] ?>">
	<?php if(get_post_custom_values("plaintext")[0] != "1"): ?>
		<?php the_content() ?>
		<div class="caption">
			<h3><a href="<?php echo get_post_custom_values("url")[0] ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt() ?>
		</div>
	<?php else: ?>
		<h3><a href="<?php echo get_post_custom_values("url")[0] ?>"><?php the_title(); ?></a></h3>
		<?php the_content() ?>
	<?php endif; ?>
</div>
<?php endwhile; ?>


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
