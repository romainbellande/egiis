<section id='about-us' class="egiis-section">
    <?php $my_query = new WP_Query(array('post_type' => 'about')); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <h2 id='about-us-title'><?php the_title(); ?></h2>
        <div class='drugs'>
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</section>
