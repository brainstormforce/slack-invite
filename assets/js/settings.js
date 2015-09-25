$(function(){
			//menu and table viewport control
			var viewportWidth = $(window).width();
			if (viewportWidth<600) {

			}
			jQuery('.query-menu').on('click', function(){
				jQuery(this).hide();
				jQuery('.addsidebar').addClass('opensidebar');
			});
			jQuery('.closebtn').on('click',function(){
				jQuery('.addsidebar').removeClass('opensidebar');
				jQuery('.query-menu').show();
			});
// this file is called from settings.php
// all functions of settings page	
	jQuery('.email_form').on('submit', function(event) {
				
				$.ajax({

					url: 'adminfunctions/settingdetails.php',
					type: 'POST',
					data: {
						ajaxfunction: 'settings_email',
						name: $(".name").val(),
						notification_email: $(".email").val(),
					},
				})
				.done(function(e) {
						console.log(e);			
				})
				.fail(function(e) {
					console.log("Failed");
				});
			
			});


	//slack edit token and url
	jQuery('.display_token_edit').on('submit', function(event) {
		event.preventDefault();
		event.stopImmediatePropagation();
		$.ajax({

					url: 'adminfunctions/settingdetails.php',
					type: 'POST',
					data: {
						ajaxfunction: 'edit_token',
						url: $(".url").val(),
						token: $(".token").val(),
					},
				})
				.done(function(e) {
						console.log(e.html());
					
				})
				.fail(function(e) {
					console.log("Failed");
				});
	});


jQuery(".delete_email").on('click', function(event) {
			if(confirm("Are you sure you want to delete this? "+$(this).val())){
			        $.ajax({
			        	url: 'adminfunctions/settingdetails.php',
						type: 'POST',
			        	dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
			        	data: {ajaxfunction: 'delete',delete_email: $(this).val()},
			        	
			        })
			        .done(function(e) {
			        	if(e.statusText=='ok'){
			           	console.log("success");
			        	}
			        	console.log(e);
			        })
			        .fail(function(e) {
			        	console.log("error");
			        	console.log(e);
			        })
			        .always(function(e) {
			        	console.log("complete");
			        	console.log(e);
			        });
			        
			    }
			else{
			        return false;
			    }
	});


	//change notification email status on/off

	jQuery('.switch_options').each(function() {
		//This object
		var obj = jQuery(this);
		var enb = obj.children('.switch_enable'); //cache first element, this is equal to ON
		var dsb = obj.children('.switch_disable'); //cache first element, this is equal to OFF
		var input = obj.children('input'); //cache the element where we must set the value
		var input_val = obj.children('input').val(); //cache the element where we must set the value
		var uemail= obj.children('.email_val').val().replace('/','');
		//var str = $(uemail).val().replace('/','');
		//console.log(uemail);
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
			url: 'adminfunctions/settingdetails.php',
			type: 'POST',
			data: {
				ajaxfunction: 'update_email_status',
				email: uemail,
				status: "on"
					},
				})
				.done(function(e) {
						console.log("success");
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
			url: 'adminfunctions/settingdetails.php',
			type: 'POST',
		 
			data: {
				ajaxfunction: 'update_email_status',
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

	

});
 