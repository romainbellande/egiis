<section id='products' class="egiis-section">
    <h2 id='products-title'>produits</h2>
    <?php $my_query = new WP_Query(array('post_type' => 'produit')); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <article>
            <?php the_post_thumbnail(); ?>
            <div id='products-t1' class='drugs'><?php the_title(); ?></div>
            <div id='products-t2' class='drugs'><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>
</section>
