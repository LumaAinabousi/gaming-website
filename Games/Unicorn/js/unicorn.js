let bullets = 6;
let count = 0;

function startGame() {
    toggleScreen("start-screen",false);
    toggleScreen("canvas",true);
    gameLoop();
}

function toggleScreen(id, toggle){
   var element = document.getElementById(id);
    let display = ( toggle ) ? "block" : "none";
    element.style.display=display;
}

function won_lost(){
    if(count == 5) $("#won-lost").append("You Won!");
    else $("#won-lost").append("You Lost!");
}

function gameLoop(){

    document.querySelectorAll('[id^="unicorn"]').forEach(element => {
        element.addEventListener('click', () => {              
            if(bullets != 0){
                element.style.display = 'none';
                document.getElementById("score-counter").innerHTML = ++count;
                document.getElementById("bullet-counter").innerHTML = bullets;
           }
            else if(bullets <= 0){
                $("#canvas").toggle();
                won_lost();
                $("#game-over").toggle();
            }
        })
      }) 
    
        window.onclick = function(){
            bullets--;
            document.getElementById("bullet-counter").innerHTML = bullets;
            if(bullets <= 0){
              $("#canvas").toggle();
              won_lost();
              $("#game-over").toggle();
            }
        }

}


function gameOver() {
    location.reload();
}