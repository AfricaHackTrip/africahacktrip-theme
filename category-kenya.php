<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="row kenya">
  <main class="col-md-9">
    <section class="people">
      <h2>Some people we have met</h2>

    <?php
      $args = array('category_name' => 'kenya', 'post_type' => 'person', 'posts_per_page' => 20 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>    
        <div class="">
          <div class="person box">
            <a href="<?php echo get_post_custom_values("url")[0] ?>">
              <?php if ( has_post_thumbnail()) { the_post_thumbnail( 'person_thumbnail', array( 'class' => '' ) );  } ?>        
            </a>
            <strong class="person-name"><a href="<?php echo get_post_custom_values("url")[0] ?>"><?php the_title(); ?></a></strong>
            <?php the_excerpt() ?>
          </div>
        </div>
 
    <?php endwhile; ?>
      <div class="clear" style="clear:both"></div>
    </section>


  </main>
  <aside class="country col-md-3 kenya">
    <h1>Nairobi</h1>
    <h3>Sep 24 - Oct 27, 2013</h3>
    <h2 class="flag">Kenya</h2>
    <section class="country-info">
      <p>
        Nairobi is East Africa's economic and innovation center. It may not be the fastest growing city in Africa, but it is home to a Creative Class, made up of Kenyans and expatriates alike, many of them working in ICT. From what we've heard so far, the city buzzes and hums with hacktivity.
      </p>
      <p>
        In 2012, Kenya's ICT Board conceptualized a 5-year-plan to see ICT contribute 25% of the GDP and thus make Kenya a "digital nation". Key to this transition is innovation. More and more innovation takes place in hubs, where entrepreneurs cowork on finding solutions for local problems.
      </p>
      <p>
        We are überexcited to come to Nairobi and meet the local hackers!
      </p>
    </section>

  </aside>
</div>

<div class="row">
  <main class="col-md-9">
  

  <div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

      <?php if(get_post_custom_values("markers")) : ?>
        <script type="text/javascript">
          $(function() {
            Hackmap.addMakers(<?php get_post_custom_values("markers")[0] ; ?>);
          });
        </script>
      <?php endif ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
  
  </main>
</div>


<script type="text/javascript">
  $(function() {
    Hackmap.setHeight(200);
    window.setTimeout(function() {
      Hackmap.moveToCity("nairobi");
    }, 300);
  });
</script>

<?php get_footer(); ?>
