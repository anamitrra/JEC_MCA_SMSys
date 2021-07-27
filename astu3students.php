<?php

include "session.php"
?>
<<<<<<< HEAD
=======



>>>>>>> c62e5571fd362af509dbc4b3cf3587da7ea8b10e
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/my.css">
<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="css/sticky.css">
=======
>>>>>>> c62e5571fd362af509dbc4b3cf3587da7ea8b10e
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Home</title>
<style>
body{
    font-family: 'Montserrat', sans-serif;
}
input[type=text] {
  
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 2px;
  font-size: 17px;
  border: 1px solid #ccc;
}

</style>
</head>
<body>
<<<<<<< HEAD
<div id="navbar">
<button class="my-btn"><a href="home.php"><i class="fa fa-home my-xlarge"></i></a></button>
</div>
=======
<button class="my-btn"><a href="home.php"><i class="fa fa-home my-xlarge"></i></a></button> 
>>>>>>> c62e5571fd362af509dbc4b3cf3587da7ea8b10e

    <div class="my-content">
        <div class="my-container">
            <br><br><br><br>
<<<<<<< HEAD
        <a href="addASTU3.php" class="my-btn my-block my-padding my-text-white" style="width:20%;margin-right:5%; margin-bottom:10px; background-color: #e95a5a; float:left;">ADD NEW STUDENT</a>
=======
        <a href="addnotice.php" class="my-btn my-block my-padding my-text-white" style="width:20%;margin-right:5%; margin-bottom:10px; background-color: #e95a5a; float:left;">ADD NEW STUDENT</a>
>>>>>>> c62e5571fd362af509dbc4b3cf3587da7ea8b10e
  
        <div class="my-container" style="float:right;">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button class="my-btn my-text-white" style="float:right;  margin-top: 8px;margin-right: 16px;font-size: 17px; background-color:#e95a5a; " type="submit"><i class="fa fa-search my-large"></i></button>
    </form>
  </div>

        <br><br><br>
<<<<<<< HEAD
        <table class="my-table-all" id="myTable">
=======
        <table class="my-table-all">
>>>>>>> c62e5571fd362af509dbc4b3cf3587da7ea8b10e
                <thead >
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #e95a5a;">Roll No.</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #e95a5a;">Name</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #e95a5a;">Batch</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #e95a5a;"></th>
                </thead>
                <tbody>
                   
                          <tr class="my-white" style="border-width: 0px;">
                                <td style="width:20%; text-align:center;"></td>
                                <td style="width:20%; text-align:center;"></td>
                                <td style="width:20%; text-align:center;"></td>
<<<<<<< HEAD
                                <td style="width:20%; text-align:center;"> <a href="ASTU3details.html?id='.$row[0].'">More Details</a></td>
=======
                                <td style="width:20%; text-align:center;"> <a href="delnotices.php?id='.$row[0].'">More Details</a></td>
>>>>>>> c62e5571fd362af509dbc4b3cf3587da7ea8b10e
                                
                        </tr>
                        
                    
                </tbody>
            </table>
      
    </div>
</div>

<<<<<<< HEAD

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


=======
>>>>>>> c62e5571fd362af509dbc4b3cf3587da7ea8b10e
</body>
</html>