<?php
    
function africahacktrip_customize_register($wp_customize){
    
    $wp_customize->add_section('africahacktrip_logo_section', array(
            'title'    => __('Logo', 'africahacktrip'),
            'priority' => 120,
            'description' => 'Upload a logo to replace the default site name and description in the header',
        ));
    
    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('africahacktrip_logo');
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'africahacktrip_logo', array(
        'label'    => __('Logo', 'africahacktrip'),
        'section'  => 'africahacktrip_logo_section',
        'settings' => 'africahacktrip_logo',
    )));
}
 
add_action('customize_register', 'africahacktrip_customize_register');


function create_post_types() {
  register_post_type( 'person',
    array(
          'labels' => array(
                            'name' => __( 'People' ),
                            'singular_name' => __( 'Person' )
                            ),
          'public' => true,
          'exclude_from_search' => true,
          'rewrite' => array('slug' => 'people'),
    )
  );
  register_post_type( 'grid',
    array(
          'labels' => array(
                            'name' => __( 'Grid' ),
                            'singular_name' => __( 'Grid' )
                            ),
          'public' => true,
          'exclude_from_search' => true,
          'rewrite' => array('slug' => 'people'),
    )
  );
}
add_action( 'init', 'create_post_types' );
  
  
/**
 *
 * Overwritten to remove the tags
 *
* Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
*
* Create your own twentythirteen_entry_meta() to override in a child theme.
*
* @since Twenty Thirteen 1.0
*
* @return void
*/
function twentythirteen_entry_meta() {
  if ( is_sticky() && is_home() && ! is_paged() )
    echo '<span class="featured-post">' . __( 'Sticky', 'twentythirteen' ) . '</span>';

  if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
    twentythirteen_entry_date();
        
  // Translators: used between list items, there is a space after the comma.
  $categories_list = get_the_category_list( __( ', ', 'twentythirteen' ) );
  if ( $categories_list ) {
    echo '<span class="categories-links">' . $categories_list . '</span>';
  }
  // Post author
  if ( 'post' == get_post_type() ) {
    printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
      esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
      esc_attr( sprintf( __( 'View all posts by %s', 'twentythirteen' ), get_the_author()   ) ),
      get_the_author()
    );
  }
}