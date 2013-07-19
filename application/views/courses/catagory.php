  
   <div class="row">

  
  
    
      <div class="panel" id="courses_table">
  



 
  <h3>Courses</h3>
  
  

<table  >

<tr>

<th><?php  echo $page_name ?>	</th>

</tr>



<?php foreach ($courses as $news_item): ?>

<tr>
<td>

<a href="<?PHP echo base_url(); ?>course/<?php echo $news_item['url'] ?>" ><?php echo $news_item['title'] ?></a>
  
  
    </td>
  
  
  
</tr>

<?php endforeach ?>

</table>


 
 </div>
 
 </div>