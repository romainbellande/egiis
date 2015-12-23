<section id='team' class="egiis-section">
  <?php $my_title = new WP_Query(array('post_type' => 'titles', 'meta_key' => 'id', 'meta_value' => 'team'));?>
  <?php while ($my_title->have_posts()) : $my_title->the_post(); ?>
    <h2 id='team-title' class='clipped'><?php the_title(); ?></h2>
    <?php endwhile; ?>
    <div class="jcarousel-wrapper">


    <div class="jcarousel" >
      <ul>
        <?php $my_query = new WP_Query(array('post_type' => 'team', 'meta_key' => 'placement', 'order_by' => 'meta_value', 'order' => 'ASC')); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <li>
                <?php the_post_thumbnail(); ?>
                <div class='team-name'><?php the_title(); ?></div>
                <div class='team-role'><?php the_content(); ?></div>
            </li>
        <?php endwhile; ?>
        </ul>

    </div>
    <a href="#" class="jcarousel-control-prev"></a>
    <a href="#" class="jcarousel-control-next"></a>
    <p class="jcarousel-pagination"></p>
</div>
</section>
