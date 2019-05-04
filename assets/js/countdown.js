/*AspireX Server Stats Countdown Timer*/
//AspireX is the property of Mark : https://mark-wesley.co.uk
// You may use this timer but please keep this notice intact - thank you.

var timeInSecs;
var ticker;

function startTimer(secs){
timeInSecs = parseInt(secs)-1;
ticker = setInterval("tick()",1000);   // every second
}

function tick() {
var secs = timeInSecs;
if (secs>0) {
timeInSecs--;
}
else {
clearInterval(ticker); // stop counting at zero
// startTimer(60);  // remove forward slashes in front of startTimer to repeat if required
}

document.getElementById("countdown").innerHTML = secs;
}

startTimer(65);  // 60 seconds - changed to 65 to compensate for the delay in loading if the RSPS is offline.
