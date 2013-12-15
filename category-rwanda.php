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

<div class="row rwanda">
  <main class="col-md-9">
    <section class="people">
      <h2>Some people we have met</h2>

    <?php
      $args = array('category_name' => 'rwanda', 'post_type' => 'person', 'posts_per_page' => 20 );
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
  <aside class="country col-md-3 rwanda">
    <h1>Kigali</h1>
    <h3>Oct 09 - Oct 15, 2013</h3>
    <h2 class="flag">Rwanda</h2>
    <section class="country-info">
      <p>
        Rwanda continues to be one of the fastest growing African countries in Information and Communication Technology (ICT).
        With the creation of the Ministry of youth and ICT the Government of Rwanda makes ICT key tool for its vision for a knowledege based society. 
      </p>
      <p>
        We're super excited to meet the communities at <a href="http://klab.rw/">kLab</a> and <a href="http://theofficerw.com/">The Office</a>.
      </p>
    </section>

  </aside>
</div>

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

<script type="text/javascript">
  $(function() {
    Hackmap.setHeight(200);
    window.setTimeout(function() {
      Hackmap.moveToCity("kigali");
    }, 300);
  });
</script>

<?php get_footer(); ?>