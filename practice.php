<html><head>
<title>Smooth Blink text using CSS</title>
<script src= "https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
function blink_text() {
	$('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
}
setInterval(blink_text, 1000);
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
</style>
</head>
<body>
    <h1 class="blinktext">Thank you </h1>
<p>Please click on print button to print order reciept..<br>
    <button type="submit" value="Print">Print</button></p>
</body></html>