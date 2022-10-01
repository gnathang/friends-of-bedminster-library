<section class="events-section">
  <div class="container">
    <?php
    $today = current_time('Ymd');

    // this makes sure to leave out events that are in the past.
    $args = array(
      'post_type' => 'events',
      'posts_per_page' => '-1',
      'post_status' => 'publish',
      'meta_query' => array(
        array (
          'key' => 'event_date',
          'compare' => '>',
          'value' => $today,
        )

      ),
      'meta_key' => 'event_date',
      'orderby' => 'meta_value_num', // needs to be 'meta_value_num', not 'meta_value'.
      'order' => 'ASC',
    );

    $eventPage = new WP_Query($args);

    if ($eventPage->have_posts() ) : while($eventPage->have_posts() ) : ($eventPage->the_post()); ?>

    <div class="event-wrapper">

      <div class="event-image-wrapper">
        <img src="<?php the_field('event_image'); ?>">
      </div>

      <div class="event-header-wrapper">
        <h2 class="event-title"><?php the_title(); ?></h2>
          <div class="event-date-wrapper">
            <img src="<?php bloginfo('template_directory');?>/assets/calendar4-icon.svg">
            <h2 class="event-date"><?php the_field('event_date'); ?></h2>
          </div>
          <div class="event-location-wrapper">
            <img src="<?php bloginfo('template_directory');?>/assets/pin4-icon.svg">
            <h2 class="event-location"><?php the_field('event_location'); ?></h2>
          </div>
      </div>
      <p class="event-summary"><?php the_field('event_summary'); ?></p>

      <div class="event-description-wrapper">
        <p class="event-description"><?php the_field('event_description'); ?></p>
      </div>

    </div>

    <?php 
    endwhile; 
    endif; 
    ?>

  </div>
</section>

