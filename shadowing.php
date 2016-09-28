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
          <div class='embed-container'><iframe src='https://player.vimeo.com/video/140583492?color=ffffff&title=0&byline=0&portrait=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
          <br>
          <div class='embed-container'><iframe src='https://player.vimeo.com/video/172859371?title=0&byline=0&portrait=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
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
                      <p><a href="http://www.watershed.co.uk/whatson/calendar/?gclid=Cj0KEQjwx96-BRDyzY3GqcqZgcgBEiQANHd-no_2WOWdVeY8OFN-4bZEIBJwZFLEPflON924IcwQ8B0aAgqP8P8HAQ" target="_blank">Watershed, Bristol (2014)</a><br/>
                      <a href="http://www.makeityork.com/" target="_blank">Make it York, York (2015)</a><br/>
                      <a href="https://www.britishcouncil.jp/en" target="_blank">British Council Japan, Tokyo (2016)</a></p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="columns five">
                <div id="project-right">
                  <h3>Awards</h3>
                  <p><a href="https://www.playablecity.com/projects/shadowing/" target="_blank">Playable City Award 2014</a><br/>
                  <a href="https://designmuseum.org/exhibitions/designs-of-the-year-2015" target="_blank">Design of the Year Nominee 2014/15</a><br/>
                  <a href="http://activepublicspace.org/category/state-of-the-art/" target="_blank">Active Public Space Award 2016</a></p>
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
                        <p><a href="https://vimeo.com/172859371" target="_blank">Japan</a><br/>
                        <a href="https://vimeo.com/104420104" target="_blank">Promo</a><br/>
                        <a href="https://www.youtube.com/watch?v=uZNmJ1ahFVM" target="_blank">Candid</a></p>

                      </div>
                    </div>
                  </div>
                  <div id="project-left-bottom">
                    <div class="row">
                      <div class="columns seven">
                        <h3>Selected Publications</h3>
                        <p><a href="http://www.citymetric.com/horizons/when-playing-shadows-useful-how-yorks-streetlights-became-something-playful-1619" target="_blank">City Metric (Matthew Rosier)</a><br/>
                        <a href="http://creativeconomy.britishcouncil.org/blog/16/03/22/what-i-learned-bringing-shadowing-tokyo/" target="_blank">British Council Japan Blog (Jonathan Chomko)</a><br/>
                        <a href="http://www.huffingtonpost.co.uk/clare-reddington/unleash-the-shadows_b_5779960.html" target="_blank">Huffington Post (Clare Reddington)</a><br/>
                        <a href="https://books.google.co.uk/books?id=8GQzDAAAQBAJ&pg=PA286&lpg=PA286&dq=shadowing+chomko+rosier&source=bl&ots=Ibojs4o2IF&sig=9WaX7QdiqkTV4JJjcO8o_sg4MbE&hl=en&sa=X&ved=0ahUKEwj4xvizpIzPAhVROMAKHYM1B9U4FBDoAQhBMAc#v=onepage&q=shadowing%20chomko%20rosier&f=false" target="_blank">Civic Media: Technology, Design, Practice (Eric Gordon, Paul Mihaildis)</a></p>
                      </div>
                      <div class="columns five">
                        <h3>Selected Media</h3>
                        <p><a href="http://www.dezeen.com/2015/04/05/shadowing-interactive-streetlight-infrared-playable-city/" target="_blank">Dezeen</a><br/>
                        <a href="http://www.domusweb.it/en/architecture/2014/10/03/playable_cities.html" target="_blank">Domus</a><br/>
                        <a href="http://www.coolhunting.com/culture/shadowing-street-project-bristol" target="_blank">Cool Hunting</a><br/>
                        <a href="http://www.wired.co.uk/article/bristol-smart-city" target="_blank">Wired</a><br/>
                        <a href="http://www.bbc.co.uk/news/uk-england-bristol-29030915" target="_blank">BBC</a><br/>
                        <a href="http://thecreatorsproject.vice.com/en_uk/blog/shadows-come-to-life-on-bristol-city-streets" target="_blank">The Creators Project</a><br/>
                        <a href="http://thecreatorsproject.vice.com/en_uk/blog/shadows-come-to-life-on-bristol-city-streets" target="_blank">Tech Spark</a></p>
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
