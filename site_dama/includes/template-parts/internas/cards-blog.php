<!-- Lista de posts da pesquisa -->
<div class="col-lg-4 slideup">

    <div class="card">

        <!-- img como se fosse o card-header -->
        <?php if (has_post_thumbnail($post->ID)) : ?>
            <?php echo pipe_get_img($post->ID, true, 'medium', 'card-img-top'); ?>
        <?php endif; ?>

        <div class="card-body">

            <div class="row">

                <!-- Data -->
                <div class="col-6 xx-small">
                    <i class="far fa-calendar-alt"></i> <?php echo get_the_date('d F Y'); ?>
                </div>

                <!-- autor -->
                <div class="col-6 xx-small">
                    <i class="far fa-user"></i> <?php echo get_author_name(); ?>
                </div>

            </div>

            <!-- titulo -->
            <h5 class="card-title"><?php the_title(); ?></h5>

            <!-- Texto -->
            <p class="card-text text-left">
                <?php echo wp_trim_words(get_the_content(), 15, '...'); ?>
            </p>

            <!-- btn leia mais -->
            <a href="<?php the_permalink(); ?>" class="card-link"> <i class="fas fa-angle-right"></i> Ler mais</a>

        </div>

    </div>

</div>