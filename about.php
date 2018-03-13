<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Volunteer Connector</title>
    <!-- This is a stylesheet that includes the font you should use -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
    <!-- This is a 3rd-party stylesheet for Font Awesome: http://fontawesome.io/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="./aboutstyle.css" media="screen">
  </head>
  <body>
    <header>
      <div id="title-main">
        <div id="title-searches">
          <h1 class="site-title">Volunteer Connector</h1>
          <nav class="navbar">
            <ul class="navlist">
              <li class="navitem navlink"><a href="./index.php">Home</a></li>
<?php
if (isset($_SESSION['is_charity']) && $_SESSION['is_charity'] == 1) { ?>
              <li class="navitem navlink"><a href="./account.php">Account</a></li>
<?php } ?>
              <li class="navitem navlink active"><a href="./about.php">About</a></li>
              <li class="navitem navbar-search">
                <input type="text" id="navbar-search-input" placeholder="Search...">
                <button type="button" id="navbar-search-button"><em class="fa fa-search"></em></button>
              </li>
            </ul>
          </nav>
          <div class="osuphoto-container">
            <div class="osuphoto">
              <img src="./oregonstatelogo.jpg">
            </div>
          </div>
          <div class="about-container">
            <div class="about">
              <p>ABOUT</p>
            </div>
          </div>
          <div class="spacejam">
            <!-- this div provides space  -->
          </div>
          <div class="about-content-container">
            <div class="about-content">
              <h3>This Is Our CS361 Class Project</h3>
              <h4>Our Project Goal Is To Connect Volunteers To Charity Organizations</h4>
              <h4>Our Project Members : Charles Koll, Pavell Shonka, Daniel Domme, Coulby Thanh-Simon Nguyen, and Pedro de Faria Autran e Morais</h4>
            </div>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
