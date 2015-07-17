 $(function(){
	jQuery('.form-horizontal').on('submit', function(event) {
				event.preventDefault();

				$.ajax({
					url: 'add.php',
					type: 'POST',
					data: {
						fname: $(".member_name").val(),
						email: $(".email").val(),
						about_yourself: $(".about_yourself").val(),
						contact:$(".contact").val(),
					},
				})
				.done(function(e) {
					jQuery(".successful").css('display', 'block');
					if ( e == 'success' ) {
						console.log("successful");	
					} else {
						console.log(e);
					}
					
				})
				.fail(function(e) {
					console.log("Failed");
				});
				
			});
});
 