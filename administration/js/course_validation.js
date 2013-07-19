$(function() {
		   

		   
		   

$("#form").validate({
		rules: {			
			title: {required:true,maxlength:[80]}	,
				description: {required:true}	
			
			
		},
		
		
		
		    messages: {
 
            title: {
                required: "Title is required..",
            },
            password: {
            required: "Please provide a password.",
            minlength: "Password must be at least 5 characters long",
            maxlength: "Password can not be more than 15 characters"
            },
            email: "Valid email is required.",
            description: "Description is required..",
            gender: "Gender is required",
            who: "Select state"
        },
		
		
		errorPlacement: function(label, element) {
				// position error label after generated textarea
				if (element.is("textarea")) {
					label.insertAfter(element.next());
				} else {
					label.insertAfter(element)
				}
		}
	});
});	