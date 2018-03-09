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
  <!-- change the linke of the address above to the root i.e. "/"-->
      <li class="navitem navlink active"><a href="./account.php">Account</a></li>
      <!-- change the address of this link to just ./account the php is not the correct location of that page -->
	  <li class="navitem navlink"><a href="./about.php">About</a></li>
      <!-- change the address of this link to just ./account the .php is not the correct location of that page -->
      <li class="navitem navbar-search">
        <input type="text" id="navbar-search-input" placeholder="Search...">
        <button type="button" id="navbar-search-button"><i class="fa fa-search"></i></button>
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
            <a href="#" class="eventTitle">MY POSTS </a>
          </div>
        </div>
      </div>

      <div class="event" data-location="Corvallis" data-date="08/12/2017" data-time="13:00">
      <div class="eventContainer">
        <div class="eventDetails">
          <a href="#" class="eventTitle"> Campus Tours </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> OSU Campus</span>

        </div>
      </div>
    </div>

    <div class="event" data-location="Corvallis" data-date="08/12/2017" data-time="13:00">
      <div class="eventContainer">
        <div class="eventDetails">
          <a href="#" class="eventTitle"> Campus Tours </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> OSU Campus</span>
        </div>
      </div>
    </div>
    <div class="event" data-location="Corvallis" data-date="08/12/2017" data-time="13:00">
      <div class="eventContainer">
        <div class="eventDetails">
          <a href="#" class="eventTitle"> Campus Tours </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> OSU Campus</span>
        </div>
      </div>
    </div>

  </section>
    </main>








<!-- below is the modal for a charity to add a new post it will toggle hidden if the account is a organization, and will be hidden if the account is just a volunteer user -->

    <div id="add-event-modal-backdrop" class="hidden"></div>
    <div id="add-event-modal" class="hidden">

    <div id="add-event-modal" class="">

    <div class="modal-dialog">

      <div class="modal-header">
        <h3>Post New Opportunity</h3>
        <!-- <button type="button" id="modal-close" class="modal-hide-button">&times;</button> -->
        <!-- dont need the above button -->
      </div>

      <div class="modal-body">

        <div class="post-input-element">
          <label for="event-name-input">Name Of Event</label>
          <input type="text" id="event-name-input"></input>
        </div>

        <div class="post-input-element">
          <label for="event-location-input">Location Of Event</label>
          <input type="text" id="event-location-input"></input>
        </div>

        <div class="post-input-element">
          <label for="event-date-input">Date of Event</label>
          <input type="date" id="event-date-input">
        </div>

        <div class="post-input-element">
          <label for="event-time-input">Time of Event</label>
          <input type="time" id="event-time-input">
        </div>

        <div class="post-input-element">
          <label for="event-description-input">Short Description</label>

          <textarea rows="5" cols="50" id="event-description-input"></textarea>

        </div>
      </div>

      <div class="modal-footer">
        <button type="button" id="modal-cancel" class="modal-hide-button action-button">Cancel</button>
        <!-- cancel button should clear out all the fields -->
        <button type="button" id="modal-accept" class="action-button">Create Post</button>
      </div>
    </div>
  </div>

  </body>
  <script src="./account.js" charset="utf-8"></script>


</html>
