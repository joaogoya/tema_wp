<?php get_header(); ?>

<section id="cards">
    <div class="container">
        <br><br>
        <div class="row">

            <div class="col-12">

                <div class="row cards cards-blog">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('includes/template-parts/internas/cards-blog'); ?>
                    <?php endwhile;
                    endif; ?>

                </div>

                <br><br>
                <div class="row">
                    <div class="col-12">

                        <?php get_template_part('includes/template-parts/pagination') ?>

                    </div>
                </div>

            </div>

            <br><br>
        </div>
</section>

<?php get_footer(); ?>
