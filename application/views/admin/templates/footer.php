
          <!-- Footer -->

  <footer class="row">
    <div class="twelve columns">
      <hr />
      <div class="row">
        <div class="six columns">
          <p>&copy;     Waltham Forest Mobile Course Administration</p>
        </div>
        <div class="six columns">
          <p >Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        <!--
          <ul class="link-list right">
            <li><a href="#">Section 1</a></li>
            <li><a href="#">Section 2</a></li>
            <li><a href="#">Section 3</a></li>
            <li><a href="#">Section 4</a></li>
          </ul>
          -->
        </div>
      </div>
    </div>
  </footer>

  <!-- Included JS Files (Uncompressed) -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="<?PHP echo base_url(); ?>administration/javascripts/jquery.js"></script>
  <script src="<?PHP echo base_url(); ?>administration/javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="<?PHP echo base_url(); ?>administration/javascripts/app.js"></script>
  
  
   <!-- CMS -->
   
   
<script type="text/javascript">



function confirmationPageCat(ID) {
	var answer = confirm("Delete Page Category?")
	if (answer){
		
		window.location = "<?PHP echo base_url(); ?>page-catagory-delete/"+ID;
	}
	if (suppress_this_message) {
    // If we are suppressing messages, just reply as if the user immediately
    // pressed "Cancel".
    OnDialogClosed(reply_msg, false, string16());
  }

}



function deleteCourse(ID) {
	var answer = confirm("Delete Course?")
	if (answer){
		
		window.location = "<?PHP echo base_url(); ?>course_delete/"+ID;
	}
	if (suppress_this_message) {
    // If we are suppressing messages, just reply as if the user immediately
    // pressed "Cancel".
    OnDialogClosed(reply_msg, false, string16());
  }

}




</script>
  

        <script type="text/javascript" src="<?PHP echo base_url(); ?>administration/js/jquery.validate.min.js"></script>
        
       	<script type="text/javascript" src="<?PHP echo base_url(); ?>administration/js/tinymce/tiny_mce/tiny_mce.js"></script>

		<script type="text/javascript" src="<?PHP echo base_url(); ?>administration/js/course_validation.js"></script>  
        
        


<script type="text/javascript">
	tinyMCE.init({			
		mode : "exact",	
		elements : "description, entry_requirements, who, what_study, assessed, where, content",
		theme : "advanced",
		
		theme_advanced_resizing : true,
		
		  theme_advanced_blockformats : "p,h1,h2,h3,h4,h5,h6,blockquote",
		
		plugins : "jbimages",
		language : "en",
		relative_urls : false,
		
	//	plugins: "autoresize",
		
		
		theme_advanced_buttons1 : "jbimages,mylistbox,mysplitbutton,jbimages,bold,italic,underline,separator,bullist,numlist,indent,outdent,separator,undo,redo,code,separator, link,unlink,separator,  formatselect",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_toolbar_align : "left",	
		theme_advanced_toolbar_location : "top",
		
		
			
		onchange_callback: function(editor) {
			tinyMCE.triggerSave();
			var $editor = $("#form");
			if ($editor.closest('form').data('validator').settings.onfocusout !== false) {
			$editor.valid();
			}
		}	
	});


</script>


		<!-- /TinyMCE -->
  

  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>




<script type="text/javascript">

$(document).ready(function(){ 

						   

	$(function() {

		$("#contentFront div").sortable({ opacity: 0.6, cursor: 'move', update: function() {

			var order = $(this).sortable("serialize") + '&action=updateRecordsListings'; 

			$.post("<?PHP echo base_url(); ?>admin/frontpage-sort", order, function(theResponse){

				$("#contentRight").html(theResponse);

			}); 															 

		}								  

		});
		
	

	});
	
	


});	
	//////////////////////////////////////////////

$(document).ready(function(){ 

						   

	$(function() {

		$("#contentPageCat div").sortable({ opacity: 0.6, cursor: 'move', update: function() {

			var order = $(this).sortable("serialize") + '&action=updateRecordsListings'; 

			$.post("<?PHP echo base_url(); ?>admin/sort_pages/international_pages_catagories", order, function(theResponse){

				$("#contentRight").html(theResponse);

			}); 															 

		}								  

		});
		
		
		

	});
	
});	

//////////////////////////////////////////////

$(document).ready(function(){ 

						   

	$(function() {

		$("#contentPages div").sortable({ opacity: 0.6, cursor: 'move', update: function() {

			var order = $(this).sortable("serialize") + '&action=updateRecordsListings'; 

			$.post("<?PHP echo base_url(); ?>admin/sort_pages/international_pages", order, function(theResponse){

				$("#contentRight").html(theResponse);

			}); 															 

		}								  

		});
		
		
		

	});
	
});	


</script>