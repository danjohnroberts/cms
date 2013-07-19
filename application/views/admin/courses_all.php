  <div class="row">

  
 
    
      <div class="panel">
      
      
          <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>

  <li class="current"><a href="#">All Courses</a></li>
  
 
</ul>
      
       <h3>All Courses</h3>
  
  <hr/>

<form action="<?php echo base_url().'admin/search' ?>" method="post" accept-charset="utf-8"> 



<?php
                        $data = array('name'=>'search', 'id'=>'search');
                        echo form_input($data);
                    ?>
                    <?php
                    $data = array('name'=>'submit', 'id'=>'submit', 'value'=>'Search Courses');
                    echo form_submit($data);
                    ?>
                    </form>
                 
                    
                    <hr />
              
 



<table class="courses_list tablesorter" style="width:100%">
	<thead>
<tr>
<th> <strong>All Courses</strong></th> 
<th> <strong>Category</strong></th> 
<th> <strong>Type</strong></th> 
<th> <strong>Delete</strong></th> 

</tr>

</thead>
    <tbody>

<?php foreach ($results as $data): ?>

<tr>
	
    
 <td>
 
 <a style="display:block;" href="<?php echo base_url() ?>admin/update-course/<?php echo $data->url?>" >
 <?php echo $data->title ?> </a>

 </td>
 
 <td > 
 
 <?php foreach ($catagory as $cat_item): ?>
        
   
<?php if (  $data->cat_id==$cat_item['id']  )   {echo $cat_item['cat_name'];} ?>
	

<?php endforeach ?> 

 </td>



 <td> 
 
 <?php foreach ($catagory as $cat_item): ?>
        
   
<?php if (  $data->cat_id==$cat_item['id']  )   {echo $cat_item['crse_type'];} ?>
	

<?php endforeach ?> 


 </td>

 
<td class="admin_table_course">
<a  style="float: right;padding-right:20px;" href="javascript:deleteCourse(<?php echo $data->id ?>)"><img src="<?PHP echo base_url(); ?>administration/images/delete.png" ></a> 
 </td>
 


</tr>
  
<?php endforeach ?>
 </tbody>
</table>
   <p><?php echo $links; ?></p>
   

  
  


	

            </div> <!-- #main -->
        </div> <!-- #main-container -->
        
        
      
      
     
      
      
          