<!DOCTYPE html>
<?php 
define('DB_NAME', 'srodriguez35');
define('DB_USER', 'srodriguez35');
define('DB_PASSWORD', 'srodriguez35');
define('DB_HOST', 'localhost');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = 'demo';
    $password = 'demo';

    if (CheckPerson($username, $password)) {
        setcookie('show', 'Person', time() + (86400), "/"); // 86400 = 1 day
        setcookie('loggedIn', time() + (86400), "/"); // 86400 = 1 day
        header("Location: index.php");
        exit(); // Important to prevent further execution of the script
    } else {
        setcookie("show", "", time() - 3600, '/');
        echo '<script>alert("Your username and/or password are incorrect!")</script>';
    }
}

function CheckPerson($username, $password)
{
    // Create connection to database
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    mysqli_close($conn);

    return $row ? true : false;
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Titillium Web'>
  <title>Log In | CS2: Map Explorer</title>
  <script src="jquery/jquery-3.7.0.min.js"></script>
</head>

<body style= "background-image: url('pictures/d2.png');">
    <div class="navbar">
      <!-- NAVIGATION MENU -->
      <ul class="nav-links">
          <!-- NAVIGATION MENUS -->
          <div class="menu">
          <a id="logo" href="index.php">CS2 Map Explorer</a>
                <li class="nav-links"><a href="about.php">About Us</a></li>
                <li class="nav-links"><a href="checklist.php">CheckList</a></li>
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

  <div id = logIn>
    <h1>Log In</h1>
    <form method="POST">
      Username: <input type="text" name="username"><br>
      <br>
      Password :  <input type="password" name="password"><br>
      <br>
      <input type="submit" value="Log In">
    </form>
  </div>

    <div id="footer"><pre id = copy> © Copyright 2023. All Rights Reserved.</pre></div>
</body>

</html> 