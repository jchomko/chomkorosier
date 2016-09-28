<?php // this is a very basic include which pulls in the same file everytime this is printed. ?>
<?php include 'includes/header.php' ?>

<?php
  // ok here we are setting the current page, this will do various things around the website.
  $current_page = "heart-of-a-king";

  // would you like a slideshow on this page? if so please open up.... includes / slideshow.php
  $include_slideshow = true;
  ?>

<div class="container">
  <div class="row">
    <?php // include a sidebar on all pages, you'll need to go in to this sidebar file and make a little change ?>
    <?php include 'includes/sidebar.php' ?>

    <div class="columns ten offset-by-one-and-a-bit">
      <div id="content">
        <?php include ('includes/slideshow.php') ?>
        <div class="content-main columns offset-by-one ten">
          <h1>Guided by the heartbeat of a King</h1>

          <!-- <h2>Client: value</h2>
          <h2>Location: value</h2>
          <h2>Attribute: value</h2>
          <h2>Attribute: value</h2> -->

          <p>Heart of a King places visitors in the footsteps and emotional state of Charles I on the day of his execution in 1649. Visitors received a wooden, heart-shaped totem. The heart creates a haptic heartbeat that acts as a compass, increasing in strength when pointed to Charles' path. Following this compass, visitors trace Charles' final journey through St James Park and Whitehall, arriving in front of Banqueting House, the place of his execution where the heart ceases to beat.</p>
          <div class='embed-container'><iframe src='https://player.vimeo.com/video/140247678?color=ffffff&title=0&byline=0&portrait=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
          <div id="project-details">
            <div class="row">
              <div class="columns seven">
                <div id="project-left-top">
                  <div class="row">
                    <div class="columns seven">
                      <h3>Type</h3>
                      <p>Visitor Experience</p>
                    </div>
                    <div class="columns five">
                      <h3>Launched</h3>
                      <p>July 2015</p>
                    </div>
                  </div>
                </div>
                <div id="project-left-bottom">
                  <div class="row">
                    <div class="columns seven">

                      <h3>Install Location</h3>
                      <p>St James Park, London</p>
                    </div>
                    <div class="columns five">
                      <h3>Client</h3>
                      <p><a href="http://www.hrp.org.uk/?&gclid=Cj0KEQjw6uO-BRDbzujwtuzAzfkBEiQAAnhJ0Eh36t-EfJX8ucTh3_CJWBa21hm4Z6XZQybFoh1vAQsaAn5Z8P8HAQ&gclsrc=aw.ds" target="_blank">Historic Royal Palaces</a>
                      </p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="columns five">
                <div id="project-right">
                  <h3>Credits</h3>
                  <p>Design & Build: Chomko & Rosier</p>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="columns twelve">
                  <div id="project-left-top">
                    <div class="row">
                      <div class="columns seven">
                        <h3>Selected Media</h3>
                        <p><a href="http://trendnomad.com/tag/chomko-rosier-en/" target="_blank">Trend Nomad</a><br/>
                        <a href="http://www.gamification-in-tourism.com/emotional-guidance-heart-of-a-king/" target="_blank">Gamification in Tourism</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php' ?>
  </div>
</div>
