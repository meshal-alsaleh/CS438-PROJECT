# CS438-PROJECT - Riyadh Trail - Team :

Waleed AlDukhail

Meshal alsaleh

Abdulaziz alsubaie

Faisal alqahtani

# Riyadh Trail 

![image](https://user-images.githubusercontent.com/70606258/184846390-bb0b16f8-61dd-4511-805e-40f893797ad5.png)

Visit the website:-
http://riyadh-trail.42web.io/


# Report


In this project, we managed to develop a website to help tourists and residents of Riyadh city to know about the city and its facilities such as : Restaurants , Café’s , Events and Hotels .
This project will be beneficial in many aspects , it’ll help businesses to get more exposure and reach their targeted audience , it will also help tourists flowing to the city to get familiar with it even before arriving here .

# 1. Site Map  


![image](https://user-images.githubusercontent.com/70606258/184846451-01963ed0-1aa2-4890-92bc-717cd7002888.png)

Figure 1: Riyadh Trail Site Map



# 2. Look & Feel  
To make things clear and rich in content we will describe each aspect alone , starting with :

2.1 Look

2.1.1. The colors 
In 2022 the trending colors an color pallets are categorized to a specific area or “aesthetic” which is the Minimalist approach, we have carefully chosen the following colors :-
•	rgb(88, 75, 75) 
•	rgb(128, 128, 128) 
•	Black
•	White
•	Baige 

2.1.2. Images and media
We have included many pictures and videos of Riyadh’s Events , restaurants , cafes and attractions .

2.1.3. Fonts
After researching many available fonts we choose the following font family :

font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
            "Lucida Sans", Arial, sans-serif;

2.2 Feel
We Asked ourselves what is our first impression of our website?
Is it Serious?, we accomplished that.
Approachable and Sophisticated? , The website was easy to use by many user groups and was up to date in the HCI perspective .
Playful? , Video backgrounds and multimedia presence made huge efforts in that aspect
consideration of the type of motion and pacing makes all the difference. For example, using a smooth slide-in for an image would result in a very different feel than using a quick popup and bounce effect for that same image.


# 3. Dynamic Components 

The pages that contains a JavaScript code are:
1-	All pages that includes (nav-list)  , we used JavaScript at the search function
•	Search code: 
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

2- Comment.php , due to the use of Ajax .
  
# 4. Business Logic
  
•	Database structure : in our database, we have two tables (place and comment )
place table: the following table is used mainly for the purpose of obtaining pictures links of places in Riyadh to display them in the website interface, as we show pictures on our website mentioning each picture link using PHP code 
comment table: this table is used for the comment system on our website, we use the comment table to show and insert comments in the database, using Riyadh wall page 
SQL queries :
1- $res = mysqli_query($con , "select * from place WHERE type='restaurant' ");
associated forms :
example: we used the PHP code each restaurant CSS class as follows

.ROKA
           {
            background-image: url(<?php echo $s7[3]  ?>);
                background-size: cover;
           }
so we can refer to the background image of a restaurant as a PHP image link coming from the database 
later, we apply the CSS class to an HTML form to create a restaurant with a background image coming from the database.
Associated html form :  
  
  ![image](https://user-images.githubusercontent.com/70606258/184847137-6f041cc2-10ab-43b8-92bb-9c06e1f3c228.png)

Figure 2: HTML form(1)
   

2-  $sql = "INSERT INTO `comment`( `name`, `comment_con`) VALUES ('$name','$commentt')" ;
example: the following SQL query was used to insert comments from HTML form into the database 
associated HTML form:
 ![image](https://user-images.githubusercontent.com/70606258/184847190-a0234344-930d-4617-8669-50c7c5f28037.png)

Figure 3: HTML form(2)
 
Note , the form doesn’t contain ether post or get method or action because we used AJAX in this page 
Data insertion was handed by ajax
  
# 5. Diagrams
  
5.1 Use Case Diagram 
  
 ![image](https://user-images.githubusercontent.com/70606258/184847277-c3a76ef2-6826-4b37-8588-a1e3b90a0612.png)

Figure 4: Use Case Diagram





5.2. Flowchart

![image](https://user-images.githubusercontent.com/70606258/184847345-076326fc-8c8a-49b8-bf1c-0332dd51e6c7.png

Figure 5: Flow Chart

5.3 Test Case Scenarios 
Refer to the report 
  
  
  
References
•	https://www.w3schools.com/js/js_ajax_intro.asp

