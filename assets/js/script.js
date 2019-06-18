var test = "using js via assests folder for CodeIgniter";
//alert(test);




/**
* javascript arrays (not outputting)
*
*/
//var numbers = new Array();
//numbers = [1, 2, 3, 4, 5];
//numbers[2] = 8;
//numbers[2]; 

//var twoDimension = [[1,2,3], [4,5,6], [7,8,9]];
//twoDimension[0][1]; // first index of array (values 1,2,3), e.g second value in 
// child array (index 1 is value 2)




/**
* implementation 2 (canvas + javascript)
*
*/
//window.onload = function() { // out of scope? seems to be loading
    var number;
    var box;
    
    var boxFilledArray = [false, false, false, false, false, false, false, false, false]; 
    var iconArray = ['', '', '', '', '', '', '', '', '']; 
    var winnerArray2d = [[0,1,2], [3,4,5], [6,7,8], 
                         [0,3,6], [1,4,7], [2,5,8],
                         [0,4,8], [2,4,6]];
    // e.g. at winnerArray2d[0] = [0,1,2]
    // winner[0][0] = 0
    // winner[0][1] = 1

    var context;
    var playerTurn = 1; 
    var gameOver = false;
    
//}

/**
* start new game
*
*/
var newButton = document.getElementById("new");
newButton.addEventListener("click", newGame);

function newGame() {
    document.location.reload();
}

/**
* click the canvas
*
*/
document.getElementById("tictac").addEventListener("click", function(event) { 
    // anonymouse function to find the box instead of getting all individually, an event
    // object is created whene addEventListener is called
    boxClick(event.target.id);
    
});

/**
* get box id i.e canvas1, canvas2 etc
* draw to boxes
*
*/
function boxClick(numberId) {
    box = document.getElementById(numberId);
    context = box.getContext("2d");
    
    switch(numberId) {
        case "canvas1" : number = 1; 
            break;
        case "canvas2" : number = 2; 
            break; 
        case "canvas3" : number = 3; 
            break; 
        case "canvas4" : number = 4; 
            break;
        case "canvas5" : number = 5;
            break;
        case "canvas6" : number = 6;
            break;
        case "canvas7" : number = 7;
            break;
        case "canvas8" : number = 8;
            break;
        case "canvas9" : number = 9;
            break;       
    }
    
    if (boxFilledArray[number - 1] == false) { // -1 as filled array starts at boxFilledArray[0]
        if (gameOver == false) {
            if (playerTurn % 2 != 0) { // take turns depending on odd or even, draw first image otherwise second image        
                imageChange("http://[::1]/ci/assets/images/71666491-black-cat-icon.jpg");
                iconArray[number-1] = "1";               
            }
            else {
                imageChange("http://[::1]/ci/assets/images/small-duck_318-42620.jpg"); 
                iconArray[number-1] = "2";
            }
            playerTurn++; // increment turn as box is clicked
            boxFilledArray[number-1] = true;
            
            /**
            * check for winner
            *
            */
            var icon = iconArray[number-1];
            for (var i = 0; i < winnerArray2d.length; i++) {            
                if ((iconArray[winnerArray2d[i][0]] == icon) && 
                    (iconArray[winnerArray2d[i][1]] == icon) && 
                    (iconArray[winnerArray2d[i][2]] == icon)) {          
                    // winnerArray2d[0][0] == icon
                    // winnerArray2d[0][1]
                    // winnerArray2d[0][2]
                    // etc
                    
                    document.getElementById("result").textContent = "Player \"" + icon + "\" has won!";
                    gameOver = true;
                }
            }
            
            /**
            * draw game (no winner)
            *
            */
            if (playerTurn > 9 && gameOver != true) {
                document.getElementById("result").textContent = "Draw game! No Winner!";
            }
        }
        else {
            document.getElementById("result").textContent = "Game ended, start a new game with the \"Start New Game\" Button!";
        }      
    }
    else {
        document.getElementById("result").textContent = "Box already clicked! Click a different box!";
    } 
}

function imageChange(imagePath) {
    var image = new Image();
    image.onload = function() {
        context.drawImage(image, 0, 0, 100, 100);
    };
    image.src = imagePath;
}

function imageChoose(newImage) {
    document.getElementById("icon-show").src = newImage;
}


/**
* changing colors
*
*/
var canvasColor = document.getElementById("tictac");
canvasColor.addEventListener("mousedown", downEvent);
canvasColor.addEventListener("mouseup", upEvent);

function downEvent() {
	canvasColor.style.backgroundColor = "purple"; // uses camelcasing not background-color in js
}

function upEvent() {
	canvasColor.style.backgroundColor = "white";
}





/**
* Tic-Tac-toe (basic logic html + javascript)
*
*/ 	
function startGame() {

    for (var i = 1; i <= 9; i = i + 1) {
        clearSquares(i);
    }

    document.winner = null;
    document.playerTurn = "X";
    if (Math.random() < 0.5) {
        document.playerTurn = "O";
    }
    setMessage("It is " + document.playerTurn + "'s turn to click")

}

function clearSquares(number) {
    document.getElementById("s" + number).textContent = "";
}

function setMessage(msg) {

    document.getElementById("message").textContent = msg;

}

function nextMove(square) {

    if (document.winner != null) {
        setMessage(document.winner + " has already won.")
    }
    else if (square.textContent == "") {
        square.textContent = document.playerTurn;
        switchTurn();
    }
    else {
        setMessage("It's " + document.playerTurn + " next click");
    }

}

function switchTurn() {

    if (checkForWinner(document.playerTurn)) {
        setMessage(document.playerTurn + " is the winner!");

        // set whoever won to the winner
        document.winner = document.playerTurn;
    }
    else if (document.playerTurn == "X") {
        document.playerTurn = "O";
        setMessage("It is " + document.playerTurn + "'s click");
    }
    else {
        document.playerTurn = "X";
        setMessage("It is " + document.playerTurn + "'s click");
    }

}

function checkRow(p1, p2, p3, clicked) {

    var result = false;

    if (getSquare(p1) == clicked &&
        getSquare(p2) == clicked &&
        getSquare(p3) == clicked) {

        result = true;

    }
    return result;

}

function checkForWinner(clicked) {

    var result = false;

    if (checkRow(1, 2, 3, clicked) || checkRow(4, 5, 6, clicked) ||
        checkRow(7, 8, 9, clicked) || checkRow(1, 4, 7, clicked) ||
        checkRow(2, 5, 8, clicked) || checkRow(3, 6, 9, clicked) ||
        // diagonal
        checkRow(1, 5, 9, clicked) ||
        checkRow(3, 5, 7, clicked)) {

        result = true;
    }
    return result;
}

// get actual square as there was no way to identify 
function getSquare(number) {

    return document.getElementById("s" + number).textContent;
}

function reloadPage() {
    location.reload();
}







