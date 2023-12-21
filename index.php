<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
  <title>Counter-Strike 2 Map Viewer</title>
  <script src="jquery/jquery-3.7.0.min.js"></script>
</head>

<body>
    <div class="navbar">
      <!-- NAVIGATION MENU -->
      <ul class="nav-links">
          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <a id = "logo" href  ="index.php">CS2 Map Explorer</a></div>
            <li><a  href="about.php">About Us</a></li>
            <li><a href="checklist.php">CheckList</a></li>
            <?php
                  // Check if the login cookie is set
                  if (isset($_COOKIE['loggedIn'])) {
                    // The user is logged in, show the "Browse maps" button
                    echo '<li><a href="browse_maps.php">Browse Maps</a></li>';
                  } else {
                    // The user is not logged in, show the "Log In" link
                    echo '<li><a href="loginPage.php">Log In</a></li>';
                  }
              ?>
              </ul>
      </div>
  <div class="container">
    <img id = inferno src="pictures/infernoCS2.png">
    <div id=welcome class="centered">WELCOME TO CS2 MAP EXPLORER</div>
    <div id=browse class="centered">
      <?php
        // Check if the login cookie is set
        if (isset($_COOKIE['loggedIn'])) {
          // The user is logged in, show the "Browse maps" button
          echo '<a id = browselink href  = "browse_maps.php" class="browse-button">Browse maps</a>';
        } else {
          // The user is not logged in, show the "Log In" link
          echo '<a id = browselink href = "loginPage.php">Log In to explore all CS:2 Maps</a>';
        }
        ?>
    </div>
    <div id="footer"><pre id = copy> © Copyright 2023. All Rights Reserved.</pre></div>
  </div>
  
</body>

</html>