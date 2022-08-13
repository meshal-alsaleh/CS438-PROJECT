
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
$res = mysqli_query($con , "select * from place WHERE type ='event' ");
$s1 = mysqli_fetch_array($res); //Buolevard ;
$s2 = mysqli_fetch_array($res); // Combat ;
$s3 = mysqli_fetch_array($res); // Gamers8 ;
$s4 = mysqli_fetch_array($res); //Museum ;
$s5 = mysqli_fetch_array($res); // PaintBall ;
$s6 = mysqli_fetch_array($res); // Safari ;
$s7 = mysqli_fetch_array($res);  // Tower ;
$s8 = mysqli_fetch_array($res); // Winter ;

echo $s1[3];


?>




<html>
    <head>
        <title>Riyadh Trail - Events</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="./media/logo.png" type="image/x-icon">

        <style>
            form{
               
                
                background-size: cover;
                float:left;
                margin:40px ;
                width: 300px;
                height: 187px;
                float: left;
                margin-left: 20px;
                
            }

           
            .TransperntBorder
            {
                background: rgba(255,255,255,0.5);
            }
           
           
           body
           {
            background-color :whitesmoke;
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande","Lucida Sans", Arial, sans-serif;
           }
           .EventTittle{
            font-size:xx-large;
            font-weight: bold;
            background-color: rgba(255,255,255,0.5);

           }

           /* the rest is for class to  each event pic*/
           .Tower
           {
            background-image: url(<?php echo $s7[3]  ?>);
                background-size: cover;
           }

           .Buolevard
           {
            background-image: url(<?php echo $s1[3]  ?>);
                background-size: cover;
           }
           .Combat
           {
            background-image: url(<?php echo $s2[3]  ?>);
                background-size: cover;
           }

           .Museum
           {
            background-image: url(<?php echo $s4[3]  ?>);
                background-size: cover;
           }
           
           .Safari
           {
            background-image: url(<?php echo $s6[3]  ?>);
                background-size: cover;
           }

           .Winter
           {
            background-image: url(<?php echo $s8[3]  ?>);
                background-size: cover;
           }

           .PaintBall
           {
            background-image: url(<?php echo $s5[3]  ?>);
                background-size: cover;
           }

           .Gamers8
           {
            background-image: url(<?php echo $s3[3]  ?>);
                background-size: cover;
           }

           .hide {
            display: none;
            background-color: rgba(255,255,255,0.5);
            }

            .EventTittle:hover + .hide{
            font-size:large;
            font-weight: bold;
            background-color: rgba(255,255,255,0.5);
            display: block;
            color: black;

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
     
       <div  align="center">
       <h1 style="background-color: gray ;">Riyadh's Events</h1>
       </div>
       
       
        <form class="Tower">
<div class="EventTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); " > Al-Faisaliah Tower</div>
<div class="hide">Impressive Landmark in the skyline of the city of Riyadh, It is illuminated at night and can be seen from some distances from the city centre</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
       
    
         </form>

            <form  class="Buolevard">
            <div class="EventTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Buolevard City</div>
            <div class="hide">Cool place to discover and wander between the shops and the multitude of restaurants</div>           
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
           
    
    
         </form>

         <form class="Combat">
            <div class="EventTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Combat Field</div>
            <div class="hide">At Combat Field you’ll live through the action of history, and much more discover!</div> 
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
         </form>

         <form class="Museum">
            <div class="EventTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> National Museum</div>
            <div class="hide">The history of Islam is the major focus of this museum, a lot of information about the Arabian peninsula</div> 
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
           
    
         </form>

         <form class="Safari">
            <div class="EventTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Riyadh Safari</div>
            <div class="hide">Safari through its secluded reserve is a magical way to spend your night here!</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
    
         </form>

         <form class="Winter">
            <div class="EventTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Winter Wonderland</div>
            <div class="hide">A lot of activities and amusement park games and you have to try a banana game</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
    
         </form>

         <form class="PaintBall">
            <div class="EventTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> 1st PaintBall</div>
             <div class="hide">Two teams gather in a designated area and wage war against each other</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
    
         </form>

         <form class="Gamers8">
            <div class="EventTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Gamers8</div>
            <div class="hide">The biggest Esports and gaming event worldwide</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
    
         </form>

         <video autoplay muted loop id="myVideo">
            <source src="media/eventloop.mp4" type="video/mp4">
          </video>

    </body>
</html>