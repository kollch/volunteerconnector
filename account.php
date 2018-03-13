<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['is_charity'] != 1) {
  header("HTTP/1.0 403 Access Denied");
  echo '<h1>403 Access Denied</h1>';
  exit;
}

include 'database_creds.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
  die(mysqli_connect_error());
}
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
    <link rel="stylesheet" href="./style2.css" media="screen">
  </head>
  <body>
    <header>
      <div id="title-main">
        <div id="title-searches">
          <h1 class="site-title">Volunteer Connector</h1>
          <nav class="navbar">
            <ul class="navlist">
              <li class="navitem navlink"><a href="./index.php">Home</a></li>
              <li class="navitem navlink active"><a href="./account.php">Account</a></li>
              <li class="navitem navlink"><a href="./about.php">About</a></li>
              <li class="navitem navbar-search">
                <input type="text" id="navbar-search-input" placeholder="Search...">
                <button type="button" id="navbar-search-button"><em class="fa fa-search"></em></button>
              </li>
            </ul>
          </nav>
          <div id="title-search">
            <button type="button" id="post-button">Post</button>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section id="myposts">
        <div class="mypostsheader event">
          <div class="eventContainer">
            <div class="eventDetails">
              <a href="#" class="eventTitle">MY POSTS</a>
            </div>
          </div>
        </div>
<?php
$sql = "SELECT title, location, date FROM Post WHERE name = '" . $_SESSION['username'] . "' ORDER BY date ASC;";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $date = date('Y-m-d', strtotime($row["date"]));
  $time = date('H:i', strtotime($row["date"]));
  echo '<div class="event" data-location="' . $row["location"] . '" data-date="' . $date . '" data-time="' . $time . '">';
?>
          <div class="eventContainer">
            <div class="eventDetails">
<?php
  echo '<a href="./singlepost.php?title=' . urlencode($row["title"]) . '" class="eventTitle">' . $row["title"] . '</a><br />';
  echo '<span class="date">' . $date . '</span> <span class="time">' . $time . '</span> <span class="location">' . $row["location"] . '</span>';
?>
            </div>
	  </div>
        </div>
<?php
}
mysqli_free_result($result);
mysqli_close($conn);
?>
      </section>
    </main>

 <!-- below is the modal for a charity to add a new post it will toggle
         hidden if the account is a organization, and will be hidden if the
         account is just a volunteer user -->
    <div id="add-event-modal-backdrop" class="hidden"></div>
    <div id="add-event-modal" class="hidden">
      <div id="add-event-modal" class="">
        <form class="modal-dialog" action="./post.php" method="post">
          <div class="modal-header">
            <h3>Post New Opportunity</h3>
            <!-- <button type="button" id="modal-close" class="modal-hide-button">&times;</button> -->
            <!-- dont need the above button -->
          </div>
          <div class="modal-body">
            <div class="post-input-element">
              <label for="event-name-input">Name Of Event</label>
              <input type="text" id="event-name-input" name="event-name-input" required>
            </div>
            <div class="post-input-element">
              <label for="event-location-input">Location Of Event</label>
              <input type="text" id="event-location-input" name="event-location-input" required>
            </div>
            <div class="post-input-element">
              <label for="event-date-input">Date of Event</label>
              <input type="date" id="event-date-input" name="event-date-input">
            </div>
            <div class="post-input-element">
              <label for="event-time-input">Time of Event</label>
              <input type="time" id="event-time-input" name="event-time-input">
            </div>
            <div class="post-input-element">
              <label for="event-description-input">Short Description</label>
              <input type="text" id="event-description-input" name="event-description-input">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="modal-cancel" class="modal-hide-button action-button">Cancel</button>
            <!-- cancel button should clear out all the fields -->
            <input type="submit" class="modal-accept-button" value="Post">
          </div>
        </form>
      </div>
    </div>
  </body>
  <script src="./account.js" charset="utf-8"></script>


</html>
