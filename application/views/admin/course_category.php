  <div class="row">

  
  
    
      <div class="panel">
      
     
      
          <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>
  
    <li><a href="<?PHP echo base_url(); ?>admin/pagination/<?php echo $crse_type ; ?>"><?php echo $crse_type ; ?></a></li>
   
       <li class="current"><a href="#"><?php echo $cat_name ; ?></a></li>

  
  
 
</ul>
      
            <h3>Courses in <?php echo $title ?></h3>
            
            <hr />
            
              
            
<table class="courses_list tablesorter" >
	
    
    <thead>
<tr>

<th>   <?php  echo $page_name ?></th>

<th>    Category </th>

<th>    Delete </th>

</tr>

</thead>
    <tbody>

<tr>
	
    
 <td>



<?php foreach ($courses as $news_item): ?>

<tr>
	
    
 <td>

  <a href="<?PHP echo base_url(); ?>admin/update-course/<?php echo $news_item['url'] ?>" ><?php echo $news_item['title'] ?></a>
  
  </td>
  
  
 <td>    <?php foreach ($catagory as $cat_item): ?>
        
   
<?php if ($news_item['cat_id']==$cat_item['id'])   {echo $cat_item['cat_name'];} 


?>

<?php endforeach ?>    </td>

  <td> 
   <a  style="float: right;padding-right:20px;" href="javascript:deleteCourse(<?php echo $news_item['id'] ?>)">
   
   <img src="<?PHP echo base_url(); ?>administration/images/delete.png" ></a>
    
     </td>
 
 </tr>
  

<?php endforeach ?>



</tbody>
</table>

 
 </div>
 
 </div>
 
   