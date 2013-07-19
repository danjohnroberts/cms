<div data-role="page" class="type-home">

     <div data-role="header" style="text-align: center">
            <h1>Course</h1>
            
              
              <a href="#" class="ui-btn-left" data-rel="back" data-icon="arrow-l" data-theme="a">Back</a>
              
               <a href="index.php"  data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home"></a>
                
        </div><!-- /header -->
        
        
         <div data-role="content">
		
 
		
	<div class="content-secondary">
    
   
    
                 <?php echo $result ?>


              
    
    
  <hr />
  
     <div style="margin-top: 30px;margin-bottom: 30px;"/>
          
               <form name="search" method="post" action="search"  >
               
			
                
                <input type="text" name="search" id="s" value="enter a course search here" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>



<input type="submit" name="submit" value="Course Search"  />



</form>
 </div>
 
	
	

            </div> <!-- #main -->
        </div> <!-- #main-container -->