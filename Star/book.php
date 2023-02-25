<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <link rel = "stylesheet" href = "reset.css"/>
  <link rel = "stylesheet" href = "star.css"/>
  <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
  <title>Stars</title>
  <script src="star.js" defer></script>
 </head>
 
 <body>
 <div class="stars">
  <div class "book">
   <form class = "form" action = "book_confirm.php" method = "POST">
    <div class = "head">
     <h1>漫画記録</h1>
    </div>
    
    <div class = "book">
    <div class = "form-group"> 
     <label for="inputtitle">タイトル</label>
     <input type="text" id="inputtitle" name="inputtitle" class = "form-control">
    </div>
    <div class = "form-group">
     <label for="inputtext">感想</label> 
     <textarea class = "form-control" id="inputtitle" name="inputtitle"></textarea>
    </div>
    
    <input type="submit" value="記録する">
    </div>
   </form>
  </div>
  
  </div>
  </body>