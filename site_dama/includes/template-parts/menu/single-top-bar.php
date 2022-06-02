<!--  Top bar é a barra que exibe o breadcrum e o titulo da página -->

<!-- Se é a home, esconde o topbar -->
<?php if (!is_front_page()) : ?>

    <section class="single-top-bar bg-secondary">

        <div class="container">

            <div class="row">

                <div class="col-12 text-center">

                    <!-- 
                        breadcrumb do yoast
                        se é resultado de pesquisa esconde o breadcrumb
                    -->
                    <?php if (!is_search()) : ?>
                        <div id="breadcrumbs" class="text-light">
                            <?php
                            if (function_exists('yoast_breadcrumb')) {
                                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <!-- Título da página -->
                    <h2 class="text-primary e-large">

                        <!-- Not found -->
                        <?php if (is_404()) : ?>
                            Página não encontrada

                        <!-- Resultado de pesquisa -->
                        <?php elseif (is_search()) : ?>
                            Resultado da pesquisa

                        <!-- Lista de posts do blog -->
                        <?php elseif(is_home()): ?>
                            Blog

                        <!-- Faq -->
                        <?php elseif(is_post_type_archive('faq')): ?>
                            Perguntas frequentes

                        <!-- Faq -->
                        <?php elseif(is_post_type_archive('depoimentos')): ?>
                            Depoimentos

                        <!-- Serviços -->
                        <?php elseif(is_post_type_archive('servicos')): ?>
                            Serviços

                        <!-- feedback form contato -->
                        <?php elseif(get_the_title() == 'Contato'): ?>
                            Obrigado pelo contato

                        <!-- Posts por categoria -->
                        <?php elseif(is_category()): 
                           echo get_queried_object()->name;
                        ?>

                        <!-- Página comum -->
                        <?php else : ?>
                            <?php the_title(); ?>

                        <?php endif; ?>
                    </h2>

                </div>

            </div>

        </div>

    </section>

<?php endif; ?>