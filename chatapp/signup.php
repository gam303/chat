<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <div style="text-align: center;"><img style="width:130px;height:130px;border-radius:0!important"  src="img/logo.png"></span></div>
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
<header style="text-align: center;"><span style="font-size:48px;font-family: 'Noto Sans JP', sans-serif;">BlackChat</span></span>
<link rel="icon" href="img/logo.png">
</header>
<style>

</style>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input class="form-control" type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input class="form-control" type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input class="form-control" type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input class="form-control" type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
            <div class="form-label">
          <label>Profile Picture</label>
          <input class="form-control" type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input id="start_call" type="submit" name="submit" value="SIGNUP">
          <div id='loading'></div>
        </div>
      </form>
      <div class="link">Already signed up? <a href="index.php">Login now</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
<script>
    
/*This is an example function and can be disregarded
This function sets the loading div to a given string.*/
function loaded() {
  $('#loading').html('<input id="start_call" type="submit" name="submit" value="SIGNUP">');
}

function startLoad() {
    /*This is the loading gif, It will popup as soon as startLoad is called*/
    $('#loading').html('<img style="width:50px;" src="http://rpg.drivethrustuff.com/shared_images/ajax-loader.gif"/>');
    /*
    This is an example of the ajax get method, 
    You would retrieve the html then use the results
    to populate the container.
    
    $.get('example.php', function (results) {
        $('#loading').html(results);
    });
    */
    /*This is an example and can be disregarded
    The clearTimeout makes sure you don't overload the timeout variable
    with multiple timout sessions.*/
    clearTimeout(timeout);
    /*Set timeout delays a given function for given milliseconds*/
    timeout = setTimeout(loaded, 1500);
  }
  /*This binds a click event to the refresh button*/
$('#start_call').click(startLoad);
/*This starts the load on page load, so you don't have to click the button*/
    
</script>
</html>
