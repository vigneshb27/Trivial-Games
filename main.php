<?php include('server.php');

    if(empty($_SESSION['username'])){
        header('location: login.php');
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="main.css">
    
   
</head>

<body>
    
    <h1>3 In 1 Game</h1>
    <section id="container1"></section>
    <section id="container2"></section>
    <section id="container3"></section>
    <section id="container4"></section>
    <section id="container5"></section>
    <section id="container6"></section>
    <section id="container7"></section>



    <footer class="credits">
       
        <p>Author: Vignesh B. <a class="link" href="https://www.hackerrank.com/vigneshbaskaran5">(@vigneshb)</a></p>
    </footer>
    <script>

        const container1 = document.querySelector('#container1');
        const container2 = document.querySelector('#container2');
        const container3 = document.querySelector('#container3');
        const container4 = document.querySelector('#container4');
        const container5 = document.querySelector('#container5');
        const container6 = document.querySelector('#container6');
        const container7 = document.querySelector('#container7');






        //========================
        let name1 = "Avengers Quiz";

        // div container
        const generationContainer1 = document.createElement('div');
        generationContainer1.classList.add('generation-container', 'toggle-content');

        // anchor tag
        const a1 = document.createElement('a');
        a1.href = '#';
        a1.append(name1);
        a1.classList.add('toggle');

        // span (initially collapsed)
        const span1 = document.createElement('span');
        span1.append(' ➤ ');

        // h2 will embed a and span
        const h21 = document.createElement('h2');
        h21.classList.add('generation-title');

        h21.insertAdjacentElement('beforeend', span1);
        h21.insertAdjacentElement('beforeend', a1);

        // append container inside h2
        h21.appendChild(generationContainer1);


        // h2 goes inside the big container
        container1.appendChild(h21);

        container1.addEventListener('click', function () {

            window.location.href = "quiz.php";
        });

        let name2 = "Tic-tac-toe";

        // div container
        const generationContainer2 = document.createElement('div');
        generationContainer2.classList.add('generation-container', 'toggle-content');

        // anchor tag
        const a2 = document.createElement('a');
        a2.href = '#';
        a2.append(name2);
        a2.classList.add('toggle');

        // span (initially collapsed)
        const span2 = document.createElement('span');
        span2.append(' ➤ ');

        // h2 will embed a and span
        const h22 = document.createElement('h2');
        h22.classList.add('generation-title');

        h22.insertAdjacentElement('beforeend', span2);
        h22.insertAdjacentElement('beforeend', a2);

        // append container inside h2
        h22.appendChild(generationContainer2);


        // h2 goes inside the big container
        container2.appendChild(h22);

        container2.addEventListener('click', function () {

            window.location.href = "ttt_form.php";
        });

        let name3 = "Guess the player";

        // div container
        const generationContainer3 = document.createElement('div');
        generationContainer3.classList.add('generation-container', 'toggle-content');

        // anchor tag
        const a3 = document.createElement('a');
        a3.href = '#';
        a3.append(name3);
        a3.classList.add('toggle');

        // span (initially collapsed)
        const span3 = document.createElement('span');
        span3.append(' ➤ ');

        // h2 will embed a and span
        const h23 = document.createElement('h2');
        h23.classList.add('generation-title');

        h23.insertAdjacentElement('beforeend', span3);
        h23.insertAdjacentElement('beforeend', a3);

        // append container inside h2
        h23.appendChild(generationContainer3);


        // h2 goes inside the big container
        container3.appendChild(h23);

        container3.addEventListener('click', function () {

            window.location.href = "guess.php";
        });
        let name4 = "Leaderboard";

        // div container
        const generationContainer4 = document.createElement('div');
        generationContainer4.classList.add('generation-container', 'toggle-content');

        // anchor tag
        const a4 = document.createElement('a');
        a4.href = '#';
        a4.append(name4);
        a4.classList.add('toggle');

        // span (initially collapsed)
        const span4 = document.createElement('span');
        span4.append(' ➤ ');

        // h2 will embed a and span
        const h24 = document.createElement('h2');
        h24.classList.add('generation-title');

        h24.insertAdjacentElement('beforeend', span4);
        h24.insertAdjacentElement('beforeend', a4);

        // append container inside h2
        h24.appendChild(generationContainer4);


        // h2 goes inside the big container
        container4.appendChild(h24);

        container4.addEventListener('click', function () {

            window.location.href = "leaderboard.php";
        });
        let name5 = "Instructions";

        // div container
        const generationContainer5 = document.createElement('div');
        generationContainer5.classList.add('generation-container', 'toggle-content');

        // anchor tag
        const a5 = document.createElement('a');
        a5.href = '#';
        a5.append(name5);
        a5.classList.add('toggle');

        // span (initially collapsed)
        const span5 = document.createElement('span');
        span5.append(' ➤ ');

        // h2 will embed a and span
        const h25 = document.createElement('h2');
        h25.classList.add('generation-title');

        h25.insertAdjacentElement('beforeend', span5);
        h25.insertAdjacentElement('beforeend', a5);

        // append container inside h2
        h25.appendChild(generationContainer5);


        // h2 goes inside the big container
        container5.appendChild(h25);

        container5.addEventListener('click', function () {


            window.location.href = "instructions.php";
        });



        let name6 = "About";

        // div container
        const generationContainer6 = document.createElement('div');
        generationContainer6.classList.add('generation-container', 'toggle-content');

        // anchor tag
        const a6 = document.createElement('a');
        a6.href = '#';
        a6.append(name6);
        a6.classList.add('toggle');

        // span (initially collapsed)
        const span6 = document.createElement('span');
        span6.append(' ➤ ');

        // h2 will embed a and span
        const h26 = document.createElement('h2');
        h26.classList.add('generation-title');

        h26.insertAdjacentElement('beforeend', span6);
        h26.insertAdjacentElement('beforeend', a6);

        // append container inside h2
        h26.appendChild(generationContainer6);


        // h2 goes inside the big container
        container6.appendChild(h26);

        container6.addEventListener('click', function () {


            window.location.href = "about.php";
        });


        let name7 = "Logout";

        // div container
        const generationContainer7 = document.createElement('div');
        generationContainer7.classList.add('generation-container', 'toggle-content');

        // anchor tag
        const a7 = document.createElement('a');
        a7.href = '#';
        a7.append(name7);
        a7.classList.add('toggle');

        // span (initially collapsed)
        const span7 = document.createElement('span');
        span7.append(' ➤ ');

        // h2 will embed a and span
        const h27 = document.createElement('h2');
        h27.classList.add('generation-title');

        h27.insertAdjacentElement('beforeend', span7);
        h27.insertAdjacentElement('beforeend', a7);

        // append container inside h2
        h27.appendChild(generationContainer7);


        // h2 goes inside the big container
        container7.appendChild(h27);

        container7.addEventListener('click', function () {


            window.location.href = "main.php?logout='1'";
        });







    </script>
</body>

</html>