<?php get_header(); ?>
<br><br>
    <main id="page">
        <section id="content">
            <div class="container">
                <div class="row">
                        
                        
                        <div class="col-12">
                            <?php the_title(); ?>
                            </div>
                                
                            <div class="col-12">
                                <div class="page-content text-center">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                  
                           
                    </div>
                </div>
            </div>
        </section>
    </main>
    <br><br>
<?php get_footer(); ?>