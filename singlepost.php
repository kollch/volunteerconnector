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

    <link rel="stylesheet" href="./singlepoststyle.css" media="screen">

  </head>

  <body>

      <header>
          <div id="title-main">
            <div id="title-searches">
              <h1 class="site-title">Volunteer Connector</h1>
			  <nav class="navbar">
    <ul class="navlist">

	<li class="navitem navlink"><a href="./index.php">Home</a></li>
  <!-- change the linke of the address above to the root i.e. "/"-->
      <li class="navitem navlink"><a href="./account.php">Account</a></li>
      <!-- change the address of this link to just ./account the php is not the correct location of that page -->
	  <li class="navitem navlink active"><a href="./about.php">About</a></li>
      <!-- change the address of this link to just ./account the .php is not the correct location of that page -->
      <li class="navitem navbar-search">
        <input type="text" id="navbar-search-input" placeholder="Search...">
        <button type="button" id="navbar-search-button"><i class="fa fa-search"></i></button>
      </li>
    </ul>
  </nav>

  <!-- below is the organiztion info/name/pic container -->

  <div class="event-title-container">
    <div class="event-title-box">
      <h1>HOOPLA VOLUNTEERS POST#1</h1>
    </div>
  </div>

  <div class="organiztion-container">
    <div class="organiztion-box">
      <h1> EXAMPLE ORGANIZATION </h1>
    </div>
  </div>

  <div class="event-details-container">
    <div class="event-details-box">
      <p><b>TIME:</b> 13:00</p>
      <p><b>DATE:</b> 08/12/2017</p>
      <p><b>LOCATION:</b> Salem Captiol</p>
      <p><b># OF VOLUNTEERS:</b> 100</p>
    </div>
  </div>

  <div class="spacejam">
    <!-- this div provides space  -->
  </div>

  <!-- below here should be the event description  -->

  <div class="event-description-container">
    <div class="event-description-box">
    </div>
  </div>
