<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>Welcome -  Surulere Championship</title>
  <meta name="description" content="Surulere Championship Games - Powered by RCCG Jubilee Christian Center.">
  <meta name="keywords" content="Surulere, Lagos, Football competition, surulere football">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="neon.css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400');
body {
    font-family: 'Source Sans Pro', sans-serif;
    background: #053a00;
    margin: 100px auto;
    color: #fff;
    text-align: center;
    padding:5px;
}
.text-info {padding:10px; margin:0 auto; text-align:left;word-wrap: break-word;}
.text-info li {font-size:1.5vw; color:#fff;font-weight:300;}
@media only screen and (max-width: 600px) {
    .text-info li { color:#fff; font-size:4.8vw;}
}
</style>
</head>
<body>

<h1 class="text-uppercase mb-0">Portal Opens at 9am, 9th Dec 2018</h1>
<h1 class="mb-2 mt-2" id="demo" style="font-size:60px;margin-bottom:0"></h1>
<h4 style="font-size:20px;text-transform:uppercase;">Here is what you need to know before registering</h4>
<div class="col-md-5 mx-auto text-info">
<ol>
    <li>Registration is Open to the 1st 8 TEAMS.</li>
    <li>A Team MUST be 15 players.</li>
    <li>Only the COACH or TEAM CAPTAIN will register all the players.</li>
    <li>Team members information MUST be provided on the Portal before they are considered a Team.</li>
    <li>Portal will close when 8 TEAMS have completed their registration.</li>
    <li>Team Member information required are First & Last Names, Email address and Mobile Number</li>
</ol>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 9, 2018 09:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Portal is Now Open";
  }
}, 1000);
</script>
</body>
</html>