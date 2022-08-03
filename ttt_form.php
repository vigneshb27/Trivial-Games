<?php include('server.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play</title>
    <link rel="stylesheet" href="tictactoe.css">
    <style>
        input{
            
      padding: 12px;
      border: 1px solid black;
      margin-top: 6px;
      margin-bottom: 16px;

        }
        body{
            font-size :20px;
            margin-top : 100px;
            background-image : url('images/bg(1).jpg');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <h1>Tic-tac-toe</h1>
    <form action = "ttt_form.php" method="post">
    <label for="playerX">Enter the name(X) : </label>
    <input type="text" name="playerX" id="playerX"><br>
    <label for="playerO">Enter the name(O) : </label>

    <input type="text" name="playerO" id="playerO"><br>

    <button class="btn" name="players">Start</button>
    </form>
    
</body>
</html>