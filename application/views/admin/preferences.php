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
      <h4> Update Password: <?php echo $username; ?></h4>
      <?php 
         $attributes = array( 'id' => 'form');
         
         
         
         echo form_open_multipart(base_url().'admin/preferences' , $attributes);?>
      <hr/>
      <label for="current_password">Current password</label><br/>
      <input type="password" name="current_password" for="password">
      <br />
      <label for="password">New Password</label><br/>
      <input type="password" name="password">
      <br />
      <label for="password_confirm">Repeat new password </label><br/>
      <input type="password" name="password_confirm">
      <br />
      <hr/>
      <input type="submit" value="Update" class="radius button"/>
      </form>
   </div>
   <!-- #main -->
</div>
<!-- #main-container  -->