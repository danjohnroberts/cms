 

 
  <div class="row">

 <div class="panel">
 
 <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>

  <li class="current"><a href="#">Front page</a></li>
  
 
</ul>
      



    
 <div id="contentFront">
 


<h3>Rearrange Images</h3>

<hr />

	<div id="sortable">
    
  


    
  
 <?php foreach ($front_page_images as $data): ?>
      

 <div id="recordsArray_<?php echo $data['id']; ?>" >
 



 
<img style="float: left;"width="50" height="50" src="<?php echo base_url().'images/slides/'.$data['slug']; ?>" alt="<?php echo $data['description'];?>" />

<?php //echo $data['description']; ?>

<a href="<?PHP echo base_url(); ?>admin/frontpage-update/<?php echo $data['id']; ?>" style="color: #fff"><span style="padding-left: 25px;"><strong><?php echo $data['title']; ?></strong></span></a>


 <a href="javascript:frontpage_image_delete(<?php echo $data['id'] ?>)">
 <img src="<?PHP echo base_url(); ?>administration/images/delete.png"  class="delete_front_image">
 </a> 
 



 
</div>

<?php endforeach ?>




</div>
</div>

<hr/>

<h3>Upload Front Page Image</h3>

<hr/>
  
 <div class="error">  <?php echo $error;?></div>
 
 

<?php echo form_open_multipart(base_url().'admin/frontpage');?>

<p>image upload</p>

<input type="file" name="userfile" size="20"  />
<hr/>
<p>Image Link</p>


<input name="link" type="text" value="#"  size="50"> 

<input type="hidden" name="post" value="true">

<br />

<input type="submit" value="upload" class="radius button"/>

</form>
    
   


  </div> <!-- #main -->
  </div> <!-- #main-container  -->