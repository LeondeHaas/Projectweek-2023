var countdownDatum = new Date("Februari 15, 2023 23:59:59").getTime();

var interval = setInterval(function () {
  var DatumNu = new Date().getTime();
  var distance = countdownDatum - DatumNu;

  var dagen = Math.floor(distance / (1000 * 60 * 60 * 24));
  var uren = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minuten = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconden = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("timer").innerHTML =
    dagen + "D " + uren + "U " + minuten + "M " + seconden + "S ";
  if (distance < 0) {
    clearInterval(interval);
    document.getElementById("timer").innerHTML =
      "TIMER AFGELOPEN, u kunt niet meer aanmelden voor de escaperoom";
  }
}, 1000);
