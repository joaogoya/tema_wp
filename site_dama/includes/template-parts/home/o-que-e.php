<section id="o-que-e" class="section-bg folhas-topo">
    <div class="container">

        <div class="row">

            <!-- Primeira coluna -->
            <div class="col-lg-6">
                <div class="row">
                    
                    <!-- Titulo primeira coluna -->
                    <div class="col-12 text-center ">
                        <h2 class="large t-center slideup">
                            <?php the_field('titulo_da_secao_o_que_e'); ?>
                        </h2>
                        <br>
                    </div>

                    <!-- Parágrafo primeira coluna -->
                    <div class="col-12 slideup">
                        <p>
                            <?php the_field('conteudo_da_secao_o_que_e'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Segunda coluna -->
            <div class="col-lg-6 col-antes-depois">
                <div class="box-bg box-bg-small p-30 sliderigth d-5">

                    <!-- Título Segunda Coluna -->
                    <h2 class="t-left large">
                        <?php the_field('titulo_da_secao_antes_depois');
                        ?>
                    </h2>
                    <br>

                    <!-- Imagens segunda coluna -->
                    <div class="antes-depois owl-carousel owl-theme">

                        <?php $gallery_ids = pipe_get_galery_from_afc('Inicio', 'imagens_antes_depois'); ?>

                        <?php foreach ($gallery_ids as $key => $image_id) : ?>

                            <div class="item">
                                <?php echo pipe_get_img($image_id, false, 'whide', ''); ?>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>