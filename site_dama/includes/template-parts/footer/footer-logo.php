<?php $query_home = get_page_data_by_slug('Inicio', 'page'); ?>

<?php if ($query_home->have_posts()) : while ($query_home->have_posts()) : $query_home->the_post(); ?>

        <!-- imegem do logo -->
        <?php if (has_post_thumbnail($post->ID)) : ?>
            <?php echo pipe_get_img($post->ID, true, 'thumb', ''); ?>
        <?php endif; ?>

        <br><br>

        <div class="xx-small">
            <?php the_field('paragrafo_conheca'); ?>
        </div>

        <nav class="nav nav-social">

            <a class="nav-link" href="<?php the_field('facebook'); ?>">
                <span class="badge-circle bg-primary text-light small">
                    <i class="fab fa-facebook-f"></i>
                </span>
            </a>

            <a class="nav-link" href="<?php the_field('instagram'); ?>">
                <span class="badge-circle bg-primary text-light small">
                    <i class="fab fa-instagram"></i>
                </span>
            </a>

            <a class="nav-link" href="<?php the_field('twitter'); ?>">
                <span class="badge-circle bg-primary text-light small">
                    <i class="fab fa-twitter"></i>
                </span>
            </a>

        </nav>

<?php endwhile;
endif; ?>