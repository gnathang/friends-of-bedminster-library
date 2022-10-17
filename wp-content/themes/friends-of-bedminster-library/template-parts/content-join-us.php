
<section id="join-us-section" class="join-us-section">
  <div class="container">

    <?php
      $args = array (
        'name' => 'join-us',
        'post_type' => 'any' // make sure to leave this in otherwise the loop doesn't work!!
      );

      $joinUs = new WP_Query($args);
      if ( $joinUs->have_posts() ) : while ( $joinUs->have_posts() ) : $joinUs->the_post();?>
     
        <div class="join-us-wrapper">
          <h2 class="join-the-newsletter">Join the newsletter</h2>

          <div class="join-newsletter-wrapper">
            <h3><?php the_field('join_newsletter_text'); ?></h3>
            <div class="newsletter-form">
              <input placeholder="name">
              <input placeholder="email">
              <button class="button submit-send-button">Submit</button>
            </div>
          </div>

          <div class="join-bristol-libraries-wrapper">
            <div class="join-bristol-libraries-inner-wrapper">
              <h3><?php the_field('join_bristol_libraries_text'); ?></h3>
              <button class="button">
                <a href="https://www.bristol.gov.uk/residents/libraries-and-archives/join-the-library">
                  Join Bristol Libraries
                </a>
              </button>
            </div>
          </div>

        </div> <!-- .join-us-wrapper -->

    <?php 
      endwhile;
      endif; 
    ?>

  </div>
</section>
