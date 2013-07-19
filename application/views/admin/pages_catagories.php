<div class="row">
  
		<div class="large-3 columns panel" style="width:700px">

 
     
       		<ul class="breadcrumbs">
 						
                        <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>
  						<li class="current"><a href="#">Main Page List</a></li>
                        
               </ul>
      

	
    
             <div id="contentPageCat">
             
             <H3> Reorder Main Pages</H3>
             
             <p>drag and drop pages</p>
             
             <hr />
    

			<div id="sortable">
    		
			<?php foreach ($get_page_catagories as $data): ?>
      
      		<div class="radius drag" id="recordsArray_<?php echo $data['id']; ?>" >
 

			<?php $pages_count =  $this->pages_model->pages_count($data['id']); ?>


			<span><a style="color:#FFF;width : 200px;display : inline-block " href="<?PHP echo base_url(); ?>admin/page-category-update/<?php echo $data['id']; ?>"><?php echo$data['title'].' ('.$pages_count.')' ; ?></a>

			</span>







			<?php if ( $pages_count == 0 ) { 
            
            echo '<a href="javascript:confirmationPageCat('.$data['id'].')" >
             <img src=" '.base_url().'administration/images/delete.png"  class="delete_front_image"></a> ';
             
              }
             
            ?></div><?php endforeach ?>



			</div>

		
            
            
			</div><!-- .panel -->


<br/>
 <a class="radius button"  href="<?PHP echo base_url(); ?>admin/new-page-category">create new main page </a>


  </div> <!-- class="large-9 push-3 columns" -->
  
  
  
    <div class="large-6 columns panel">
    

        
      <ul class="side-nav">
        <li><a href="<?PHP echo base_url(); ?>admin/new-page-category">New Main Page</a></li>
        <li><a href="<?PHP echo base_url(); ?>admin/new-page">New Sub-Page</a></li>
      
      
      </ul>
      
       </div>
        

  
  
  
  
  </div> <!-- #row   -->
  
   
      
      
      
     
    
        
