$(function(){

// all functions of settings page	
	jQuery('.email_form').on('submit', function(event) {
				
				$.ajax({
					url: 'adminfunctions/settingdetails.php?action=settings_email',
					type: 'POST',
					data: {
						name: $(".name").val(),
						notification_email: $(".email").val(),
					},
				})
				.done(function(e) {
					if ( e.string =='successful' ) {
						console.log("Record added successfully"+e);
							
					} else {
						console.log(e);
					}
					
				})
				.fail(function(e) {
					console.log("Failed");
				});
				
			});

	//change on/off
	jQuery('.switch_options').each(function() {
		//This object
		var obj = jQuery(this);
		var enb = obj.children('.switch_enable'); //cache first element, this is equal to ON
		var dsb = obj.children('.switch_disable'); //cache first element, this is equal to OFF
		var input = obj.children('input'); //cache the element where we must set the value
		var input_val = obj.children('input').val(); //cache the element where we must set the value
		var uemail= obj.children('.email_val').val().replace('/','');
		//var str = $(uemail).val().replace('/','');
		console.log(uemail);
		/* Check selected */
		if( 0 == input_val ){
			dsb.addClass('selected');
		}
		else if( 1 == input_val ){
			enb.addClass('selected');
		}
		//Action on user's click(ON)
		enb.on('click', function(){
			
			$.ajax({ // this code will update notification email status
			url: 'adminfunctions/settingdetails.php?action=update_email_status',
			type: 'POST',
			data: {
				email: uemail,
				status: "on"
					},
				})
				.done(function(e) {
						console.log("success");
						console.log(e);
					})
				.fail(function(e) {
						console.log("error");
					})
				.always(function(e) {
						console.log("complete");
					});
			$(dsb).removeClass('selected'); //remove "selected" from other elements in this object class(OFF)
			$(this).addClass('selected'); //add "selected" to the element which was just clicked in this object class(ON) 
			$(input).val(1).change(); //Finally change the value to 1
				});


		//Action on user's click(OFF)
		dsb.on('click', function(){
			$.ajax({  //  update notification email status as off
			url: 'adminfunctions/settingdetails.php?action=update_email_status',
			type: 'POST',
		 
			data: {
				email:uemail,
				status: "off"
			},
			})
			.done(function(e) {
				console.log("success");
				console.log(e);
			})
			.fail(function(e) {
				console.log("error");
			})
			.always(function(e) {
				console.log("complete");
			});
			$(enb).removeClass('selected'); //remove "selected" from other elements in this object class(ON)
			$(this).addClass('selected'); //add "selected" to the element which was just clicked in this object class(OFF) 
			$(input).val(0).change(); // //Finally change the value to 0
		});
	});


	//Add slack token and url info
	jQuery('.slack_settings_form').on('submit', function(event){
				$.ajax({ //add username,slack token and url for sending request to slack from given token 
			url: 'adminfunctions/settingdetails.php?action=add_slack_setting',
			type: 'POST',
			data: {
				user_name:$('.user_name').val(),
				slack_url:$('.slack_url').val(),
				token:$('.add_token_id').val()
			},
		})
		.done(function(e) {
			console.log(e);
			alert("success");
		})
		.fail(function(e) {
			console.log("error");
		})
		.always(function(e) {
			console.log("complete");
		});
	});
});
 