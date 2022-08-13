<!DOCTYPE html>
<html lang="en">

<head>
    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riyadh Trail - home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./media/logo.png" type="image/x-icon">
    
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
     

    <section class="background firstSection" id="home">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-bg">Where Saudi’s past and future meet </p>
                <p class="text-sm"> Explore Riyadh <br> 
                    Reset with world-class shopping, restaurants , events and hotels
                
                <div class="buttons">
                    <a href="events.php"><button class="btn">See events</button></a>
                </div>


            </div>
            <div class="secondHalf">
                <img src="media/logo.png" alt="Logo">
            </div>
        </div>
    </section>

    <section id = "service"class="section-down">
        <div class="para">
            <p class="sectionTag text-bg">Trace Riyadh’s history </p>
            <p class="sectionSubTag text-sm">Built in 1865 and superbly preserved, Al Masmak Fortress is a vast clay and mud-brick citadel that’s a favorite among tourists wanting to step back in time and explore Saudi’s roots. In 1902, King Abdulaziz captured the fortress and took control of Riyadh (his ancestral home) after having lived in Kuwait. From this fortress, Abdulaziz Al Saud conquered and united the different kingdoms and provinces that make up the Saudi nation as we know it today.
                Another must-visit location is the Saudi National Museum, which has more than 3,700 antiquities on display, documenting the grand history of Arabia over millennia.</p>
        </div>


        <div class="thumbnail">
                <video autoplay muted loop id="myVideo">
                    <source src="media/riyadhvideo1.mp4" type="video/mp4">
                  </video>
        </div>
    </section>

    <div class="hr-end">
        <hr>
    </div>

    <section class="section-down reverse-order">
        <div class="para">
            <p class="sectionTag text-bg">Riyadh Season</p>
            <p class="sectionSubTag text-sm">Riyadh Season has elevated Riyadh to the list of cities worth visiting to take in the city’s events. It has also become a popular domestic and international tourist destination. The number of visitors to the Riyadh season is expected to reach 14 million by the end of 2021, representing a diverse range of nationalities and cultures. </p>
        </div>


        <div class="thumbnail">
            <img class="imgFluid" src="./media/RIYADH2.jpeg" alt="logo Image">
        </div>
    </section>

    <hr>

    <section class="section-down">
        <div class="para">
            <p class="sectionTag text-bg">Diriyah</p>
            <p class="sectionSubTag text-sm">In Diriyah, visitors can be part of history-making international events, such as Diriyah Tennis Cup and Diriyah ePrix. It pays to keep an eye on local listings and be part of history as it unfolds in this exciting, ever-changing place.</p>
        </div>


        <div class="thumbnail">
            <img class="imgFluid" src="./media/diriyah.jpg" alt="logo Image">
        </div>
    </section>

    <div class="hr-end">
        <hr>
    </div>
    <div class="footer background">
        <p>Copyright &copy; Waleed & Meshal & Abdulaziz & Faisal </p>
    </div>


    <script src="js/resp.js"></script>


</body>

</html>
