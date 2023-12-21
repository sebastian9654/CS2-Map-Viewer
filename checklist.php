<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
  <title>CheckList</title>
  <script src="jquery/jquery-3.7.0.min.js"></script>
</head>

<body style="background-image: linear-gradient(to right, rgb(255, 135, 37), rgba(255, 159, 95, 0.849));">

    <div class="navbar">
      <!-- NAVIGATION MENU -->
      <ul class="nav-links">
          <!-- NAVIGATION MENUS -->
          <div class="menu">
                <a id = "logo" href  ="index.php">CS2 Map Explorer</a></div>
                <li class = pages><a href="about.php">About Us</a></li>
                <li class = pages><a href="checklist.php">CheckList</a></li>
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
            </div>
        </ul>
    </div>

    <h1 style="text-align: center; font-family: 'Titillium Web';">CheckList</h1> <hr color="black">
    <p class = aboutInfo>
        Database Usage: The Log In System sends SQL queries to a PHPMyAdmin database to check if there is a registered user upon attempting to log in.
      </p>
      <p class = aboutInfo>
        JavaScript usage: JS was used along with AJAX and Jquery to add functionality to the website.
      </p>
      <p class = aboutInfo>
        Membership Area: Only users that are registered and signed in are allowed to view the Map Gallery page of the website. If a user tries to access the URL Directly
        they will be re-directed to the log in screen.
      </p>
      <p class = aboutInfo>
        General User: The Log In Credentials for the general users are as follows: <u>Username: admin Password: admin</u> <u>Username: demo Password: demo</u>
      </p>

    <div id="footer"><pre id = copy> © Copyright 2023. All Rights Reserved.</pre></div>
</body>

</html>