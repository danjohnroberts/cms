       <!-- Header and Nav -->

  <nav class="top-bar">
    <ul>
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="<?PHP echo base_url(); ?>admin">
            Waltham Forest International | admin
          </a>
        </h1>
      </li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>

    <section>
      <!-- Left Nav Section -->
      <ul class="left">
        <li class="divider"></li>
        <li ><a <?php if ( $this->uri->uri_string() == 'admin' )  echo " class=\"active\"";?> href="<?PHP echo base_url(); ?>admin/">Home</a> </li>
        <li class="divider"></li>
        
        <li class="has-dropdown">
        
        <a href="<?PHP echo base_url(); ?>admin/all-courses">Courses</a>
        
        <ul class="dropdown">
     
           
    <li><label>Search Courses</label>  </li>
        <li><a href="<?PHP echo base_url(); ?>admin/pagination/international">Courses </a></li>
          <li class="divider"></li>
         
        
        
        
         <li><label>New</label></li>
            <li>  <a <?php if ( $this->uri->uri_string() == 'admin/new-course' )  echo "class=\"active\"";?> href="<?PHP echo base_url(); ?>admin/new-course/international">New Course</a></li>
            <li><a href="<?PHP echo base_url(); ?>admin/new-course-category">New Course Category</a></li>

                 
          </ul>
        
        
        </li>
       
        <li class="divider"></li>
        
           <li>  <a href="<?PHP echo base_url(); ?>admin/frontpage">Front Page</a></li>
           
              <li class="divider"></li>
        
        <li class="has-dropdown">
          <a href="<?PHP echo base_url(); ?>admin/frontpage">Pages</a>
          <ul class="dropdown">
           
           
         
             
                  
                     <li>  <a href="<?PHP echo base_url(); ?>admin/page-categories">Page List</a>    </li>
       
                <li class="divider"></li>
                   <li><label>new</label>
                   <a href="<?PHP echo base_url(); ?>admin/new-page-category">New Main Page</a>  </li> 
                  <li><a href="<?PHP echo base_url(); ?>admin/new-page">New Sub Page </a>  </li> 
        
            </ul>
        </li>
        
      </ul>
      
     

      <!-- Right Nav Section -->
      <ul class="right">
      
        <li class="divider"></li>
      
        <li >
         <a href="<?PHP echo base_url(); ?>" target="_blank">Main Site</a></li>
      
      
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Welcome <span style="color:#F60; "><?php echo ucwords($username); ?></span></a>
          <ul class="dropdown">
            <li><label>Acount</label></li>
           
            <li><a href="<?PHP echo base_url(); ?>admin/preferences">Preferences</a></li>
            
             <li><a href="<?PHP echo base_url(); ?>images/Instructions.pdf">Help</a></li>
    
            <li><a href="<?PHP echo base_url(); ?>admin/logout">Logout </a></li>
   
          </ul>
        </li>
       
       
      </ul>
    </section>
  </nav>


  <!-- End Header and Nav -->
