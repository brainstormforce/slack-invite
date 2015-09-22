<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
	<h1>my Website</h1>
	<form class="form" action=""  class="form"method="post">
		<input type="date" id="dt" name="date">
		
		<select name="category">
		<?php
		$conn = new PDO("mysql:host=localhost;dbname=mydb", 'root', 'aftermath7');
		$sqlon="select * from `smile_lists`";
			$rs=$conn->query($sqlon);
			$rs->setFetchMode(PDO::FETCH_ASSOC);
			while($result=$rs->fetch()){
				$category=$result['name'];
				echo"<option value='".$category."' class='campaign'>".$category."</option>";
			}
		?>
		</select>
		<input type="text" name="number_of_candidate" class="number_of_candidate">
		<input type="submit" value="submit" class="submitbtn">
	</form>

	<script type="text/javascript">
jQuery(function(){
	jQuery('.submitbtn').on('click',function(event) {

		event.preventDefault();
		var cat=jQuery('.campaign').val();
		var dt=jQuery('#dt').val();
		var nocnd=jQuery('.number_of_candidate').val();
		
		var i=0;	var names=[];  var uemails=[];
			
		  url='http://api.randomuser.me/?results='+nocnd;

		  $.getJSON(url, function (json) {

		  	var len=$(json.results).length;
		  	while(i<len){
		      
		        names[i] = json.results[i].user.name.first;
		        uemails[i] = json.results[i].user.email;
		        i++;
		    }

		    $.ajax({
			url: 'generator.php',
			type: 'POST',
			//dataType: 'json',
				data: {
					user_names: names,
					user_emails: uemails,
					date:dt,
					category: cat,
				},
			})
			.done(function(e) {
				console.log(e);
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});
	});
});

  </script>
</body>
</html>