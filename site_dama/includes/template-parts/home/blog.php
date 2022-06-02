<?php
$args = array(
    'post_type' => 'post',
    'orderby' => 'rand',
    'posts_per_page' => 3
);
$query_blog = new WP_Query($args);

?>

<section id="cards">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="t-center large">
                    Últimas do Insta
                </h2>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php echo do_shortcode('[instagram-feed]'); ?>
            </div>
        </div>

        <!-- <div class="row cards">
            <div class="col-12">
                <h2 class="t-center large">
                    Últimas do blog
                </h2>
                <br>
            </div>
            <br>
            
            <?php //if ($query_blog->have_posts()) : while ($query_blog->have_posts()) : $query_blog->the_post(); 
            ?>
            
                <?php //get_template_part('includes/template-parts/internas/cards-blog'); 
                ?> 

            <?php //endwhile;
            //endif; 
            ?>
            
        </div>
        <div class="row text-center">
            <div class="col-12 ">
                <a class="btn btn-form" href="<?php bloginfo('home'); ?>/blog">Todos os posts</a>
            </div>
        </div> -->

    </div>

</section>

<?php wp_reset_postdata(); ?>