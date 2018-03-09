<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Volunteer Connector</title>
    <!-- This is a stylesheet that includes the font you should use -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
    <!-- This is a 3rd-party stylesheet for Font Awesome: http://fontawesome.io/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="./style.css" media="screen">
  </head>
  <body>
    <header>
      <div id="title-main">
        <div id="title-searches">
          <h1 class="site-title">Volunteer Connector<button type="button" id="signin-button">Login</button>
          <button type="button" id="register-button">Register</button></h1>
          <nav class="navbar">
            <ul class="navlist">
              <li class="navitem navlink active"><a href="./index.php">Home</a></li>
              <!-- change this link to just "/" in order to get back to the root page -->
              <li class="navitem navlink"><a href="./account.php">Account</a></li>
              <!-- change this link to just "./account" take off the php in order to get to the right page -->
              <li class="navitem navlink"><a href="./about.php">About</a></li>
              <!-- change this link to just "./account" take off the php in order to get to the right page -->
              <li class="navitem navbar-search">
                <input type="text" id="navbar-search-input" placeholder="Search...">
                <button type="button" id="navbar-search-button"><i class="fa fa-search"></i></button>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <!-- volunteer oppurtunites header -->
      <div class="posts-header">
        <div>
          <a href="#" class="posts-link"> VOLUNTEER OPPORTUNITES </a>
          <!-- the link in this href should link to just the posts page -->
        </div>
      </div>
      <!-- my goal is to have these these posts inserted dynamically based on
           the posts in the database using handlebars but at the moment these
           posts serve as an example of what a posts should like, and what the
           posts feed should look like - coulby nguyen -->
      <!-- example post -->
      <div class="event" data-location="Salem" data-date="08/12/2017" data-time="13:00">
        <div class="eventContainer">
          <div class="eventDetails">
            <a href="#" class="eventTitle"> Volunteer at HOOPLA </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> Salem Captitol</span>
            <!-- this a href above should link to the solo post page where the user can get more detail and actually register -->
          </div>
          <div class="eventDescription">
            <p href="#" class="shortDescription">COME JOIN US AT OUR 20th ANNIVERSARY OF HOOPLA</p>
          </div>
        </div>
      </div>
      <!-- example post2 -->
      <div class="event" data-location="Salem" data-date="08/12/2017" data-time="13:00">
        <div class="eventContainer">
          <div class="eventDetails">
            <a href="#" class="eventTitle"> Volunteer at HOOPLA </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> Salem Captitol</span>
            <!-- this a href above should link to the solo post page where the user can get more detail and actually register -->
          </div>
          <div class="eventDescription">
            <p href="#" class="shortDescription">COME JOIN US AT OUR 20th ANNIVERSARY OF HOOPLA</p>
          </div>
        </div>
      </div>
      <!-- example post3 -->
      <div class="event" data-location="Salem" data-date="08/12/2017" data-time="13:00">
        <div class="eventContainer">
          <div class="eventDetails">
            <a href="#" class="eventTitle"> Volunteer at HOOPLA </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> Salem Captitol</span>
            <!-- this a href above should link to the solo post page where the user can get more detail and actually register -->
          </div>
          <div class="eventDescription">
            <p href="#" class="shortDescription">COME JOIN US AT OUR 20th ANNIVERSARY OF HOOPLA</p>
          </div>
        </div>
      </div>
      <!-- example post4 -->
      <div class="event" data-location="Salem" data-date="08/12/2017" data-time="13:00">
        <div class="eventContainer">
          <div class="eventDetails">
            <a href="#" class="eventTitle"> Volunteer at HOOPLA </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> Salem Captitol</span>
            <!-- this a href above should link to the solo post page where the user can get more detail and actually register -->
          </div>
          <div class="eventDescription">
            <p href="#" class="shortDescription">COME JOIN US AT OUR 20th ANNIVERSARY OF HOOPLA</p>
          </div>
        </div>
      </div>
      <!-- example post5 -->
      <div class="event" data-location="Salem" data-date="08/12/2017" data-time="13:00">
        <div class="eventContainer">
          <div class="eventDetails">
            <a href="#" class="eventTitle"> Volunteer at HOOPLA </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> Salem Captitol</span>
            <!-- this a href above should link to the solo post page where the user can get more detail and actually register -->
          </div>
          <div class="eventDescription">
            <p href="#" class="shortDescription">COME JOIN US AT OUR 20th ANNIVERSARY OF HOOPLA</p>
          </div>
        </div>
      </div>
      <!-- example post6 -->
      <div class="event" data-location="Salem" data-date="08/12/2017" data-time="13:00">
        <div class="eventContainer">
          <div class="eventDetails">
            <a href="#" class="eventTitle"> Volunteer at HOOPLA </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> Salem Captitol</span>
            <!-- this a href above should link to the solo post page where the user can get more detail and actually register -->
          </div>
          <div class="eventDescription">
            <p href="#" class="shortDescription">COME JOIN US AT OUR 20th ANNIVERSARY OF HOOPLA</p>
          </div>
        </div>
      </div>
      <!-- example post7 -->
      <div class="event" data-location="Salem" data-date="08/12/2017" data-time="13:00">
        <div class="eventContainer">
          <div class="eventDetails">
            <a href="#" class="eventTitle"> Volunteer at HOOPLA </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> Salem Captitol</span>
            <!-- this a href above should link to the solo post page where the user can get more detail and actually register -->
          </div>
          <div class="eventDescription">
            <p href="#" class="shortDescription">COME JOIN US AT OUR 20th ANNIVERSARY OF HOOPLA</p>
          </div>
        </div>
      </div>
      <!-- example post8 -->
      <div class="event" data-location="Salem" data-date="08/12/2017" data-time="13:00">
        <div class="eventContainer">
          <div class="eventDetails">
            <a href="#" class="eventTitle"> Volunteer at HOOPLA </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> Salem Captitol</span>
            <!-- this a href above should link to the solo post page where the user can get more detail and actually register -->
          </div>
          <div class="eventDescription">
            <p href="#" class="shortDescription">COME JOIN US AT OUR 20th ANNIVERSARY OF HOOPLA</p>
          </div>
        </div>
      </div>
      <!-- example post9 -->
      <div class="event" data-location="Salem" data-date="08/12/2017" data-time="13:00">
        <div class="eventContainer">
          <div class="eventDetails">
            <a href="#" class="eventTitle"> Volunteer at HOOPLA </a><br> <span class="date">08/12/2017</span> <span class="time">13:00</span><span class="location"> Salem Captitol</span>
            <!-- this a href above should link to the solo post page where the user can get more detail and actually register -->
          </div>
          <div class="eventDescription">
            <p href="#" class="shortDescription">COME JOIN US AT OUR 20th ANNIVERSARY OF HOOPLA</p>
          </div>
        </div>
      </div>
    </main>
    <div id="login-modal-backdrop" class="hidden"></div>
    <div id="login-modal" class="hidden">
      <div class="modal-dialog">
        <div class="modal-header">
          <h3>Login</h3>
          <button type="button" class="modal-close-button">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-input-element">
            <label for="username-input">Username</label>
            <input type="text" id="username-input">
          </div>
          <div class="form-input-element">
            <label for="password-input">Password</label>
            <input type="text" id="password-input">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="modal-cancel-button">Cancel</button>
          <button type="button" class="modal-accept-button">Login</button>
        </div>
      </div>
    </div>
    <div id="register-modal-backdrop" class="hidden"></div>
    <div id="register-modal" class="hidden">
      <div class="modal-dialog">
        <div class="modal-header">
          <h3>Register</h3>
          <button type="button" class="modal-close-button">&times;</button>
        </div>
        <div class="modal-body">
          <div class="modal-mid">
            <button type="button" class="modal-charity-button">Charity</button>
            <button type="button" class="modal-volunteer-button">Volunteer</button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="modal-cancel-button">Cancel</button>
          <button type="button" class="modal-accept-button">Register</button>
        </div>
      </div>
    </div>
    <div id="charity-register-modal-backdrop" class="hidden"></div>
    <div id="charity-register-modal" class="hidden">
      <div class="modal-dialog">
        <div class="modal-header">
          <h3>Register</h3>
          <button type="button" class="modal-close-button">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-input-element">
            <label for="charity-username-input">Username</label>
            <input type="text" id="charity-username-input">
          </div>
          <div class="form-input-element">
            <label for="charity-password-input">Password</label>
            <input type="text" id="charity-password-input">
          </div>
          <div class="form-input-element">
            <label for="charity-name-input">Charity Name</label>
            <input type="text" id="charity-name-input">
          </div>
          <div class="form-input-element">
            <label for="charity-location-input">Location</label>
            <input type="text" id="charity-location-input">
          </div>
          <div class="form-input-element">
            <label for="charity-description-input">Charity Description</label>
            <textarea id="charity-description-input"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="modal-cancel-button">Cancel</button>
          <button type="button" class="modal-accept-button">Register</button>
        </div>
      </div>
    </div>
    <div id="volunteer-register-modal-backdrop" class="hidden"></div>
    <div id="volunteer-register-modal" class="hidden">
     
	  <form class="modal-dialog" action="/volunteerregister.php" method="post">
        <div class="modal-header">
          <h3>Register</h3>
          <button type="button" class="modal-close-button">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-input-element">
            <label for="volunteer-username-input">Username</label>
            <input type="text" id="volunteer-username-input">
          </div>
          <div class="form-input-element">
            <label for="volunteer-password-input">Password</label>
            <input type="text" id="volunteer-password-input">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="modal-cancel-button">Cancel</button>
		  <input type="submit" class="modal-accept-button" value="Register">
          
        </div>
      </form>
    </div>
    <!-- below is the modal for a charity to add a new post it will toggle
         hidden if the account is a organization, and will be hidden if the
         account is just a volunteer user -->
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
              <input type="text" id="event-description-input">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="modal-cancel" class="modal-hide-button action-button">Cancel</button>
            <!-- cancel button should clear out all the fields -->
            <button type="button" id="modal-accept" class="action-button">Create Post</button>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="./index.js" charset="utf-8"></script>
</html>
