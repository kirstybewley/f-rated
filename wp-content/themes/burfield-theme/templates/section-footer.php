<footer class="footer" role="contentinfo">
  <div class="container island">
    <div class="row">
      <div class="col-12 col-4-m footer-col-1 island-top">
        <h4>Contact</h4>
        <p><span class="icon icon-phone"></span> +44 XXXX XXXXXX</p>
        <p><span class="icon icon-envelop"></span> info@f-rated.com</p>
        <p><span class="icon icon-home"></span> Abbey Chambers Kingston Parade Bath BA1 1LY</p>
        <ul class="social inline">
          <li><a href="<?php print get_field('facebook_profile', 'option'); ?>"><span class="icon icon-facebook"></span><span class="visually-hidden">Facebook</span></a></li>
          <li><a href="<?php print get_field('twitter_profile', 'option'); ?>"><span class="icon icon-twitter"></span><span class="visually-hidden">Twitter</span></a></li>
        </ul>
      </div>
      <div class="col-12 col-4-m footer-col-2 island-top">
        <h4>Search F-rated:</h4>
        <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
        	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'To search, type and hit enter.', 'burfield' ); ?>">
        	<!-- <button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'burfield' ); ?></button> -->
        </form>
        <hr class="island-half-margin">
        <p><a href="<?php print get_permalink(227); ?>">FAQ</a></p>
      </div>
      <div class="col-12 col-4-m footer-col-3 island-top">
        <h4>Sign up to our newsletter</h4>
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
          <form action="//bathfilmfestival.us5.list-manage.com/subscribe/post?u=02a82ae4005d30447ad77ebcc&amp;id=3e85daac10" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <div class="mc-field-group island-bottom-margin-half">
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address *">
              </div>
              <div class="mc-field-group island-bottom-margin-half">
                <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
              </div>
              <div class="mc-field-group island-bottom-margin-half">
                <input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_02a82ae4005d30447ad77ebcc_3e85daac10" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
          </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->
      </div>
      <p class="col-12 island-top">&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?></p>
    </div>
  </div>
</footer>
