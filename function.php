<?php
function mytheme_enqueue(){
    //load main wordpress style.css
    wp_enqueue_style('ds-theme-style', get_stylesheet_uri());
//load custom custom css from assets/css/style.css
wp_enqueue_style('ds-theme-costum-style', get_template_diectory_uri(). '/assets/css/style.css', array());
//load custom javascript file

wp_enqueue_script('ds-theme-costum-script', get_template_diectory_uri(). '/assets/js/script.js', array('jquery'));

//enqueue comment reply script 
if(is_singular() && comments_open() && get_option('thread_comments')){
    wp_enqueue_script('comments-reply');
}
}

add_action('wp_enqueue_scripts', 'dstheme_enqueue_assets');
?>