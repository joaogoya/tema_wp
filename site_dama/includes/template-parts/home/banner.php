<?php
$args = array(
    'post_type' => 'slides',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => -1
);
$query_slides = new WP_Query($args);

?>

<section id="inicio">

    <div id="slider-home" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">

            <!-- "riscos" brancos que aparecem na parte central inferior do banner -->
            <?php if ($query_slides->have_posts()) : while ($query_slides->have_posts()) : $query_slides->the_post(); ?>

                    <li data-target="#slider-home" data-slide-to="<?php echo $query_slides->current_post; ?>" class="<?php if ($query_slides->current_post == 0) : ?> active <?php endif; ?>"></li>

            <?php endwhile;
            endif; ?>

        </ol>

        <?php rewind_posts(); ?>

        <div class="carousel-inner">

            <?php if ($query_slides->have_posts()) : while ($query_slides->have_posts()) : $query_slides->the_post(); ?>

                    <div class="carousel-item <?php if ($query_slides->current_post == 0) : ?> active <?php endif; ?>">

                        <!-- Imagem do banner -->
                        <?php
                         echo pipe_get_img(get_field('banner_home'), false, 'whide', 'd-block lg-total');
                        ?>

                        <!-- só exibe o caption se algum campo foi preenchido -->
                        <?php if (get_field('logo_do_site_banner_home') || get_field('titulo_do_banner_home') || get_field('frase_do_banner')) : ?>

                            <div class="carousel-caption text-dark">

                                <div class="caption-content">

                                    <!-- Logo que aparece no banner -->
                                    <?php if (get_field('logo_do_site_banner_home')) : ?>

                                        <?php 
                                             if (function_exists('pipe_get_img_attrs')) {
                                                echo pipe_get_img_attrs(get_field('logo_do_site_banner_home'), false, 'small', '');
                                            }
                                        ?>

                                    <?php endif; ?>
                                    <br> <br>

                                    <!-- Título -->
                                    <?php if (get_field('titulo_do_banner_home')) : ?>
                                        <h5 class="e-large text-left">
                                            <?php the_field('titulo_do_banner_home'); ?>
                                        </h5>
                                    <?php endif; ?>

                                    <!-- frase -->
                                    <?php if (get_field('frase_do_banner')) : ?>
                                        <p class="medium text-left">
                                            <?php the_field('frase_do_banner'); ?>
                                        </p>
                                    <?php endif; ?>

                                </div><!-- caption-content -->

                            </div><!-- caption -->

                        <?php endif; ?>

                    </div><!-- carousel-item -->

            <?php endwhile;
            endif; ?>

        </div><!-- carousel-inner -->

        <!-- next e prev -->
        <a class="carousel-control-prev" href="#slider-home" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider-home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

</section>

<?php wp_reset_postdata() ;?>