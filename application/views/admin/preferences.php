 

 
  <div class="row">

 <div class="panel">
 
 <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>

 
  
   <li class="current"><a href="#">Preferences</a></li>
 
</ul>
      



<h3>Preferences</h3>

 <div class="error">  <?php echo $error;?></div>
 <div class="error">  <?php echo $match;?></div>
 	<div class="error"> <?php echo validation_errors(); ?> </div>
<hr/>

<h4> Update <?php echo $username; ?></h4>
 
 <?php echo form_open_multipart(base_url().'admin/preferences');?>

<hr/>

<p>Current password</p>


<input type="password" name="current_password" for="password">
<br />

new password
<input type="password" name="password">
<br />

Repeat new password 
<input type="password" name="password_confirm">
<br />


<hr/>




<input type="submit" value="Update" class="radius button"/>

</form>

  </div> <!-- #main -->
  </div> <!-- #main-container  -->