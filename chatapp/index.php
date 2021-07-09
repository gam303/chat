<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <div style="text-align: center;"><img style="width:130px;height:130px;border-radius:0!important"  src="img/logo.png"></span></div>
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
<header style="text-align: center;"><span style="font-size:48px;font-family: 'Noto Sans JP', sans-serif;">BlackChat</span></span>
<link rel="icon" href="img/logo.png">
</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input class="form-control" type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input class="form-control" type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="LOGIN">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="signup.php">Signup now</a></div>
      
      <div style="font-size:12px;text-align-last: center;adding-top:99px;">Languages: <a href="#">English<span> | <a href="login-ar.php">Arabic<span><span href="https;//hijsasas.com"></div></span></span>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</html>
