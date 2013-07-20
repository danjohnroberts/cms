 

 
  <div class="row">

 <div class="panel">
 
 <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>

  <li><a href="<?PHP echo base_url(); ?>admin/preferences">Preferences</a></li>
  
   <li class="current"><a href="#">Create New User</a></li>
 
</ul>
      



<h3>Create New User</h3>


 
<hr/>


	<div class="error"> <?php echo validation_errors(); ?> </div>

 
 <?php 
 
 $attributes = array( 'id' => 'form');


 
 echo form_open_multipart(base_url().'admin/create-user' , $attributes);?>



<p>New user name</p>


<p><input type="text" name="username" for="username"></p>
<br />

new password
<input type="password" name="password">
<br />

repeat password
<input type="password" name="password_confirm">
<br />


<hr/>




<input type="submit" value="Update" class="radius button"/>

</form>

  </div> <!-- #main -->
  </div> <!-- #main-container  -->