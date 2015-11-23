 $(function(){
 	//check for email at the time of registration 
 	jQuery('.email').on('focusout', function(event) {
 		console.log('email'+$(".email").val());
 		$.ajax({
 					dataType:'json',
					url: 'functions/add.php?action=check_email', //checkmail.php  check for member registration email entry 
					type: 'POST',
					data: {
						email: $(".email").val(),
					},
				})
				.done(function(data) {
					if ( data.msg== "already_available"){ //mail already available in database 
						alert("email already available");
					} else{
						console.log("correct");
					}
					
				})
				.fail(function(data) {
					console.log("working");
				});
 	});

 	//Registration form submit button presssed 
	jQuery('.registerform').on('submit', function(event){
			var name=$(".member_name").val();
			var useremail=$(".email").val();
			var about=$(".about_yourself").val();
			var usercontact=$(".contact").val();
			
				event.preventDefault();
				console.log(about);
				$.ajax({
					//dataType:'json',
					url: 'functions/add.php?action=add_entry', //add.php adds entry to database
					type: 'POST',
					data: {
						fname: name,
						email: useremail,
						about_yourself: about,
						contact:usercontact,
					},
				})
				.done(function(e) { //successfull data entry 
					console.log(e);
					if(JSON.parse(e).msg == "noerror") {
						console.log("successful");	
						//console.log(name);
						jQuery(".alert-info").css('display', 'block');
						jQuery(".subcontainerindex").css('display','none');
						//call to newmail.php for sending notification mail 
						$(".mailcontent").load('functions/newmail.php', {var1:name,var2:usercontact}); 
					} else{
						//some error occured could not add entry entry to database
						console.log("failed part in js : "+data);
						jQuery(".alert-danger").css('display', 'block');
					}
					
				})
				.fail(function(e) { //call fail to add.php
					console.log("Failed : "+JSON.stringify(e));
					jQuery(".alert-danger").css('display', 'block');
				});
				
			});
});
 