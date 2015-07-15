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
	<div class="container " style="text-align:center;width:40%;">
		<div class="row .col-md-4">
			<h2>Register Here</h2>
			<form class="form-horizontal" role="form" method="post">
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label ">Name:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control member_name" name="fname" id="name" placeholder="Name" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail3"  class="col-sm-2 control-label">Email:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control email" name="email" id="email" placeholder="Email" required>
					</div>
				</div>	
				
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">About yourself:</label>
					<div class="col-sm-10">
						<textarea  class="form-control about_yourself"  name="about_yourself" id="about_yourself" rows="3" placeholder="Tell Us More About yourself" ></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Contact No:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control contact" name="contact" id="contact_no" placeholder="Your contact">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">submit</button>
					</div>
				</div>			  		 
			</div>	
			<div class="successful">
				<h2>your entry submitted</h2>
			</div>
		</div>	
	
	</body>
	</html>