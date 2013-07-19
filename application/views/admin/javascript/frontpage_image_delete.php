
<script>



function frontpage_image_delete(ID) {
	var answer = confirm("Delete Image?")
	if (answer){
		
		window.location = "<?PHP echo base_url(); ?>frontpage_delete/"+ID;
	}
	if (suppress_this_message) {
    // If we are suppressing messages, just reply as if the user immediately
    // pressed "Cancel".
    OnDialogClosed(reply_msg, false, string16());
  }

}


</script>