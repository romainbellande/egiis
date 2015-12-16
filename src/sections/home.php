<section id='home' class="egiis-section header-content-wrap">
    <?php $my_query = new WP_Query(array('post_type' => 'home')); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <h1><?php the_content(); ?></h1>
    <?php endwhile; ?>
</section>
