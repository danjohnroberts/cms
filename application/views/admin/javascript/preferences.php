
<script>

$(function() {
		   

		   
		   

$("#form").validate({
		rules: {			
			password: {required:true,maxlength:[80]}	,
			
			
			
		},
		
		
		
		    messages: {
 
            
            password: {
            required: "Please provide your existing password.",
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

</script>