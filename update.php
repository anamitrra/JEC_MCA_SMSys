<?php
	include("connect.php");
	if(isset($_POST["submit"]))
	{
        $roll=$_POST["roll"];
        $regno=$_POST["regno"];
		$name=$_POST["name"];
        $email=$_POST["email"];
		$add=$_POST["address"];
		$dob=$_POST["dob"];
		$phone=$_POST["phone"];
		$qualification=$_POST["qualification"];
		$batch=$_POST["batch"];
        $board=$_POST["board"];
        $photo=$_POST["file1"];
				
		$result=mysqli_query($link,"UPDATE personal SET regno='$regno', name='$name',email='$email',address='$add',dob='$dob',phone='$phone',qualification='$qualification',batch='$batch',board='$board' WHERE roll=$roll ");
		
		if($result)
		{
			header("location:dustudents.php?ok=1");	
		}
		else
		{
			echo mysqli_error($link);	
		}
	}
?>