  <header>
    <nav id="menu">
      <h1>KOKO(LOGO GOES HERE)</h1>
      <ul>
        <?php

        $nav = array('about.php' => 'About', 'menu.php' => 'Menu', 'gallery.php' => 'Gallery',  'reviews.php' => 'Reviews', 'contact.php' => 'Contact');

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
