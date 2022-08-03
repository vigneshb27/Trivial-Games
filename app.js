const question = document.getElementById("question");
const difficulty = document.getElementById("difficulty");
const option1 = document.getElementById("option-1");
const option2 = document.getElementById("option-2");
const option3 = document.getElementById("option-3");
const option4 = document.getElementById("option-4");
const submit = document.getElementById("submit");
const error = document.getElementById("error");
const next = document.getElementById("next");
const result = document.getElementById("result");

const option1text = document.getElementById("option1-text")
const option2text = document.getElementById("option2-text")
const option3text = document.getElementById("option3-text")
const option4text = document.getElementById("option4-text")
const hint = document.getElementById("hint");
const hint_image = document.getElementById("hint_image");
let chosen = null;
let submit_clicked = false;
let question_number = "1";
let score = 0;

submit.addEventListener("click",() =>{
    if(chosen == null){
        error.style.background = "red";
        error.textContent = "Please select something";
        error.style.display = "block";
    }else{
        submit_clicked = true;
        if(question_number == "1"){
            if(chosen == 2){
                correct();
            }else{
                wrong("1970")
            }
        }
        
        if(question_number == "2"){
            if(chosen == 3){
                correct();
            }else{
                wrong("Stormbreaker");
            }
        }

        if(question_number == "3"){
            if(chosen == 1){
                correct();
            }else{
                wrong("14,000,605")
            }
        }

        if(question_number == "4"){
            if(chosen == 2){
                correct();
                hint.style.display = "none";
                hint_image.style.display = "none"
            }else{
                wrong("Thor")
                hint.style.display = "none";
            }
        }
        if(question_number == "5"){
            if(chosen == 2){
                correct();
            }else{
                wrong("Thor,Iron Man")
            }
        }
        if(question_number == "6"){
            if(chosen == 3){
                correct();
            }else{
                wrong("Agatha Harkness")
            }
        }
        if(question_number == "7"){
            if(chosen  == 4){
                correct();
            }else{
                wrong("Monica")
            }
        }
        if(question_number == "8"){
            if(chosen == 1){
                correct();
            }else{
                wrong("It's okay.")
            }
        }
        if(question_number == "9"){
            if(chosen == 3){
                correct();
               
            }else{
                wrong("Fortnite")
                
            }
        }
        if(question_number == "10"){
            if(chosen == 1){
                correct();
                submit.style.display = "none";
                next.style.display = "none";
                result.style.display = "block";

            }else{
                wrong("Uru")
                submit.style.display = "none";
                next.style.display = "none";
                result.style.display = "block";

            }
        }
        chosen = null;
        console.log(score)
        //addition game, heads and tails with computer game,dice simulator
    }
});

next.addEventListener("click",() =>{
    submit_clicked = false;
    chosen = null;
    submit.style.display = "block";
    next.style.display = "none";
    error.style.display = "none";
    if(question_number == "1"){
        question_number = "2";
        hint_image.style.display = "none";

        question_change("What is the name of Thor's axe?","Stormbreeker","Stormchaser","Stormbreaker","Stormmaker")
        reset_buttons();
    }else if(question_number == "2"){
        question_number = "3";
        difficulty.textContent = "Difficulty - Hard"
        difficulty.style.background = "red";
        question_change("How many possible outcomes did Dr. Strange see in Infinity War?","14,000,605","14,000,805","14,040,605","14,000,610")
        reset_buttons();
    }else if(question_number == "3"){
        question_number = "4";
        question_change("Who is the god of thunder?","Odin","Thor","Hela","Thanos")
        difficulty.textContent = "Difficulty - Easy"
        difficulty.style.background = "lime";
        reset_buttons();
    }else if(question_number == "4"){
        question_number = "5";
        hint_image.style.display = "none";
        question_change("Two avengers who were you able to wound Thanos in Infinity War?","Iron Man, Captain America","Thor,Iron Man","Vision,War Machine","Black Panther,Hulk Buster")
        difficulty.textContent = "Difficulty - Medium";
        difficulty.style.background = "orange";
        reset_buttons();
    }else if(question_number == "5"){
        question_number = "6";
        question_change("What was the real name of the villain(the witch) in WandaVision?","Agnes Harkness","Wanda Maximoff","Agatha Harkness","Hark Agness")
        reset_buttons();
    }else if(question_number == "6"){
        question_number = "7";
        question_change("Which character in Captain Marvel movie appeared in WandaVision too?","Vision","Black Widow","Agnes","Monica")
        reset_buttons();
    }else if(question_number == "7"){
        question_number = "8";
        question_change("What did Black Widow tell Hawkeye before sacrificing herself?","It's okay.","Let me go.","Clint,please.","I am sorry");
        reset_buttons();
    }else if(question_number == "8"){
        question_number = "9";
        difficulty.textContent = "Difficulty - Easy"
        question_change("Which video game were Thor and Korg playing in Avengers Endgame?","Minecraft","Cyberpunk 2077","Fortnite","RDR 2");
        reset_buttons();
    }else if(question_number == "9"){
        question_number = "10";
        question_change("What is the strongest metal in the whole MCU?","Uru","Vibranium","Locolium","Titanium");
        reset_buttons();
    }
});

option1.addEventListener("click",() =>{
    if(!(submit_clicked)){
        option2.style.backgroundColor = "orange";
        option3.style.backgroundColor = "orange";
        option4.style.backgroundColor = "orange";
        option1.style.background = "yellow";
        chosen = 1;
    }
})
option2.addEventListener("click",() =>{
    if(!(submit_clicked)){
        option1.style.backgroundColor = "orange";
        option3.style.backgroundColor = "orange";
        option4.style.backgroundColor = "orange";
        option2.style.background = "yellow";
        chosen = 2;
    }
})
option3.addEventListener("click",() =>{
    if(!(submit_clicked)){
        option1.style.backgroundColor = "orange";
        option2.style.backgroundColor = "orange";
        option4.style.backgroundColor = "orange";
        option3.style.background = "yellow";
        chosen = 3;
    }
})
option4.addEventListener("click",() =>{
    if(!(submit_clicked)){
        option1.style.backgroundColor = "orange";
        option2.style.backgroundColor = "orange";
        option3.style.backgroundColor = "orange";
        option4.style.background = "yellow";
        chosen = 4;
    }
})

function correct(){
    score++;
    error.textContent = "Correct!";
    error.style.background = "lime";
    next.style.display = "block";
    error.style.display = "block";
    submit.style.display = "none";

}

function wrong(correct_answer){
    error.style.background = "red";
    error.style.color = "white";
    next.style.display = "block";
    error.style.display = "block";
    submit.style.display = "none";
    error.textContent = `Wrong! It was ${correct_answer}!`;
}

hint.addEventListener("click",() =>{
    if(question_number == "4"){
        hint_image.src = "https://cutewallpaper.org/21/thor-wakanda-entrance/The-most-hype-moment-in-a-superhero-movie-ResetEra.gif";
        hint_image.style.display = "block";
    }
})

function reset_buttons(){
    option2.style.backgroundColor = "orange";
    option3.style.backgroundColor = "orange";
    option4.style.backgroundColor = "orange";
    option1.style.background = "orange";
}

function question_change(question_,option1text_,option2text_,option3text_,option4text_){
    question.textContent = question_;
    option1text.textContent = option1text_;
    option2text.textContent = option2text_;
    option3text.textContent = option3text_;
    option4text.textContent = option4text_;
}

function showScore(){
    question.style.fontSize = "50px";
    option1.style.display = "none";
    option2.style.display = "none";
    option3.style.display = "none";
    option4.style.display = "none";
    submit.style.display = "none";
    question.textContent = "Loading....";
    next.style.display = "none";
    error.style.display = "none";
    result.style.display = "none";
    document.getElementById("score").value = score;
    hint.style.display = "none";
    hint_image.style.display = "none";
    difficulty.style.display = "none";



}
result.addEventListener("click",function(e){
    
    showScore();
});



