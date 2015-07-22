 $(function(){
 	jQuery('.email').on('focusout', function(event) {
 		console.log('email'+$(".email").val());
 		$.ajax({
 				dataType:'json',
					url: 'checkemail.php',
					type: 'POST',
					data: {
						email: $(".email").val(),
					},
				})
				.done(function(data) {
					if ( data.msg== "already_available"){
						/*alert("email already available");
						jQuery(".about_yourself").prop("disabled", "true");
						jQuery(".contact").prop("disabled", "true");*/
					} else{
						console.log("correct");
					}
					
				})
				.fail(function(data) {
					console.log('fail');
				});
 	});
	jQuery('.registerform').on('submit', function(event){
				event.preventDefault();
				$.ajax({
					dataType: 'json',
					url: 'add.php',
					type: 'POST',
					data: {
						fname: $(".member_name").val(),
						email: $(".email").val(),
						about_yourself: $(".about_yourself").val(),
						contact:$(".contact").val(),
					},
				})
				.done(function(data) {
					console.log(data);
					if(data.msg == "noerror") {
						console.log("successful");	
						jQuery(".alert-info").css('display', 'block');
						jQuery(".subcontainer").css('display','none');
					} else{
						console.log("failed part in js : "+data);
						jQuery(".alert-danger").css('display', 'block');
					}
					
				})
				.fail(function(data) {
					console.log("Failed : "+data);
					jQuery(".alert-danger").css('display', 'block');
				});
				
			});
	//last priority task
		/*jQuery('.email').on('focusout', function(event) {
			$.ajax({
					url: 'https://slack.com/api/users.list',
					type: 'POST',
					data: {
						token:"xoxp-7491394935-7491752069-7491000672-c6311f",
						
					},
				})
				.done(function(data) {
					 $.each(results, function(k, v){
        	console.log(k.email) ;
   				});
					
				})
				.fail(function(e) {
					console.log("Failed");
				});
		});*/
});
 