<section id="depoimentos" class="bg-secondary section-bg toalha-garrafa bottom-left">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="t-center large">
                    NÓS FIZEMOS A DIFERENÇA NA HISTÓRIA <br>
                    DAS NOSSAS DAMAS E AFINADOS
                </h2>
                <br>
            </div>
        </div>
    </div>

    <?php
    $args = array(
        'post_type' => 'depoimentos',
        'orderby' => 'rand',
        'posts_per_page' => -1
    );
    $query_depos = new WP_Query($args);
    ?>

    <div id="slider-depos" class="carousel slide" data-ride="carousel">

        <!-- Loop indicators - avatar abaido do depo -->
        <ol class="carousel-indicators">

            <?php if ($query_depos->have_posts()) : while ($query_depos->have_posts()) : $query_depos->the_post(); ?>

                    <li data-target="#slider-depos" data-slide-to="<?php echo $query_depos->current_post; ?>" class="depos-indicators text-center <?php if ($query_depos->current_post == 0) : ?> active <?php endif; ?>">

                        <!-- "seta" rosa que aparece em cima da foto do avatar -->
                        <img class="depo-pointer" src="<?php bloginfo('template_url'); ?>/assets/img/depo-top-icon.png" title="Dama" alt="Logo da empresa"><br>

                        <!-- foto do avatar -->
                        <?php if (has_post_thumbnail($post->ID)) : ?>
                            <?php echo pipe_get_img($post->ID, true, 'thumb', 'depo-avatar'); ?>
                        <?php endif; ?>

                        <!-- dados do avatar -->
                        <p class="depo-text">
                            <span class="depo-name">
                                <?php the_title(); ?>
                            </span> <br>
                            <span class="depo-position">
                                <?php the_field('cargo_do_cliente'); ?>
                            </span>
                        </p>
                    </li>

            <?php endwhile;
            endif; ?>

        </ol>
        <!-- Fim loop indicators - avatar abaido do depo -->

        <?php rewind_posts(); ?>

        <!-- parágrafo com o depo -->
        <div class="carousel-inner">

            <?php if ($query_depos->have_posts()) : while ($query_depos->have_posts()) : $query_depos->the_post(); ?>

                    <div class="carousel-item <?php if ($query_depos->current_post == 0) : ?> active <?php endif; ?> ">
                        <div class="carousel-caption text-dark">
                            <div class="caption-content container">

                                <!-- img das aspas em cima do paragrafo -->
                                <img class="" src="<?php bloginfo('template_url'); ?>/assets/img/aspas-icon.png" title="Dama" alt="Logo da empresa">
                                <br> <br>

                                <!-- parágrafo -->
                                <p>
                                    <?php the_content(); ?>
                                <div class="indicators-height"></div>
                                </p>

                            </div>
                        </div>
                    </div>

            <?php endwhile;
            endif; ?>

        </div>

        <!-- next e prev -->
        <a class="carousel-control-prev" href="#slider-depos" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider-depos" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col-12 ">
                <a class="btn btn-form" href="<?php bloginfo('home'); ?>/depoimentos">Todos os depoimentos</a>
            </div>
        </div>
    </div>

</section>

<?php wp_reset_postdata(); ?>