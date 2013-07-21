<div class="row">
   <div class="large-3 columns panel" style="width:700px">
      <ul class="breadcrumbs">
         <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>
         <li><a href="<?PHP echo base_url(); ?>admin/page-categories">Main Page List</a></li>
         <li><a href="<?PHP echo base_url(); ?>admin/page-category-update/<?PHP echo $get_page_catagories ?>"><?PHP echo  $catagory_name; ?></a></li>
         <li class="current"><a href="#"><?php  echo $title ?></a></li>
      </ul>
      <h3>Update Page</h3>
      <hr/>
      <!-- write-course -->
      <?php echo validation_errors(); ?>
      <p class="error"><?php echo $info ?></p>
      <?php 
         $attributes = array('class' => 'email', 'id' => 'form');
         
         
         
         echo form_open(base_url().'admin/page-update/'.$slug,  $attributes) ?>
      <br />
      <input type="hidden" name="get_page_catagories" value="<?php echo $get_page_catagories?>">
      <input type="hidden" name="slug" value="<?php echo $slug?>">
      <label for="title" >Title</label> <br />
      <input style="width:100%" type="input"  name="title" id="title"  value="<?php  echo $title ?>"/><br />
      <hr/>
      <p> <label for="get_page_catagory_list">Main Page</label> </p>
      <select name="get_page_catagory_list">
         <?php foreach ($get_page_catagory_list as $cat_item): ?>
         <option value="<?php echo $cat_item['id']   ; ?>" <?php  if  ($get_page_catagories==$cat_item['id'])echo 'selected'; ?>>  <?php echo $cat_item['title'] ?><br /></option>
         <?php endforeach ?>
      </select>
      <br />
      <hr />
      <label for="text">Content</label>
      <br />
      <textarea  name="content" rows="15" cols="80" ><?php echo $content ;?></textarea>
      <br />
      <input class="radius button" type="submit" id="submit" name="submit" value="Save and Update " /> 
      <hr />
      </form>
   </div>
   <!-- #main -->
   <div class="large-6 columns panel">
      <ul class="side-nav">
         <li><a href="<?PHP echo base_url(); ?>admin/new-page-category">New Main Catagory</a></li>
         <li><a href="<?PHP echo base_url(); ?>admin/new-page">New Sub-Page</a></li>
      </ul>
   </div>
</div>