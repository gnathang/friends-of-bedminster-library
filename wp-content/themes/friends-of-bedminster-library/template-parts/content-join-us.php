
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

          <!-- <div class="join-newsletter-wrapper">
            <h3><?php the_field('join_newsletter_text'); ?></h3>
            <div class="newsletter-form">
              <input placeholder="name">
              <input placeholder="email">
              <button class="button submit-send-button">Submit</button>
            </div> -->

            <!-- Begin Mailchimp Signup Form -->
            
            <div class="join-newsletter-wrapper" id="mc_embed_signup">
              <h3><?php the_field('join_newsletter_text'); ?></h3>
              <form action="https://bristol.us20.list-manage.com/subscribe/post?u=31e4a4159b3f7bf88d6306822&amp;id=a833642eb2&amp;f_id=0016dce6f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                
                  <div class="mc-field-group">
                    <label for="mce-FNAME"> </label>
                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="name">
                    <span id="mce-FNAME-HELPERTEXT" class="helper_text"></span>
                  </div>
                
                  <div class="mc-field-group">
                    <label for="mce-EMAIL"></label>
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email">
                  </div>

                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_31e4a4159b3f7bf88d6306822_a833642eb2" tabindex="-1" value="">
                  </div>

                  <div class="optionalParent">
                      <div class="clear foot">
                          <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="newsletter-submit-button button">
                      </div>
                  </div>

                  <div id="mce-responses" class="clear foot">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                </div>
              </form>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->

          <!-- </div> join newsletter wrapper -->

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
