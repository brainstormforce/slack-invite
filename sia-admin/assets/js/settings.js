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
	jQuery(".delete_email").on('click', function(event) {
		if(confirm("Are you sure you want to delete this user? ")){
			$.ajax({
				url: 'handle_jquery_calls.php',
				type: 'POST',
				dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: {
					ajaxfunction: 'delete',
					delete_email: $(this).attr("data-file")
				},
				
			})
			.done(function(e) {
				
			})
			.fail(function(e) {
				if(e.responseText.trim() == "Deleted"){
					window.location.reload();
				}
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
		if( 0 == input_val ){
			dsb.addClass('selected');
		}
		else if( 1 == input_val ){
			enb.addClass('selected');
		}
		//Action on user's click(ON)
		enb.on('click', function(){
			$.ajax({ // this code will update notification email status
				url: 'handle_jquery_calls.php',
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
				url: 'handle_jquery_calls.php',
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