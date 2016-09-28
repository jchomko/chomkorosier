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
      <?php include 'includes/sidebar.php' ?>
      <div class="columns ten offset-by-one-and-a-bit">
        <div id="content"> <!-- Project Content -->
          <?php include ('includes/slideshow.php') ?>
          <div class="content-main columns offset-by-one ten">

            <h1>The studio’s activities span design and production, art, education, talks and consulting.</h1>

            <p>
            <p>Design &amp; Production</p>
            <p>We are interested to hear of projects that may provide an opportunity to explore the possibilities of design and technology within your sector. We will ideally work with our clients from concept, design and prototyping through to production.</p>

            <p>Art</p>
            <p>The studio’s research interests are primarily explored through public art commissions. We are interested in opportunities to create works that respond to themes within our work. We also tour existing works such as Shadowing and Relative Clocks, please get in touch if you would like to exhibit any of this work.</p>

            <p>Education</p>
            <p>Our academic approach encourages the testing and development of theory through real-world design projects. The process is driven by intensive analysis of the physical, historical and social context of a project/site in combination with an exploration of the latent potential in emerging technologies to respond to this context. We encourage physical prototyping and on-site testing with users, challenging assumptions and theory. The final design proposal may be a functional design intervention such as a product, infrastructure or building or it may exist only to ask questions of its user through an art installation, experience or system. <p>This approach may be explored through workshops, tutoring and lectures, within academic areas spanning architecture, urbanism, interaction design, narrative design and experience design.</p>

            <p>Talks</p>
            <p>We enjoy discussing and examining our projects within the context of industry and academic panels, talks and seminars. We’re particularly interested in presenting the design process and the user experiences of our work, rather than focussing only on our version of the finished project. We take these opportunities to reflect and to explore the relationship between these projects and inter-related theory and fields such as augmented reality, ‘smart’ urbanism, public art and cultural interpretation.</p>

            <p>Consulting</p>
            <p>Where an organisation or company finds value in our approach to design and technology and would like to apply this to their own work, we welcome the opportunity to present and explore our processes with them.</p>

          </div>
        </div> <!-- Project Content ends -->
        <?php include 'includes/footer.php' ?>
      </div>
    </div>
    </div>
