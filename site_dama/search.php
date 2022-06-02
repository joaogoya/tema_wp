<?php get_header(); ?>

<section id="serach-page">
    <div class="container">

        <div class="row">

            <div class="col-12">

                <h2>Resultado da pesquisa</h2>

                <p class="t-left">

                    <small>

                        <i>Pesquisa por:</i> <b><?php echo $_GET['s']; ?></b>

                    </small>

                </p>
                <br>

            </div>

        </div>

        <?php if (have_posts()) : ?>

            <div id="cards" class="row"> 

                <?php while (have_posts()) : the_post(); ?>
                
                    <?php get_template_part('includes/template-parts/internas/cards-blog'); ?> 

                <?php endwhile; ?>
            </div>

        <?php else : // se nao tem resultados 
        ?>

            <div class="row">

                <div class="col-12">
                    <br>
                    <h5> Nenhum resultado foi encontrado. </h5>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6">
                    <p>Você pode fazer outra pesquisa.</p>
                    <?php get_template_part('includes/template-parts/searchform'); ?>
                </div>

            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <?php get_template_part('includes/template-parts/pagination') ?>
            </div>
        </div>

    </div>
    <br><br><br>
    </div>
</section>
<?php get_footer(); ?>