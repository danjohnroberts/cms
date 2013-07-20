<div class="row">
<div class="panel">
   <ul class="breadcrumbs">
      <li><a href="<?PHP echo base_url(); ?>">Home</a></li>
      <li class="current"><a href="#">Contact</a></li>
   </ul>
   <h3>Contact</h3>
   <p>international@waltham.ac.uk</p>
   <p>Forest Rd<br>
      Walthamstow<br>
      London E17 4JB
   </p>
   <p>Main Tel:&nbsp;<strong>020 8501 8000</strong></p>
   <p>International Office: <a href="tel:020%208501%208106" value="+442085018106" target="_blank">020 8501 8106</a></p>
   <p>&nbsp;</p>
   <p>Fax:&nbsp;<strong>020 8501 8001</strong></p>
   <p>Courses:&nbsp;<strong>020 8501 8501</strong>          </p>
   <form id="contact1" name="contact"  method="post">
      <p>      <label for="fname">Name <span>*</span></label>	</p>
      <p>   <input type="text" id="fname" name="fname" class="required input"> 	</p>
      <p>      <label for="telephone">Telephone<span>*</span></label>	</p>
      <p>   <input type="text" id="telephone" name="telephone" class="required input"> 	</p>
      <p>      <label for="email">Email<span>*</span></label>	</p>
      <p>   <input type="text" id="email" name="email" class="required input"> 	</p>
      <p>      <label for="comment">Comment</label>	</p>
      <p> <textarea name="comment" id="comment" cols="" rows=""></textarea>	</p>
      <button class="radius button" id="send">Send</button>
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