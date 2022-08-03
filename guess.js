const question = document.getElementById("question");
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
                wrong("Brian Lara")
            }
        }
        
        if(question_number == "2"){
            if(chosen == 3){
                correct();
            }else{
                wrong("Steve Smith");
            }
        }

        if(question_number == "3"){
            if(chosen == 3){
                correct();
            }else{
                wrong("Dhoni and Yuvraj")
            }
        }

        if(question_number == "4"){
            if(chosen == 4){
                correct();
                
            }else{
                wrong("James Anderson")
               
            }
        }
        if(question_number == "5"){
            if(chosen == 3){
                correct();
                submit.style.display = "none";
                next.style.display = "none";
                result.style.display = "block";
            }else{
                wrong("Jacques Kallis")
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

        question_change("<img src='images/icc2.jpg'>","Glen Maxwell","Nicholas Pooran","Steve Smith","Dinesh Karthick")
        reset_buttons();
    }else if(question_number == "2"){
        question_number = "3";
        hint_image.style.display = "none";

        question_change("<img src='images/icc5.jpg'>","Butler and Morgan","Miller and Dussen","Dhoni and Yuvraj","Guptil and Neesham")
        reset_buttons();
    }else if(question_number == "3"){
        question_number = "4";
        hint_image.style.display = "none";

        hint.style.display = "block";
        question_change("<img src='images/icc6.jpg'>","Mohammad Shami","Mashrafe Mortaza","Kylie Jamieson","James Anderson")
        
        reset_buttons();
    }else if(question_number == "4"){
        question_number = "5";
        hint_image.style.display = "none";

        hint_image.style.display = "none";
        question_change("<img src='images/icc8.jpg'>","Sanath Jayasuriya","Shahid Afridi","Jacques Kallis","Michael Clarke")
        
        reset_buttons();
    }
});

option1.addEventListener("click",() =>{
    if(!(submit_clicked)){
        option2.style.backgroundColor = "black";
        option3.style.backgroundColor = "black";
        option4.style.backgroundColor = "black";
        option1.style.background = "#008ee6";
        chosen = 1;
    }
})
option2.addEventListener("click",() =>{
    if(!(submit_clicked)){
        option1.style.backgroundColor = "black";
        option3.style.backgroundColor = "black";
        option4.style.backgroundColor = "black";
        option2.style.background = "#008ee6";
        chosen = 2;
    }
})
option3.addEventListener("click",() =>{
    if(!(submit_clicked)){
        option1.style.backgroundColor = "black";
        option2.style.backgroundColor = "black";
        option4.style.backgroundColor = "black";
        option3.style.background = "#008ee6";
        chosen = 3;
    }
})
option4.addEventListener("click",() =>{
    if(!(submit_clicked)){
        option1.style.backgroundColor = "black";
        option2.style.backgroundColor = "black";
        option3.style.backgroundColor = "black";
        option4.style.background = "#008ee6";
        chosen = 4;
    }
})

function correct(){
    score = score + 2;
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
    if(question_number == "1"){
        hint_image.innerText= "He has the highest one innings score";
        hint_image.style.display = "block";
        window.location.href="#hint_image";
    }
    if(question_number == "2"){
        hint_image.innerText= "Loves playing flick shot";
        hint_image.style.display = "block";
        window.location.href="#hint_image";

    }
    if(question_number == "3"){
        hint_image.innerText= "Best friends, Worst enemies";
        hint_image.style.display = "block";
        window.location.href="#hint_image";

    } if(question_number == "4"){
        hint_image.innerText= "One of the best late swinger";
        hint_image.style.display = "block";
        window.location.href="#hint_image";

    } if(question_number == "5"){
        hint_image.innerText= "A greatest all-rounder with a century on his last innings";
        hint_image.style.display = "block";
        window.location.href="#hint_image";

    }
})

function reset_buttons(){
    option2.style.backgroundColor = "black";
    option3.style.backgroundColor = "black";
    option4.style.backgroundColor = "black";
    option1.style.background = "black";
}

function question_change(question_,option1text_,option2text_,option3text_,option4text_){
    question.innerHTML = question_;
    option1text.textContent = option1text_;
    option2text.textContent = option2text_;
    option3text.textContent = option3text_;
    option4text.textContent = option4text_;
}

function showScore(){
    question.style.color = "white";
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


}
result.addEventListener("click",function(e){
    
    showScore();
    
    
});



