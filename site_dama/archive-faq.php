<?php get_header(); ?>

<section id="">
    <div class="container">

        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="col-12">

                    <div class="accordion" id="accordionExample">

                        <div class="card">

                            <!-- 
                                card header
                                aqui fica a pergunta
                                dentro de um botao
                            -->
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">

                                    <!-- btn com a pergunda -->
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php the_ID(); ?>">
                                        <?php the_title(); ?> <i class="fas fa-caret-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <!-- Resposta -->
                            <div id="collapse<?php the_ID(); ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            
                        </div>

                    </div>

                </div>
                
            <?php endwhile;
            endif; ?>

        </div>
        
    </div>

</section>

<?php get_footer(); ?>