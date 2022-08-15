<html>
   <head>
<title>
    Riyadh trail
</title>
<style>
    table{
        background: rgba(255,255,255,0.5);
        width: 30%;
        border-radius: 20px;
        font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
            "Lucida Sans", Arial, sans-serif;
        border-collapse:separate; 
         border-spacing:1em;
         margin-left: 500px;
         margin-top: 50px;
         opacity: 0.9;
    }
    table:hover
    {
        box-shadow: 5px 10px burlywood;
    }
    
    .textt{
        position: relative;
    }
    .textt h2{
        position:relative;
       /* top: 100%;
        left: 100%;
        transform: translate(-50% , -50%);
        z-index: 99;
        color: white; */
    }
    
    body{
        background-image: url("sec_header/riyadh.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
    p
    {
        font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
            "Lucida Sans", Arial, sans-serif;
        font-size: medium ;
        background-color: antiquewhite;
        
        
    }
    
    .cloudss{
      overflow: hidden;  
    }
    .cloudss img
    {
       animation: cld calc(14s * var(--i)) linear infinite;
       opacity: .8;
       max-width: 100%;
       max-height: 52%;
       position:fixed;
       bottom: 0px;
       
    }
    @keyframes cld {
        0%{
            transform: translateX(-100%);
        }
        100%{
            transform: translateX(80%);
        }
    }
    .TransButun
    {
        background-color: transparent;
        background-color: rgba(255, 255, 255, 0.247);
        border-radius: 20px;
        width: 250;
        height: 75px;
        opacity: 1;
        font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
            "Lucida Sans", Arial, sans-serif;
        font-size: large;
        
   
    
   
    }
    input:hover
    {
        box-shadow: 5px 10px ;
        opacity: 1;
    }
</style>
   </head>
   <body>


<div >
    <table>
        <tr>
            <td colspan="3" align="center"><h1>Welcome to Riyadh Trail</h1></td>
        </tr>
        <tr>
            <td style="border-right: solid"><img src="icons/learn.png" width="120px"></td>
            <td align="center" style="border-right: solid"><img src="media/logo.png"width="120px"></td>
            <td ><img src="icons/community.png"width="120px" ></td>
        </tr>
        <tr>
            <td align="center" ><h2>Learn</h2></td>
            <td align="center"><h2>Explore</h2></td>
            <td align="center"><h3>Enjoy</h3></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="home.php"><input type="button" value="Procced To HomePage" class="TransButun"></a></td>
            <td></td>
        </tr>
    </table>
</div>
    
    <div class="cloudss">
    <img src="icons/cloud1.png" alt="" style="--i:1">
    <img src="icons/cloud2.png" alt="" style="--i:2">
    <img src="icons/cloud3.png" alt="" style="--i:3">
    <img src="icons/cloud4.png" alt="" style="--i:4">
    <img src="icons/cloud5.png" alt="" style="--i:5">
    
</div>





   </body>

</html>
