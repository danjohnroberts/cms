   <div class="row">

  
  
    
      <div class="panel" id="courses_table">
 
 
 <h3>Course Categories</h3>
 


<table  >

<tr>
<th><?php  echo $title ?></th>



</tr>



<?php foreach ($courses as $news_item): ?>
<tr>
<td>
  <a href="<?PHP echo base_url(); ?>courses/<?php echo $news_item['url'] ?>"><?php echo $news_item['cat_name'] ?></a>
  
  </td>
  
  
  
</tr>
<?php endforeach ?>

</table>


 </div>

 

 </div>