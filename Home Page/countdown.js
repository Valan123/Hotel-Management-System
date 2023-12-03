const starting = 6;

let time = starting * 1;

const countdown = document.getElementById('countdown');

setInterval(updateCountdown, 1000);

function updateCountdown(){
    let seconds = time % 60;

    countdown.innerHTML = `${seconds}`;
    time--;
}