		jQuery(function(){ 
		//send invitation for user
			jQuery('.status').each(function(index, el) {
				var slc_url=$('.slc_url').val();
				var slc_token=$('.slc_token').val();
				// console.log("URL "+slc_url);
				// console.log("URL "+slc_token);
				jQuery(el).find('.send_invitation').on('click', function(event) {	
					var classname=	jQuery(el).attr("class");
					console.log(slc_url);
					console.log(classname);	
					jQuery(el).find(".send_invitation, .decline").css('display', 'none');
					jQuery(el).append("<i class='fa fa-check-square-o'></i> Invited");
					event.preventDefault();
					var email = $(this).val();
					$.ajax({ //sending invitation to slack
						url: slc_url, //'https://slackinvite.slack.com/api/users.admin.invite',  
						type: 'POST',
						data: {
							email: email,
							token: slc_token,//'xoxp-7491394935-7491752069-7491000672-c6311f',//slc_token,
							set_active: 'true',
						},
					})
					.done(function(e){   //Runs if invitation sent to update  database status 
						var status = e.ok;				
						if ( status == true ) {
							//action after receiving invitation sent sccessfully from slack
							
							$.ajax({
								url:'adminfunctions/updateDb.php', //updates status as invited
								type:'POST',
								data:{
									semail:email,
									status:"invited",
								}
							})
							.done(function(e){
								console.log("status Update successful invited");
								$('this').hide();
							})
							.fail(function(e){
								console.log("failed to update status invited");
							})
							
						} else {
							//to update already envited error in databse
							if(e.error == 'already_in_team'){
								jQuery('.already_in_team').css('display', 'block');
								jQuery(".invited").css('display','block');
								console.log(email);
								
								$.ajax({  //updates status as already_in_team
									url:'adminfunctions/updateDb.php', 
									type:'POST',
									data:{
										semail:email,
										status:"already_in_team",
									}
								})
								.done(function(e){
									console.log("status Update successful already_in_team");
									$('this').hide();
								})
								.fail(function(e){
									console.log("failed to update status already_in_team");
								})
							}
							else{
								jQuery('.aready_invited').css('display', 'block');
								console.log(email);
								
								
								$.ajax({ //updates status as already_invited 
									url:'adminfunctions/updateDb.php', 
									type:'POST',
									data:{
										semail:email,
										status:'already_invited',
									}
								})
								.done(function(e){
									console.log("status Update successful for already_invited");
											console.log($(this));
											$('this').hide();
										})
								.fail(function(e){
									console.log("failed to update status already_invited");
								})
							}
							console.log(e.error);
						}
					})    // Invitation sent and all responses are logged to console
					
					.fail(function(e) {   //invitation sending fail
						console.log(e);
					});	
				}); //invitation ends here
		
	});

		//Decline user button pressed action
		jQuery('.status').each(function(index, el) { 
			jQuery(el).find('.decline').on('click', function(event) {	
				
				var classname=	jQuery(el).attr("class");
				console.log(classname);	
				jQuery(el).find(".send_invitation, .decline").css('display', 'none');
				jQuery(el).append("<i class='fa fa-ban'></i>Declined");
		
			var email = $(this).val();
			$.ajax({ //updates status as declined in  database
				url:'adminfunctions/updateDb.php',
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
	});