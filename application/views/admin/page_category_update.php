<div class="row">
   <div class="large-3 columns panel" style="width:700px">
      <ul class="breadcrumbs">
         <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>
         <li><a href="<?PHP echo base_url(); ?>admin/page-categories">Main Page List</a></li>
         <li class="current"><a href="#"><?php  echo $title ?></a></li>
      </ul>
      <h3>Reorder sub-pages</h3>
      <hr/>
      <div id="contentPages">
         <div id="sortable">
            <?php foreach ($get_pages as $data): ?>
            <div id="recordsArray_<?php echo $data['id']; ?>" >
               <span  ><a href="<?PHP echo base_url(); ?>admin/page-update/<?php echo $data['id']; ?>" style="color:#fff">
               <?php echo $data['title']; ?>
               </a>
               </span>
               <a href="javascript:confirmationPageDelete(<?php echo $data['id'] ?>)" >
               <img src="<?PHP echo base_url(); ?>administration/images/delete.png"  class="delete_front_image">
               </a> 
            </div>
            <?php endforeach ?>
         </div>
      </div>
      <br />
      <a class="radius button"  href="<?PHP echo base_url(); ?>admin/new-page/<?php echo $cat_id ?>">create new sub-page in  <strong><?PHP echo $title ?></strong></a>
      <hr />
      <h3>Update Main Page</h3>
      <!-- write-course -->
        <p class="error">
		<?php echo validation_errors(); ?>
    	<?php echo $info ?></p>
     	
      <?php 
         $attributes = array('class' => 'email', 'id' => 'form');
         
         
         
         echo form_open(base_url().'admin/page-category-update/'.$cat_id,  $attributes) ?>
      <br />
      <input type="hidden" name="cat_id" value="<?php echo $cat_id ?>">
      <p><label for="title" >Title</label> </p>
      <input style="width:100%" type="input"  name="title" id="title"  value="<?php  echo $title ?>"/>
       <hr />
      <p>
        <label for="text">Content</label></p>
     
     
      <textarea  name="content" rows="15" cols="80" ><?php echo $content ;?></textarea>
      <br />
      <input class="radius button" type="submit" id="submit" name="submit" value="Save and Update " /> 
      </form>
   </div>
   <div class="large-6 columns panel">
      <ul class="side-nav">
         <li><a href="<?PHP echo base_url(); ?>admin/new-page-category">New Main Page</a></li>
         <li><a href="<?PHP echo base_url(); ?>admin/new-page">New Sub-Page</a></li>
      </ul>
   </div>
</div>
</div> <!-- #main -->