  <div class="row">

  
  
    <div class="nine columns">
      <div class="panel">
      
      
   <h3>Admin Login</h3>
   <?php echo validation_errors(); ?>
   <?php echo form_open(base_url().'verifylogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input class="radius button"  type="submit" value="Login"/>
   </form>
  


</div>

</div>

</div>