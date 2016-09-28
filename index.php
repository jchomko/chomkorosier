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
        </div>
      </div>
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
</div>
