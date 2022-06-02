<?php

/*******************************************************/
/******************* THEME SUPORT **********************/
/*******************************************************/

//Titulo dinamico
add_theme_support('title-tag');

// side bar
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'            => 'Sidebar',
        'before_widget'    => '<div class="widget">',
        'after_widget'    => '</div>',
        'before_title'    => '<h3>',
        'after_title'    => '</h3>',
    ));
}

//thumb
add_theme_support('post-thumbnails');

// esconde a versao do wp
add_filter('the_generator', 'function_name');
function function_name()
{
    return;
}


/*******************************************************/
/************************ ASSETS ***********************/
/*******************************************************/

function pipe_add_scripts()
{
    wp_enqueue_style('pipe_main_css',  get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('pipe_main_js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'pipe_add_scripts');



/*******************************************************/
/************************* MENUS ***********************/
/*******************************************************/

//menu principal
add_action('init', 'register_main_menu');

function register_main_menu()
{
    register_nav_menu('main-menu', 'Menu principal do header');
}

function get_custom_menu($id)
{
    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations[$id];
    $navbar_items = wp_get_nav_menu_items($menuID);
    $child_items = [];

    foreach ($navbar_items as $key => $item) {
        if ($item->menu_item_parent) {
            array_push($child_items, $item);
            unset($navbar_items[$key]);
        }
    }

    foreach ($navbar_items as $item) {
        foreach ($child_items as $key => $child) {
            if ($child->menu_item_parent == $item->post_name) {
                if (!$item->child_items) {
                    $item->child_items = [];
                }
                array_push($item->child_items, $child);
                unset($child_items[$key]);
            }
        }
    }

    return $navbar_items;
}

/*******************************************************/
/************************ DUMP *************************/
/*******************************************************/

function pipe_dump($var)
{
    print("<pre>" . print_r($var, true) . "</pre>");
}


/*******************************************************/
/********************* ACF FIELDS **********************/
/*******************************************************/
function pipe_custom_field($field)
{

    if (get_field($field)) :
        return get_field($field);
    else :
        return '';
    endif;
}


/*******************************************************/
/******************* GET CATEGORIES ********************/
/*******************************************************/

function get_page_categories_by_slug($title, $post_type) {

    $page = get_page_by_title( $title, OBJECT, $post_type );

    return get_the_category($page->ID);
}

/*******************************************************/
/******************* HAS CHILDREN **********************/
/*******************************************************/

function category_has_children($id_post)
{

    $categories = wp_get_post_categories($id_post);

    foreach ($categories as $c) {

        $cat = get_category($c);

        $children =  get_categories(array(
            'orderby' => 'name',
            'parent' => $cat->term_id
        ));

        if (empty($children)) {

            return ($cat->slug);
        }
    }
    return '';
}

/*******************************************************/
/************* GET PAGE INFORMATIONS *******************/
/*******************************************************/

function get_page_data_by_slug($title, $post_type)
{

    /*
        Busca as informações de uma página específica pelo título
        retorna uma query para ser loopada
    */

    $page = get_page_by_title( $title, OBJECT, $post_type );

    $id = $page->ID;

    $args = array(

        'p'         => $id,

        'post_type' => $post_type

    );

    $my_posts = new WP_Query($args);

    wp_reset_postdata();

    return $my_posts;
}

/*******************************************************/
/******************* SEARCH ONLY POSTS *****************/
/*******************************************************/

/*
    A searchbar traz, por default, posts types, páginas, ...
    Essa function restringe a pesquisa apenas aos posts do blog
*/

function search_filter($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
    }
}

add_action('pre_get_posts', 'search_filter');
/* Fim search only posts */



// function pipe_img_plugin($id, $is_thumb, $size_to_serve, $class)
// {
//     if (function_exists('pipe_get_img_attrs')) {
//         echo pipe_get_img_attrs($id, $is_thumb, $size_to_serve, $class);
//     }
// }

require('includes/functions/custom-posts.php');
 require('includes/functions/img_handle/index.php');








