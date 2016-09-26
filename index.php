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
          <p>The Lost Palace is a spatialised sonic recreation of the Palace of Whitehall. This project has given us a chance to really explore the possibilities of how you can create the sense of a place that once existed. As a studio that strives to produce evocative work for the public realm, it’s been exciting to offer an entirely new experience of Whitehall.</p>
          <p>We’ve used handheld devices and architectural installations in combination with interaction and digital design to create an experience that lets the past bleed through into the present day streets. The richness of The Lost Palace ultimately derives from the diversity in the project team; with designers, theatre makers, developers, fabricators, historians and the team at Historic Royal Palaces working in collaboration.</p>
        </div>
      </div>
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
</div>
