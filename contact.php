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
          <p><a href="https://twitter.com/chomkorosier" target="_blank">@chomkorosier</a></p>
          <p>(+44) 7534 661 384</p>
          <p><a href="https://www.google.co.uk/maps?q=18+shacklewell+lane&ion=1&espv=2&bav=on.2,or.r_cp.&bvm=bv.134052249,d.d2s&biw=1173&bih=627&dpr=1&um=1&ie=UTF-8&sa=X&ved=0ahUKEwi_zKveurLPAhUGKsAKHXOgDEoQ_AUIBigB" target="_blank">Studio 7<br/>
            18 Shacklewell Lane<br/>
            London<br/>
            E8 2EZ</a></p>
        </div>
      </div> <!-- Project Content ends -->
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
</div>
