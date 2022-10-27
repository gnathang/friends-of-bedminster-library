
<!--  todo: use custom post type for insta stream,
      use if block tom show desired post,
      embed the stream                      -->

<section class="insta-stream-section">
  <?php

    $args = array (
      'post_type' => 'instagram_streams'
    );

  $hero = new WP_Query($args);
  if ( $hero->have_posts() ) : while ( $hero->have_posts() ) :$hero->the_post();?>
    
    <section class="instagram-section">
      <div class="container"> 
        <?php the_content() ?>
      </div>
    </section>

  <?php
  endwhile;
  endif;
  ?>

</section>
