<section id='data-management' class="egiis-section">
    <?php $my_query = new WP_Query(array('post_type' => 'data')); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <h2 id='data-management-title'><?php the_title(); ?></h2>
        <div class='drugs'>
            <?php the_content(); ?>
        </div>
        <button class="button-egiis" name="button">Voir plus</button>
    <?php endwhile; ?>

</section>
