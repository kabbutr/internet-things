<html>
	<head>
		<title>admin page</title>
		<style>
			form{
				
				background-image:url(io.jpeg);
				width:100%;
				height:100%;
				background-repeat: no-repeat;
				background-size:cover;

			}
			input[type="text"],input[type="password"]{
				border:0;
				outline: 0;
				border-bottom:10px solid white;
				margin-left: 1%;
			
			}
			input[type="submit"]{
				width:15%;
				background-color: gray;
				margin-left: 2%;
		 		padding:10px;
			}
			a{
				text-decoration:none;
				color:white;
			}
		</style>
	</head>
	<body>
		<form action="" method="POST" enctype="multipart/data-from">
			<center>
			<br>
			<h1 style="text-align: center;margin-bottom: 30px; color:white;">admin registeration</h1>
			<input type="text" name="aname" placeholder="enter your name"><br><br>
			<input type="text" name="email" placeholder="enter email"><br><br>
			<input type="password" name="pass" placeholder="password"><br><br>
			<!--input type="file" name="image"><br><br-->
			<input type="submit" name="submit" value="submit">
			<br>
			<br>

			<a href="adminlogin.php">admin registeration</a>
		</center>
		</form>
		<?php
		    error_reporting(0);
			require 'adminconn.php';
			if(isset($_POST['submit']))
			{
				$aname=$_POST['aname'];
				$email=$_POST['email'];
				$pass=$_POST['pass'];
				//$image=$_FILES['image']['tmp_name'];
				//$binary=fread(fopen($image,"r"),filesize($image));
				//$picture=base64_encode($binary)
			
				$insert=mysqli_query($conn,"INSERT INTO admin_k(aname,email,password)VALUES('$aname','$email','$pass')");
				if(!$insert)
				{
					echo $conn->error;
				}
			
			}
		?>
	</body>
</html>