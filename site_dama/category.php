<?php get_header(); ?>

<section id="">
    <div class="container">
        <div class="row cards">
            <br>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if(get_the_title() != 'Categorias'): ?>


                    <!-- Lista de posts da pesquisa -->
                    <div class="col-md-4 sliderigth">

                        <div class="card">

                            <!-- img como se fosse o card-header -->
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                <?php echo pipe_get_img($post->ID, true, 'medium', ''); ?>
                            <?php endif; ?>

                            <div class="card-body">

                                <!-- titulo -->
                                <h5 class="card-title t-left medium">
                                    <?php the_title(); ?>

                                </h5>

                                <!-- Texto -->
                                <p class="card-text text-left">
                                    <?php echo wp_trim_words(get_the_content(), 15, '...'); ?>
                                </p>

                                <a href="<?php the_permalink(); ?>" class="btn btn-primary"> <i class="fas fa-angle-right"></i> Mais</a>

                            </div>

                        </div>

                    </div>

            <?php endif; endwhile;
            endif; ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>