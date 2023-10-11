<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <style>
        *{
	padding: 0;
	margin: 0;
}

body{
	background: url(bg_img.jpg) no-repeat;
	background-size: cover;
	align-items: center;
	justify-content: center;
	display: flex;
	font-family: sans-serif;
}
.container{
	position: relative;
	margin-top: 100px;
	width: 450px;
	height: auto;
	background: #dedede;
	border-radius: 5px;
}
.label{
	padding: 20px 130px;
	font-size: 35px;
	font-weight: bold;
	color: #130f40;
}
.login_form{
	padding: 20px 40px;
}
.login_form .font{
	font-size: 18px;
	color: #130f40;
	margin: 5px 0;
}
.login_form input{
	height: 40px;
	width: 350px;
	padding: 0 5px;
	font-size: 18px;
	outline: none;
	border: 1px solid silver;
}
.login_form .font2{
	margin-top: 30px;
}
.login_form button{
	margin: 45px 0 30px 0;
	height: 45px;
	width: 365px;
	font-size: 20px;
	color: white;
	outline: none;
	cursor: pointer;
	font-weight: bold;
	background: #1A237E;
	border-radius: 3px;
	border: 1px solid #3949AB;
	transition: .5s;
}
.login_form button:hover{
	background: #151c6a;
}
.login_form #email_error,
.login_form #pass_error{
	margin-top: 5px;
	width: 345px;
	font-size: 18px;
	color: #C62828;
	background: rgba(255,0,0,0.1);
	text-align: center;
	padding: 5px 8px;
	border-radius: 3px;
	border: 1px solid #EF9A9A;
	display: none;
}



    </style>
  </head>
  <body>
  
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-6 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body">
                  
                  <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" align="center" width="50" height="500" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                <form class="login_form">
                    <div class="font">Email or Phone</div>
                    
                    <input type="text" name="">
                    <div id="email_error">Please fill up your Email or Phone</div>
                    
                    <div class="font font2">Password</div>
                    <input type="password" name="">
                    <div id="pass_error">Please fill up your Password</div>
                    <button type="submit">Login
                    </button>
                </form>
        </div></div></div></div></div>
  </body>
</html>