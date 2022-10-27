
<section class="contact-footer">
  <div class="container">
    
      <!-- <h2 class="library-opening-times">Bedminster Library</h2> -->

      <?php
      $args = array (
        'name' => 'contact',
        'post_type' => 'any'
      );
      
      $contact = new WP_Query($args);
      if ( $contact->have_posts() ) : while ( $contact->have_posts() ) : $contact->the_post();?>

      <h3><?php the_field('library_address'); ?></h3>
      <h3><?php the_field('library_opening_times'); ?></h3>
      <h3><?php the_field('library_phone_number'); ?></h3>

    

    <?php 
      endwhile;
      endif; 
    ?>

  </div> <!-- .container -->
</section> <!-- .contact-section -->
