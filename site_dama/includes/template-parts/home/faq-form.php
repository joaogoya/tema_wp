<section id="faq-form" class="section-bg bambu-pedras bottom-right">
    <div class="container">
        <div class="row text-left">

            <div class="col-lg-6">
                <div class="box-bg box-bg-big sliderigth d-5">

                    <h2 class="t-left large slideup">
                        Fale conosco
                    </h2>
                    <br>
                    
                        <?php echo do_shortcode('[contact-form-7 id="104" title="Formulário da home"]'); ?>

                </div>
            </div>
            <br><br><br>            
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>

            <br><br><br>
            <br>            

            <div class="col-lg-6 p-relative">
                <div class="content">

                    <h2 class="t-left large slideup d-8">
                        Perguntas frequentes
                    </h2>
                    <br>

                    <?php
                    $args = array(
                        'post_type' => 'faq',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'posts_per_page' => 10
                    );
                    $query_faq = new WP_Query($args);
                    ?>

                   <div class="slideup d-8">
                        <?php require('loop-faq.php'); ?>
                   </div>

                    <?php wp_reset_postdata(); ?>
                    <br>
                    <a class="btn btn-form" href="<?php bloginfo('home'); ?>/faq">Todos as perguntas</a>
                </div>
                
            </div>

        </div>
    </div>
</section>