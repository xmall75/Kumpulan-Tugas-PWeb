<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$name = $_POST['name'];
			$kelamin = $_POST['kelamin'];
			$alamat = $_POST['alamat'];
			$email = $_POST['email'];
			$contact = $_POST['contact'];
			$nik = $_POST['nik'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE people set name ="'.$name.'",
					kelamin ="'.$kelamin.'", alamat="'.$alamat.'",
					email="'.$email.'",contact='.$contact.', 
					nik="'.$nik.'" WHERE
					people_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>