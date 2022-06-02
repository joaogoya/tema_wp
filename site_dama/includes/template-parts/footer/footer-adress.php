<?php $query_home = get_page_data_by_slug('inicio', 'page'); ?>

<?php if($query_home->have_posts()): while($query_home->have_posts()): $query_home->the_post(); ?>


<ul class="list-group no-border list-group-bg-secondary block-box-shadow xx-small">

    <li class="list-group-item">

        <span class="badge-circle bg-primary text-light small">
            <i class="fas fa-phone-alt"></i>
        </span>

        <?php the_field('telefone'); ?>
    </li>

    <li class="list-group-item">

        <span class="badge-circle bg-primary text-light small">
            <i class="fab fa-whatsapp"></i>
        </span>

        <?php the_field('whatsapp'); ?>
    </li>

    <li class="list-group-item">

        <span class="badge-circle bg-primary text-light small">
            <i class="far fa-envelope"></i>
        </span>

        <?php the_field('e-mail'); ?>
    </li>

    <li class="list-group-item">
    
        <span class="badge-circle bg-primary text-light small">
            <i class="fas fa-map-marker-alt"></i>
        </span>

        <?php the_field('endereco'); ?>
    </li>
</ul>

<?php endwhile; endif; ?>