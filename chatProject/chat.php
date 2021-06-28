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
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p style="font-size:14px;"><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">
      </div>
      <form action="#" class="typing-area">
        <il style="cursor: pointer;margin-top:11px;">😀</il><input emoji="true" type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off"><input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <button><i class="fab fa-telegram-plane"></i></button></input>
      </form>
    </section>
  </div>
  </script>
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
  <script src="javascript/chat.js"></script>
</html>
