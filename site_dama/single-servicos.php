<?php get_header(); ?>

<br><br>
<section id="interna-blog">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">

                <!-- Thumbnail -->
                <?php if (has_post_thumbnail($post->ID)) : ?>
                    <?php echo pipe_get_img($post->ID, true, 'medium', 'lg-total'); ?>
                <?php endif; ?>

            </div>

        </div><br>

        <div class="row">

            <div class="col-12">

                <h2 class="t-left large">

                    <?php the_title(); ?>

                </h2>
                <br>

            </div>

            <div class="col-12">

                <div class="text-gray">

                    <?php the_content(); ?>

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

                <h2 class="t-left large">Mais serviços</h2>

            </div>

        </div>

        <div id="cards" class="row">

            <?php
            $args = array(
                'post_type' => 'servicos',
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
