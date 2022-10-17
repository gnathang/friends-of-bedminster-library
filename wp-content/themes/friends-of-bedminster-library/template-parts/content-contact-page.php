
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
    
    <?php get_template_part('template-parts/content-join-us'); ?>
    <?php get_template_part('template-parts/content-contact-footer');?>

</section><!-- .contact-section -->