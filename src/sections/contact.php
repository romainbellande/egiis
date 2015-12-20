<section id='contact' class="egiis-section">

    <?php $my_query = new WP_Query(array('post_type' => 'contact')); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <h2 id='contact-title'><?php the_title(); ?></h2>

        <div id="contact-desc">
            <?php the_content(); ?>
        </div>

            <form>
        <div id="contact-glob">
            <div id="contact-left">
                <div class="champ champ-bot">
                    <label for="name"><?php the_field('name'); ?></label>
                    <input required="required" type="text" id="name" name="name">
                </div>
                <div class="champ">
                    <label for="email"><?php the_field('email'); ?></label>
                    <input required="required" type="email" id="email" name="email">
                </div>
            </div>
            <div id="contact-right">
                <div class="champ">
                    <label for="message"><?php the_field('message'); ?></label>
                    <textarea required="required" type="text" id="message" name="message"></textarea>
                </div>
            </div>
            <button class="contact-btn" type="submit"><?php the_field('submit'); ?></button>
        </div>
    </form>


    <?php endwhile; ?>

</section>
