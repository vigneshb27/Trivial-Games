<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Result</title>
    <link rel="stylesheet" href="guess.css">
    <style>
        .question{
            color : white;
        }
        body{
               margin-top : 0;
        }
    </style>
</head>
<body>
<div class="content">
        <div class="container">
        <div class="question">
        
    <h1><?php echo $_SESSION['username'];?> you have scored
    <?php echo $_SESSION['credits'];?> out of 10</h1>
</div>
<div class="submit-button">
<button onclick="window.location.href='guess.php'">Solve again</button>
<button onclick="window.location.href='main.php'">Go back to home</button>

</div>
</div>
</div>

</body>
</html>