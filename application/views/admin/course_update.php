  <div class="row">

  
  

      <div class="panel">
      <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>
   <li><a href="<?PHP echo base_url(); ?>admin/pagination/<?php  echo $crse_type ?>"><?php  echo $crse_type ?></a></li>
     <li><a href="<?PHP echo base_url(); ?>admin/category/<?php  echo $cat_url ?>"><?php  echo $catagory_name ?></a></li>
  <li class="current"><a href="#"><?php  echo $title ?></a></li>
  
 
</ul>

<h3>Update a Course</h3>
<hr/>




<!-- write-course -->


<?php echo validation_errors(); ?>

<?php 

$attributes = array('class' => 'email', 'id' => 'form');



echo form_open(base_url().'admin/update-course/'.$url ,  $attributes) ?>
<br />





<input type="hidden" name="url" value="<?php  echo $url ?>">

<label for="title" >Title</label> <br />

<input style="width:100%" type="input"  name="title" id="title"  value="<?php  echo $title ?>"/><br />
    
    <hr />
    
    <label for="title" >Course Type</label> 
<br/>

<p style="background-color:#E8E8E8; padding: 4px;"><strong><?php  echo $crse_type ?></strong></p>

<hr/>
    
        <label for="catagory">Catagory</label> <br />
        

        
     
      <select name="catagory">    
   		<?php foreach ($catagory as $cat_item): ?>
        
   


		<option value="<?php echo $cat_item['url']   ; ?>" <?php  if  ($cat_id==$cat_item['id'])echo 'selected'; ?>>  <?php echo $cat_item['cat_name'] ?><br /></option>
   

  		<?php endforeach ?>
  
		</select>

<br />
<hr />

	<label for="text">Description</label>
	<br />

      <textarea class="mceEditor " id="description" name="description" rows="15" cols="80" style="width: 80%"><?php echo $description ;?></textarea><br />
    
    <hr />
    
    	<label for="text">Mode of Study</label>
    <br />


          
     <select name="study_mode">  
        
   	<option value="full-time" <?php if  ($study_mode=='part-time')echo 'selected'; ?>>part-time</option>
    
     	<option value="full-time" <?php  if  ($study_mode=='full-time')echo 'selected'; ?>>full-time</option>


  
		</select>
    
      <br />

    <hr />
    
	
       	<label for="text" >Who is this course for?</label>
    <br />
    <textarea name="who"  class="mceEditor" rows="15" cols="80" style="width: 80%"><?php echo $who ;?></textarea><br /> 
    
    <hr />
          
	<label for="text">Entry Requirements</label>
    <br />
    <textarea name="entry_requirements" rows="15" cols="80" style="width: 80%"><?php echo $entry_requirements ;?></textarea><br />
    
    <hr />

<label for="text">What you will Study</label>
    <br />
    <textarea name="what_study" class="mceEditor" rows="15" cols="80" style="width: 80%"><?php echo $what_study ;?></textarea><br />

<hr />
<label for="text">How will I be assessed </label>
    <br />
    <textarea name="assessed" class="mceEditor" rows="15" cols="80" style="width: 80%"><?php echo $assessed ;?></textarea><br />

 
 <hr />

<label for="text">Where it can take you? </label>
    <br />
    <textarea name="where" class="mceEditor" rows="15" cols="80" style="width: 80%"><?php echo $where ;?></textarea><br />



    
	<input type="submit" id="submit" name="submit" class="radius button" value="Save and Update " /> 

        <hr />

</form>
                  
                

            </div> <!-- #main -->

        
        </div>
