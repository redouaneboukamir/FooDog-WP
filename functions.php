
<?php
    function register_my_menus() {
        register_nav_menus(
            array(
                'fooDog_socialNavList' => 'social networks',
                'fooDog_mainNavList' => 'main navbar',
                'footer-menu' => 'Footer menu'
            )
        );
    }
    add_action( 'init', 'register_my_menus' );
    add_theme_support('post-thumbnails');
    // $src = wp_get_attachment_image_src(get_post_thumbnail_id());
    // add_image_size($small, 300,300);
    //css files
    function fooDog_enqueue_styles(){
        wp_enqueue_style('css_fontawesome', get_template_directory_uri()."/assets/css/all.css");
        wp_enqueue_style('css_bootstrap', get_template_directory_uri()."/assets/css/bootstrap.min.css");
        wp_enqueue_style('css_style', get_template_directory_uri()."/style.css");
    }
    add_action('enqueue_styles', fooDog_enqueue_styles());
    //js files
    function fooDog_enqueue_scripts(){
        wp_enqueue_script('js_jquery', get_template_directory_uri()."/assets/js/jquery.min.js");
        wp_enqueue_script('js_bootstrap', get_template_directory_uri()."/assets/js/bootstrap.min.js");
        wp_enqueue_script('js_script', get_template_directory_uri()."/assets/js/script.js");
    }
    add_action('enqueue_scripts', fooDog_enqueue_scripts());
    function count_post_visits() {
        if( is_single() ) {
        global $post;
        $views = get_post_meta( $post->ID, 'my_post_viewed', true );
        if( $views == '' ) {
        update_post_meta( $post->ID, 'my_post_viewed', '1' ); 
        } else {
        $views_no = intval( $views );
        update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
        }
        }
       }
       add_action( 'wp_head', 'count_post_visits' );
       function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    // Modify comments header text in comments
add_filter( 'genesis_title_comments', 'child_title_comments');
function child_title_comments() {
    return __(comments_number( '<h3>No Responses</h3>', '<h3>1 Response</h3>', '<h3>% Responses...</h3>' ), 'genesis');
}
 
// Unset URL from comment form
function crunchify_move_comment_form_below( $fields ) { 
    $comment_field = $fields['comment']; 
    unset( $fields['comment'] ); 
    $fields['comment'] = $comment_field; 
    return $fields; 
} 
add_filter( 'comment_form_fields', 'crunchify_move_comment_form_below' ); 
 
// Add placeholder for Name and Email
function modify_comment_form_fields($fields){
    $fields['author'] = '<div class="commentNameEmail"><p class="comment-form-author  col-4">' . '<input class="col-12" id="author" placeholder="Name.." name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                '<label for="author">' . __( "" ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' )  .
                '</p>';
    $fields['email'] = '<p class="comment-form-email  col-4">' . '<input class="col-12" id="email" placeholder="Email.." name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' />'  .
                '<label for="email">' . __( '' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) 
                 .
                '</p>';
    $fields['url'] = '<p class="comment-form-url col-4" >' .
             '<input id="url" name="url" placeholder="Website.." class="col-12" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
            '<label for="url">' . __( '', 'domainreference' ) . '</label>' .
               '</p> </div>';
    
    return $fields;
}
add_filter('comment_form_default_fields','modify_comment_form_fields');
?>
