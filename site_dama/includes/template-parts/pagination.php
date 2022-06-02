
<div class="pagination-container">
    <?php the_posts_pagination(array(
        'screen_reader_text' => ' ',
        'prev_text'          => __('Página anterior', 'twentyfifteen'),
        'next_text'          => __('Próxima página', 'twentyfifteen'),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('', 'nieuwedruk') . ' </span>',
    )); ?>
</div>