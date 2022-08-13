<?php


// varibles i identfy to connect

$host = "sql308.epizy.com" ;
$user = "epiz_32364193";
$pass= "xrrTwbnSc6ZN" ;
$db = "epiz_32364193_riyadh_trail" ;
// connect function 
$con = mysqli_connect($host,$user,$pass,$db) ;
// CHECK CONNECTION STATUS
if($con)
{
    //echo "connected" ;
}

// get data from database
$res = mysqli_query($con , "select * from place ");
$s1 = mysqli_fetch_array($res); //ashjra ;
$s2 = mysqli_fetch_array($res); // cavali ;
$s3 = mysqli_fetch_array($res); // DNA ;
$s4 = mysqli_fetch_array($res); //JOLT ;
$s5 = mysqli_fetch_array($res); // LAST CUP ;
$s6 = mysqli_fetch_array($res); // LOST ;
$s7 = mysqli_fetch_array($res);  // MID-SAJ ;
$s8 = mysqli_fetch_array($res); // SOCIAL ;
$s9 = mysqli_fetch_array($res);  // WAKF ;
$s10 = mysqli_fetch_array($res); // VOG ;



?>





<html>
    <head>
        <title>Riyadh Trail - Cafe's</title>
         <link rel="stylesheet" href="css/style.css">
         <link rel="shortcut icon" href="./media/logo.png" type="image/x-icon">
         
        <style>
            form{
               
                background-image: url(so.jpg);
                background-size: cover;
                float:left;
                margin:40px ;
                width: 300px;
                height: 187px;
                float: left;
                margin-left: 20px;
                
           }
                
                .hide {
            display: none;
            background-color: rgba(255,255,255,0.5);
            }

                
            }

           
            .TransperntBorder
            {
                background: rgba(255,255,255,0.5);
            }
           
            
           
           body
           {
            background-color :whitesmoke;
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
           }
           
           .CoffeTittle:hover + .hide{
            font-size:large;
            font-weight: bold;
            background-color: rgba(255,255,255,0.5);
            display: block;
            color: black;

           }

           /* the rest is for class to  each coffe pic*/
           .soccial
           {
            background-image: url(<?php echo $s8[3]  ?>);
                background-size: cover;
           }

           .lost
           {
            background-image: url(<?php echo $s6[3]  ?>);
                background-size: cover;
           }
           .mid_saj
           {
            background-image: url(<?php echo $s7[3]  ?>);
                background-size: cover;
           }

           .last_cup
           {
            background-image: url(<?php echo $s5[3]  ?>);
                background-size: cover;
           }
           
           .cavali
           {
            background-image: url(<?php echo $s2[3]  ?>);
                background-size: cover;
           }

           .wakf
           {
            background-image: url(<?php echo $s9[3]  ?>);
                background-size: cover;
           }

           .jolt
           {
            background-image: url(<?php echo $s4[3]  ?>);
                background-size: cover;
           }

           .DNA
           {
            background-image: url(<?php echo $s3[3]  ?>);
                background-size: cover;
           }

           .vog
           {
            background-image: url(<?php echo $s10[3]  ?>);
                background-size: cover;
           }

           .ashjar
           {
            background-image: url(<?php echo $s1[3]  ?>);
                background-size: cover;
           }
            
            

        </style>

    </head>

    
    <script>
    function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('search');
  filter = input.value.toUpperCase();
  ul = document.getElementById("nav-list");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
<body>
      <div>
        <nav class="nav-bar" style="background-color: black ;">
        <img src="media/logo.png" alt="logo" class="logo" style="opacity: 1">
        <ul class="nav-list" id="nav-list">
        <li><a href="#home.php" inputmode="button" onClick="location.href='home.php'" >Home</a> </li>
        <li><a href="#resturants" inputmode="button" onClick="location.href='resturants.php'">Resturants</a></li>
        <li><a href="#cafes.php" inputmode="button" onClick="location.href='cafes.php'">Cafe's</a></li>
        <li><a href="#events.php" inputmode="button" onClick="location.href='events.php'">Events</a></li>
        <li><a href="#hotels.php" inputmode="button" onClick="location.href='hotels.php'">Hotels</a></li>
        <li><a href="#attractions.php" inputmode="button" onClick="location.href='attractions.php'">Attractions</a></li>
     </ul>
     <div class="right-nav-bar">
        <input type="text" name="search" id="search" onkeyup="myFunction()" placeholder="Search for pages.." >
    </div>
        </nav>
     </div>
       <div align="center"> 
         <h1 style="background-color: gray ;"> Riyadh's Best Cafe's</h1>
      </div>
       
       
       
        <form class="soccial">
            <div class="CoffeTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Sociale cafe</div>
            <div class="hide">A trendy spot in Riyadh , you can enjoy the busy vibes at night or the quite mornings if you are a morning owl </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        
    
    
         </form>

         <form  class="jolt">
            <div class="CoffeTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Jolt</div>
            <div class="hide">Get the best Cold brew in Riyadh only at Jolt </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    
    
         </form>

         <form class="DNA">
            <div class="CoffeTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">DNA Cafe</div>
            <div class="hide">A perfect hotspot to work or study at</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    
         </form>

         <form class="vog">
           <div class="CoffeTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Vouge Cafe</div>
            <div class="hide">Vouge cafe serves many dishes , drinks & snacks</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
           
         </form>

         <form class="ashjar">
            <div class="CoffeTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Ashjar Cafe</div>
            <div class="hide">Connect with nature at this cozy and warm cafe , studying here is recomended </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
          
         </form>

         <form class="wakf">
            <div class="CoffeTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Wakf</div>
            <div class="hide">You must try their cookies and lattes </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        
         </form>

         <form class="lost">
           <div class="CoffeTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Lost</div>
            <div class="hide">At Anas bin malik road where all good places in Riyadh is at</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        
    
    
         </form>

         <form class="cavali">
            <div class="CoffeTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Cavali Cafe</div>
            <div class="hide">Cavali cafe as in the brand Cavali is high class cafe in riyadh </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    
         </form>

         <form class="last_cup">
            <div class="CoffeTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Last Cup</div>
            <div class="hide">Try different kinds of brews and coffee beans in here </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
      
         </form>

         <form class="mid_saj">
            <div class="CoffeTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5);">Mid Saj</div>
            <div class="hide">Get to enjoy one of the best views in Riyadh overlooking KAFD </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
    
    
         </form>

         

         
     <video autoplay muted loop id="myVideo">
      <source src="media/cafevid.mp4" type="video/mp4">
    </video>
    

    </body>
</html>
