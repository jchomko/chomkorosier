<?php // this is a very basic include which pulls in the same file everytime this is printed. ?>
<?php include 'includes/header.php' ?>

<?php
  // ok here we are setting the current page, this will do various things around the website.
  $current_page = "about";
  // would you like a slideshow on this page? if so please open up.... includes / slideshow.php
  $include_slideshow = false;
  ?>

<div class="container">
  <div class="row">
    <?php include 'includes/sidebar.php' ?>
    <div class="columns ten offset-by-one-and-a-bit">
      <div id="content"> <!-- Project Content -->
        <?php include ('includes/slideshow.php') ?>
        <div class="content-main columns offset-by-one ten">
          <h1 class="content-intro">Chomko &amp; Rosier is an experience design studio working between technology, architecture and art. They create interactive experiences, installations, products and infrastructures for the public realm</h1>
          <br>
          <p>The London-based studio was founded in 2014 by Matthew Rosier and Jonathan Chomko, with backgrounds in architecture and interaction design informing their approach.Chomko &amp; Rosier’s work has been installed nationally and internationally, and recognised as a Design of the Year by the London Design Museum. Their past clients include the UK Space Agency, Historic Royal Palaces, British Council, FutureEverything, Illuminating York, Watershed and Media Ambition Tokyo.</p>
        </div>
      </div> <!-- Project Content ends -->
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
</div>
