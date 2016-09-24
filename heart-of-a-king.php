<?php // this is a very basic include which pulls in the same file everytime this is printed. ?>
<?php include 'includes/header.php' ?>

<?php 
  // ok here we are setting the current page, this will do various things around the website.
  $current_page = "heart-of-a-king"; ?>

<div class="container">
  <div class="row">
    <?php include 'includes/sidebar.php' ?>

    <div class="columns ten offset-by-one-and-a-bit">
        <div id="content"> <!-- Project Content -->

          <?php include ('includes/slideshow.php') ?>

          <div class="content-main columns offset-by-one ten">

      <h1>A Haptic Prototype Visitor Experience For Historic Royal Palaces, London</h1>
      <!--
      <h2>Client: value</h2>
      <h2>Location: value</h2>
      <h2>Attribute: value</h2>
      <h2>Attribute: value</h2>
      -->
      <p>Heart of a King places visitors in the footsteps and emotional state of Charles I on the day of his execution in 1649. Visitors received a wooden, heart-shaped totem. The heart creates a haptic heartbeat that acts as a compass, increasing in strength when pointed to Charles' path. Following this compass, visitors trace Charles' final journey through St James Park and Whitehall, arriving in front of Banqueting House, the place of his execution where the heart ceases to beat.</p>

      <p>Chomko &amp; Rosier have now been selected to develop The Lost Palace; an automated visitor experience recreating the Palace of Whitehall on the streets of central London in Summer 2016.</p>

          </div>
      </div> <!-- Project Content ends -->
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
</div>