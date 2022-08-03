<?php
session_start();
$username = '';
$email = '';
$errors = array();
$score = '';

//connect to db
$db = mysqli_connect('localhost','root','','mini_project') or die("Could not connect to database");


//Register users
if(isset($_POST['signup'])){
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $err = 0;

        $result = mysqli_query($db,"SELECT * FROM user");
        while($row = mysqli_fetch_array($result)){
            if($row['username'] == $username){
                $err = 1; 
            }
        }
        if($err == 1){
            array_push($errors,"Username already taken");
        }
        
        if(empty($username)){
            array_push($errors,"Username is required");
        }
        if(empty($email)){
            array_push($errors,"Email is required");
        }
        if(empty($password)){
            array_push($errors,"Password is required");
        }
        
        if(count($errors) === 0){
            $sql = "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password')";
            mysqli_query($db,$sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You have now logged in";
            header('location: login.php');
        }
}
//login
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($password)){
        array_push($errors,"Password is required");
    }
    if(count($errors) === 0){
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You have now logged in";
            header('location: main.php');

        }else{
           
            array_push($errors,"Wrong username/password combination");
        }
    }
}

//logout

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

if(isset($_POST['result'])){
    $score = $_POST['score'];
    $_SESSION['score'] = $score;
    $uname = $_SESSION['username'];
    $reg = "INSERT INTO quiz_leaderboard (NAME, SCORE) VALUES ('$uname','$score')";
    mysqli_query($db,$reg);
    header('location: quiz_score.php');
    
}

if(isset($_POST['players'])){
    $_SESSION['playerX'] = $_POST['playerX'];
    $_SESSION['playerO'] = $_POST['playerO'];
    header('location: tictactoe.php');
    
}

if(isset($_POST['sub'])){
   
    $xpoint = $_POST['xpoint'];
    $opoint = $_POST['opoint'];

    $_SESSION['xpoint'] = $xpoint;
    $_SESSION['opoint'] = $opoint;

    $unameX = $_SESSION['playerX'];
    $unameO = $_SESSION['playerO'];

    $xplay = "INSERT INTO tictactoe_leaderboard (NAME, SCORE) VALUES ('$unameX','$xpoint')";
    mysqli_query($db,$xplay);
    $oplay = "INSERT INTO tictactoe_leaderboard (NAME, SCORE) VALUES ('$unameO','$opoint')";
    mysqli_query($db,$oplay);
    header('location: tictactoe_score.php');
    
}

if(isset($_POST['finish'])){
    $name = "Vignesh";
    $credits = $_POST['score'];
    $_SESSION['credits'] = $credits;
    $uname = $_SESSION['username'];

    $save = "INSERT INTO guess_leaderboard (NAME, SCORE) VALUES ('$uname','$credits')";
    mysqli_query($db,$save);
    header('location: guess_score.php');
    
}


?>