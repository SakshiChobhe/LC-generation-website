<!DOCTYPE html>
<head>
    <meta charset="utf-8">
  	<link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="wrapper">
      	<div class="title">Login Form</div>
			<form action="stud_connect.php" method="POST">
				<div class="field">
					<input type="text" name="username" required/>
          			<label>Enrollment No</label>
        		</div>
				        
                <div class="field">
          			<input type="password" name="password" required/>
          			<label>Password</label>
        		</div>
				
				<div class="field">
          			<input type="submit" value="Login" id="btn">
        		</div>
				  
            </form>
     </div>
</body>
</html>
