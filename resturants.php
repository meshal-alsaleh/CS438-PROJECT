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
$res = mysqli_query($con , "select * from place WHERE type='restaurant' ");
$s1 = mysqli_fetch_array($res); //avak

$s2 = mysqli_fetch_array($res); // beef bar ;
$s3 = mysqli_fetch_array($res); // fares_breakfast ;
$s4 = mysqli_fetch_array($res); //miazu ;
$s5 = mysqli_fetch_array($res); // monky house ;
$s6 = mysqli_fetch_array($res); // najdi village ;
$s7 = mysqli_fetch_array($res);  // roka ;
$s8 = mysqli_fetch_array($res); // san carlo ;
$s9 = mysqli_fetch_array($res);  // shababyk resturant ;
$s10 = mysqli_fetch_array($res); // wagu ;
//$s2 = mysqli_fetch_array($res) ; //jolt
echo $s1[0]." ".$s1[3];


?>





<html>
    <head>
    <title>Riyadh Trail - Resturants</title>
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

           
            .TransperntBorder
            {
                background: rgba(255,255,255,0.5);
            }
           
            
           body
           {
            background-color :whitesmoke;
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande","Lucida Sans", Arial, sans-serif;
           }
           

           /* the rest is for class to  each coffe pic*/
           .miazu
           {
            background-image: url(<?php echo $s4[3]  ?>);
                background-size: cover;
           }

           .monkey_house
           {
            background-image: url(<?php echo $s5[3]  ?>);
                background-size: cover;
           }
           .avak
           {
            background-image: url(<?php echo $s1[3]  ?>);
                background-size: cover;
           }

           .beef_bar
           {
            background-image: url(<?php echo $s2[3]  ?>);
                background-size: cover;
           }
           
           .san_carlo
           {
            background-image: url(<?php echo $s8[3]  ?>);
                background-size: cover;
           }

           .fares_breakfast
           {
            background-image: url(<?php echo $s3[3]  ?>);
                background-size: cover;
           }

           .najd_village
           {
            background-image: url(<?php echo $s6[3]  ?>);
                background-size: cover;
           }

           .wagiu_burger
           {
            background-image: url(<?php echo $s10[3]  ?>);
                background-size: cover;
           }

           .shababyk
           {
            background-image: url(<?php echo $s9[3]  ?>);
                background-size: cover;
           }

           .ROKA
           {
            background-image: url(<?php echo $s7[3]  ?>);
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
<video autoplay muted loop id="myVideo">
                    <source src="media/dir.mp4" type="video/mp4">
                  </video>
    
    
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
        <li><a href="#comment.php" inputmode="button" onClick="location.href='comment.php'">Riyadh Wall</a></li>
     </ul>
     <div class="right-nav-bar">
        <input type="text" name="search" id="search" onkeyup="myFunction()" placeholder="Search for pages.." >
    </div>
        </nav>
     </div>

        
       <div class="restaurant" align="center" style="background-color: gray;">
       <h1> Riyadh's Best Resturants</h1> </div>
       
       
        <form class="ROKA">
            <div <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Roka  </div>
            <div class="hide"> fine highly rated dining japanese resturant all the way from london to riyadh</div> > &nbsp; </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
           
        
    
    
         </form>

         <form  class="miazu">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">MYAZU</div>
            <div class="hide"> EXQUISITE CONTEMPORARY JAPANESE CUISINE , Fine dining with beuatful atmosphere </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="san_carlo">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">San Carlo Cicchetti </div>
            <div class="hide"> Award-winning casual chic Italian restaurant located in Sulaymaniyah riyadh</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="beef_bar">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Beef Bar </div>
            <div class="hide"> beer bar Riyadh offers you the best-diversified beef dishes to satisfy different tastes, located near MYAZU </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="monkey_house">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">MNKY HSE</div>
            <div class="hide"> Monkey House, a contemporary Latin American restaurant, Award winning Latin American cuisine. All the way from London to Riyadh.</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
           
        
    
    
         </form>

         <form class="fares_breakfast">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">F6oor Fares </div>
            <div class="hide"> a great choice for a local reasonably prices Saudi breakfast, tasty & affordable</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="najd_village">
           <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Najdi Village </div>
            <div class="hide">  local Saudi restaurant serves traditional Saudi najdi cuisine , indoor & outdoor seating area with traditional Saudi old decorations</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
           
        
    
    
         </form>

         <form class="avak">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Avak </div>
            <div class="hide"> Modern Mediterranean Cuisines, with divers Arabian dishes from different countries</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
           
        
    
    
         </form>

         <form class="wagiu_burger">
            <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Wagyu Burger </div>
            <div class="hide"> specialized in beefburgers with reasonable prices , EXQUISITE diversified dishes</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         <form class="shababyk">
           <div class="ResTittle" style="font-size:xx-large ; font-weight:bold ; background-color: rgba(255,255,255,0.5); ">Shababik </div>
            <div class="hide"> luxurious Lebanesenes restaurant, with Arabian fine dining and excellent Arabian atmosphere</div>     
            <br> 
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            
        
    
    
         </form>

         

         
     
    

    </body>
</html>
