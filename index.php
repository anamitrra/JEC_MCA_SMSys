


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/my.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<title>Login</title>
<style>
body{
    font-family: 'Montserrat', sans-serif;
}
body, html {
height: 100%;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
<<<<<<< HEAD
  
=======
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
>>>>>>> c62e5571fd362af509dbc4b3cf3587da7ea8b10e
}

button {
  background-color: #036875;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

</style>
</head>
<<<<<<< HEAD
<body style="background: linear-gradient(to left, #03553a, #03558a);">
=======
<body>
>>>>>>> c62e5571fd362af509dbc4b3cf3587da7ea8b10e
    

<div class="box">
    <div class="my-card-4">
    <div class="form">
      <div class="title">
        Login To JEC MCA<br>
        Student Management
      </div>
      <form method="post" action="login.php" onsubmit="return validation();">

        <label><b>Username</b></label>
<<<<<<< HEAD
      <input  class="my-input" type="text" placeholder="Enter Username" name="username" required>
      <br>
      <label><b>Password</b></label>
      <input class="my-input" type="password" placeholder="Enter Password" name="password" required>
      <br><br>
      <button class="my-btn my-text-white" type="submit" name="submit" style="background: linear-gradient(to left, #03553a, #03558a);">Login</button>
=======
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" name="submit">Login</button>
>>>>>>> c62e5571fd362af509dbc4b3cf3587da7ea8b10e
      <label>
      </form>
    </div>
  </div>
  </div>
  


  <?php
  if(isset($_GET["log"]))
  {
    $x=$_GET["log"];
    if($x==1){
    echo '<script> alert("Wrong Password"); </script>';
  }
  if($x==0){
  
    echo '<script> alert("Admin Not Found"); </script>';
  }
}
  
?>
 

</body>
</html>
