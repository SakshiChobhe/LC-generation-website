<?php
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$con = new mysqli("localhost","root","","project");
			
			if ($con->connect_error) 
			{
					die("Failed to connect".$con->connect_error);
			}
			else
			{
					$stmt = $con->prepare("select * from stud_login where username = ?");
					$stmt->bind_param("s",$username);
					$stmt->execute();
					$stmt_result = $stmt->get_result();
					if ($stmt_result->num_rows > 0) 
					{
							$data = $stmt_result->fetch_assoc();
							if ($data['password'] === $password) 
							{	
									include 'info.php';
							}
							else
							{
?>
							<script>alert('Invalid Username or Password !');</script>
<?php
							}
					}
					else
					{
?>
							<script>alert('Invalid Uaername or Password !');</script>
<?php
					}
			}
?>