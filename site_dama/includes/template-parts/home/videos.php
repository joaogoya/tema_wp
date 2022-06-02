<?php
$args = array(
    'post_type' => 'videos',
    'orderby' => 'rand',
    'posts_per_page' => 3
);
$query_videos = new WP_Query($args);
?>

<section id="videos">
    <div class="container">
        <div class="row cards">

            <!-- Título -->
            <div class="col-12">
                <h2 class="t-center large">
                    Vídeos
                </h2>
                <br>
            </div>
            <br>

            <?php if ($query_videos->have_posts()) : while ($query_videos->have_posts()) : $query_videos->the_post(); ?>

                    <!-- Lista de posts -->
                    <div class="col-lg-4 col-6">
                        <div class="card">

                            <?php
                            
                                // Busca id do vídeo no banco
                                $url = get_the_content();
                                parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
                                $video_id = $my_array_of_vars['v'];
                            ?>

                            <!-- busca a thumb do vídeo -->
                            <div class="card-body p-relative">
                                <img src="https://img.youtube.com/vi/<?php echo $video_id; ?>/0.jpg" alt="">
                            </div>

                            <!-- Bt que abre a modal -->
                            <a class="btn-video-modal" data-toggle="modal" data-target="#modal<?php echo $post->ID; ?>">
                            <img src=" <?php bloginfo('template_url'); ?>/assets/img/youtube-icon.png" alt="">
                            </a>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modal<?php echo $post->ID; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" title="<?php echo $video_id; ?>">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">

                                    <!-- header - btn fechar -->
                                    <div class="modal-header">
                                        <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <!-- body - video -->
                                    <div class="modal-body">

                                        <!-- Escreve id do video para o js ler -->
                                        <div hidden id="<?php echo $video_id; ?>" class="video_id"></div>

                                        <!-- wrap para responsivar o placeholder -->
                                        <div class="embed-responsive embed-responsive-16by9">

                                            <!-- Video placeholder dentro da modal -->
                                            <div id="player1-<?php echo $video_id; ?>" class="video_placeholder"></div>

                                        </div>
                                    </div>
                                </div><!-- modal-content -->
                            </div><!-- modal-dialog -->
                        </div><!-- modal -->
                    </div><!-- col-lg-4 col-6 -->

            <?php endwhile;
            endif; ?>

        </div><!-- row -->
        <br><br>

        <!-- Bt ver todos -->
        <div class="row text-center">
            <div class="col-12 ">
                <a class="btn btn-form" target="_blank" href="https://www.youtube.com/channel/UCzt6dQYFoKfinbwjPJwH9nA">Todos os vídeos</a>
            </div>
        </div>

    </div><!-- container -->
</section>
<?php wp_reset_postdata(); ?>