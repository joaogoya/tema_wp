<section id="metodo">
    <div class="container">
        <div class="row">

            <div class="col-md-6">

                <div class="box-bg box-bg-small sliderigth">

                <?php if (get_field('imagem_do_box')) : ?>

                    <?php echo pipe_get_img(get_field('imagem_do_box'), false, 'medium', ''); ?>
                    
                <?php endif; ?>

                </div>

            </div>

            <div class="col-md-6">
            
                <h2 class="t-left large slideup">
                    <?php the_field('titulo_precisa'); ?>
                </h2>
                <br>
                
                <div class="slideup d-5">
                    <?php the_field('texto_precisa'); ?>
                </div>

                <a class="btn btn-primary" role="button" href="https://api.whatsapp.com/send?phone=5511913064141&text=Ol%C3%A1%20DaMa!%20Conheci%20o%20seu%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank"><i class="fas fa-angle-right"></i> Fale conosco</a>

            </div>
            
        </div>
    </div>
</section>