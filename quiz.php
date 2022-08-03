<?php include('server.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avengers Quiz</title>
    <link rel="stylesheet" href="quiz_style.css">
</head>
<body>
    <div class="content">
        <div class="container">
            <div class="question">
                <h1 class="question" id="question">In which year did Captain America and Iron Man go to, to retrieve the Tesseract after failing once in Avengers Endgame?</h1>
                <p class="difficulty" id="difficulty">Difficulty - Easy</p>
            </div>

            <div class="options">
                <div class="option-1 option" id="option-1">
                    <h2 id="option1-text">1974</h2>
                </div>
                <div class="option-2 option" id="option-2">
                    <h2 id="option2-text">1970</h2>
                </div>
                <div class="option-3 option" id="option-3">
                    <h2 id="option3-text">1967</h2>
                </div>
                <div class="option-4 option" id="option-4">
                    <h2 id="option4-text">1972</h2>
                </div>
            </div>

            <div class="submit-button">
                <button id="submit">Submit</button>
                <button id="next">Next</button>
                <button id="hint">Hint</button>
                <button id="again">Reload to solve again</button>
                <form action="quiz.php" method="post">
                    <input type="hidden" name="score" id="score" value="">
                <button id="result" name="result">View result</button>   
                </form>
            </div>

            <div class="hint-area">
                <img src="" alt="hint" id="hint_image">
            </div>
            <p id="error"></p>
        </div>
        <p id="ans"></p>
    </div>
    <script src="app.js"></script>
    
    
</body>
</html>

