<section id="conheca">
    <div class="container">
        <div class="row order-invert">

            <div class="col-12">
                <h2 class="t-left large mobile slideup">
                    <?php the_field('titulo_conheca'); ?>
                </h2>
            </div>

            <!-- coluna com a foto grande -->
            <div class="col-lg-6 order-2 order-lg-6 slideup d-5">

                <div class="box-bg box-bg-pedras">
                    <?php echo pipe_get_img(get_field('terceira_imagem_conheca'), false, 'medium', ''); ?>
                </div>

            </div>

            <!-- Coluna com o parágrafo e as duas fotos menores -->
            <div class="col-lg-6 order-3">

                <!-- Informações do parágrafo -->
                <h2 class="t-left large desk slideup">
                    <?php the_field('titulo_conheca'); ?>
                </h2>
                <br>

               <div class="slideup d-8">
                    <?php the_field('paragrafo_conheca'); ?>
               </div>

                <!-- linha com as duas fotos menores -->
                <div class="row">

                    <div class="col-6 sliderigth d-11">

                        <?php echo pipe_get_img(get_field('primeira_imagem_conheca'), false, 'medium', 'lg-total box-bg'); ?>

                    </div>

                    <div class="col-6 sliderigth d-14">

                        <?php echo pipe_get_img(get_field('segunda_imagem_conheca'), false, 'medium', 'lg-total box-bg'); ?>
                        
                    </div>

                </div>

            </div>
        </div>

    </div>

</section>