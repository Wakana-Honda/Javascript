<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <link rel = "stylesheet" href = "reset.css"/>
  <link rel = "stylesheet" href = "star.css"/>
  <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
  <title>Stars</title>
  <script src="jquery.min.js"></script>
  <script src="star.js" defer></script>
  <script src="mouse.js" defer></script>
 </head>
 
 <body>
  <div class="stars">
   <!--マウスイベント-->
  <div class="change">
   <img src="stick.png" alt="">
  </div> 
  <!--マウスイベント-->
   <div class = "box"></div>
   <script src="sample.js"></script>
   <div class = "main">
    <div class = "main_child">
     <p class = "star-text">LIBRALY</p>
     <p class = "root">
     <?php
      echo "<a href = "."book.php".">Go To The Libraly</a>";
     ?>
     </p>
    </div>
   </div>
   
  </div>
 </body>

</html>