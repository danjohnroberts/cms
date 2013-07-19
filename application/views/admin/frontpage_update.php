 

 
  <div class="row">

 <div class="panel">
 
 <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>

  <li ><a href="<?PHP echo base_url(); ?>admin/frontpage">Front page</a></li>
  
   <li class="current"><a href="#">Update Frontpage Image</a></li>
 
</ul>
      



<h3>Update Front Page Image</h3>

 <div class="error">  <?php echo $error;?></div>

<hr/>

  <img src="<?PHP echo base_url()."images/slides/".$slug ?>" />
  

  

 
 <?php echo form_open_multipart(base_url().'admin/frontpage-update/'.$id);?>

<p><br />Update image </p>

<input type="file" name="userfile" size="20" />

<hr />

<p>Title</p>

<input name="title" type="text" value="<?php echo $title ?>"  size="50"> 


<hr/>

<p>Description</p>


<input name="description" type="text" value="<?php echo $description ?>"  size="50"> 


<hr/>



<p>Link</p>


<input name="link" type="text" value="<?php echo $link ?>"  size="50"> 

<hr />

<input type="submit" value="Update" class="radius button"/>

</form>

  </div> <!-- #main -->
  </div> <!-- #main-container  -->