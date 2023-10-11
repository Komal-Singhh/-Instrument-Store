<html><head>
        <script type="text/javascript">
            function fun()
            {
                alert("You have not log in yet.Please login for best Experience!");
                window.location.href="login.php";
            }
            
        </script>
        <style>          .body
            {
               
                margin:0;
            }
            .menu{
                width:auto;
                  background-image:url("tab1.jpg");
                  background-repeat: no-repeat;
                  background-size: 100%;
                overflow:auto;
            }
            .menu ul{
                margin:0;
                padding:0;
                list-style:none;
                line-height:70px;
              }
            .menu li{
                float:left;
            }
            .menu ul li a{
                text-decoration:none;
                width:130px;
                display:block;
                text-align:center;
                color:whitesmoke;
                    font-size:28px;
                font-family:fantasy;
            }
            .menu li a:hover{
                color:#fff;
                opacity:0.5;
                font-size:19px;
            }
            .response{
                max-width:300px;
                height:50px;
                margin-top:0.5px;
            }
            .glyphicon
                {   font-size:24px;
                    margin-top:25px;
                    margin-left: 25px;
                    color:#cf4a4a;
                }
             .glyphicon glyphicon-shopping-cart
                {   font-size:20px;
                    margin-top:25px;
                    color:#cf4a4a;
                    margin-left:20px;
                }
                .glyphicon glyphicon-map-marker{font-size:20px;
                    margin-top:25px;
                    color:#cf4a4a;
                    margin-left:20px;
                }
                .navbar{
                    background:#a80049;
                           }
                           .navbar  ul li a{
                               color:#eb388e;
                               font-size:28px;
                               font-family:fantasy;
                           }
                   .fa {
                    padding: 20px;
                     font-size: 30px;
                     width: 50px;
                    text-align: center;
                    text-decoration: none;
                       }

                    .fa:hover {
                    opacity: 0.7;
                    }
                      .ad
                    {
                    background-color:#94e3bb;
                    color:red;
                    }
                    .but
                    {
                           border:none;
                    background-color:white;
                    resize: none;
                    outline:none;
                    color:#cf4a4a;
                    font-size:17px;
                    }
 </style>  </head><body>
      
        <div class="row">
            <div class=" ad col-sm-12">
                <center><font color="red"><h5>Rhythm Music Experts</h5></font></center>
            </div>
           </div>
        <div class="row">
            <div class="col-sm-3">
                 <a href="storelocator.php">
          <span class="glyphicon glyphicon-map-marker"></span>
        </a><b>Store Locator</b>
           
            </div>
            <div class="col-sm-6">
            <center>    <img src="logo.png" class="response" alt=""/></center>
            </div>
        
           <div class="col-sm-3">     
                          <a href="login.php">
          <span class="glyphicon glyphicon-user"></span>
          </a>
          <button class="but"onclick="fun()"> 
          <span class="glyphicon glyphicon-shopping-cart"></span>
          <span class="badge rounded-pill bg-primary">0</span>
          </button>
       
            </div>
        </div>
       <nav class=" menu">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="guitar.php">Guitars</a></li>
        <li><a href="drums.php">Drums</a></li>
        <li><a href="trad_ins.php">Classical</a></li>
        <li><a href="home_audio.php">HomeAudio</a></li>
    </ul>
   </nav>
</body></html>