<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


//ShortCode
function get_related_content($atts) {
    $atts = shortcode_atts( array(
        'cat' => '',
    ), $atts );

    $args = array(
    	'post_type' => 'post',
    	'posts_per_page' => 3,
    	'category_name' => $atts['cat']
    );
    $the_query = new WP_Query( $args );

    
    ob_start();
    if ($the_query->have_posts()) :
        ?>
        <div class="related-content">
            <h2 class="related-content-title">Noticias relacionadas</h2>
            <div class="related-posts">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="post-item">
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('class' => 'post-thumbnail')); ?>
                            <?php endif; ?>
                        </a>
                        <h5 class="post-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h5>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php
        wp_reset_postdata();
    endif;
    
    $result = ob_get_contents();
    ob_end_clean();
    return $result;
}
add_shortcode('related_content', 'get_related_content');