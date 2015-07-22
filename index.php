<html>
<head>
	<title>
		Register With Slack
	</title>
	  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"><link rel="stylesheet" href="css/style.css" >
	<script src="js/jquery-1.11.3.min.js"></script><script src="js/indexjs.js"></script>

</head>
<body>
	<div class="container " style="">

		<div class="row">
			<div class="col-md-12" style="text-align:center;">
				<img class="logo" src="img/logo.png" />
			</div>
		</div>
		<div class="row subcontainer">
				<h2>Register Here</h2>
				<form  role="form" class="registerform" method="post">
			
					<div class="form-group">
						<label for="name" class="control-label ">Name:</label>
						<input type="text" class="form-control member_name" name="fname" id="name" placeholder="Name" required>	
					</div>
					
					<div class="form-group">
						<label for="inputEmail3"  class="control-label">Email:</label>
						<input type="email" class="form-control email" name="email" id="email" placeholder="Email" required>
					</div>	
					
					<div class="form-group">
						<label for="name" class="control-label">About yourself:</label>
						<textarea  class="form-control about_yourself"  name="about_yourself" id="about_yourself" rows="3" placeholder="Tell Us More About yourself" ></textarea>
					</div>

					<div class="form-group">
						<label for="name" class="control-label">Contact No:</label>
						<input type="number" class="form-control contact" name="contact" id="contact_no" placeholder="Your contact" required>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-default">submit</button>
					</div>			  		 
		</div>	

			<div class="alert alert-info" role="alert">
				<h2>your entry submitted</h2>
			</div>
			<div class="alert alert-danger" role="alert">
				<h2>your entry could not be submitted please try again later</h2>
			</div>
		</div>	
	
	</body>
	</html>
