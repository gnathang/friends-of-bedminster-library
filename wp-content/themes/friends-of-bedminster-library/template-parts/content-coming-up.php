
<section class="coming-up-section">
  <div class="container">

    <div class="coming-up-title-and-button">
      <h2 class="coming-up">Coming Up</h2>
      <!-- <button href="" class="button all-events-button">All Events</button> -->
      <a href="events" class="button all-events-button">All Events</a>
    </div>

    <div class="event-thumbnail-loop">
      <?php
        $args = array (
          'post_type' => 'events',
          'posts_per_page' => '6',
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

        $comingUp = new WP_Query( $args );
        if ( $comingUp->have_posts() ) : while ( $comingUp->have_posts() ) : $comingUp->the_post();?>
        
        
        <div class="event-thumbnail-wrapper">
          
          <!-- this function brings the user to the specific event on the events page -->
          <?php $events_page = get_post(90); ?>
          <a href="<?php esc_url( the_permalink($events_page->ID) ); ?>#<?php echo get_the_ID(); ?>">

          <div class="event-thumbail-image-wrapper">
            <img class="event-thumbnail-image" src="<?php the_field('event_image'); ?>">
          </div>  

          <div class="event-thumbnail-date-and-title">
            <div class="find-out-more">
              <img class="arrow-right" src="<?php echo get_template_directory_uri().'/assets/arrow-right.svg'?>">
              <h3>Find out more</h3>
            </div>
            <h3 class="event-thumbnail-title"><?php the_title(); ?></h3>
            <div class="event-thumbnail-date-wrapper">
              <h3 class="event-thumbnail-date"><?php the_field('event_date');?></h3>
              <h3 class="event-thumbnail-date">&nbsp<?php the_field('event_date_end');?></h3>
            </div>
          </div>

          </a>
        </div> <!-- .event-thumbnail-wrapper -->
        

      <?php
        endwhile;
        endif;
      ?>
    </div> <!-- .event thumnail loop -->

  </div> 
</section>

