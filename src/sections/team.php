<section id='team' class="egiis-section">
    <h2 id='team-title'>l'équipe</h2>
    <div class="">
        <?php $my_query = new WP_Query(array('post_type' => 'team')); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <article>
                <?php the_post_thumbnail(); ?>
                <div class='team-name'><?php the_title(); ?></div>
                <div class='team-role'><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    </div>

</section>
