
<script>

function confirmationPageDelete(ID) {
	var answer = confirm("Delete Course?")
	if (answer){
		
			window.location = "<?PHP echo base_url(); ?>page-delete/"+ID+"/<?PHP echo $cat_id;?>";
		
	}
	if (suppress_this_message) {
    // If we are suppressing messages, just reply as if the user immediately
    // pressed "Cancel".
    OnDialogClosed(reply_msg, false, string16());
  }

}

</script>