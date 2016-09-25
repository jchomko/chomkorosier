<?php // this is a very basic include which pulls in the same file everytime this is printed. ?>
<?php include 'includes/header.php' ?>

<?php 
  // ok here we are setting the current page, this will do various things around the website.
  $current_page = "contact"; 

  // would you like a slideshow on this page? if so please open up.... includes / slideshow.php
  $include_slideshow = false;
  ?>

<div class="container">
  <div class="row">
    <?php include 'includes/sidebar.php' ?>
    <div class="columns ten offset-by-one-and-a-bit">
      <div id="content"> <!-- Project Content -->
        <div class="content-main columns offset-by-one ten">
          <p>info@chomkorosier.com</p>
          <p>@chomkorosier</p>
          <p>(+44) 7534 661 384</p>
          <p>Studio 7<br/>
            18 Shacklewell Lane<br/>
            London<br/>
            E8 2EZ</p>
        </div>
      </div> <!-- Project Content ends -->
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
</div>
  
