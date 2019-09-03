<html>
	<head>
		<title>admin page</title>
		<style>
			form{
			
				background-image: url(io.jpeg);
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
			<h1 style="text-align: center;margin-bottom: 50px; color:white;">admin login</h1>
			<input type="text" name="aname" placeholder="enter admin name"><br><br>
			<input type="password" name="pass" placeholder="password"><br><br>
			<input type="submit" name="submit" value="submit"><br><br>
			<a href="admin.php">admin registeration</a>
		</center>
		</form>
		<?php
		error_reporting(0);
		   require 'adminconn.php';
		   if(isset($_POST['submit']))
		   {
		   	 $aname=$_POST['aname'];
		   	 $pass=$_POST['pass'];
				$accept=mysqli_query($conn,"SELECT * FROM admin_k WHERE aname='$aname' AND password='$pass'");
			    $number=mysqli_num_rows($accept);
			    if($number==1)
			    {
			      session_start();
			      $row=mysqli_fetch_assoc($accept);
			      $userid=$row['id'];

			      echo"<script>";
			      echo "document.location.replace('./publish.php')";
			      echo"</script>";

		     	}
		   }
		?>
	</body>
</html>