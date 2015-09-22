<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		var num=jQuery('#no').val();
		console.log(num);
		$.ajax({
		  url: 'https://randomuser.me/api/?results='+num,
		  dataType: 'json',
		  success: function(data){
		    console.log(data);
		    $.getJSON('url', function(json) {
		    		var 
		    });
		   /* $.each(data, function(el) {
		    	var obj=jQuery.parseJSON(el);
		    	console.log(obj);
		    });*/
		  }
		});
	});
</script>
</head>

<body>

<?php
echo"<input type='text' id='no' value=".$no=$_POST['number'].">";
 /*$contact = array();
	global $email;

	for($j=0;$j<$no;$j++){	
		for ($i=0; $i <10 ; $i++) { 
			 $email.=chr(rand(97,122));
		}
	 $contact[$j]=$email."@gmail.com";
	 $email="";
	}
	foreach ($contact as $key => $value) {
		echo $key .":  : ".$value;
		echo "<br>";
	}*/
?>
</body>
</html>