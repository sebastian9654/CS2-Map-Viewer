<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
  <title>About Us | Sebastian Rodriguez</title>
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

    <h1 style="text-align: center; font-family: 'Titillium Web';">About Us</h1> <hr color="black">
    <p class = aboutInfo>Hello, I am Sebastian Rodriguez, a Computer Science major at Georgia State University
      graduating in May, 2024. I built this website from the ground up for my Web Programming class in Summer 2023. 
      This is my first real web programming project on my own, and it also happens to be my final project. This is a very basic website as of now, but as time progresses I hope to add more things to it.
    </p>

    <p class = aboutInfo>This is a website meant to display a gallery/showcase for all current maps in the upcoming first-person shooter game: "Counter-Strike 2", also known as "CS:2". 
      The reason I chose this topic is because I have a genuine passion for this game as I have been playing games in the Counter-Strike series since 2015. 
      I am very excited for this upcoming title and thought it was a cool idea to combine two things that I enjoy doing, which are programming and gaming.
    </p>
    <p class = aboutInfo>
      The technologies I used for this website include the following: HTML 5, CSS 3, JavaScript, AJAX, MySQL Database (PHPMyAdmin), PHP, and the Georgia State University CODD server.
    </p>
    <p class = aboutInfo>In this class, I would say I learned alot of information over the course of the summer. I went from having no web development knowledge to being able to comfortably use the 
      main technologies designed to help us build websites. I learned alot about HTML, CSS, PHP, and MySQL. I believe I still have alot to work on when it comes to JavaScript and its countless
      libraries and frameworks, but I am going to continue learning about these things as I continue my career in the field. 
      I had a lot of fun this semester, thank you all and have a great rest of your summer
    </p>
    <p class = aboutInfo> - Sebastian Rodriguez
    </p>
    <div id="footer"><pre id = copy> © Copyright 2023. All Rights Reserved.</pre></div>
</body>

</html>