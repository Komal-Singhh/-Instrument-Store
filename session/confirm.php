<?php session_start();?>
<html><head>   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
        <link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
        <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 

<script src= "https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
function blink_text() {
	$('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
}
setInterval(blink_text, 1000);
function home()
{   window.location.href='home.php';
}
</script>

<style type="text/css">
.blinktext {
	-webkit-animation: blink-text 800ms linear infinite;
	-moz-animation: blink-text 800ms linear infinite;
	-ms-animation: blink-text 800ms linear infinite;
	-o-animation: blink-text 800ms linear infinite;
	 animation: blink-text 1000ms linear infinite;
}
@-webkit-keyframes blink-text {
	0% { color: black; opacity: 1; }
	20% { color: black;opacity: .8; }
	30% { color: black;opacity: .6; }
	40% { color: black;opacity: .4; }
	50% { color: black;opacity: .2; }
	60% { color: black;opacity: 0; }
	70% { color: black;opacity: .2; }
	80% { color: black;opacity: .4; }
	90% { color: black;opacity: .6; }
	98% { color: black;opacity: .8; }
	100% { color: black;opacity: 1; }
}
@-moz-keyframes blink-text {
	0% { color: black; opacity: 1; }
	20% { color: black;opacity: .8; }
	30% { color: black;opacity: .6; }
	40% { color: black;opacity: .4; }
	50% { color: black;opacity: .2; }
	60% { color: black;opacity: 0; }
	70% { color: black;opacity: .2; }
	80% { color: black;opacity: .4; }
	90% { color: black;opacity: .6; }
	98% { color: black;opacity: .8; }
	100% { color: black;opacity: 1; }
}
@-ms-keyframes blink-text {
	0% { color: black; opacity: 1; }
	20% { color: black;opacity: .8; }
	30% { color: black;opacity: .6; }
	40% { color: black;opacity: .4; }
	50% { color: black;opacity: .2; }
	60% { color: black;opacity: 0; }
	70% { color: black;opacity: .2; }
	80% { color: black;opacity: .4; }
	90% { color: black;opacity: .6; }
	98% { color: black;opacity: .8; }
	100% { color: black;opacity: 1; }
}
@-o-keyframes blink-text {
	0% { color: black; opacity: 1; }
	20% { color: black;opacity: .8; }
	30% { color: black;opacity: .6; }
	40% { color: black;opacity: .4; }
	50% { color: black;opacity: .2; }
	60% { color: black;opacity: 0; }
	70% { color: black;opacity: .2; }
	80% { color: black;opacity: .4; }
	90% { color: black;opacity: .6; }
	98% { color: black;opacity: .8; }
	100% { color: black;opacity: 1; }
}
@keyframes blink-text {
	0% { color: grey; opacity: 1; }
	20% { color: red;opacity: .8; }
	30% { color: green;opacity: .6; }
	40% { color: orange;opacity: .4; }
	50% { color: yellow;opacity: .2; }
	60% { color: blue;opacity: 0; }
	70% { color: black;opacity: .2; }
	80% { color: black;opacity: .4; }
	90% { color: black;opacity: .6; }
	98% { color: black;opacity: .8; }
	100% { color: black;opacity: 1; }
}

.ab
{   margin-left: 40px;
    margin-top:40px;outline:none;
}</style>
</head>
<body>
   <center> <h1 class="blinktext">Thank you!!!</h1>
       <h2>Please click on Print button to print order receipt..<br></h2>
<p>
    <a href="order_reciept.php">  <button type="submit" class=" ab btn btn-success">Print</button>
  </a>
    <button type="submit" class=" ab btn btn-danger"onclick="home()">Cancel</button>
  

</body></html>