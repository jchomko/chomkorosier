<?php // this is a very basic include which pulls in the same file everytime this is printed. ?>
<?php include 'includes/header.php' ?>
<?php
  // ok here we are setting the current page, this will do various things around the website.
  $current_page = "signals-of-tomorrow";
  // would you like a slideshow on this page? if so please open up.... includes / slideshow.php
  $include_slideshow = true;
  ?>
<div class="container">
  <div class="row">
    <?php include 'includes/sidebar.php' ?>
    <div class="columns ten offset-by-one-and-a-bit">
      <div id="content">
        <?php // include a sidebar on all pages, you'll need to go in to this sidebar file and make a little change ?>
        <?php include ('includes/slideshow.php') ?>
        <div class="content-main columns offset-by-one ten">
          <h1>A workshop exploring a bottom-up Smart nation in Singapore</h1>
          <p>Chomko &amp; Rosier led a five-day workshop group as part of the 'Signals of Tomorrow' Innovation Lab in Singapore run by FutureEverything. The lab explored the potential implications and opportunities of Singapore's 'Smart Nation' project. The prototypes developed within the lab were presented at the Art Science Museum as part of the Future Everything conference.</p>

          <p>Our prototype attempted to capture occupant desires relating to the design of their public housing shared spaces. Occupants place miniature digitally-tracked objects around their public void-deck spaces to visually identify where they feel the relevant design issue should be addressed. The object locations are captured in data which is then accessible to both the occupants and planners/designers. This allows occupants to build a shared image of their ideal spaces, and the designers and planners an insight into these desires which they can act on through further discussion and then eventually, design implementation.
          </p>
          <div id="project-details">
            <div class="row">
              <div class="columns seven">
                <div id="project-left-top">
                  <div class="row">
                    <div class="columns seven">
                      <h3>Type</h3>
                      <p>Workshop</p>
                    </div>
                    <div class="columns five">
                      <h3>Launched</h3>
                      <p>November 2015</p>
                    </div>
                  </div>
                </div>
                <div id="project-left-bottom">
                  <div class="row">
                    <div class="columns seven">
                      <h3>Credits</h3>
                      <p>Workshop Leads: Chomko &amp; Rosier, Assemble, PAN Studio, Daniel Hirshmann, Andreas Schlegel, Debbie Ding<br/>
                      Workshop Programme Leads: Changist (Scott Smith), Future Everything)<br/>
                      </p>

                    </div>
                    <div class="columns five">
                      <h3>Clients</h3>
                      <p><a href="http://futureeverything.org/" target="_blank">Future Everything</a></p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="columns five">
                <div id="project-right">
                  <h3>Install Locations</h3>
                  <p>Singapore</p>
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
