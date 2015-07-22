		$(function(){
			jQuery('.send_invitation').on('click', function(event) {			
			
			event.preventDefault();
			var email = $(this).val();
			$.ajax({
				url: 'https://slackinvite.slack.com/api/users.admin.invite', //sending invitation to slack
				type: 'POST',
				data: {
					email: email,
					token: 'xoxp-7491394935-7491752069-7491000672-c6311f',
					set_active: 'true',
				},
			})
			.done(function(e) {   //Runs if invitation sent
				var status = e.ok;				
				if ( status == true ) {
					// invite sent
					jQuery(".invited").css('display', 'block');
										
				} else {
					// error
					if(e.error==='already_in_team'){
						jQuery('.already_in_team').css('display', 'block');
						console.log(email);

					
						$.ajax({
										url:'updateDb.php',
										type:'POST',
										data:{
											semail:email,
											status:"already_in_team",
										}
									})
									.done(function(e){
									console.log("status Update successful1");
									})
									.fail(function(e){
										console.log("failed to update status");
									})
						}
					else{
						jQuery('.aready_invited').css('display', 'block');
						console.log(email);
						

						//update page call
									$.ajax({
										url:'updateDb.php',
										type:'POST',
										data:{
											semail:email,
											status:'already_invited',
										}
									})
									.done(function(e){
									console.log("status Update successful2");
									console.log(e);
									})
									.fail(function(e){
										console.log("failed to update status");
									})
					}
					console.log(e.error);
				}
			})    // Invitation sent and all responses are logged to console

			.fail(function(e) {   //invitation sending fail
				console.log(e);
			});	
		}); //invitation ends here

		jQuery('.decline').on('click', function(event) { //Runs when decline button is clicked
			event.preventDefault();
			var email = $(this).val();
									$.ajax({
										url:'updateDb.php',
										type:'POST',
										data:{
											semail:email,
											status:"declined",
										}
									})
									.done(function(e){
									console.log("Member declined successfully");
									})
									.fail(function(e){
										console.log("Failed to update Declined status");
									})
		}); //decline ends here

	});
		