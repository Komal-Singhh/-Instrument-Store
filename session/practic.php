
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Responsive Shopping Cart design</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style>* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
	background: #ffe3e2;
	font-family: montserrat;
}
.wrapper {
	max-width: 1000px;
	margin: 0 auto;
}
.wrapper h1 {
	padding: 20px 0;
	text-align: center;
	text-transform: uppercase;
}
.project {
	display: flex;
}
.shop {
	flex: 75%;
}
.box {
	display: flex;
	width: 100%;
	height: 200px;
	overflow: hidden;
	margin-bottom: 20px;
	background: #fff;
	transition: all .6s ease;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.box:hover {
	border: none;
	transform: scale(1.01);
}
.box img {
	width: 300px;
	height: 200px;
	object-fit: cover;
}
.content {
	padding: 20px;
	width: 100%;
	position: relative;
}
.content h3 {
	margin-bottom: 30px;
}
.content h4 {
	margin-bottom: 50px;
}
.btn-area {
	position: absolute;
	bottom: 20px;
	right: 20px;
	padding: 10px 25px;
	background-color: #3a71a9;
	color: white;
	cursor: pointer;
	border-radius: 5px;
}
.btn-area:hover {
	background-color: #76bfb6;
	color: #fff;
	font-weight: 600;
}
.unit input {
	width: 40px;
	padding: 5px;
	text-align: center;
}
.btn-area i {
	margin-right: 5px;
}
.right-bar {
	flex: 25%;
	margin-left: 20px;
	padding: 20px;
	height: 400px;
	border-radius: 5px;
	background: #fff;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.right-bar hr {
	margin-bottom: 25px;
}
.right-bar p {
	display: flex;
	justify-content: space-between;
	margin-bottom: 30px;
	font-size: 20px;
}
.right-bar a {
	background-color: #76bfb6;
	color: #fff;
	text-decoration: none;
	display: block;
	text-align: center;
	height: 40px;
	line-height: 40px;
	font-weight: 900;
}
.right-bar i {
	margin-right: 15px;
}
.right-bar a:hover {
	background-color: #3972a7;
}
@media screen and (max-width: 700px) {
	.content h3 {
		margin-bottom: 15px;
	}
	.content h4 {
		margin-bottom: 20px;
	}
	.btn2 {
		display: none;
	}
	.box {
		height: 150px;
	}
	.box img {
		height: 150px;
		width: 200px;
	}
}
@media screen and (max-width: 900px) {
	.project {
		flex-direction: column;
	}
	.right-bar {
		margin-left: 0;
		margin-bottom: 20px;
	}
}
@media screen and (max-width: 1250px) {
	.wrapper {
		max-width: 95%;
	}
}</style>
</head>
<body>
    <div class="wrapper">
		<h1>Shopping Cart</h1>
		<div class="project">
			<div class="shop">
				<div class="box">
					<img src="1.jpg">
					<div class="content">
						<h3>Women Lipsticks</h3>
						<h4>Price: $40</h4>
						<p class="unit">Quantity: <input name="" value="2"></p>
						<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></p>
					</div>
				</div>
				<div class="box">
					<img src="2.jpg">
					<div class="content">
						<h3>Man's Watches</h3>
						<h4>Price: $40</h4>
						<p class="unit">Quantity: <input name="" value="1"></p>
						<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></p>
					</div>
				</div>
				<div class="box">
					<img src="3.jpg">
					<div class="content">
						<h3>Samsung Mobile</h3>
						<h4>Price: $250</h4>
						<p class="unit">Quantity: <input name="" value="0"></p>
						<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></p>
					</div>
				</div>
			</div>
			<div class="right-bar">
				<p><span>Subtotal</span> <span>$120</span></p>
				<hr>
				<p><span>Tax (5%)</span> <span>$6</span></p>
				<hr>
				<p><span>Shipping</span> <span>$15</span></p>
				<hr>
				<p><span>Total</span> <span>$141</span></p><a href="#"><i class="fa fa-shopping-cart"></i>Checkout</a>
			</div>
		</div>
	</div>
</body>
</html>