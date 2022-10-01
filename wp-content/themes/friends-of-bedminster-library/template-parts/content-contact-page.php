
<section class="contact-page-section">
  <div class="container">

    <div class="contact-wrapper">

      <div class="contact-wrapper-text">
        <?php
          $args = array (
            'name' => 'contact',
            'post_type' => 'any'  
        );
        $contact = new WP_Query($args);
        if ( $contact->have_posts() ) : while ( $contact->have_posts() ) : $contact->the_post();?>
    
        <h3><?php the_field('about_friends_of_bedminster_library'); ?></h3>
        <h3><?php the_field('contact_form_text'); ?></h3>
      
          <?php the_content(); ?>

          <?php 
          endwhile;
          endif;
          wp_reset_postdata();
          ?>
       

      </div> <!-- .contact-wrapper-text -->

    </div> <!--.contact-wrapper -->

  </div> <!-- .container -->
    <!-- get join-us content -->
    <?php get_template_part('template-parts/content-join-us'); ?>

  <div class="container">
    <div class="opening-times-wrapper">

      <h2 class="library-opening-times">Library Opening Times</h2>

      <?php
      $args = array (
        'name' => 'contact',
        'post_type' => 'any'  
      );
      $contact = new WP_Query($args);
      if ( $contact->have_posts() ) : while ( $contact->have_posts() ) : $contact->the_post();?>

      <h3><?php the_field('library_opening_times'); ?></h3>   
      <h3><?php the_field('library_address'); ?></h3> 
      <h3><?php the_field('library_phone_number'); ?></h3>   

      <?php 
      endwhile;
      endif;
      wp_reset_postdata();
      ?>

    </div> <!-- .opening-times-wrapper -->
  </div> <!-- .container -->
</section><!-- .contact-section -->