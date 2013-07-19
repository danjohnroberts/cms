  <table class="courses_list" >
                        <tr>
                           
                            <th class="search-terms">  <?php echo $result ?><br/></th>
                            
                          
                        </tr>
                        <?php foreach($query as $row){?>
                        <tr class="search-results">
                            <td>
                       
                       
  <a href="<?php echo base_url() ?>course/<?php echo $row['url']; ?>" > <?php echo  $row['title'] ?>
                           
                            </td>
                       
                        </tr>
                        <?php }?>
                    </table>