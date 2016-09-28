<?php // this is a very basic include which pulls in the same file everytime this is printed. ?>
<?php include 'includes/header.php' ?>
<?php
  // ok here we are setting the current page, this will do various things around the website.
  $current_page = "index";
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
          <h1>Immersive technology recreates a palace that no longer exists</h1>
          <p>The Lost Palace sought to give visitors the opportunity to uncover the Palace of Whitehall, which burnt down in the 17th Century. Chomko & Rosier collaborated with theatre makers Uninvited Guests to create an immersive experience that allowed visitors to explore the spaces and stories of a palace that no longer exists.</p>
          <p>The project explored the potential of technology, design, theatre and sound to recreate the sensory experience of being inside the palace, resulting in a subtle form of augmented reality that utilised the environment around you. Every visitor was given a handheld device that allowed them to interact with sounds, stories and physical installations around the streets of contemporary Whitehall. The Lost Palace sought to blend past and present contexts, attempting to conjure up a palace within the mind of the visitor as they wandered the streets of Whitehall.</p>
          <div class='embed-container'><iframe src='https://player.vimeo.com/video/183286524?color=ffffff&title=0&byline=0&portrait=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
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
                      <p>July 2016</p>
                    </div>
                  </div>
                </div>
                <div id="project-left-bottom">
                  <div class="row">
                    <div class="columns seven">

                      <h3>Install Location</h3>
                      <p>Whitehall, London</p>
                    </div>
                    <div class="columns five">
                      <h3>Client</h3>
                      <p><a href="http://www.hrp.org.uk/?&gclid=Cj0KEQjw6uO-BRDbzujwtuzAzfkBEiQAAnhJ0Eh36t-EfJX8ucTh3_CJWBa21hm4Z6XZQybFoh1vAQsaAn5Z8P8HAQ&gclsrc=aw.ds" target="_blank">Historic Royal Palaces</a></p>

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row">
                <div class="columns twelve">
                  <div id="project-left-top">
                    <div class="row">
                      <div class="columns seven">
                        <h3>Credits</h3>
                        <p>Design: Chomko & Rosier, <a href="http://www.uninvited-guests.net/home" target="_blank">Uninvited Guests</a> (with Lewis Gibson)<br/>
                          App Development: <a href="https://calvium.com/" target="_blank">Calvium</a><br/>
                          Producer: Tim Powel (HRP)<br/>
                          Research: Anni Mantyniemi (HRP)<br/>
                          Device Fabrication: <a href="http://www.zone-creations.co.uk/" target="_blank">Zone Creations</a><br/>
                          Installation Fabrication: Zone Creations/Pinewood Creative<br/>
                          Photography: <a href="http://www.dunkmckenzie.com/" target="_blank">Duncan McKenzie</a><br/>
                          Video: <a href="http://www.faisalchaudhuri.com/" target="_blank">Faisal Chaudhuri</a></p>

                      </div>

                    </div>
                  </div>
                  <div id="project-left-bottom">
                    <div class="row">
                      <div class="columns seven">
                        <h3>Selected Media</h3>
                        <p><a href="http://thecreatorsproject.vice.com/en_uk/blog/londons-lost-palace-art-experience" target="_blank">The Creators Project</a><br/>
                        <a href="http://www.bbc.co.uk/programmes/p0445f4f" target="_blank">BBC Click</a><br/>
                        <a href="https://www.museumnext.com/insight/new-immersive-heritage-experience-the-lost-palace/" target="_blank">Museum Next</a><br/>
                        <a href="http://advisor.museumsandheritage.com/features/the-lost-palace-using-technology-to-create-a-previously-impossible-visitor-experience/" target="_blank">Museums and Heritage Advisor</a><br/>
                        <a href="http://www.citymetric.com/horizons/how-digital-technology-turning-cities-theatres-2226" target="_blank">City Metric (Matthew Rosier)</a><br/>
                        <a href="http://entertainmentdesigner.com/news/museum-design-news/the-lost-palace-technology-helps-recapture-lost-tales-of-britains-past/" target="_blank">Entertainment Designer</a><br/>
                        <a href="http://www.mardixon.com/wordpress/2016/08/thelostpalace-at-hrp_palaces-perfect-marriage-of-storytelling-technology/" target="_blank">Mar Dixon</a><br/>
                        <a href="http://londonist.com/2016/07/visit-the-lost-palace-of-whitehall" target="_blank">Londonist</a>
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
