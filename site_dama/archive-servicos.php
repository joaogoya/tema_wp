<?php get_header(); ?>

<section id="cards">
    <div class="container">
        <br><br>
        <div class="row">

            <div class="col-12">

                <div class="row cards cards-blog">

                    <?php
                    $categories = get_page_categories_by_slug('Categorias', 'servicos');

                    foreach ($categories as $category) :
                        $taxonomy = $category->taxonomy;
                        $term_id = $category->term_taxonomy_id;
                        $id_img_category = get_field('imagem_da_categoria', $taxonomy . '_' . $term_id);
                    ?>

                        <!-- Lista de posts da pesquisa -->
                        <div class="col-md-4 sliderigth">

                            <div class="card">

                                <!-- img como se fosse o card-header -->
                                <?php if (!!$id_img_category) : ?>
                                    <!-- Imagem do banner -->
                                    <?php echo pipe_get_img($id_img_category, false, 'medium', ''); ?>
                                <?php endif; ?>

                                <div class="card-body">

                                    <!-- titulo -->
                                    <h5 class="card-title t-left medium">
                                        <?php echo $category->name; ?>

                                    </h5>

                                    <!-- Texto -->
                                    <p class="card-text text-left">
                                        <?php echo wp_trim_words($category->description, 15, '...'); ?>
                                    </p>

                                    <a href="<?php echo get_category_link($category->term_id); ?>" class="btn btn-primary"> <i class="fas fa-angle-right"></i> Mais</a>

                                </div>

                            </div>

                        </div>

                    <?php endforeach ?>

                </div>

                <div class="row">
                    <div class="col-12">

                        <?php get_template_part('includes/template-parts/pagination') ?>

                    </div>
                </div>

            </div>
        </div>
</section>



<?php get_footer(); ?>