<?php
//menu de navegacion
function register_my_menus(){
    if(function_exists('register_nav_menus')){
        register_nav_menus (
            array(
                'superior' => __('Menú principal superior')
            )
        );
    }
}
//clase para el ancla
add_filter('nav_menu_link_attributes', 'clase_menu_invento', 10, 3);
function clase_menu_invento($atts, $item, $args){
    $class = 'p-2 link-secondary';
    $atts['class'] = $class;
    return $atts;
}
add_action('init', 'register_my_menus');
// add custom class to tag
function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a class="badge bg-primary"',$html);
    return $html;
}
add_filter('the_tags','add_class_the_tags');