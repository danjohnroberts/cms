 <div class="row">

  
  
    
      <div class="panel">
      
       <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>

  <li class="current"><a href="<?php  echo base_url() ?>/search">Course search</a></li>
  
 
</ul>
      
      
            <h2><?php  echo $title ?></h2>
            
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
              
 
  <?php echo  $result ?>    


               
                    <table class="courses_list tablesorter"  style="width:100%">
                    
                    <thead>
                        <tr>
                           
                            <th>Title</th>
                              <th>delete</th>
                          
                        </tr>
                        </thead>
                        <?php foreach($results as $row){?>
                        <tr>
                            <td>
                       
                       
                         <a  href="<?php echo base_url() ?>admin/update-course/<?php echo $row['url'];?>" data-transition="slide"><?php echo  $row['title'] ?>
                            </td>
                            
                            <td class="admin_table_course">
<a  style="float: right;padding-right:20px;" href="javascript:deleteCourse(<?php echo $row['id']?>)"><img src="<?PHP echo base_url(); ?>administration/images/delete.png" ></a> 
 </td>
                       
                        </tr>
                        <?php }?>
                    </table>


              
    
</div>
	
	

            </div> <!-- #main -->
        </div> <!-- #main-container -->
        
        