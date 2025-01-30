<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	
	<title>Register</title>
</head>
<body>
	<section class="chat">
		<a href="Index.html">Return</a>  
		 </section>

	<div class="container">
		<div class="header">
			<h2>REGISTER</h2>
		</div>
		<form id="form" class="form" action="../BackEnd/index.php" method="post">
			<div class="form-control">
				<label for="username">Full name</label>
				<input type="text" id="username" />
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<div class="form-control">
				<label for="emp">Employee ID</label>
				<input type="text" id="emp">
				<i class="fas fa-check-circle"></i> 
	<i class="fas fa-exclamation-circle"></i> 
					<small>Error Message</small>  
				</div>
				<div class="form-control">
					<label for="position">Position</label>
					<input type="text" id="position">
					<i class="fas fa-check-circle"></i> 
	<i class="fas fa-exclamation-circle"></i>
						<small>Error Message</small>  
					</div>
			<div class="form-control">
				<label for="username">Email</label>
				<input type="email" placeholder="forexample@gamil.com" id="email" />
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<div class="form-control">
				<label for="username">Password</label>
				<input type="password"  id="password"/>
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<div class="form-control">
				<label for="username">Confirm password</label>
				<input type="password"  id="password2"/>
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<button>Submit</button>
			<div class="para1"><p><a href="terms.html">Terms and Privacy Policy</a></p>
				<p class="para2">Already have an account?<a href="Login.html">Login in here</a></p>
				</div>
		</form>
		<script src="register.js"></script>
	</div>
	</body>
	</html>
	

<!--
    <div class="container">
      <div class="header">
				<h2>Create Account</h2>
			</div>
			<form class="formm" id="form">
      <div class="form-control">
				<label for="fname">First name</label>
				<input type="text" id="fname">
				<i class="fas fa-check-circle"></i> 
			<i class="fas fa-exclamation-circle"></i> 
					<small>Error Message</small>  
				</div>
				<div class="form-control">
					<label for="lname">Last name</label>
					<input type="text" id="lname">
					<i class="fas fa-check-circle"></i> 
			<i class="fas fa-exclamation-circle"></i> 
						<small>Error Message</small>  
					</div>
					<div class="form-control">
						<label for="emp">Employee ID</label>
						<input type="text" id="emp">
						<i class="fas fa-check-circle"></i> 
			<i class="fas fa-exclamation-circle"></i> 
							<small>Error Message</small>  
						</div>
						<div class="form-control">
							<label for="passsword">Password</label>
							<input type="text" id="password">
							<i class="fas fa-check-circle"></i> 
			       <i class="fas fa-exclamation-circle"></i> 
								<small>Error Message</small>  
							</div>
							<div class="form-control">
								<label for="confirm">Confirm Password</label>
								<input type="password" id="confirm">
								<i class="fas fa-check-circle"></i> 
			         <i class="fas fa-exclamation-circle"></i> 
									<small>Error Message</small>  
								</div>
							<div class="form-control">
								<label for="email">Email</label>
								<input type="email" id="email">
								<i class="cc">&#10003;</i>
								<i class="ce">&#33;</i>
									<small>Error Message</small>  
								</div>
								<div class="form-control">
								<label for="Department">Department</label>
						  <select id="Department" name="Department">
							<option value="dept1">Department 1</option>
							<option value="dept2">Department 2</option>
							<option value="dept3">Department 3</option>
						</select>
					</div>
								<div class="form-control">
									<label for="position">Position</label>
									<input type="text" id="position">
									<i class="cc">&#10003;</i>
									<i class="ce">&#33;</i>
										<small>Error Message</small>  
									</div>
									<div class="form-control">
										<label for="gender">Gender</label><br>
									<label for="female">Female</label>
										<input type="radio" name="gender" id="gender" required>
										<label for="male">Male</label>
										<input type="radio" name="gender" id="gender" required>
									</div>
									<button>Submit</button>
				

			</form>
			

		</div>
		</body>
		</html>

	-->







<!--
	 <div class ="wrapper">
		<form id="Registerform" name="formm">
				<h2>Sign Up</h2>
				<div class="inSignUp">
					<label for="fname">First Name</label>
					<div class="trial">
						<input type="text" id="fname" name="fname" required>
						<i class="cc">&#10003;</i>
						<i class="ce">&#33;</i>
						<small>Error Message</small>
					</div>
				</div>
        
				<div class="inSignUp">
					<label for="lname">Last Name</label>
					<div class="trial">
						<input type="text" id="lname" name="lname" required>
						<i class="cc">&#10003;</i>
						<i class="ce">&#33;</i>
						<small>Error Message</small>  
					</div>
				</div>
				<div class="inSignUp">
					<label for="empID">Employee ID</label>
					<div class="trial">
						<input type="text" name="empID" id="empID" required>
						<i class="cc">&#10003;</i>
						<i class="ce">&#33;</i>
						<small>Error Message</small>
					</div>
				</div>

				<div class="inSignUp">
					<label for="password">Password</label>
					<div class="trial ">
						<input type="password" name="password" id="password" minlength="8" required>
						<i class="cc">&#10003;</i>
						<i class="ce">&#33;</i>
						<small>Error Message</small>
					</div>
				</div>
        
				<div class="inSignUp">
					<label for="Confirmm">Confirm Password</label>
					<div class="trial">
						<input type="password" name="Confirmm" id="Confirmm" minlength="8" required>
						<i class="cc">&#10003;</i>
						<i class="ce">&#33;</i>
						<small>Error Message</small>
					</div>
				</div>

				

				<div class="inSignUp">
					<label for="email">Email</label>
					<div class="trial">
						<input type="Email" id="email" name="email" required>
						<i class="cc">&#10003;</i>
						<i class="ce">&#33;</i>
						<small>Error Message</small>        
					</div>
	            </div>

	            <div class="inSignUp">
					<label for="Department">Department</label>
					<div class="trial">
						<select id="Department" name="Department">
							<option value="dept1">Department 1</option>
							<option value="dept2">Department 2</option>
							<option value="dept3">Department 3</option>
						</select>
					</div>
				</div>

				<div class="inSignUp">
					<label for="position">Position</label>
					<div class="trial">
						<input type="text" name="position" id="position" required>
	                
						<i class="cc">&#10003;</i>
						<i class="ce">&#33;</i>
						<small>Error Message</small></div>
	            </div>

	            

				<div class="inSignUp">
					<div class="trial">
						<label for="gender">Gender</label>
					</div>
					<div class="trial">
						<label for="female">Female</label>
						<input type="radio" name="gender" id="gender" required>
						<label for="male">Male</label>
						<input type="radio" name="gender" id="gender" required>
					</div>
				</div>
				<div class="btn">
					<input type="submit" value="Submit" id="submit" onclick="validate()">	
			    </div>
			    <div class="para1"><p><a href="terms.html">Terms and Privacy Policy</a></p>
			     <p class="para2">Already have an account?<a href="Login.html">Login in here</a></p>
					 </div>
		</form>
    </div>
   
       
				 
   
</body>
</html> -->