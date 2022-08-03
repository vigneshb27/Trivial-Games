<?php include('server.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the player</title>
    <link rel="stylesheet" href="guess.css">
</head>
<body>
    <div class="content">
        <div class="container">
            <div class="question">
                <h1 class="question" id="question"><img src="images/icc1.jpg"></h1>
                
            </div>

            <div class="options">
                <div class="option-1 option" id="option-1">
                    <h2 id="option1-text">Greame Smith</h2>
                </div>
                <div class="option-2 option" id="option-2">
                    <h2 id="option2-text">Brian Lara</h2>
                </div>
                <div class="option-3 option" id="option-3">
                    <h2 id="option3-text">Sourav Ganguly</h2>
                </div>
                <div class="option-4 option" id="option-4">
                    <h2 id="option4-text">Andrew Strauss</h2>
                </div>
            </div>

            <div class="submit-button">
                <button id="submit">Submit</button>
                <button id="next">Next</button>
                <button id="hint">Hint</button>
                <button id="again">Reload to solve again</button>
                <form action="guess.php" method="post">
                    <input type="hidden" name="score" id="score" value="">
                <button id="result" name="finish">View result</button>   
                </form>
            </div>

            <div class="hint-area">
                <p id="hint_image"></p>
            </div>
            <p id="error"></p>
        </div>
        <p id="ans"></p>
    </div>
    <script src="guess.js"></script>
    
    
</body>
</html>

