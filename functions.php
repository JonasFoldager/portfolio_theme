<?php
function hotelcms_register_css() {
    wp_enqueue_style("theme-css", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("bootstrap-css", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", null, null, true);
}
add_action("wp_enqueue_scripts", "hotelcms_register_css");

function hotelcms_register_menu() {
    register_nav_menu("main-menu", "Main Menu");

}
add_action("after_setup_theme", "hotelcms_register_menu");


function custom_content_after_body_open_tag() { ?>
 
 <div class="video-bg-container">
    <video loop muted autoplay poster="<?php echo get_stylesheet_directory_uri( )?>/image/whitejpg" class="bg-video">
       
        <source src="<?php echo get_stylesheet_directory_uri( )?>/video/Sequence 01.mp4" type="video/mp4">
    </video>
</div>
 
<?php }
add_action('after_body_open_tag', 'custom_content_after_body_open_tag');


