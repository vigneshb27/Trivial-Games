const boardElements = Array.from(document.querySelectorAll("#board div"));
const currentPlayer = document.getElementById("current-player");
const winMessageElement = document.getElementById("win-message");
const winMessageTextElement = document.getElementById("text-win-message");
const btnRestart = document.getElementById("btn-restart");
const result = document.getElementById("result");

const X_CLASS = "x-turn";
const O_CLASS = "o-turn";
let count = 1;
let xwins = 0;
let owins = 0;
const WINNING_COMB = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6],
];
let circleTurn;

startGame();

btnRestart.addEventListener("click", startGame);

// Func to start game
function startGame() {
  boardElements.forEach((cell) => {
    // Delete info when the restart game button is clicked
    cell.classList.remove(X_CLASS);
    cell.classList.remove(O_CLASS);
    // Add listener to each cell
    cell.addEventListener("click", handleTurn, { once: true });
  });

  // Remove show class when restart game button is given
  winMessageElement.classList.remove("show");
}

// Func to handle the click on specific cell
function handleTurn(e) {
  const cell = e.target;
  const currentClass = circleTurn ? O_CLASS : X_CLASS;
  placeMark(cell, currentClass);
  if (checkWinner(currentClass)) {
    endGame(false);
  } else if (isDraw()) {
    endGame(true);
  } else {
    changeTurn();
  }
}

// Func to handle game completion
function endGame(draw) {
  if (draw) {
    winMessageTextElement.innerText = "Tie!";
  } else {
    winMessageTextElement.innerText = `${circleTurn ? "O" : "X"} Wins!`;
  }
  winMessageElement.classList.add("show");
}

// Func to handle a tie
function isDraw() {
  return [...boardElements].every((cell) => {
    return cell.classList.contains(X_CLASS) || cell.classList.contains(O_CLASS);
  });
}

// Func to handle box marking
function placeMark(cell, currentClass) {
  cell.classList.add(currentClass);
}

// Func to change turn
function changeTurn() {
  circleTurn = !circleTurn;

  // Show current player with corresponding color
  if (!circleTurn) {
    currentPlayer.textContent = "X";
    currentPlayer.classList.remove(O_CLASS);
    currentPlayer.classList.add(X_CLASS);
  } else {
    currentPlayer.textContent = "O";
    currentPlayer.classList.add(O_CLASS);
  }
}

// Func to check all winning combinations
function checkWinner(currentClass) {
  return WINNING_COMB.some((combination) => {
    return combination.every((index) => {
      return boardElements[index].classList.contains(currentClass);
    });
  });
}


btnRestart.addEventListener("click",() =>{
    
    count+=1;
    if(count===5){
        btnRestart.style.display = "none";
        result.style.display = "block";


    }
    
    if(winMessageTextElement.innerText == "X Wins!"){
        xwins+=2;
    }

    else{
        owins+=2;
    }
});


result.addEventListener("click",() =>{

  if(winMessageTextElement.innerText == "X Wins!"){
    xwins+=2;
}

else{
    owins+=2;
}
  document.getElementById("xpoint").value = xwins;
  document.getElementById("opoint").value = owins;
  //window.location.href = "abc.html";

});




