
<section class="contact-section">
  <div class="container">
    <div class="contact-wrapper">
      <h3>Library Opening Times</h3>

      <?php
      $args = array (
        'name' => 'contact',
        'post_type' => 'any'
      );
      $contact = new WP_Query($args);
      if ( $contact->have_posts() ) : while ( $contact->have_posts() ) : $contact->the_post();?>
          
      <h3><?php the_field('library_opening_times'); ?></h3>
       
      <div class="map-wrapper">
        <!-- iFrame goes here -->
      </div>

        <h3><?php the_field('library_address'); ?></h3>
        <h3><?php the_field('library_phone_number'); ?></h3>

    </div> <!-- .contact-wrapper -->

    <?php 
      endwhile;
      endif; 
    ?>

  </div> <!-- .container -->
</section> <!-- .contact-section -->
