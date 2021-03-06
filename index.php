<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   <!--  <meta http-equiv="refresh" content="15"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JS15</title>
    <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="main.css"> 

  </head>
  <!-- Body Start -->
  <body>
  <!-- PROTOTYPES -->
    <div id="main-header">
      <h1>Appointment Calendar</h1>
    </div>
      <div id="prototype" class="hidden">
        <h2>
            <a class="date" href="#">January 29, 2014</a>
            <a href="#" data-mini="8" class="mini">8 am</a>
            <a href="#" data-mini="9" class="mini">9 am</a>
            <a href="#" data-mini="10" class="mini">10 am</a>
            <a href="#" data-mini="11" class="mini">11 am</a>
            <a href="#" data-mini="12" class="mini">12 pm</a>
            <a href="#" data-mini="13" class="mini">1 pm</a>
            <a href="#" data-mini="14" class="mini">2 pm</a>
            <a href="#" data-mini="15" class="mini">3 pm</a>
            <a href="#" data-mini="16" class="mini">4 pm</a>
            <a href="#" data-mini="17" class="mini">5 pm</a>
        </h2>
          <div class="appt-container hidden">
            <div class="left-hours">
              <div class="appointment" data-time="8">
                <h4 class="time remove-css">8:00 am</h4><a href="#" class="delete-comment">x</a><p class="appointment-text"></p>
              </div>
              <div class="appointment" data-time="9">
                <h4 class="time remove-css">9:00 am</h4><a href="#" class="delete-comment">x</a><p class="appointment-text"></p>
              </div>
              <div class="appointment" data-time="10">
                <h4 class="time remove-css">10:00 am</h4><a href="#" class="delete-comment">x</a><p class="appointment-text"></p>
              </div>
              <div class="appointment" data-time="11">
                <h4 class="time remove-css">11:00 am</h4><a href="#" class="delete-comment">x</a><p class="appointment-text"></p>
              </div>
              <div class="appointment" data-time="12">
                <h4 class="time remove-css">12:00 pm</h4><a href="#" class="delete-comment">x</a><p class="appointment-text"></p>
              </div>
            </div>
            <div class="right-hours">
              <div class="appointment" data-time="13">
                <h4 class="time remove-css">1:00 pm</h4><a href="#" class="delete-comment">x</a><p class="appointment-text"></p>
              </div>
              <div class="appointment" data-time="14">
                <h4 class="time remove-css">2:00 pm</h4><a href="#" class="delete-comment">x</a><p class="appointment-text"></p>
              </div>
              <div class="appointment" data-time="15">
                <h4 class="time remove-css">3:00 pm</h4><a href="#" class="delete-comment">x</a><p class="appointment-text"></p>
              </div>
              <div class="appointment" data-time="16">
                <h4 class="time remove-css">4:00 pm</h4><a href="#" class="delete-comment">x</a><p class="appointment-text"></p>
              </div>
              <div class="appointment" data-time="17">
                <h4 class="time remove-css">5:00 pm</h4><a href="#" class="delete-comment">x</a><p class="appointment-text"></p>
              </div>
            </div>
          </div>
        <div class="appt-creator" class="hidden">
          <form>
            <select class="time">
              <option value="8">8:00 am</option>
              <option value="9">9:00 am</option>
              <option value="10">10:00 am</option>
              <option value="11">11:00 am</option>
              <option value="12">12:00 pm</option>
              <option value="13">1:00 pm</option>
              <option value="14">2:00 pm</option>
              <option value="15">3:00 pm</option>
              <option value="16">4:00 pm</option>
              <option value="17">5:00 pm</option>
            </select>
            <input class="appt-text" placeholder="Appointment"></input>
            <select>
              <option value=".5">30 min</option>
              <option value="1">1 hour</option>
              <option value="2">2 hours</option>
              <option value="3">3 hours</option>
              <option value="4">4 hours</option>
            </select>
            <button type="submit" class="submit-button">Add Appointment</button>
          </form>
        </div>
      </div>     
  <!-- begin main content area -->
  <div id="main-container">
    <div id="left-container">


    </div>
  </div>  

 
    <div id="aside-right">
      <ul id="date-filter">
        <li class="side-links"><a href="#">Sunday</a></li>
        <li class="side-links"><a href="#">Monday</a></li>
        <li class="side-links"><a href="#">Tuesday</a></li>
        <li class="side-links"><a href="#">Wednesday</a></li>
        <li class="side-links"><a href="#">Thursday</a></li>
        <li class="side-links"><a href="#">Friday</a></li>
        <li class="side-links"><a href="#">Saturday</a></li>
      </ul>      

      <ul id="pointer">
        <li class="dayofweek"></li>
        <li class="dayofweek"></li>
        <li class="dayofweek"></li>
        <li class="dayofweek"></li>
        <li class="dayofweek"></li>
        <li class="dayofweek"></li>
        <li class="dayofweek"></li>
      </ul>
    </div>

 

  <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script> 
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="utility.js" type="text/javascript"></script>
    <script src="main.js" type="text/javascript"></script>
  </body>

</html>