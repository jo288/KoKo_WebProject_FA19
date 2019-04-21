  <header>
    <nav id="menu">
      <ul>
        <?php

        $nav = array('index.php' => 'Home', 'menu.php' => 'Menu', 'about.php' => 'About', 'contact.php' => 'Contact', 'reviews.php' => 'Reviews',);

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
