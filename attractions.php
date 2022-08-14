


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
$res = mysqli_query($con , "select * from place WHERE type='attraction' ");
$s1 = mysqli_fetch_array($res); //albjiry

$s2 = mysqli_fetch_array($res); // alghader ;
$s3 = mysqli_fetch_array($res); // bulervard ;
$s4 = mysqli_fetch_array($res); //edge of the world ;
$s5 = mysqli_fetch_array($res); // historical diryah ;
$s6 = mysqli_fetch_array($res); // king abdulla park ;
$s7 = mysqli_fetch_array($res);  // king_saud_uni_stadi ;
$s8 = mysqli_fetch_array($res); // kingdom tower ;
$s9 = mysqli_fetch_array($res);  // masmak palace ;
$s10 = mysqli_fetch_array($res); // national musem ;
//$s2 = mysqli_fetch_array($res) ; //jolt
echo $s1[0]." ".$s1[3];
echo "YES" ;

?>






<html>
    <head>
    <title> Riyadh Trail - Attractions </title>
    <link rel="stylesheet" href="css/style.css">
         <link rel="shortcut icon" href="./media/logo.png" type="image/x-icon">
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

    </head>
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

            .search{
                background-image: url('/icons/searchicon.png'); /* Add a search icon to input */
            }
           
        
           
           body
           {
            background-color :whitesmoke;
            font-family : "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
            "Lucida Sans", Arial, sans-serif;
           }
           .hide {
            display: none;
            background-color: rgba(255,255,255,0.5);
            }
            .ResTittle:hover + .hide{
            font-size:large;
            font-weight: bold;
            background-color: rgba(255,255,255,0.5);
            display: block;
            color: black;

           }

           /* the rest is for class to  each coffe pic*/
           .albjiry
           {
            background-image: url(<?php echo $s1[3]  ?>);
                background-size: cover;
           }

           .alghader_walking_area
           {
            background-image: url(<?php echo $s2[3]  ?>);
                background-size: cover;
           }
           .bulevard
           {
            background-image: url(<?php echo $s3[3]  ?>);
                background-size: cover;
           }
.hide {
            display: none;
            background-color: rgba(255,255,255,0.5);
            }
           .edge
           {
            background-image: url(<?php echo $s4[3]  ?>);
                background-size: cover;
           }
           
           .historical_diryah
           {
            background-image: url(<?php echo $s5[3]  ?>);
                background-size: cover;
           }

           .king_abdula_park
           {
            background-image: url(<?php echo $s6[3]  ?>);
                background-size: cover;
           }

           .king_saud_st
           {
            background-image: url(<?php echo $s7[3]  ?>);
                background-size: cover;
           }

           .king_dom_tower
           {
            background-image: url(<?php echo $s8[3]  ?>);
                background-size: cover;
           }

           .masmak
           {
            background-image: url(<?php echo $s9[3]  ?>);
                background-size: cover;
           }

           .National_musem
           {
            background-image: url(<?php echo $s10[3]  ?>);
                background-size: cover;
           }
            
            .hide {
            display: none;
            background-color: rgba(255,255,255,0.5);
            }

            .ResTittle:hover + .hide{
            font-size:large;
            font-weight: bold;
            background-color: rgba(255,255,255,0.5);
            display: block;
            color: black;

           } 

        </style>

    </head>

    <body>
        
       <div align="center"> 
       <h1 style="background-color: gray ;"> Riyadh's Best Attractions</h1>
       </div>
       
       
        <form class="albjiry">
         <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Al-Bujairy</div>
         <div class="hide">This historical site with many renowned restaurants will open next November </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form  class="alghader_walking_area">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Al-Ghadeer Walking Area</div>
         <div class="hide">Nearly 5KM of paved paths and cycling lanes surronded by amazing views and cafes</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="bulevard">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">BLVD RUH CITY</div>
         <div class="hide">open entertainment and recreational complex with many fun things to do like concerts , shopping ....etc </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="edge">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">The Edge Of The World</div>
            <div class="hide">one of Saudi’s most popular tourist destinations, got its nickname from the uninterrupted view of the horizon it offers atop its 300-meter-high cliffs</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="National_musem">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">The National Museum</div>
            <div class="hide">Showing many artifacts , historical facts ....etc</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="king_saud_st">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">MARSOOL Park</div>
            <div class="hide">King Saud University Stadium, also known as Mrsool Park due to sponsorship reasons, is a football stadium</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="historical_diryah">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Historical Diriyah</div>
            <div class="hide">birthplace of the first Saudi state, historical crossroads of pilgrims and traders, and home to one of the kingdom’s most ambitious heritage developments.</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
           
        
    
    
         </form>

         <form class="king_abdula_park">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">King Abdullah Park</div>
            <div class="hide">The best place to have picnics in Riyadh , with dancing fountains and greenaries</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
           
        
    
    
         </form>

         <form class="king_dom_tower">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Kingdom Tower</div>
            <div class="hide">The Most iconic skyscraper in Riyadh , get to top of it and enjoy the views from there</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="masmak">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Masmak Fort</div>
            <div class="hide">serves as a proud reminder of Saudi Arabia’s storied history. In 1902, King Abdulaziz captured the fortress and took control of Riyadh </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
          
        
    
    
         </form>

         

         <video autoplay="" muted="" loop="" id="myVideo">
                    <source src="media/dir.mp4" type="video/mp4">
                  </video>
     
    

    </body>
</html>
