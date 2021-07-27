<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/my.css">
<link rel="stylesheet" type="text/css" href="css/sticky.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Home</title>
<style>
body{
    font-family: 'Montserrat', sans-serif;
}


</style>
</head>
<body>
<div id="navbar" style="z-index:999;">
<button class="my-btn"><a href="home.php"><i class="fa fa-home my-xlarge"></i></a></button>
</div>


<div class="my-content my-white my-card" style="max-width:1000px; opacity:0.95;">
	<form class="my-container" method="post" action="savestu.php" id="form1">
    	<h1 style="font-family: 'Montserrat', sans-serif; text-align:center; color: #0f2453"><b> Enter Student Details</b></h1>
        <p>
            <div class="my-container my-border my-margin-left" style="width:200px;height:200px;">

            </div><br><div class="my-left">
            <label class="my-margin-top my-left" style="color:rgb(122, 120, 120);" > Photo: </label>
      <input class="my-input my-right" type="file" name="file1" style="width:250px; color:rgb(122, 120, 120);"></div>
        </p>
        <div class="my-row-padding">
            <div class="my-half">
        <br>
        <p>
      <input name="roll" type="text"  class="my-input my-animate-input" placeholder="Roll No." style="width:40%">
      </p>
      <br>
      <p>
      <input name="name" type="text"  class="my-input my-animate-input" placeholder="Name" style="width:40%">
      </p>
      <br>
      <p>
      <input name="address" type="text"  class="my-input my-animate-input" placeholder="Address" style="width:40%">
      </p>
      <br>
      <p>
      <input name="phone" type="text"  class="my-input my-animate-input" placeholder="Phone No." style="width:40%">
      </p>
      <br>
      <p>
      <input name="batch" type="text"  class="my-input my-animate-input" placeholder="Batch" style="width:40%">
      </p>
      <br>
      
      </div>
      <div class="my-half">
          <br>
        <p>
            <input name="regno" type="text"  class="my-input my-animate-input" placeholder="Registration No." style="width:40%">
            </p>
            <br>
            <p>
            <input name="email" type="text"  class="my-input my-animate-input" placeholder="E-mail" style="width:40%">
            </p>
            <br>
            <p>
                <label class="my-margin-top my-left" style="color:rgb(122, 120, 120)"> Date of Birth &nbsp;</label>
            <input name="dob" type="date"  class="my-input" value="Date of Birth" style="width:40%; color:rgb(122, 120, 120); ">
            </p>
            <br>
            <p>
            <input name="qualification" type="text"  class="my-input my-animate-input" placeholder="Qualification" style="width:40%">
            </p>
            <br>
            <p>
            <input name="board" type="text"  class="my-input my-animate-input" placeholder="Board" style="width:40%">
            </p>
            
            
      <br>
      <button name="submit" class="my-btn my-block my-margin-bottom my-right my-text-white my-padding" type="submit" style="width:40%;margin-left:20%; background-color: #e95a5a;"><span class="my-opacity-off">Save</span>
      </button><br>
      </div>
      </div>
<br>
    </form>
</div>



<script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("navbar");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    </script>


</body>
</html>
