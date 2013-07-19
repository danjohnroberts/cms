  <div class="row">

  
  
    
      <div class="panel">
 
     
       <ul class="breadcrumbs">
  <li><a href="<?PHP echo base_url(); ?>">Home</a></li>
  
 

  <li class="current"><a href="#">Apply</a></li>
  
 
</ul>
                
          <h3>Apply</h3>
          
          <hr/>
          
        <p><strong><a href="<?PHP echo base_url(); ?>images/Application-form-new-version-2013-14.pdf"> download an application form</a>
        </strong> or contact us below</p>
         
         <hr />
        
     <h4><?PHP echo $course; ?></h4>
     
     <hr />
               
          <form id="contact1" name="contact"  method="post">
     
   
<p>      <label for="fname">Name <span>*</span></label>	</p>
		
<p>   <input type="text" id="fname" name="fname" class="required input"> 	</p>


<input type="hidden" name="course" value="<?PHP echo $course; ?>">


<p>      <label for="telephone">Telephone<span>*</span></label>	</p>
		
<p>   <input type="text" id="telephone" name="telephone" class="required input"> 	</p>




<p>      <label for="email">Email<span>*</span></label>	</p>
		
<p>   <input type="text" id="email" name="email" class="required input"> 	</p>


 
 <p>      <label for="comment">Comment</label>	</p>   
    
  <p> <textarea name="comment" id="comment" cols="" rows=""></textarea>	</p>
  
  

<button id="send">Send</button>
	
</form>   
                
                
             
                
                
                
                  <!-- #first_step -->
            <div data-role="page" id="contact_second_step" >
            
          
            
            <style>
			
			.success {
			display: none;
			
			
			}
			</style>
         
            
            		<div class="success">
                    
                   <p> Your form has been sent, thank you for contacting us.</p> 
                    
                    </div>
                    
                    
        
            
	</div>
    
    </div>
    
   