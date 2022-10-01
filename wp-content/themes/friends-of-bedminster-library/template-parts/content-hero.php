<?php

  $args = array(
    'post_type' => 'welcome-section',
    'posts_per_page' => 1,
  );

  $hero = new WP_Query($args);
  
  if ( $hero->have_posts() ) : while ( $hero->have_posts() ) :$hero->the_post();?>
    
    <section class="hero-section">
      <div class="container"> 
        <div class="hero-image-wrapper">
          <img class="hero-image" src="<?php the_field('hero_image'); ?>">    
        </div>
        <h2 class="tagline"><?php bloginfo('description'); ?></h2>
        <a href="contact" class="button contact-button">Contact</a>
        <a href="#join-us-section" class="button">Newsletter</a>
      </div>
    </section>

<?php
endwhile;
endif;
?>