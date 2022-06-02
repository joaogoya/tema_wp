<?php get_header(); ?>

<section id="cards">
    <div class="container">
        <br><br>
        <div class="row">

            <div class="col-12">

                <div class="row cards cards-blog">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                           
                            <!-- Lista de posts da pesquisa -->
                            <div class="col-md-4">

                                <div class="card">

                                    <!-- img como se fosse o card-header -->
                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                        <?php echo pipe_get_img($post->ID, true, 'medium', 'card-img-top'); ?>
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

                                    </div>

                                    <div class="card-footer bg-secondary text-center xx-small">
                                        <b><i><?php the_field('cargo_do_cliente'); ?></i></b>
                                    </div>

                                </div>

                            </div>
                    <?php endwhile;
                    endif; ?>

                </div>

                <div class="row">
                    <div class="col-12">

                        <?php get_template_part('includes/template-parts/pagination') ?>

                    </div>
                </div>

            </div>
        </div>
</section>



<!-- posts relacionados -->
<section class="section-bg bambu-pedras bottom-right">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <h2 class="t-left large">Blog</h2>

            </div>

        </div>

        <div id="cards" class="row">

            <?php
            $args = array(
                'post_type' => 'post',
                'orderby' => 'rand',
                'posts_per_page' => 3
            );
            $query_blog = new WP_Query($args);

            ?>

            <?php if ($query_blog->have_posts()) : while ($query_blog->have_posts()) : $query_blog->the_post(); ?>

                <?php get_template_part('includes/template-parts/internas/cards-blog'); ?>

            <?php endwhile;
            endif; ?>

        </div>

    </div>

</section>

<?php get_footer(); ?>

<?php get_footer(); ?>