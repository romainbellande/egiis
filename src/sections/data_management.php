<section id='data-management' class="egiis-section">
  <span id='data-management-target'></span>
    <?php $my_query = new WP_Query(array('post_type' => 'data')); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <h2 id='data-management-title' class='clipped'><?php the_title(); ?></h2>
        <div class="content">
          <div class='drugs'>
              <?php the_content(); ?>
          </div>
          <div id='see-more' class='drugs'>
            <hr></hr>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              </div>
          <?php $my_title = new WP_Query(array('post_type' => 'divers', 'meta_key' => 'id', 'meta_value' => 'btn_data_management'));?>
          <?php while ($my_title->have_posts()) : $my_title->the_post(); ?>
                  <button id='btn-see-more' class="button-egiis" name="button"><?php the_title(); ?></button>
            <?php endwhile; ?>
            <button id='btn-see-less' class="button-egiis" name="button"></button>
        </div>

    <?php endwhile; ?>

    <!--
    <span class='spacer'>
      <span class='spacer-center'></span>
    </span>
-->
</section>
