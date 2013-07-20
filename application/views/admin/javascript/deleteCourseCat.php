
<script>

function deleteCourseCat(ID) {
	var answer = confirm("Delete Course Catagory?")
	if (answer){
		
			window.location = "<?PHP echo base_url(); ?>admin/cat-delete/"+ID;
		
	}
	if (suppress_this_message) {
    // If we are suppressing messages, just reply as if the user immediately
    // pressed "Cancel".
    OnDialogClosed(reply_msg, false, string16());
  }

}

</script>