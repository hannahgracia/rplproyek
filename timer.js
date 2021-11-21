let timerText = document.getElementById("timer-text");
let gameStart = false;

//set input text to be blank on page refresh
inputText.value = '';
//score values to be shown on game end
let scoreContainer = document.getElementById("score");
let scoreWPM = document.getElementById("score-st-wpm");

function inputType(input){
    let textInput = input.value;
    if(!gameStart){
        startTimer(60, timerText);
        gameStart = true;
    }
}

// START THE TIMER
function startTimer(duration, ele){
    let timer = duration;
    let minutes;
    let seconds;
    let tick = setInterval(() => {
        //we parse int because in th section below we append a string to the number value
    minutes = parseInt(timer / 60);
    seconds = parseInt(timer % 60);
        //format the timer properlu
    seconds = seconds < 10 ? "0" + seconds : seconds;

    ele.textContent = minutes + ":" + seconds;

    timer--;
        //if timer goes below zero, then game end
    if(timer < 0){
        clearInterval(tick);
        ele.textContent = "END";
        //show the game over text
        showGameOver();
    }
    }, 1000)
}

function showGameOver(){
    //user no longer type into input
    inputText.disabled = true;
    let currentWord = document.querySelector(`#test-box-text span:nth-child(${currentWordNumber})`);
    currentWord.setAttribute("class", "");
    inputText.value = "";

    //show score
    let wordsPerMinute = Math.round((userScore / 60) * 100);
    scoreWPM.textContent = wordsPerMinute + "WPM";
    scoreContainer.style.display = "block";
}

//onfocus useful for 'testBox' file
function onFocus(){
    isFocus = true;
}

function onBlur(){
    isFocus = false;
}