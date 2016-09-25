<nav id="main-nav" class="columns two">
  <header id="logo">
    <a href="/">Chomko<br>&amp; Rosier</a>
    <span id="mobile-menu-trigger"><a href="#">MENU</a></span>
  </header>

  <div id="navigation-parts">
    <ul id="content-navigation">

      <li><a <?php if ($current_page == 'about') { ?> class="active" <?php }; ?> href="about.php">About</a></li>
      <li><a <?php if ($current_page == 'contact') { ?> class="active" <?php }; ?> href="contact.php">Contact</a></li>
      <li><a <?php if ($current_page == 'work-with-us') { ?> class="active" <?php }; ?> href="work-with-us.php">Work With Us</a></li>
    </ul>

    <section id="projects" class="bottom">
      <ul>
        <li><a <?php if ($current_page == 'index') { ?> class="active" <?php }; ?> href="/">The Lost Palace</a></li>
        <li><a <?php if ($current_page == 'space-clocks') { ?> class="active" <?php }; ?> href="space-clocks.php">Space Clocks</a></li>
        <li><a <?php if ($current_page == 'heart-of-a-king') { ?> class="active" <?php }; ?> href="heart-of-a-king.php">Heart of a King</a></li>
        <li><a <?php if ($current_page == 'shadowing') { ?> class="active" <?php }; ?> href="shadowing.php">Shadowing</a></li>
        <li><a <?php if ($current_page == 'signals-of-tomorrow') { ?> class="active" <?php }; ?> href="signals-of-tomorrow.php">Signals of Tomorrow</a></li>
      </ul>
    </section>
  </div>
</nav>