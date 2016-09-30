<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$teamargs = array(
  'post_type' => 'team',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1,
  'paged' => $paged,
  'orderby' => 'title',
  'order'   => 'ASC',
);

?>

<?php get_header(); ?>

<!--  main -->
<main role="main">
  <!-- Header section -->
  <?php get_template_part('templates/section-highlighted'); ?>
  <!-- /section -->

  <!-- intro section -->
  <section>
    <div class="row">
      <div class="col-12 island text-center">
        <img class="col-2" src="/" alt="f" />
        <p class="col-8">This easily identifiable label enables moviegoers to choose films that fairly represent women on screen and behind the camera. Highlighting these films sends a clear message to distributors, producers and funders that women can and should have more than just a supporting role within the industry. It also holds up a clear example of what a fair and non-stereotyped film actually is.</p>
        <img class="col-2" src="/" alt="f" />
      </div>
    </div>
  </section>
  <!-- /section -->

  <!-- list section -->
  <section>
    <div class="row island-quatcolor">
      <div class="col-12 col-6-m island-double island-quatcolor">
        <h3 class="island-bottom-half">WHY WE NEED THE F-RATING</h3>
        <p>The stories we see on screen need to be told by a broad spectrum of people to truly represent our diverse culture. Without change, we will train the next generation to only recognise white males as the protagonists and the ones in control of the cameras, scripts and budgets.
          As well as equality on screen and behind the camera, more female film critics from diverse backgrounds and ethnicities need to be welcomed into the industry so that opinion and feedback is balanced. The gender pay gap is also evident in the industry. By helping women gain recognition we can empower them to negotiate the contracts and salaries they deserve and help close the gap.  </p>
        </div>
        <div class="col-12 col-6-m no-padding">
          <img src="<?php echo get_template_directory_uri(); ?>/img/rated/Image-862.jpg" alt="" />
        </div>
    </div>

    <div class="row island-quatcolor">
      <div class="col-12 col-6-m float-right island-double island-quatcolor">
        <h3 class="island-bottom-half">“IF SHE CAN SEE IT, SHE CAN BE IT.”</h3>
        <p>
          Over the past 10 years, we have witnessed a steady shift in the way women are portrayed in TV dramas. We now see women appearing as the lead - not merely the victim - in gritty detective and crime dramas such as The Killing, The Fall and Happy Valley. At the same time an Associated Press review of accredited forensic science programs in the US found about 75% of graduates are women, an increase from about 64% in 2000. At Virginia's Department of Forensic Science, 36 of 47 scientists hired since 2005 were women. And the reason they chose to go into this profession? Strong female role models – both on screen and off.</p>
        </div>
        <div class="col-12 col-6-m no-padding">
          <img src="<?php echo get_template_directory_uri(); ?>/img/rated/Image-862.jpg" alt="" />
        </div>
    </div>

    <div class="row island-quatcolor">
      <div class="col-12 col-6-m island-double island-quatcolor">
        <h3 class="island-bottom-half">ROLES THAT REFLECT THE REAL WORLD</h3>
        <p>
          In real life women are not primarily babes, princesses, dumb blondes, nagging wives or victims. They are engineers, heroes, trailblazers, surgeons and rulers. We need to see a massive increase in roles that reflect women’s real place in society in order to give a true representation of 50% of the population.
          </p>
        </div>
        <div class="col-12 col-6-m no-padding">
          <img src="<?php echo get_template_directory_uri(); ?>/img/rated/Image-862.jpg" alt="" />
        </div>
    </div>
  </section>
  <!-- /section -->

  <!-- timeline section -->
  <section>
    <div class="row">
      <div class="col-12 island text-center">
        <h2 class="island-bottom-half">RISE OF THE F-RATING</h2>
        <div>
          <p>With A-list advocates such as Jennifer Lawrence, Emma Thompson and Meryl Streep speaking out about inequality, the conversation about women in film is now more relevant and important than ever.</p>
        </div>
        <div>
          <p>This year our founder has been invited to address audiences at the BFI, Women of the World Festival, Pure Movies, Genesis Cinema, and Cinemagic Festival as well as at Universities and schools nationwide.</p>
        </div>
        <div>
          <p>In 2015, momentum continued to build with many film festivals and cinemas choosing to use the F-Rating at their events to sit alongside a film’s usual age classification. The UK’s media continued to cover the rating, building pressure on the UK film industry to address the issue.</p>
        </div>
        <div>
          <p>Following its launch the F-Rating attracted international media attention. Support was widespread, including the BBC, The Telegraph, Entertainment Weekly, The Independent, Elle, and Marie Claire. Social media ignited global exposure and support for the F-Rating and gained us a diverse and passionate following.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /section -->

  <!-- people section -->
  <section>
    <div class="row">
      <div class="col-12 island-top island-quatcolor text-center">
        <h2>THE F-RATED TEAM</h2>
        <p class="island">Director, producer and Head of Bath Film Festival Holly Tarquini founded the F-Rating in 2014. Since then we are proud to have grown into a fully fledged organisation dedicated to supporting women in film and driving equality in the film industry.</p>

        <div class="row">

          <?php

          $wp_query = new WP_Query($teamargs);
          if( $wp_query->have_posts() ) :

            ?>
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
              <div class="col-12 col-6-m col-4-l teaser">
                <a href="<?php the_permalink(); ?>"></a>
                <img src="<?php echo the_post_thumbnail_url() ?>" />
                <div class="title">
                  <h3><?php the_title(); ?></h3>
                </div>
              </div>
            <?php endwhile; ?>
            <!-- /section -->
          <?php endif; wp_reset_query(); ?>

        </div>
      </div>
    </div>
  </section>
  <!-- /section -->
</main>


<?php get_footer(); ?>
