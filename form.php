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

  </head>

  <body>
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
    <li class="active"><a href="#tab11">Team Registration</a></li>
    <li><a href="#tab12">Abstract Submission</a></li>
    <li><a href="#tab13">First Submission</a></li>
    <li><a href="#tab14">Second Submission</a></li>
    <li><a href="#tab15">Final Presentation</a>
  </ul>
  <div id="my-tab-content" class="tab-content">
    <div class="tab-pane active" style="margin-right:30px;" id="tab11">
      <div class="page-header">
        <h1> Team Registration </h1>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <form role="form">
          <div class="form-group">
            <label for="teamname">Team Name</label>
            <input type="text" class="form-control" id="teamname" name="teamname" placeholder="Team name">
          </div>
          <div class="form-group">
            <label for="College">College</label>
            <input type="text" class="form-control" id="College" placeholder="College">
          </div>
          <div class="form-group">
            <label for="name1">Team Member1</label>
            <input type="text" class="form-control" id="name1" placeholder="name"> <br/>
            <input type="email" class="form-control" id="email1" placeholder="email"> <br/>
            <input type="text" class="form-control" id="phone1" placeholder="Phone"> <br/>
          </div>
          <div class="form-group">
            <label for="name2">Team Member 2</label>
            <input type="text" class="form-control" id="name2" placeholder="name"> <br/>
            <input type="email" class="form-control" id="email1" placeholder="email"> <br/>
            <input type="text" class="form-control" id="phone1" placeholder="Phone"> <br/>
          </div>
          <div class="form-group">
            <label for="name3">Team Member 3</label>
            <input type="text" class="form-control" id="name3" placeholder="name"> <br/>
            <input type="email" class="form-control" id="email1" placeholder="email"> <br/>
            <input type="text" class="form-control" id="phone1" placeholder="Phone"> <br/>
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>

    </div>
    <div class="tab-pane" style="margin-right:30px;" id="tab12">
      <div class="page-header">
        <h1> Abstract  Submission </h1>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <form role="form">
          <div class="form-group">
            <label for="teamname">Abstract Submission</label>
            <input type="text" class="form-control" id="teamname" name="astract" placeholder="Abstract submission report Google Doc">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <div class="tab-pane" style="margin-right:30px;" id="tab12">
      <div class="page-header">
        <h1> First Submission </h1>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <form role="form">
          <div class="form-group">
            <label for="teamname">First Report</label>
            <input type="text" class="form-control" id="teamname" name="first" placeholder="First report submission Google Doc">
          </div>
          <div class="form-group">
            <label for="teamname">Video link</label>
            <input type="text" class="form-control" id="teamname" name="video" placeholder="Video Link (preferably youtube)">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <div class="tab-pane" style="margin-right:30px;" id="tab13">
      <div class="page-header">
        <h1> Second Submission </h1>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <form role="form">
          <div class="form-group">
            <label for="teamname">Second Submission</label>
            <input type="text" class="form-control" id="teamname" name="second" placeholder="Second Submission Google Doc">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <div class="tab-pane" style="margin-right:30px;" id="tab14">
      <div class="page-header">
        <h1> Final Presentation </h1>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <form role="form">
          <div class="form-group">
            <label for="teamname">Final Submission</label>
            <input type="text" class="form-control" id="teamname" name="final" placeholder="Final Submission Google Doc">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
  $(function(){ 
      $('.nav-tabs a').on('click', function (e) {
          e.preventDefault();
          $(this).tab('show');
      });  
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