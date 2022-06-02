<?php

/*******************************************************/
/***************** POSTTYPE SERVIÇOS *******************/
/*******************************************************/

add_action('init', 'type_post_servicos');

function type_post_servicos()
{
    $labels = array(
        'name' => _x('Serviços', 'post type general name'),
        'singular_name' => _x('Serviço', 'post type singular name'),
        'add_new' => _x('Adicionar Serviço', 'Novo Representante'),
        'add_new_item' => __('Novo Serviço'),
        'edit_item' => __('Editar Serviço'),
        'new_item' => __('Novo Serviço'),
        'view_item' => __('Ver Serviço'),
        'search_items' => __('Procurar Serviço'),
        'not_found' =>  __('Nenhum serviço encontrado'),
        'not_found_in_trash' => __('Nenhum serviço encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Serviços',

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-nametag',
        'menu_position' => 36,
        'taxonomies' => array('category', 'post_tag'),
        'supports' => array('title', 'editor', 'thumbnail', 'comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
    );

    register_post_type('servicos', $args);
    flush_rewrite_rules();
}

// faz os post type aparecerem no arquivo category.php
function custom_post_type_cat_filter($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_category()) {
            $query->set('post_type', array('post', 'servicos'));
        }
    }
}

add_action('pre_get_posts', 'custom_post_type_cat_filter');



/*******************************************************/
/******************* POSTTYPE FAQ **********************/
/*******************************************************/

add_action('init', 'type_post_faq');

function type_post_faq()
{
    $labels = array(
        'name' => _x('faq', 'post type general name'),
        'singular_name' => _x('FAQ', 'post type singular name'),
        'add_new' => _x('Adicionar FAQ', 'Novo Representante'),
        'add_new_item' => __('Novo FAQ'),
        'edit_item' => __('Editar FAQ'),
        'new_item' => __('Novo FAQ'),
        'view_item' => __('Ver FAQ'),
        'search_items' => __('Procurar FAQ'),
        'not_found' =>  __('Nenhum FAQ encontrado'),
        'not_found_in_trash' => __('Nenhum FAQ encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'FAQ',

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-editor-help',
        'menu_position' => 36,
        'taxonomies' => array('category', 'post_tag'),
        'supports' => array('title', 'editor', 'thumbnail', 'comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
    );

    register_post_type('faq', $args);
    flush_rewrite_rules();
}


/*******************************************************/
/*************** POSTTYPE DEPOIMENTOS ******************/
/*******************************************************/

add_action('init', 'type_post_depoimentos');

function type_post_depoimentos()
{
    $labels = array(
        'name' => _x('Depoimentos', 'post type general name'),
        'singular_name' => _x('Depoimento', 'post type singular name'),
        'add_new' => _x('Adicionar Depoimento', 'Novo Representante'),
        'add_new_item' => __('Novo Depoimento'),
        'edit_item' => __('Editar Depoimento'),
        'new_item' => __('Novo Depoimento'),
        'view_item' => __('Ver Depoimento'),
        'search_items' => __('Procurar Depoimento'),
        'not_found' =>  __('Nenhum depoimento encontrado'),
        'not_found_in_trash' => __('Nenhum depoimento encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Depoimentos',

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-format-quote',
        'menu_position' => 36,
        'taxonomies' => array('category', 'post_tag'),
        'supports' => array('title', 'editor', 'thumbnail', 'comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
    );

    register_post_type('depoimentos', $args);
    flush_rewrite_rules();
}



/*******************************************************/
/****************** POSTTYPE SLIDES ********************/
/*******************************************************/


add_action('init', 'type_post_slides');

function type_post_slides()
{

    $descritivos = array(
        'name' => 'Slides Home',
        'singular_name' => 'Slide',
        'add_new' => 'Adicionar Novo Slida',
        'add_new_item' => 'Adicionar Slide',
        'edit_item' => 'Editar Slide',
        'new_item' => 'Novo Slide',
        'view_item' => 'Ver Slide',
        'search_items' => 'Procurar Slide',
        'not_found' =>  'Nenhum Slide encontrado',
        'not_found_in_trash' => 'Nenhum Slide na Lixeira',
        'parent_item_colon' => '',
        'menu_name' => 'Slides Home'
    );

    $args = array(
        'labels' => $descritivos,
        'public' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-cover-image',
        'menu_position' => 36,
        'supports' => array('title', 'comments', 'custom-fields', 'revisions', 'trackbacks')
    );

    register_post_type('slides', $args);
    flush_rewrite_rules();
}







/*******************************************************/
/****************** POSTTYPE SLIDES ********************/
/*******************************************************/


add_action('init', 'type_post_videos');

function type_post_videos()
{

    $descritivos = array(
        'name' => 'Vídeos Home',
        'singular_name' => 'Vídeo',
        'add_new' => 'Adicionar Novo Vídeo',
        'add_new_item' => 'Adicionar Vídeo',
        'edit_item' => 'Editar Vídeo',
        'new_item' => 'Novo Vídeo',
        'view_item' => 'Ver Vídeo',
        'search_items' => 'Procurar Vídeo',
        'not_found' =>  'Nenhum Vídeo encontrado',
        'not_found_in_trash' => 'Nenhum Vídeo na Lixeira',
        'parent_item_colon' => '',
        'menu_name' => 'Vídeos Home'
    );

    $args = array(
        'labels' => $descritivos,
        'public' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-format-video',
        'menu_position' => 36,
        'supports' => array('title', 'editor', 'thumbnail', 'comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
    );

    register_post_type('videos', $args);
    flush_rewrite_rules();
}
