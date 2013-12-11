<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>InterIIT Tech | IIT Bombay</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
    <!-- Add custom CSS here -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="typeahead.js/typeahead.js"></script>
    <style type="text/css">
      .twitter-typeahead .tt-query,
      .twitter-typeahead .tt-hint {
        margin-bottom: 0;
      }

      .tt-dropdown-menu {
        min-width: 160px;
        margin-top: 2px;
        padding: 5px 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0,0,0,.2);
        *border-right-width: 2px;
        *border-bottom-width: 2px;
        -webkit-border-radius: 6px;
           -moz-border-radius: 6px;
                border-radius: 6px;
        -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
           -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                box-shadow: 0 5px 10px rgba(0,0,0,.2);
        -webkit-background-clip: padding-box;
           -moz-background-clip: padding;
                background-clip: padding-box;
      }

      .tt-suggestion {
        display: block;
        padding: 3px 20px;
      }

      .tt-suggestion.tt-is-under-cursor {
        color: #fff;
        background-color: #0081c2;
        background-image: -moz-linear-gradient(top, #0088cc, #0077b3);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0077b3));
        background-image: -webkit-linear-gradient(top, #0088cc, #0077b3);
        background-image: -o-linear-gradient(top, #0088cc, #0077b3);
        background-image: linear-gradient(to bottom, #0088cc, #0077b3);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0)
      }

      .tt-suggestion.tt-is-under-cursor a {
        color: #fff;
      }

      .tt-suggestion p {
        margin: 0;
      }
    #College,#College1,#College2
    {
      background-color: rgb(255, 255, 255);
      background-image: none;
      border-bottom-color: rgb(102, 175, 233);
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 4px;
      border-bottom-style: solid;
      border-bottom-width: 1px;
      border-image-outset: 0 0 0 0;
      border-image-repeat: stretch stretch;
      border-image-slice: 100% 100% 100% 100%;
      border-image-source: none;
      border-image-width: 1 1 1 1;
      border-left-color: rgb(102, 175, 233);
      border-left-style: solid;
      border-left-width: 1px;
      border-right-color: rgb(102, 175, 233);
      border-right-style: solid;
      border-right-width: 1px;
      border-top-color: rgb(102, 175, 233);
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      border-top-style: solid;
      border-top-width: 1px;
      box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset, rgba(102, 175, 233, 0.6) 0px 0px 8px 0px;
      color: rgb(85, 85, 85);
      display: block;
      font-family: "Open Sans","Helvetica Neue","Helvetica","Arial",sans-serif;
      font-size: 14px;
      height: 34px;
      line-height: 20px;
      margin-bottom: 0px;
      margin-left: 0px;
      margin-right: 0px;
      margin-top: 0px;
      outline-color: rgb(0, 0, 0);
      outline-style: none;
      outline-width: 0px;
      padding-bottom: 6px;
      padding-left: 12px;
      padding-right: 12px;
      padding-top: 6px;
      transition-delay: 0s, 0s;
      transition-duration: 0.15s, 0.15s;
      transition-property: border-color, box-shadow;
      transition-timing-function: cubic-bezier(0.42, 0, 0.58, 1), cubic-bezier(0.42, 0, 0.58, 1);
      vertical-align: middle;
      width: 802.5px;
      -moz-border-bottom-colors: none;
      -moz-border-left-colors: none;
      -moz-border-right-colors: none;
      -moz-border-top-colors: none;
      -moz-box-sizing: border-box;
    }

    </style>

  </head>

  <body>
<?php session_start(); ?>
<?php
  if(!isset($_SESSION['college']))
  {
    header("Location: ./register.html");
    exit;
  }
?>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '468911266555371',                        // App ID from the app dashboard
    channelUrl : 'http://localhost/interiittech/channel.html', // Channel file for x-domain comms
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any authentication related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below 
  // will be handled. 
FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    // the user is logged in and has authenticated your
    // app, and response.authResponse supplies
    // the user's ID, a valid access token, a signed
    // request, and the time the access token 
    // and signed request each expire
    var uid = response.authResponse.userID;
    var accessToken = response.authResponse.accessToken;
       
  } else if (response.status === 'not_authorized') {
    window.location.href = "http://localhost/interiittech/register.html";
  } else {
    // the user isn't logged in to Facebook.
    window.location.href = "http://localhost/interiittech/register.html";
  }
 });
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs. 
    if (response.status === 'connected') {
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they 
      // have logged in to the app.
      window.location.href = "http://localhost/interiittech/form.php";

    } else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so. 
      // In real-life usage, you wouldn't want to immediately prompt someone to login 
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they 
      // result from direct interaction from people using the app (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
      FB.login();
    } else {
      // In this case, the person is not logged into Facebook, so we call the login() 
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook. 
      // The same caveats as above apply to the FB.login() call here.
      FB.login();
    }
  });
  };
</script>
    <nav class="navbar navbar-fixed-top navbar-inverse" id="nav" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Inter IIT Tech</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="./#about">About</a></li>
            <li><a href="./#events">Competitions</a></li>
            <li><a href="./faqs.html">Faqs</a></li>
            <li><a href="./contact.html">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
<div class="container">
  <div class="row section">
    <div class="col-lg-12" id="faqs">
    <div class="page-header">
      <h1>Form </h1>
    </div>

    <ul class="nav nav-tabs">
    <li class="active"><a href="#tab11">Registration For Socail Impact</a></li>
    <li><a href="#tab12">Registration For Messier Marathon</a></li>
    <li><a href="#tab13">Registration For Software Development</a></li>
    <li><a href="#tab14">Registrations | View</a></li>
    <li><button type="button" class="btn btn-default" onclick="deleteCookies()">Logout</button></li>
<script type="text/javascript">
function deleteCookies() {
   var allcookies = document.cookie.split(";");
   console.log(allcookies);
   for (var i = 0; i < allcookies.length; i++) {
        var cookie = allcookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        window.location.href="http://interiittech.in/register.html";
    }
}
</script>
  </ul>
  <div id="my-tab-content" class="tab-content">
    <div class="tab-pane active" style="margin-right:30px;" id="tab11">
      <div class="page-header">
        <h1> Team Registration </h1>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <form role="form" action="./submit1.php" method="post">
          <div class="form-group">
            <label for="teamname">Team Name</label>
            <input type="text" class="form-control" id="teamname" name="teamname" placeholder="Team name" required/>
          </div>
          <div class="form-group">
            <label for="College">College</label>
            <p  class="form-control-static" > <?php echo $_SESSION['college']; ?> </p>
          </div>
          <div class="form-group">
            <label for="name1">Team Member1</label>
            <input type="text" class="form-control" name="member1" id="name1" placeholder="name" required/> <br/>
            <input type="email" class="form-control" name="email1" id="email1" placeholder="email" required/> <br/>
            <input type="text" class="form-control" name="phone1" id="phone1" placeholder="Phone" required/> <br/>
          </div>
          <div class="form-group">
            <label for="name2">Team Member 2</label>
            <input type="text" class="form-control" name="member2" id="name2" placeholder="name" required/> <br/>
            <input type="email" class="form-control" id="email2" name="email2" placeholder="email" required/> <br/>
            <input type="text" class="form-control" id="phone2" name="phone2" placeholder="Phone" required/> <br/>
          </div>
          <div class="form-group">
            <label for="name3">Team Member 3</label>
            <input type="text" class="form-control" id="name3" name="member3" placeholder="name" required/> <br/>
            <input type="email" class="form-control" id="email3" name="email3" placeholder="email" required/> <br/>
            <input type="text" class="form-control" id="phone3" name="phone3" placeholder="Phone" required/> <br/>
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
    </div>
    <div class="tab-pane" style="margin-right:30px;" id="tab12">
      <div class="page-header">
        <h1> Team Registration </h1>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <form role="form" method="post" action="./submit2.php">
          <div class="form-group">
            <label for="teamname">Team Name</label>
            <input type="text" class="form-control" id="teamname" name="teamname" placeholder="Team name" required/>
          </div>
          <div class="form-group">
            <label for="College">College</label>
            <p  class="form-control-static" > <?php echo $_SESSION['college']; ?> </p>
          </div>
          <div class="form-group">
            <label for="name1">Team Member1</label>
            <input type="text" class="form-control" name="member1" id="name1" placeholder="name" required/> <br/>
            <input type="email" class="form-control" name="email1" id="email1" placeholder="email" required/> <br/>
            <input type="text" class="form-control" name="phone1" id="phone1" placeholder="Phone" required/> <br/>
          </div>
          <div class="form-group">
            <label for="name2">Team Member 2</label>
            <input type="text" class="form-control" name="member2" id="name2" placeholder="name" required/> <br/>
            <input type="email" class="form-control" id="email2" name="email2" placeholder="email" required/> <br/>
            <input type="text" class="form-control" id="phone2" name="phone2" placeholder="Phone" required/> <br/>
          </div>
          <div class="form-group">
            <label for="name3">Team Member 3</label>
            <input type="text" class="form-control" id="name3" name="member3" placeholder="name" required/> <br/>
            <input type="email" class="form-control" id="email3" name="email3" placeholder="email" required/> <br/>
            <input type="text" class="form-control" id="phone3" name="phone3" placeholder="Phone" required/> <br/>
          </div>
          <div class="form-group">
            <label for="name3">Team Member 4</label>
            <input type="text" class="form-control" id="name4" name="member4" placeholder="name" required/> <br/>
            <input type="email" class="form-control" id="email4" name="email4" placeholder="email" required/> <br/>
            <input type="text" class="form-control" id="phone4" name="phone4" placeholder="Phone" required/> <br/>
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>

    </div>
    <div class="tab-pane" style="margin-right:30px;" id="tab13">
      <div class="page-header">
        <h1>Registration </h1>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <form role="form" method="post" action="./submit3.php">
          <div class="form-group">
            <label for="teamname">Team Name</label>
            <input type="text" class="form-control" id="teamname" name="teamname" placeholder="Team name">
          </div>
          <div class="form-group">
            <label for="College">College</label>
            <p  class="form-control-static" > <?php echo $_SESSION['college']; ?> </p>
          </div>
          <div class="form-group">
            <label for="name1">Team Member1</label>
            <input type="text" class="form-control" name="member1" id="name1" placeholder="name"> <br/>
            <input type="email" class="form-control" name="email1" id="email1" placeholder="email"> <br/>
            <input type="text" class="form-control" name="phone1" id="phone1" placeholder="Phone"> <br/>
          </div>
          <div class="form-group">
            <label for="name2">Team Member 2</label>
            <input type="text" class="form-control" name="member2" id="name2" placeholder="name"> <br/>
            <input type="email" class="form-control" id="email2" name="email2" placeholder="email"> <br/>
            <input type="text" class="form-control" id="phone2" name="phone2" placeholder="Phone"> <br/>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
    </div>
    <div class="tab-pane" style="margin-right:30px;" id="tab14">
      <div class="page-header">
        <h1>Registrations| view </h1>
      </div>

      <?php
       if(!isset($_SESSION))
       {
        header("Location: ./register.html");
       }
       //$con=mysql_connect("localhost","root","");
       $con=mysql_connect("localhost","sushant","wnccsushant");
       mysql_select_db('interiittech',$con);
       $college = $_SESSION["college"];
       $sql1= "SELECT * FROM socialimpact where institute='$college'";
       $sql2 = "SELECT * FROM marathon where institute='$college'";
       $sql3 = "SELECT * FROM software where institute='$college'";
       $result = mysql_query($sql1);
       if (!$result) { // add this check.
              die('Invalid query: ' . mysql_error());
          }
       echo '<h3> Inter iit Social Impact </h3>';
       echo '<table class="table table-bordered"><tbody>';
       while($row = mysql_fetch_array($result))
       {
        
        echo '<tr><td>'.$row['teamname'].'</td><td>'.$row['member1'].'</td><td>'.$row['email1'].'</td><td>'.$row['phone1'].'</td><td>'.$row['member2'].'</td><td>'.$row['email2'].'</td><td>'.$row['phone2'].'</td><td>'.$row['member3'].'</td><td>'.$row['email3'].'</td><td>'.$row['phone3'].'</td><tr>';
 
       }
       echo '</tbody></table><br/>';
       echo '<h3> Messier Marathon </h3>';
       $result = mysql_query($sql2);
        if (!$result) { // add this check.
            die('Invalid query: ' . mysql_error());
        }
       echo '<table class="table table-bordered"><tbody>';
       while($row = mysql_fetch_array($result))
       {
        
        echo '<tr><td>'.$row['teamname'].'</td><td>'.$row['member1'].'</td><td>'.$row['email1'].'</td><td>'.$row['phone1'].'</td><td>'.$row['member2'].'</td><td>'.$row['email2'].'</td><td>'.$row['phone2'].'</td><td>'.$row['member3'].'</td><td>'.$row['email3'].'</td><td>'.$row['phone3'].'</td><td>'.$row['member4'].'</td><td>'.$row['email4'].'</td><td>'.$row['phone4'].'</td><tr>';
 
       }
       echo '</tbody></table><br/>';
        echo '<h3> Software Development </h3>';
       $result = mysql_query($sql3);
       if (!$result) { // add this check.
          die('Invalid query: ' . mysql_error());
      }
       echo '<table class="table table-bordered"><tbody>';
       while($row = mysql_fetch_array($result))
       {
        
        echo '<tr><td>'.$row['teamname'].'</td><td>'.$row['member1'].'</td><td>'.$row['email1'].'</td><td>'.$row['phone1'].'</td><td>'.$row['member2'].'</td><td>'.$row['email2'].'</td><td>'.$row['phone2'].'</td><tr>';
 
       }
       echo '</tbody></table>';

      ?>
    </div>
  </div>
<script type="text/javascript">
  $(function(){ 
      $('.nav-tabs a').on('click', function (e) {
          e.preventDefault();
          $(this).tab('show');
      });  
  });
  $("#College").typeahead({
    name:'college',
    local: ["IIT Indore","IIT Bombay","IIT Roorkee","IIT Guwahati","IIT Delhi","IIT Hyderabad","IIT Madras","IIT Knapur","IIT Kharagpur","IIT Ghandinagar","IIT Ropar","IIT Mandi","IIT BHU","IIT Bhubaneshwar","IIT Indore","IIT Patna"]
  });
  $("#College1").typeahead({
    name:'college',
    local: ["IIT Indore","IIT Bombay","IIT Roorkee","IIT Guwahati","IIT Delhi","IIT Hyderabad","IIT Madras","IIT Knapur","IIT Kharagpur","IIT Ghandinagar","IIT Ropar","IIT Mandi","IIT BHU","IIT Bhubaneshwar","IIT Indore","IIT Patna"]
  });
  $("#College2").typeahead({
    name:'college',
    local: ["IIT Indore","IIT Bombay","IIT Roorkee","IIT Guwahati","IIT Delhi","IIT Hyderabad","IIT Madras","IIT Knapur","IIT Kharagpur","IIT Ghandinagar","IIT Ropar","IIT Mandi","IIT BHU","IIT Bhubaneshwar","IIT Indore","IIT Patna"]
  });

</script>

    </div>
  </div><br/><br/><br/>
        <footer>
        <div class="row">
          <div class="col-lg-12">
            <hr>
            <p style="text-align:center">Copyright &copy; <a href="http://www.iitb.ac.in">IIT Bombay 2013</a> &middot; <a href="http://stab-iitb.org">STAB </a> &middot; <a href="http://www.techfest.org">Techfest</a></p>
            <p style="text-align:center"> Contact us <a href="mailto:contact@interiittech.in">contact@interiittech.in</a></p>
          </div>
        </div>
      </footer>

</div>
</body>
</html>