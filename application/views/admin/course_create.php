  <div class="row">

  
  
   
  <div class="panel">
      
       <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>

  <li class="current"><a href="#">Create a New Course</a></li>
  
 
</ul>
      
        <h3>Create  New Course</h3s>
        
        <hr/>

<div class="error"><?php echo validation_errors(); ?></div>



<p>Course Type</p>
<form id="form1" action="courses" method="post" >
<select style="width:100px" id="catagory" onchange="document.location = this.value">

  <option value="<?PHP echo base_url(); ?>admin/new-course/young" <?php  if  ($this->uri->segment(3)  == "young" )echo 'selected'; ?>>Young</option>
    <option value="<?PHP echo base_url(); ?>admin/new-course/adult" <?php  if  ($this->uri->segment(3)  == "adult" )echo 'selected'; ?>>Adult</option>
    <option value="<?PHP echo base_url(); ?>admin/new-course/higher" <?php  if  ($this->uri->segment(3)  == "higher" )echo 'selected'; ?>>Higher</option>
        <option value="<?PHP echo base_url(); ?>admin/new-course/international" <?php  if  ($this->uri->segment(3)  == "international" )echo 'selected'; ?>>International</option>
</select>
</select>

<hr/>

<?php 


$attributes = array('class' => 'email', 'id' => 'form');



echo form_open(base_url().'admin/new-course/international',  $attributes) ?>



<label for="title" >Title</label> <br />

<input name="title" for="title" type="text"  size="50"><br />


    
<hr />
    
<label for="catagory">Catagory</label> <br />
        
<select name="catagory">    
   		
<?php foreach ($catagory as $cat_item): ?>
        
   
<option value="<?php echo $cat_item['url']   ; ?>" >  

<?php echo $cat_item['cat_name'] ?><br />

</option>
   

<?php endforeach ?>
  
</select>

<br />
<hr />

	<label for="text">Description</label>
	<br />

      <textarea class="mceEditor " id="description" name="description" rows="15" cols="80" style="width: 80%"></textarea><br />
    
    <hr />
    
    	<label for="text">Mode of Study</label>
    <br />


          
     <select name="study_mode">  
        
   	<option value="part-time">part-time</option>
    
     	<option value="full-time">full-time</option>


  
	</select>
    
      <br />

    <hr />
    
	
       	<label for="text" >Who is this course for?</label>
    <br />
    <textarea name="who"  class="mceEditor" rows="15" cols="80" style="width: 80%"></textarea><br /> 
    
    <hr />
          
	<label for="text">Entry Requirements</label>
    <br />
    <textarea name="entry_requirements" rows="15" cols="80" style="width: 80%"></textarea><br />
    
    <hr />

<label for="text">What you will Study</label>
    <br />
    <textarea name="what_study" class="mceEditor" rows="15" cols="80" style="width: 80%"></textarea><br />

<hr />
<label for="text">How will I be assessed </label>
    <br />
    <textarea name="assessed" class="mceEditor" rows="15" cols="80" style="width: 80%"></textarea><br />

 
 <hr />

<label for="text">Where it can take you? </label>
    <br />
    <textarea name="where" class="mceEditor" rows="15" cols="80" style="width: 80%"></textarea><br />



    
	<input type="submit" name="submit" class="radius button" value="Create Course" /> 

        <hr />

</form>                  
                  
                   
          


   
  </div> <!-- #main-container -->
        
        </div>
