<?php include('server.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic-tac-toe</title>
    <link rel="stylesheet" href="tictactoe.css">
</head>

<body>
    <h1 class="title">Tic Tac Toe</h1>
    <h3 class="subtitle">Current Player: <span id="current-player">X</span></h3>
  
    <div class="game-container" id="board">
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
    </div>
  
    <div class="win-message" id="win-message">
      <span id="text-win-message"></span>
      <button class="btn" id="btn-restart">Next round</button>
      <form action="tictactoe.php" method="post">
          <input type="hidden" name="xpoint" id="xpoint" value="">
          <input type="hidden" name="opoint" id="opoint" value="">
      <button  class="btn" name="sub" id="result">See Results</button>
      </form>
    </div>
    <script src="tictactoe.js"></script>
  </body>
  </html>

