<section id='data-management' class="egiis-section">
    <?php $my_query = new WP_Query(array('post_type' => 'data')); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <h2 id='data-management-title' class='clipped'><?php the_title(); ?></h2>
        <div class='drugs'>
            <?php the_content(); ?>
        </div>
        <?php $my_title = new WP_Query(array('post_type' => 'divers', 'meta_key' => 'id', 'meta_value' => 'btn_data_management'));?>
        <?php while ($my_title->have_posts()) : $my_title->the_post(); ?>
          <button class="button-egiis" name="button"><?php the_title(); ?></button>
          <?php endwhile; ?>    
    <?php endwhile; ?>

</section>
