<?php // this is a very basic include which pulls in the same file everytime this is printed. ?>
<?php include 'includes/header.php' ?>

<?php 
  // ok here we are setting the current page, this will do various things around the website.
  $current_page = "space-clocks"; ?>

<div class="container">
  <div class="row">
    <?php include 'includes/sidebar.php' ?>

    <div class="columns ten offset-by-one-and-a-bit">
        <div id="content"> <!-- Project Content -->

          <?php include ('includes/slideshow.php') ?>

          <div class="content-main columns offset-by-one ten" id="project-wrapper">

            <h1>A series of public clocks displaying the time on spacecraft orbiting Earth</h1>
            
            <p>The Relative Clocks show the effects of time dilation. Each clock shows the time on Earth, as well as on a spacecraft. Spacecraft orbiting the earth experience time at a different rate than us on Earth, due to the effects of gravity and velocity on the flow of time. This effect is known as time dilation, and is explained by Albert Einsteins’ Theory of Relativity.</p>

            <a href="projects/space-clocks/space-clocks-3-large.png" class="fancybox"><img src="projects/space-clocks/space-clocks-3-small.png"/></a>

            <p>The front hand of the clock displays the time on a spacecraft, while the rear hand displays the time on Earth. The delay between the tick of the front and rear hands indicates the actual time difference between Earth time and the time on the spacecraft. This difference is constantly growing, as each second on the spacecraft is slightly longer or shorter than a second on earth.</p>

            <p>This delay in time is constantly growing, and the clocks update every day to reflect the constant effects of relativity on the spacecraft.</p>

            <p>This project was commissioned by the UK Space Agency to engage the public in their research, four physical Relative Clocks will be built and available for touring from November 2016.</p>

            <div id="project-details">
              <div class="row">
                <div class="columns seven">
                  <div id="project-left-top">
                    <div class="row">
                      <div class="columns seven">
                        <h3>Type</h3>
                        <p>Public Art Installation</p>
                      </div>
                      <div class="columns five">
                        <h3>Launching</h3>
                        <p>November 2016</p>
                      </div>
                    </div>
                  </div>
                  <div id="project-left-bottom">
                    <div class="row">
                      <div class="columns seven">
                        <h3>Client</h3>
                        <p><a href="https://www.gov.uk/government/organisations/uk-space-agency" target="_blank">The UK Space Agency</a></p>
                      </div>
                      <div class="columns five">
                        <h3>Location</h3>
                        <p>Touring</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="columns five">
                  <div id="project-right">
                    <h3>Credits</h3>
                    <p>Design/Build: Chomko & Rosier<br/>
                    Data: Tom Vaughan, PhD Candidate, University of London, Chris Haynes, PhD Candidate, University of XXX</p>
                  </div>
                </div>
              </div>
            </div>

        </div>
      </div> <!-- Project Content ends -->
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
</div>
  
