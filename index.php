<?php get_header(); ?>

<div class="row">
<main class="col-md-9">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

            <section id="posts">
    			<?php /* The loop */ ?>
    			<?php while ( have_posts() ) : the_post(); ?>
    				<?php get_template_part( 'content', get_post_format() ); ?>
    			<?php endwhile; ?>
            </section>
            
            <section id="paging-navigation">
                <?php twentythirteen_paging_nav(); ?>
            </section>


		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>