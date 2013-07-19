<div data-role="page" class="type-home">

<div data-role="header" style="text-align: center">

<h1>Course</h1>
            
              
<a href="#" class="ui-btn-left" data-rel="back" data-icon="arrow-l" data-theme="a">Back</a>
              
<a href="<?PHP echo base_url(); ?>home" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home"></a>
                
</div><!-- /header -->
        
<div data-role="content">
		
<div class="content-secondary">
    
<a data-theme="b" href="javascript:void()" onclick="redirectPage()" data-role="button"  > Apply Now</a>  

<h3><?php  echo $title ?>	</h3>

<h4>Mode of Study</h4>
      
<p> <?php echo $study_mode ;?></p>
     
<h4>Description</h4>
      
<p><?php echo $description ;?></p>
      
<h4>Who is this course for?</h4>

<p><?php echo $who ;?></p>

<h4>  Entry Requirements</h4>

<?php echo $entry_requirements ;?>
 
<h4>What you will Study </h4>
 
<?php echo $what_study ;?>

<h4>How will I be assessed </h4>
 
<?php echo $assessed ;?>

 
<h4>Where it can take you?</h4>
 
<?php echo $where ;?>
 
<h4> More Information</h4>
      
<p>Student Services Department on 020 8501 8501 or&nbsp;<a href="mailto:info@waltham.ac.uk">info@waltham.ac.uk</a></p>

<h3> </h3>
     
<p>Alternatively,&nbsp;<a title="Download PDF application form" href="http://www.waltham.ac.uk/images/stories/wfcapplicationform.pdf" target="_blank">Download PDF application form </a>
</p>
<!-- /section 1 --><!-- /section 2 --><!-- /section 3 -->
    
    
<a data-theme="b" href="javascript:void()" onclick="redirectPage()" data-role="button"  > Apply Now</a>   
          
<script type="text/javascript">
function redirectPage()
{


window.location = "<?PHP echo base_url(); ?>apply/<?php echo $url?>";

}
</script>

</div>
</div>