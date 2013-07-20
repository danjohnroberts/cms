<div class="row">

  
  
   
  <div class="panel">

 
     
       		<ul class="breadcrumbs">
 						
                        <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>
  						<li class="current"><a href="#">Course Categories</a></li>
                        
               </ul>
  


<!--

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
                --> 
                    
                 
  <!--            
 <div id="filter">

    


<p>filter by </p>
<form id="form1" action="courses" method="post">
<select style="width:100px" id="catagory" onchange="document.location = this.value">


     <option value="<?PHP echo base_url(); ?>admin/pagination" <?php  if  ($this->uri->segment(3)  == "all" )echo 'selected'; ?>>All Courses</option>
  <option value="<?PHP echo base_url(); ?>admin/pagination/young" <?php  if  ($this->uri->segment(3)  == "young" )echo 'selected'; ?>>Young</option>
    <option value="<?PHP echo base_url(); ?>admin/pagination/adult" <?php  if  ($this->uri->segment(3)  == "adult" )echo 'selected'; ?>>Adult</option>
    <option value="<?PHP //echo base_url(); ?>admin/pagination/higher" <?php  //if  ($this->uri->segment(3)  == "higher" )echo 'selected'; ?>>Higher</option>
        <option value="<?PHP //echo base_url(); ?>admin/pagination/international" <?php  //if  ($this->uri->segment(3)  == "international" )echo 'selected'; ?>>International</option>
</select>


<select style="width:100px" id="sel" onchange="javascript: submit();">
    <option value="0">Part-time or full-time</option>
    <option value="1">Part-time</option>
    <option value="2">Full-time</option>
   
</select>



</form>

-->

 <div id="contentPageCat">
             
             <H3>Course Categories</H3>
             
           
             
             <hr />



<table class="courses_list tablesorter" style="width:100%">
	<thead>
<tr>
<th><strong>Catagory</strong></th> 

<th> <strong>Type</strong></th> 

<th> <strong>Delete</strong></th> 
</tr>

</thead>
    <tbody>
    
   

<?php foreach ($results as $data): ?>

<tr>
	
    
 <td>
 
 <a style="display:block;" href="<?php echo base_url() ?>admin/category/<?php echo $data->url?>" data-transition="slide">
 <?php echo $data->cat_name ?> </a>

 </td>
 
 



 <td> 
 
 <?php echo $data->crse_type?>


 </td>

 
<td >

 <?php $cat_count =  $this->courses_model->cat_count($data->id); ?>
 
<?php if ( $cat_count == 0 ) { 
            
            echo '<a href="javascript:deleteCourseCat('.$data->id.')" >
             <img src=" '.base_url().'administration/images/delete.png"  class="delete_front_image"></a> ';
             
              }
             
            ?>
 
 

 
 </td>
 


</tr>
  
<?php endforeach ?>
 </tbody>
</table>
   <p><?php echo $links; ?></p>
   

  
  


	

            </div> <!-- #main -->
        </div> <!-- #main-container -->
        
        
      
      
     
      
      
         