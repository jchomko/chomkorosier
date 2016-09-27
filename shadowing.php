<?php // this is a very basic include which pulls in the same file everytime this is printed. ?>
<?php include 'includes/header.php' ?>
<?php 
  // ok here we are setting the current page, this will do various things around the website.
  $current_page = "shadowing";
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
          <h1>A streetlight that records and plays back shadows</h1>
          <p>Winner of Watershed's 2014 Playable City Award, Shadowing gave memory to Bristol's city lights, enabling them to record and play back the shadows of those who passed underneath. Shadowing offers an exploration of the disconnectedness that technology can create between strangers, the role of light in creating a city's character, and the unseen data layers and surveillance culture that pervades our contemporary urban spaces.</p>
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
                      <h3>Launched</h3>
                      <p>September 2014</p>
                    </div>
                  </div>
                </div>
                <div id="project-left-bottom">
                  <div class="row">
                    <div class="columns seven">
                      
                      <h3>Install Locations</h3>
                      <p>Bristol - Playable CIty Award (2014)<br/>
                      London - Design Museum (2015)<br/>
                      York - Illuminate York Festival (2015)<br/>
                      Tokyo - Media Ambition Tokyo (2016)</p>
                    </div>
                    <div class="columns five">
                      <h3>Clients</h3>
                      <p>Watershed, Bristol (2014)<br/>
                      Make it York, York (2015)<br/>
                      British Council Japan, Tokyo (2016)</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="columns five">
                <div id="project-right">
                  <h3>Awards</h3>
                  <p>Playable City Award 2014<br/>
                  Design of the Year Nominee 2014/15<br/>
                  Active Public Space Award 2016</p>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="columns twelve">
                  <div id="project-left-top">
                    <div class="row">
                      <div class="columns seven">
                        <h3>Credits</h3>
                        <p>Design: Chomko & Rosier<br/>
                          Creative Technology: Chomko & Rosier, David Haylock (Watershed)<br/>
                          Producer: Verity McIntosh (Watershed)</p>
                        
                      </div>
                      <div class="columns five">
                        <h3>Videos</h3>
                        <p>Japan<br/>
                        Promo<br/>
                        Candid</p>
                       
                      </div>
                    </div>
                  </div>
                  <div id="project-left-bottom">
                    <div class="row">
                      <div class="columns seven">
                        <h3>Selected Publications</h3>
                        <p>City Metric (Matthew Rosier)<br/>
                        British Council Japan Blog (Jonathan Chomko)<br/>
                        Huffington Post (Clare Reddington)<br/>
                        Civic Media: Technology, Design, Practice (Eric Gordon, Paul Mihaildis)</p>
                      </div>
                      <div class="columns five">
                        <h3>Selected Media</h3>
                        <p>Dezeen<br/>
                        Domus<br/>
                        Cool Hunting<br/>
                        Wired<br/>
                        BBC<br/>
                        The Creators Project<br/>
                        Tech Spark</p>
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
  
