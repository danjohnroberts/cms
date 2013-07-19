    
  <div class="row">
    <div class="twelve columns">
      <div id="slider">
         <img src="<?PHP echo base_url(); ?>images/slider/5.jpg" />
   
     
        <img src="<?PHP echo base_url(); ?>images/slider/1.jpg" />
        
       
        
       
      </div>
      
    
    </div>
  </div>
  
 <div class="row ">

    <?php foreach ($front_page_images as $data): ?>
    

    <div class="four columns front_images">
     <a href="<?PHP echo base_url().$data['link']; ?>">
     <img src="<?PHP echo base_url().'images/slides/'.$data['slug']; ?>" /></a>
     </div>

<?php endforeach ?>
         
      
 </div>
  
  
  <!-- Call to Action Panel -->
  <div class="row">
    <div class="twelve columns">
    
      <div class="panel">
        <h4>Get in touch!</h4>
            
        <div class="row">
          <div class="nine columns">
            <p>We'd love to hear from you.</p>
          </div>
          <div class="three columns">
            <a href="<?PHP echo base_url().'contact'; ?>" class="radius button right">Contact Us</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  