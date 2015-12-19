<section id='products' class="egiis-section">
  <?php $my_title = new WP_Query(array('post_type' => 'titles', 'meta_key' => 'id', 'meta_value' => 'products'));?>
  <?php while ($my_title->have_posts()) : $my_title->the_post(); ?>
    <h2 id='products-title'><?php the_title(); ?></h2>
    <?php endwhile; ?>
    <?php $my_query = new WP_Query(array('post_type' => 'products')); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <article>
            <?php the_post_thumbnail(); ?>
            <div id='products-t1' class='drugs'><?php the_field('subtitle'); ?></div>
            <div id='products-t2' class='drugs'><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>
</section>
