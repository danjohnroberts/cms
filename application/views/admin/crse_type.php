  <div class="row">

  
  
    
      <div class="panel">
      
              <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>

  <li class="current"><a href="<?php  echo base_url().$title ?>"><?php  echo $title ?></a></li>
  
 
</ul>
      
      
            <h4>Course Type</h4>
        <h5 style="background-color:#E8E8E8; padding: 4px;"><strong><?php  echo $title ?></strong></h5>
         <hr/>
   
              
 <div id="filter">

    


<p>filter by </p>
<form id="form1" action="courses" method="post" >
<select style="width:100px" id="catagory" onchange="document.location = this.value">

  <option value="<?PHP echo base_url(); ?>admin/young" <?php  if  ($this->uri->segment(2)  == "young" )echo 'selected'; ?>>Young</option>
    <option value="<?PHP echo base_url(); ?>admin/adult" <?php  if  ($this->uri->segment(2)  == "adult" )echo 'selected'; ?>>Adult</option>
    <option value="<?PHP echo base_url(); ?>admin/higher" <?php  if  ($this->uri->segment(2)  == "higher" )echo 'selected'; ?>>Higher</option>
        <option value="<?PHP echo base_url(); ?>admin/international" <?php  if  ($this->uri->segment(2)  == "international" )echo 'selected'; ?>>International</option>
</select>
</select>

<!--
<select style="width:100px" id="sel" onchange="javascript: submit();">
    <option value="0">Part-time or full-time</option>
    <option value="1">Part-time</option>
    <option value="2">Full-time</option>
   
</select>

-->

</form>

</div>

            
         	
            
<table class="courses_list tablesorter" style="width:100%">
	
    
    <thead>
<tr>

<th> Category  </th>









<th>Type</th>




<th>  Delete</th>


</tr>

</thead>
    <tbody>

<?php foreach ($courses as $news_item): ?>

<tr>
	
    
 <td>


  <a href="<?PHP echo base_url(); ?>admin/category/<?php echo $news_item['url'] ?>" ><?php echo $news_item['cat_name'] ?></a>
  
 </td>
 

 





 <td> 
 
 
<?php echo $news_item['crse_type'] ?>
 


</td>




 
 
  </tr>
  

<?php endforeach ?>

</tbody>
</table>


 
 
 
 </div>
 
 </div>