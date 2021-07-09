<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <?php
if($_POST)
{
    $textcode= array(':D',':P',':O');
    $smileys=array('<img src="img/1.gif">','<img src="img/2.gif">','<img src="img/3.gif">');
    echo str_replace($textcode,$smileys,$_POST['message']);

};
?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p style="font-size:14px;"><?php echo $row['status']; ?></p>
        </div>
        
      </header>
      <div class="chat-box">
         
      </div>
      <form method="POST" action="#" class="typing-area">
        <il style="cursor: pointer;margin-top:11px;margin-right:8px;margin-left:-12px;"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet"><g transform="translate(0,512) scale(0.100000,-0.100000)"
fill="#797979" stroke="none"><path d="M2420 5064 c-541 -38 -1012 -219 -1435 -553 -90 -71 -305 -286 -376
-376 -298 -377 -472 -786 -535 -1255 -23 -168 -23 -472 0 -640 63 -469 238
-878 535 -1255 71 -90 286 -305 376 -376 648 -511 1466 -680 2247 -464 423
117 779 326 1094 640 252 252 427 513 554 827 317 789 225 1667 -248 2358
-103 150 -166 226 -306 365 -396 396 -888 638 -1436 709 -120 16 -376 26 -470
20z m440 -339 c631 -93 1174 -435 1523 -961 239 -362 360 -764 360 -1204 0
-205 -16 -334 -64 -531 -186 -765 -809 -1392 -1573 -1584 -210 -53 -335 -68
-556 -67 -224 0 -394 24 -605 85 -655 190 -1200 700 -1439 1349 -236 638 -148
1383 227 1946 93 139 146 204 260 321 390 400 890 630 1447 665 92 6 320 -5
420 -19z"/><path d="M1539 3395 c-109 -35 -204 -132 -239 -244 -25 -80 -25 -142 0 -222
82 -265 420 -347 617 -151 143 144 143 380 0 524 -72 71 -142 101 -246 105
-56 2 -102 -2 -132 -12z"/><path d="M3344 3392 c-62 -22 -128 -69 -171 -123 -101 -127 -101 -330 -2 -455
188 -237 560 -171 649 115 11 35 20 85 20 111 0 114 -69 244 -164 307 -92 63
-228 81 -332 45z"/><path d="M1360 1948 c-76 -52 -95 -126 -66 -253 75 -318 428 -658 820 -789
154 -51 267 -69 441 -70 178 0 287 16 438 65 399 130 757 471 833 794 29 127
10 201 -66 253 l-33 22 -1167 0 -1167 0 -33 -22z m2079 -342 c-46 -65 -194
-206 -267 -255 -208 -140 -479 -209 -718 -182 -192 22 -367 86 -520 192 -77
53 -225 202 -257 257 l-18 32 906 0 906 0 -32 -44z"/></g></svg></il><input onkeyup="rtl(this);" type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off"><input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>
<script src="fgEmojiPicker.js"></script>
    <script>
        const emojiPicker = new FgEmojiPicker({
            trigger: ['il'],
            removeOnSelection: false,
            closeButton: true,
            position: ['top', 'right'],
            preFetch: true,
            insertInto: document.querySelector('input'),
            emit(obj, triggerElement) {
                console.log(obj, triggerElement);
            }
        });
    </script>
    <script>
        function rtl(element)
{   
    if(element.setSelectionRange){
        element.setSelectionRange(1,1);
    }
}

    </script>
  <script src="javascript/chat.js"></script>

</html>
