
<html>
    <head>
        <style>
* {
  margin: 0;
  padding: 0;
}

form {
    margin: 35px;
    width: 280px;
    height: 190px;
    float: left;
    margin-left: 20px;
}
.input{
    margin: 35px;
    width: 280px;
    height: 190px;
    float: left;
    margin-left: 20px;

}
html {
  scroll-behavior: smooth;
}
body {
  margin: 0;
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
  background: #a6a2a221;
  background-image: url("media/wall1.jpg");
        background-repeat: repeat;
        background-size: cover;
}
            .nav-bar {
  display: flex;
  width: 100%;
  cursor: pointer;
  position: sticky;
  top: 0;
  align-items: center;
  justify-content: left;
}

.nav-bar .logo {
  border: 0;
  width: 40px;
  margin: 0 10px;
}

.nav-list {
  list-style-type: none;
  display: flex;
  width: 70%;
  align-items: center;
}
.nav-list li {
  padding: 0 20px;
  margin: 10px;
  display: flex;
  align-items: center;
}

.nav-list li:hover {
  background-color: rgb(107, 95, 79);
}

.nav-list li a {
  text-decoration: none;
  color: aliceblue;
}

.nav-bar .right-nav {
  width: 30%;
  display: flex;
  align-items: center;
  justify-content: flex-end;
}
#search {
  border: 2px solid beige;
  border-radius: 5px;
  margin-right: 16px;
  height: 40%;
  font-size: 15px;
}
@media only screen and (max-width: 750px) {
  .nav-bar {
    flex-direction: column;
    transition: all 0.7s ease-out;
    width: 100%;
    height: 270px;
  }
  .nav-bar .logo {
    border: 0;
    width: 40px;
    margin: 0 10px;
    opacity: 1;
  }
  .nav-list {
    flex-direction: column;
  }
  
  .box-main {
    flex-direction: column-reverse;
  }
  
  .section-down {
    flex-direction: column-reverse;
  }
  .input{
    margin: 35px;
    width: 280px;
    height: 190px;
    float: left;
    margin-left: 20px;
    background-color: bisque;
  }
 
  }


        </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   

                 <script>
                      $(document).ready(function(){
                          $("btn").click(function(){
                              $("space").load("comment_post.php");
                          })
                      })
                 </script>

                  <script>     
   $(document).ready(function(){
        $("#btn").click(function(){
               // we write ajax here 
               $.ajax({
                   type: "POST" ,
                   url: "comment_post.php" ,
                   data:{
                       NAME:$("#userName").val(),
                       COM:$("#comment").val()

                   }  ,success : function(data)
                   {
                      $(".space").prepend('<form style="background-color: rgba(20,255,220,2); ">'+'<br>'+'by:'+$("#userName").val()+'<br>'+$("#comment").val()+"</form>");
                      alert("done , comment posted");
                   }

               });
                });
                 });


                 </script>
    
    
    
    
    
    </head>
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
            <li><a href="#comments.php" inputmode="button" onClick="location.href='comments.php'">Riyadh Wall</a></li>
         </ul>
         <div class="right-nav-bar">
            <input type="text" name="search" id="search" onkeyup="myFunction()" placeholder="Search for pages.." >
        </div>
            </nav>
         </div>
        <div class="Comments" align="center" style="background-color: gray;">
            <h1> Riyadh Wall </h1> 
            <h3> Get the chance to write something about Riyadh city and post it on our website ! 
            </h3>
            
            <br>
            <br>
        </div>

 <form> 
                Name:<input type="text" placeholder="enter your name" name="userName" id ="userName">
                <br>
                enter your comment down below 
                <br>
                <textarea name="comment"  rows="7" cols="30" id="comment"></textarea>
                <br>
                <input type="button"  id="btn" value="press here ">

            </form>

    
        

    <div id="space" class="space">
    
<?php


// varibles i identfy to connect

$host = "sql308.epizy.com" ;
$user = "epiz_32364193";
$pass= "xrrTwbnSc6ZN" ;
$db = "epiz_32364193_riyadh_trail" ;
// connect function 
$con = mysqli_connect($host,$user,$pass,$db) ;
// CHECK CONNECTION STATUS
$find_comments = mysqli_query($con , "select * from comment  ");



while($row =mysqli_fetch_array($find_comments) )
{
    //print all ;
    $comment_name = $row['name'];
    $comment_content = $row['comment_con'];
    echo "<form style='background-color: #DEDEB5; ;'>"."&nbsp;"."<img src ='icons/pin2.png' width='40px'>"."<br>"."by:".$comment_name."<br>".$comment_content."</form>" ;

}






?>
    
    </div>
       
    </body>
</html>
