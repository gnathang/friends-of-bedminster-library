
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
          <a href="<?php the_permalink(); ?>">
          <div class="event-thumbail-image-wrapper">
            <img class="event-thumbnail-image" src="<?php the_field('event_image'); ?>">
          </div>

          <div class="event-thumbnail-date-and-title">
            <h3 class="event-thumbnail-title"><?php the_title(); ?></h3>
            <h3><?php the_field('event_date');?></h3>
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

