$(document).ready(function(){


	//Sweet Alert For Field Delete

		$(".deleteField").click(function(){

		var id = $(this).attr('rel');
		var deleteFunction = $(this).attr('rel1');
		swal({
			title: "Are you Sure?",
			text: "You will not be able to recover this Field again",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, Delete IT !"

		},function(){
			window.location.href="/delete/"+deleteFunction+"/"+id;
		});


	});

			//Sweet Alert For appoinment Delete

		$(".deleteApp").click(function(){

		var id = $(this).attr('rel');
		var deleteFunction = $(this).attr('rel1');
		swal({
			title: "Are you Sure?",
			text: "You will not be able to recover this Field again",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, Delete IT !"

		},function(){
			window.location.href="/doctor/"+deleteFunction+"/"+id;
		});


	});

	$(document).ready(function(){
	    var maxField = 10; //Input fields increment limitation
	    var addButton = $('.add_button'); //Add button selector
	    var wrapper = $('.field_wrapper'); //Input field wrapper
	    var fieldHTML = '<div class="controls field_wrapper" style="margin-left:-2px;"><input type="text"  name="medicine[]" style="width:180px;margin-top:8px;"/>&nbsp;<input type="text"  name="quantity[]" style="width:180px;margin-top:8px;"/>&nbsp;<input type="text"  name="morning[]" style="width:180px;margin-top:8px;"/>&nbsp;<input type="text" name="mid_day[]"  style="width:180px;margin-top:8px;"/>&nbsp;<input type="text" name="night[]"  style="width:180px;margin-top:8px;"/><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a></div>'; //New input field html 
	    var x = 1; //Initial field counter is 1
	    $(addButton).click(function(){ //Once add button is clicked
	        if(x < maxField){ //Check maximum number of input fields
	            x++; //Increment field counter
	            $(wrapper).append(fieldHTML); // Add field html
	        }
	    });
	    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
	        e.preventDefault();
	        $(this).parent('div').remove(); //Remove field html
	        x--; //Decrement field counter
	    });
	});

			//Sweet Alert For Prescription Delete

		$(".deletePrescription").click(function(){

		var id = $(this).attr('rel');
		var deleteFunction = $(this).attr('rel1');
		swal({
			title: "Are you Sure?",
			text: "You will not be able to recover this Field again",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, Delete IT !"

		},function(){
			window.location.href="/delete/doctor/"+deleteFunction+"/"+id;
		});


	});

});