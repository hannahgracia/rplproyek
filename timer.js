let timerText = document.getElementById("timer-text");
let gameStart = false;

//set input text to be blank on page refresh
inputText.value = '';
//score values to be shown on game end
let scoreContainer = document.getElementById("score");
let scoreWPM = document.getElementById("score-st-wpm");
let userSetScore = document.getElementById("setScore");
let errorContainer = document.getElementById("error");
let error_text = document.getElementById("curr_error");
let accuracyContainer = document.getElementById("accuracy");
let accuracy_text = document.getElementById("curr_accuracy");
let buttonbackContainer = document.getElementById("buttonback");

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

    //show wrong words
    let wrongWords = total_errors + errors;
    error_text.textContent = wrongWords;
    errorContainer.style.display = "block";


    //show accuracy
    let correctWords = (userScore - (total_errors + errors));
    let accuracyVal = ((correctWords / userScore) * 100);
    accuracy_text.textContent = Math.round(accuracyVal);
    accuracyContainer.style.display = "block";

    //INI BIKIN BUTTON YG BALIK KE HOME
    var btn = document.createElement("BUTTON");   // Create a <button> element
    btn.innerHTML = "Back to Home";                   // Insert text
    btn.setAttribute('onclick', 'window.location.href="./index.php"');
    document.body.appendChild(btn);  

    var userId = $("#user-id").text();

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: url + "./update.php",
        data:{user_id:userId, scores:wordsPerMinute} //set data yg pengen dimasukin
    });

}

//onfocus useful for 'testBox' file
function onFocus(){
    isFocus = true;
}

function onBlur(){
    isFocus = false;
}