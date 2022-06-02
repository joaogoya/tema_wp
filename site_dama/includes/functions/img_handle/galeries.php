<?php 


/*******************************************************/
/********* GALERY IMAGES POR POST TYPE *****************/
/*******************************************************/

function pipe_get_gallery_post_type($galery_slug)
{
    /**
     * Função utilizada quando criamos um post type "galeria"
     * 
     * Com o slug da galeria
     * busca as imagens e retorna um
     * array com os src´s
     */

    $args = array(
        'name'        => $galery_slug,
        'post_type'   => 'galerias',
        'post_status' => 'publish',
        'numberposts' => 1
    );

    $posts = get_posts($args);
    $post = $posts[0];

    $gakeria = get_post_gallery($post->ID, false);
    $images_src = $gakeria['src'];

    return $images_src;
}

/*******************************************************/
/********** GALERY IMAGES FROM ACF WYSIWYG *************/
/*******************************************************/

function pipe_get_galery_from_afc($page_title, $custom_field)
{
    // busca o shortcode da galeria
    $page = get_page_by_title($page_title);
    $id = $page->ID; 
    $gallery = get_post_meta($id, $custom_field, true);  

    // pega array de ids do shortcode
    preg_match('/\[gallery.*ids=.(.*).\]/', $gallery, $ids);

    //limpa as informações dos ids    
    $images_ids = explode(",", $ids[1]);

    //ficam apenas os números em formato string
    $gallery_ids = array();
    foreach ($images_ids as $key => $id) {
        $id_int = intval($id);
        $id_string =  strval($id_int);
        array_push($gallery_ids, $id_string);
    }

    //Retorna um array com os ids
    return $gallery_ids;
}
