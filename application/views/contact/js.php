<script type="text/javascript" src="<?PHP echo base_url(); ?>administration/js/jquery.validate.min.js"></script>
<script>
   //Our validation script will go here.
   $(document).ready(function(){
   	
   	
   	
   	$('#contact1').submit(function(){ return false; });
   
   	//custom validation rule - text only
   	
   	
   
       //validation implementation will go here.
   	$("#contact1").validate({
   	    rules: {
   	        fname: {
   	            required: true,
   	         //   textOnly: true
   	        },
   			    test: {
   	            required: true,
   	         //   textOnly: true
   	        }
   			
   			,
   			     age: {     required: true,
                 minlength: 1}
   			  
   			  
   			  ,
   			     agree: {     required: true
               }
   			  
   			  
   	    },
   		
   		
   		
   		
   	    messages: {
   	        fname: {
   	            required: "* Your name is required"
   	        },
   			 test: {
   	            required: "* twinkle"
   	        }
   			
   			,
   			    age: {     required: true,
                 minlength: 1}
   			 
   			 ,
   			 agree: {required:'you must accept terms to move on.<br/>'}
   	    } , 
   		
   		submitHandler: function(form) {
   			
   				$("#send").replaceWith("<em>sending...</em>");
   				
   			
   			
              $.ajax({
   					type: 'POST',
   					url: '<?PHP echo base_url(); ?>ajax/apply',
   					data: $("#contact1").serialize(),
   					
   						success: function(data) {
   					//	if(data == "true") {
   							
   						
   $("#contact1").fadeOut("fast", function(){
   	
   	
   				$(this).before("<br/><p id=\"contact1\"><strong>THANK YOU</strong><br/>\
   We have registered your interest in Waltham Forest Collage. We will contact you shortly <br/><br/>\
   </p>");
   					
   							});
   					//	}
   					}
   					
   		   }) 
   		   
   	
   
           }
   	
   	});

   	
   })
</script>