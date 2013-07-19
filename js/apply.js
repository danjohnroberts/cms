 (function($){
          $countForms = 1;
          $.fn.addForms = function(){
                        var myform = 
                      
                         '<div> ' +
						
						
					//	 'Field A ('+$countForms+'):'+
                   //      ' <input type="text" name="fielda'+$countForms+'">'+

						 
						'    <p>Level</p>   '+
                                
                         '       <select name="Added_Qualification_level_'+$countForms+'" id="add_test_'+$countForms+'" class="level">   '+
                         '       <option value="">Please select</option>  '+
                         '       <option value="GCSE">GCSE</option>  '+
                         '       <option value="GNVQ">GNVQ</option>  '+
                         '       <option value="A Level">A Level</option>  '+
                         '       <option value="Foundation Degree">Foundation Degree</option>  '+
                          '      <option value="BTEC">BTEC</option>  '+
                          '      <option value="NVQ">NVQ</option>  '+
                          '      <option value="OCN">OCN</option>  '+
                          '      <option value="NCFE">NCFE</option>  '+
                          '      <option value="City &amp; Guilds">City &amp; Guilds</option>  '+
                          '      <option value="Other">Other</option>  '+
                          '      </select>  '+
                                
                            '    <p>qualification</p>  '+
                                
                           '     <input type="text" name="More_qualification_'+$countForms+'" autocomplete="off" id="Previous_qualification_'+$countForms+'" class="qualification"   />  '+
                                
                                
                          '      <p>Grade</p>  '+
                                
                         '       <input type="text" name="More_grade_'+$countForms+'" id="More_grade_'+$countForms+'" class="grade"  />  '+
                                
                         '       <p>predicted</p>  '+
                         '       <select name="More_predicted_'+$countForms+'" id="More_predicted_'+$countForms+'" class="predicted"  >  '+
                       '         <option value="">Please select</option>  '+
                          '      <option value="Predicted">Predicted</option>  '+
                      '      <option value="Actual">Actual</option>  '+
                      '          </select>  ' +
					  
		 '<br/>' +
			
		'		 <button data-role="button" data-inline="true" data-theme="b">remove</button>' +			  
					  		 '<br/>' +
							 
							  '<hr> ' +
						
						 '</div> ' 		 ;
						 
						 
		

                         myform = $("<div>"+myform+"</div>");
                   $("button", $(myform)).click(function(){ $(this).parent().parent().remove(); });
						 
						//myform.page();
						//myform('refresh');

                         $(this).append(myform).trigger("create");
                         $countForms++;
          };
    })(jQuery);         

    $(function(){
        $("#mybutton").bind("click", function(){
                $("#container").addForms();
        });
    });









$(function(){

    //first_step
 $('#myform').submit(function(){ return false; });
 
 
	
 $('#submit_first').click(function(){

		
		var error = 0;
		
					$("form").validate().element("#name");
					
					$("form").validate().element("#email");
							   
					if (!$(".required").valid() )   {  
						
						error++; 
					
						
					}
		 

        
        
        if(!error) {
          
             
				$.mobile.changePage( "#app_second_step", { transition: "slide"} );
                        
        } else {
			
			//$('.required')[0].scrollIntoView(true);
			
		  $('html,body').required({scrollTop: targetOffset} );
			
			return false;
			
		}
    });


    $('#submit_second').click(function(){
									   
									   
									   
 
     
						$.mobile.changePage( "#third_step", { transition: "slide"} );
   

    });


    $('#submit_third').click(function(){
        //update progress bar
       

        //prepare the fourth step
        var fields = new Array(
            $('#name').val(),
            $('#second_name').val(),
            $('#email').val(),
            $('#firstname').val() + ' ' + $('#lastname').val(),
            $('#age').val(),
            $('#gender').val(),
            $('#country').val()                       
        );
        var tr = $('#fourth_step tr');
        tr.each(function(){
            //alert( fields[$(this).index()] )
            $(this).children('td:nth-child(2)').html(fields[$(this).index()]);
        });
                
        //slide steps
 
		
		$.mobile.changePage( "#fourth_step", { transition: "slide"} );
		
		
    });
	
	
	  $('#submit_fourth').click(function(){
									   
									   
			//	$.mobile.changePage( "#fifth_step", { transition: "slide"} );					   
      
   

    });
	


    $('#submit_fifth').click(function(){
									   

 
 
 
var str = $("form").serialize();		   
		
			   $.ajax({
	type: "POST",
	 url: "../ajax/apply",
//url: "formprocess.php",
	
//  data: dataString,
data: str,
    success: function(){
//	$('.success').fadeIn(200).show();

	 alert('Your appllication has been sent, thank you');
	
	window.location.replace("../submit");
	
	

 
	
   }
   
   
   
   
});
	

    return false; // avoid to execute the actual submit of the form.
		
		
    });

});

