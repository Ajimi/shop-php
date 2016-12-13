$(function() {
	var pop = $('.popbtn');
	var row = $('.row:not(:first):not(:last)');


	pop.popover({
		trigger: 'manual',
		html: true,
		container: 'body',
		placement: 'bottom',
		animation: false,
		content: function() {
			return $('#popover').html();
		}
	});


	pop.on('click', function(e) {
		pop.popover('toggle');
		pop.not(this).popover('hide');
	});

	$(window).on('resize', function() {
		pop.popover('hide');
	});

	row.on('touchend', function(e) {
		$(this).find('.popbtn').popover('toggle');
		row.not(this).find('.popbtn').popover('hide');
		return false;
	});

	pop.on('click', function(){
		$hash = $(this).parent().attr('href');
		$('.remove').attr('href',$hash);
		//console.log($('.remove').attr('href'));
		$('.add-quantity').attr('href',$hash);
	});

	
	/* For live changes we used $(document) ... appending or changing the attribute */
	$(document).on('click' , '.remove', function(){
		console.log("wow");
		// Hiding the pop on deleting
		pop.not(this).popover('hide');
		//console.log($(this).attr('href'));
		$hash = $(this).attr('href');
		$("li[href='"+$hash+"']").fadeOut(300);
		/*
			Ajax to Remove
		*/
		$id = $hash.substring(1);
		console.log($id);
		$result = "id="+$id;
		$.ajax({
		  type:'GET',
		  url:'remove.php',
		  data:$result,
		  success: function(data){
		  		console.log(data);
		  		$('.total').text("$"+data.trim()+".00");
			}
		});
	});

	$(document).on('click' , '.add-quantity', function(){
		$hash = $(this).attr('href');
		$id = $hash.substring(1);
		$quantity = $("li[href='"+$hash+"'] .quantity");
		console.log($id);
		$result = "add="+$id;
		$.ajax({
		  type:'GET',
		  url:'addToCart.php',
		  data:$result,
		  success: function(data){
		  		console.log(data);
		  		$quantity.text(data);
			}
		});
		$('quantity')
	});

});