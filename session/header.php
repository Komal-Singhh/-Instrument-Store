<html><head> 
        <script type="text/javascript">
          
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
                line-height:50px;
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
           response{
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
                    margin-left:10px;
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
                    .sel
                    {
                    border:none;
                    background-color: #f7fafa;
                    resize: none;
                    outline:none;
                    color:#cf4a4a;
                    font-size:17px;
                    }
                    .ad
                    {
                    background-color:#94e3bb;
                    color:red;
                    }
 </style>
 <script type="text/javascript">
function fun()
{
    var v=document.getElementById("selec").value;
    if(v)
    {   var sel=v+".php";
        window.location.href=sel;
    }
}
 
 </script>
    
    
    </head>
    <body>
      
        <div class="row">
            <div class=" ad col-sm-12">
                <center><h5>Rhythm Music Experts</h5></center>
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
                

          <select class="sel" id="selec" onchange="fun()">
              <option hidden  selected="selected"><?php echo $_SESSION['user'];?></option>
              <option value="myprofile">My profile</option> 
              <option value="myorders">My orders </option>
              <option value="logout">Logout</option>
              
          </select>

                          <a href="viewCart.php?v=1">
          <span class="glyphicon glyphicon-shopping-cart"></span><span class="badge rounded-pill bg-success" id="span_id">
         <?php echo count($_SESSION['myCart']);?></span>
          </a>
      
       
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
