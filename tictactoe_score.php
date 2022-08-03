<?php include('server.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
    <link rel="stylesheet" href="tictactoe.css">
    <style>
        body{
            background-color : #c5dae0;
        }
        button{
            background-color: salmon;
      color: white;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      border-radius: 12px;
      margin: 10px;
      margin-bottom: 15px;
        }
        button:hover{
    background-color: brown;
}
.max{
    
    font-size : 30px;
   
    padding : 30px;
    background-color :#4a6884;
    color : white;
    margin : 100px 400px 30px 400px;
    border-radius : 5px;
}
    </style>
</head>
<body>
<div class="max">
<?php echo $_SESSION['playerX']?>, your score - <?php echo $_SESSION['xpoint']?><br>
<?php echo $_SESSION['playerO']?>, your score - <?php echo $_SESSION['opoint']?>
</div>
    
    <button  onclick="window.location.href='tictactoe.php'">Play again</button><br>
    <button  onclick="window.location.href='main.php'">Home</button>
    
</body>
</html>