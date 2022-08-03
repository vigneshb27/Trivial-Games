<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
    <link rel="stylesheet" href="quiz_style.css">
</head>
<body>
<div class="content">
        <div class="container">
        <div class="question">
        
    <h1><?php echo $_SESSION['username'];?> you have scored
    <?php echo $_SESSION['score'];?> out of 10</h1>
</div>
<div class="submit-button">
<button onclick="window.location.href='quiz.php'">Solve again</button>
<button onclick="window.location.href='main.php'">Go back to home</button>

</div>
</div>
</div>

</body>
</html>