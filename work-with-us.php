<?php // this is a very basic include which pulls in the same file everytime this is printed. ?>
<?php include 'includes/header.php' ?>

<?php 
  // ok here we are setting the current page, this will do various things around the website.
  $current_page = "work-with-us"; 
  // would you like a slideshow on this page? if so please open up.... includes / slideshow.php
  $include_slideshow = false;
  ?>

<div class="container">
  <div class="row">
    <?php // include a sidebar on all pages, you'll need to go in to this sidebar file and make a little change ?>
    <?php include 'includes/sidebar.php' ?>

    <div class="columns ten offset-by-one-and-a-bit">
      <div id="container">
        <div id="content"> 
          <?php // include a sidebar on all pages, you'll need to go in to this sidebar file and make a little change ?>
          <?php include ('includes/slideshow.php') ?>

          <div class="content-main columns offset-by-one ten" id="project-wrapper">

            <h1>The studio’s interests span design and production, art, consulting and education.</h1>

            <p>Design &amp; Production</p>
            <p>We are interested to hear of projects that may provide an opportunity to explore the possibilities of design and technology within your sector. We like to work with our clients from concept, design and prototyping through to production.</p>

            <p>Lost Palace Heart of a King Shadowing News Machine Singapore Relative Clocks</p>

            <p>Art</p>
            <p>The studio’s research interests are primarily explored through public art commisions. We are interested in opportunities to create works that respond to themes within our work. We also tour existing works such as Shadowing and Relative Clocks, please get in touch if you would like to exhibit any of this work.</p>

            <p>Consulting</p>
            <p>Sorry I didn't know where to find this text, I'm just adding this as a placeholder for now, ok I think this is enough text...</p>

          </div>
        </div>
      </div>
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
</div>
  
