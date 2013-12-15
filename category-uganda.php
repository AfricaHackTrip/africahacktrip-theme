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

<div class="row uganda">
  <main class="col-md-9">

    <section class="people">
      <h2>Some people we have met</h2>
    <?php
      $args = array('category_name' => 'uganda', 'post_type' => 'person', 'posts_per_page' => 20 );
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
  <aside class="country col-md-3 uganda">
    <h1>Kampala</h1>
    <h3>Oct 02 - Oct 08, 2013</h3>
    <h2 class="flag">Uganda</h2>
    <section class="country-info">
      <p>
        Uganda is a young nation, about 75% of its 35 million people are youth - quite the opposite of most European countries and a rich source of creativity and entrepreneurship in an open and liberal market. In Kampala, government and private sector join hands in fostering ICT. The sector is growing rapidly and so are incubation centers like <a href="http://www.outbox.co.ug/">Outbox</a> and <a href="http://hivecolab.org/">Hive Colab</a>, where young people come up with practical solutions for local problems. 
      </p>
      <p>
        We can't wait to meet some serious hackers in Kampala!
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
      Hackmap.moveToCity('kampala');
    }, 300);
  });
</script>

<?php get_footer(); ?>