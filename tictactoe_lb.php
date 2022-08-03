
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="main.css">
    <style>
        p{
            text-align : center;
            margin : 30px 0px 30px 0px;
        }
    </style>
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>

   
</head>
<body>
    <div class="title_font">
        Tic-tac-toe
    </div>
<?php
    $con=mysqli_connect("localhost","root","","mini_project");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM tictactoe_leaderboard  ORDER BY SCORE DESC ");
    $rank = 1;
    echo "<table>
    
          <tr><th>RANK</th><th>NAME</th><th>SCORE</th></tr>"; 
    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        echo "<tr><td>" . $rank . "</td><td>" . $row['NAME'] . "</td><td>" . $row['SCORE']  ."</td></tr>"; 
         //$row['index'] the index here is a field name
         $rank++;
        }
    echo "</table>"; //Close the table in HTML

    mysqli_close($con);
    ?>
        <p><button class="fas fa-arrow-alt-circle-left" onclick = "window.location.href = 'leaderboard.php'">  Back</button></p>


</body>
</html>