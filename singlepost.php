<?php
session_start();

include 'database_creds.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (mysqli_connect_errno()) {
  die(mysqli_connect_error());
}

$post = mysqli_real_escape_string($conn, $_GET["title"]);

$sql = "SELECT location, date, description, name FROM Post WHERE title = '" . $post . "';";
$row = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_ASSOC);
$location = $row["location"];
$date = date('Y-m-d', strtotime($row["date"]));
$time = date('H:i', strtotime($row["date"]));
$description = $row["description"];
$charity = $row["name"];
?>

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
<?php
if (isset($_SESSION['is_charity']) && $_SESSION['is_charity']) { ?>
              <li class="navitem navlink"><a href="./account.php">Account</a></li>
<?php } ?>
              <li class="navitem navlink"><a href="./about.php">About</a></li>
              <li class="navitem navbar-search">
                <input type="text" id="navbar-search-input" placeholder="Search...">
                <button type="button" id="navbar-search-button"><em class="fa fa-search"></em></button>
              </li>
            </ul>
          </nav>
          <!-- below is the organization info/name/pic container -->
          <div class="event-title-container">
	    <div class="event-title-box">
<?php
echo '<h1>' . $post . '</h1>';
?>
            </div>
          </div>
          <div class="organization-container">
	    <div class="organization-box">
<?php
echo '<h1>' . $charity . '</h1>';
?>
            </div>
          </div>
          <div class="event-details-container">
	    <div class="event-details-box">
<?php
echo '<p><strong>TIME:</strong> ' . $time . '</p>';
echo '<p><strong>DATE:</strong> ' . $date . '</p>';
echo '<p><strong>LOCATION:</strong> ' . $location . '</p>';
?>
            </div>
          </div>
          <div class="spacejam">
            <!-- this div provides space  -->
          </div>
          <!-- below here should be the event description  -->
          <div class="event-description-container">
            <div class="event-description-box">
<?php
echo '<p>' . $description . '</p>';
?>
            </div>
	  </div>
        </div>
      </div>
    </header>
  </body>
</html>
