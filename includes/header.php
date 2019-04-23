  <header>
    <div id="logo">
      <a href="index.php"><img alt="KoKo Logo" src="images/kokotemplogo.png" /></a>
    </div>
    <nav id="menu">
      <ul>
        <?php

        $nav = array('index.php' => 'Home', 'about.php' => 'About', 'menu.php' => 'Menu', 'gallery.php' => 'Gallery',  'reviews.php' => 'Reviews', 'contact.php' => 'Contact');

        $current = basename($_SERVER['PHP_SELF']);

        foreach ($nav as $pagename => $value) {
          if ($current == $pagename) {
            echo "<li class = current>" . " <a href=" . $pagename . "> " . $value . "</a></li>";
          } else {
            echo "<li class>" . " <a href=" . $pagename . "> " . $value . "</a></li>";
          }
        }
        ?>
      </ul>
    </nav>
  </header>
