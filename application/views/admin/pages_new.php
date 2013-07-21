<div class="row">
   <div class="large-6 columns panel" style="width: 700px;">
      <ul class="breadcrumbs">
         <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>
         <li><a href="<?PHP echo base_url(); ?>admin/page-categories">Main Page List</a></li>
         <li class="current"><a href="#">New Page</a></li>
      </ul>
      <H3> Create New Page </H3>
      <hr/>
      <div class="error"> <?php echo validation_errors(); ?>
         <?php echo $error; ?>
      </div>
      <br/>
      <?php 
         $attributes = array('class' => 'email', 'id' => 'form');
         
         echo form_open_multipart(base_url().'admin/new-page/'.$catagory_id, $attributes ) ;?>
      <label for="title" >Title</label> <br />
      <input name="title" for="title" type="text"  size="50">
      <hr />
      <p> <label for="get_page_catagory_list">Main Page</label> </p>
      <select name="category">
         <?php foreach ($page_catagories as $cat_item): ?>
         <option value="<?php echo $cat_item['id']   ; ?>"  <?php  if  ($category_select==$cat_item['id'])echo 'selected'; ?>>  <?php echo $cat_item['title'] ?><br /></option>
         <?php endforeach ?>
      </select>
      <hr />
      <label for="text">Content</label>
      <br />
      <textarea name="content" cols="" rows="" id="content" class="mceEditor "></textarea>
      <input type="hidden" name="post" value="true">
      <br />
      <input name="create new page" type="submit" class="radius button" id="create new page" value="Create New Page"  />
      </form>
   </div>
   <!-- #main -->
   <div class="large-6 columns panel">
      <ul class="side-nav">
         <li><a href="<?PHP echo base_url(); ?>admin/new-page-category">New Main Page</a></li>
         <li><a href="<?PHP echo base_url(); ?>admin/new-page">New Sub-Page</a></li>
      </ul>
   </div>
</div>
</div> <!-- #main-container  -->
</div>