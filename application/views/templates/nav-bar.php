<nav class="top-bar">
   <ul>
      <!-- Title Area -->
      <li class="name">
         <h1>
            <a href="<?PHP echo base_url(); ?>">
            <img src="<?PHP echo base_url(); ?>images/logo3.png" alt="logo" width="204" height="51" /></a>
         </h1>
      </li>
      <li class="toggle-topbar"><a href="#"></a></li>
   </ul>
   <section>
      <!-- Right Nav Section -->
      <ul class="right">
         <li class='divider'></li>
         <li ><a href="<?PHP echo base_url(); ?>">Home</a></li>
         <li class='divider'></li>
         <li ><a href="<?PHP echo base_url(); ?>courses">Courses</a></li>
         <?php 
            foreach ($get_page_catagories as $data): ?> 
         <?php $pages_count =  $this->pages_model->pages_count($data['id']); 
            if ($pages_count == 0) {  echo "
            
            		<li class='divider'></li>\n<li><a href='".base_url().'page/'.$data['slug']."' >".$data['title']."</a></li>"; } 
            
            
            if ($pages_count > 0) {  echo "
            
            <li class='divider'></li>
            
            <li class='has-dropdown'>
            <a href='#' >".$data['title']." </a> 
            
            <ul class='dropdown'>	" ;?>
         <?php foreach ($page_list as $page_data): if ($data['id']==$page_data['pages_catagories_id']) echo "
            <li class='divider'></li> \n <li><a href='".base_url()."pages/".$page_data['slug']."'>".$page_data['title']."</a></li> \n"; ?> <?php endforeach ; echo "  </ul>  </li>"; }    ?>
         <?php endforeach  ;  ?> 
         <li class='divider'></li>
         <li ><a href="<?PHP echo base_url().'contact'; ?>">Contact Us</a></li>
      </ul>
   </section>
</nav>