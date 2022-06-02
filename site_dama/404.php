<?php get_header(); ?>

<section id="not-found" class="pg-interna">
<br><br><br>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <p>
                    Lamentamos, mas a página não pôde ser encontrado. <br>
                    Você pode procurar o que deseja.
                </p>
                <br>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <?php get_template_part('includes/template-parts/searchform'); ?>
                    </div>
                    <div class="col-lg-3"></div>
                </div>

            </div>
        </div>
    </div>
    <br><br><br>
</section>

<?php get_footer(); ?>