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
$res = mysqli_query($con , "select * from place WHERE type='hotel' ");
$s1 = mysqli_fetch_array($res); //almshreq

$s2 = mysqli_fetch_array($res); // Aloft Hotel
$s3 = mysqli_fetch_array($res); // Centro Hotel
$s4 = mysqli_fetch_array($res); //Fairmont Hotel
$s5 = mysqli_fetch_array($res); // Goot Resorts
$s6 = mysqli_fetch_array($res); // Hyatt Hotel
$s7 = mysqli_fetch_array($res);  // Intercontinental Hotel
$s8 = mysqli_fetch_array($res); // Marriot Hotel
$s9 = mysqli_fetch_array($res);  // Narcissus Hotel
$s10 = mysqli_fetch_array($res); // The RitzCarlton Hotel
//$s2 = mysqli_fetch_array($res) ; 
echo $s10[0]." ".$s10[3];


?>


<html>
    <head>
      <title>Riyadh Trail - Hotels</title>
         <link rel="stylesheet" href="css/style.css">
         <link rel="shortcut icon" href="./media/logo.png" type="image/x-icon">
        <title>

        </title>
        <style>
            form{
               
                background-image: url(pictures/Aloft.jpg); 
                background-size: cover;
                float:left;
                margin:40px ;
                width: 300px;
                height: 187px;
                float: left;
                margin-left: 20px;
                
            }

           
           
           body
           {
            background-color :whitesmoke;
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
            "Lucida Sans", Arial, sans-serif;
           }
           .HotelTittle{
            font-size:xx-large;
            font-weight: bold;
            background-color: rgba(255,255,255,0.5);

           }

           /* the rest is for class to  each hotel pic*/
           .aloft
           {
            background-image: url(<?php echo $s2[3]  ?>);
                background-size: cover;
           }

           .centro
           {
            background-image: url(<?php echo $s3[3]  ?>);
                background-size: cover;
           }
           .fairmont
           {
            background-image: url(<?php echo $s4[3]  ?>);
                background-size: cover;
           }

           .goot
           {
            background-image: url(<?php echo $s5[3]  ?>);
                background-size: cover;
           }
           
           .hyatt
           {
            background-image: url(<?php echo $s6[3]  ?>);
                background-size: cover;
           }

           .intercontinental
           {
            background-image: url(<?php echo $s7[3]  ?>);
                background-size: cover;
           }

           .marriot
           {
            background-image: url(<?php echo $s8[3]  ?>);
                background-size: cover;
           }

           .narcissus
           {
            background-image: url(<?php echo $s9[3]  ?>);
                background-size: cover;
           }

           .theritzcarlton
           {
            background-image: url(<?php echo $s10[3] ; ?>);
                background-size: cover;
           }

           .almashreq  
           {
            background-image: url(hotels/Al_Mashreq.jpg);
                background-size: cover;
           }

            .hide {
            display: none;
            background-color: rgba(255,255,255,0.5);
            }

            .HotelTittle:hover + .hide {
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
        <li><a href="#comment.php" inputmode="button" onClick="location.href='comment.php'">Riyadh Wall</a></li>
     </ul>
     <div class="right-nav-bar">
        <input type="text" name="search" id="search" onkeyup="myFunction()" placeholder="Search for pages.." >
    </div>
        </nav>
     </div>
     <body>
        
       <div class="hotels" align="center" style="background-color: gray;">
       <h1> Riyadh's Best Hotels</h1> </div>

       
       
        <form class="almashreq">

            <div class="HotelTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">  Almashreq Hotel</div>
            <div class="hide">Set in the Home Offices business park complex, this upmarket hotel with classic Arabian decor is 11 km from the National Museum of Saudi Arabia.</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
           
        
    
    
         </form>

           <form  class="aloft">

            <div class="HotelTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Aloft hotel</div>
            <div class="hide">This refined business hotel in a 
modern building is set just off Highways 65 and 522.</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
           
            
        
    
    
         </form>

         <form class="centro">


             <div class="HotelTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Centro hotel</div>
            <div class="hide"> this polished hotel is 8-minutes' walk from both the Al Faisaliyah Center skyscraper and shopping at Centria Mall. It's less than 1 km from King Fahd Highway. </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="fairmont">

            <div class="HotelTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">  Fairmont Hotel</div>
            <div class="hide">In a business district, this high-end hotel is a 2-minute walk from the Fairmont Convention Center and 22 km from King Khalid International Airport.</div>


            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
           
        
    
    
         </form>

         <form class="goot">
           <div class="HotelTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Goot Resorts</div>
            <div class="hide">Set in a residential area, this opulent apartment hotel is 26 km from King Khalid International Airport and 30 km from Riyadh Zoo.</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="hyatt">
            <div class="HotelTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Hyatt Hotel</div>
            <div class="hide">this polished business hotel is 41 km from King Khalid International Airport and 13 km from the Riyadh International Convention & Exhibition Center.</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
        
    
    
         </form>

         <form class="intercontinental">
            <div class="HotelTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Intercontnental Hotel</div>
            <div class="hide">This modern hotel is 4 km from Al Faisaliah skyscraper, 6 km from the National Museum and 8 km from the 19th-century Qaṣr al-Maṣmak fort.</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
    
    
         </form>

         <form class="marriot">
            <div class="HotelTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Marriot Hotel</div>
            <div class="hide">This upscale, block-style hotel is 6 km from both the Al Faisaliyah Center skyscraper and the cultural artifacts at the National Museum.</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="narcissus">
            <div class="HotelTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> Narcissus Hotel</div>
            <div class="hide">This palatial, premium hotel with a dress code is 8 km from the National Museum and 11 km from the Al Faisaliyah Centre skyscraper.</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="theritzcarlton">
            <div class="HotelTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); "> The RitzCarlton</div>
            <div class="hide">Set 9 km from the Al Faisaliyah Center, this luxury hotel is 12 km from the National Museum of Saudi Arabia.</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         

         <video autoplay muted loop id="myVideo">
            <source src="media/hoteloop.mp4" type="video/mp4">
          </video>
     
    

    </body>
</html>
