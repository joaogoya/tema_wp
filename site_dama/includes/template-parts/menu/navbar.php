<nav class="navbar navbar-expand-lg navbar-scrool rounded navbar-light">
    <div class="container bg-light">

        <!-- Primeira coluna -->
        <div class="order-0 brand-container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- segunda coluna -->
        <div class="navbar-collapse collapse order-1 order-md-0 dual-collapse2 column-2">
            
            <div class="m-column">
                <ul class="navbar-nav mx-auto justify-content-end">
                    <?php get_template_part('includes/template-parts/menu/loophome');  ?>
                </ul>

            </div>

        </div>

    </div>
</nav>

<?php get_template_part('includes/template-parts/menu/single-top-bar'); ?>