<?php

$args = array(
    'post_type' => 'post',
    'orderby' => 'rand',
    'posts_per_page' => 3
);
$query_blog = new WP_Query($args);

?>


<h2 class="t-left medium">
    Blog
</h2>
<nav class="nav flex-column nav-dark">
    <?php if ($query_blog->have_posts()) : while ($query_blog->have_posts()) : $query_blog->the_post(); ?>

            <a class="nav-link" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
    <?php endwhile;
    endif; ?>
</nav>
<?php wp_reset_postdata(); ?>