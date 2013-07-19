<?php
class ajax extends CI_Controller {
	


	public function __construct()
	{
		parent::__construct();
		$this->load->model('courses_model');
		
		$this->load->helper('url');
	}

	public function index()
	{
		$data['news'] = $this->courses_model->get_news();
		
			
		
		$data['title'] = 'News archive';
		
	//	$data['root'] = $config['base_url']	;


	$this->load->view('templates/header', $data);
	$this->load->view('courses/index', $data);
	$this->load->view('templates/footer');
	}
	
		/////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	public function form()
	{


////////////////////////////////////////////// Varibles /////////////////////////

// Admin Email Variables

$title  = "International Website | From Contact form";

$subject = "Contact Form";

$sendto   = "dan.john.roberts@gmail.com";


// Client Email Subject

$Subject2 = "Thank you for registering your interest at Waltham Forrest College International"; 


///////////////////////////////////////////////////////////////////////

$fname  = nl2br($_POST['fname']);


$telephone = $_POST['telephone'];


$usermail = $_POST['email'];


$comment = $_POST['comment'];



/////////////////////////////////////////////////////////////////////////////////////////////


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: International Website | From <'.$sendto.'>' ;//. "\r\n";


//$headers .= "CC: administration@minervalabs.com, tsanguinetti@minervalabs.com";
 

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>$title</h2>\r\n";
$msg .= "<p><strong>Name:</strong> ".$fname."</p>\r\n";

$msg .= "<p><strong>Telephone:</strong> ".$telephone."</p>\r\n";

$msg .= "<p><strong>Email:</strong> ".$usermail."</p>\r\n";

$msg .= "<p><strong>Comment:</strong> ".$comment."</p>\r\n";

$msg .= "</body></html>";


mail($sendto, $subject, $msg, $headers,"-f ".$sendto);


///////////////////////////////////////////


$Body2 = "<p>Dear " . $fname ."</p>
<p>Thank you for registering your interest in Waltham Forrest College International.</p>

<p>A member of our team will be in contact </p> 



<p>Best regards,<p>
<p>Waltham Forrest College</P>

";
 


$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers2 .= 'From: Waltham Forest College | International <'.$sendto.'>' . "\r\n";

mail($usermail, "$Subject2", "$Body2", $headers2,"-f ".$sendto); 

	}
	
////////////////////////////////////////////////////////////////////////////////////////////	



	public function apply()
	{
		
		
////////////////////////////////////////////// Varibles /////////////////////////

// Admin Email Variables

$title  = "International Website | Course Application";

$subject = "Course Application";

$sendto   = "dan.john.roberts@gmail.com";


// Client Email Subject

$Subject2 = "Thank you for registering your interest in a course at Waltham Forrest College International"; 


///////////////////////////////////////////////////////////////////////

$fname  = nl2br($_POST['fname']);


$telephone = $_POST['telephone'];


$usermail = $_POST['email'];


$comment = $_POST['comment'];


$course = $_POST['course'];



/////////////////////////////////////////////////////////////////////////////////////////////


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Waltham Forest College | International <'.$sendto.'>' ;//. "\r\n";


//$headers .= "CC: administration@minervalabs.com, tsanguinetti@minervalabs.com";
 

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>$title</h2>\r\n";
$msg .= "<p><strong>Name:</strong> ".$fname."</p>\r\n";

$msg .= "<p><strong>Telephone:</strong> ".$telephone."</p>\r\n";

$msg .= "<p><strong>Email:</strong> ".$usermail."</p>\r\n";

$msg .= "<p><strong>Comment:</strong> ".$comment."</p>\r\n";

$msg .= "<p><strong>Course:</strong> ".$course."</p>\r\n";

$msg .= "</body></html>";


mail($sendto, $subject, $msg, $headers,"-f ".$sendto);


///////////////////////////////////////////


$Body2 = "<p>Dear " . $fname ."</p>
<p>Thank you for registering your interest in a courses at Waltham Collage International.</p>

<p>A member of our team will be in contact </p> 



<p>Best regards,<p>
<p>Waltham Forest College International</P>

";
 


$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers2 .= 'From: Waltham Forest College | International <'.$sendto.'>' . "\r\n";

mail($usermail, "$Subject2", "$Body2", $headers2,"-f ".$sendto); 

	}
	
	
	//////////////////////////////////////////////////////////////////////////
	
		
	public function apply_jquery()
	{
	if($_POST)
{
$Subject = "Mobile Course Application"; 
//$MailTo = "angela.bucknor@waltham.ac.uk"; 

$MailTo = "dan.john.roberts@gmail.com"; 

$dob_month = $_POST['dob_month'];

$dob_day = $_POST['dob_day'];

$dob_year = $_POST['dob_year'];



unset ($_POST['dob_month'] );

unset ($_POST['dob_day'] );

unset ($_POST['dob_year'] );


unset ($_POST['submit_first'] );

unset ($_POST['submit_second'] );

unset ($_POST['submit_third'] );

unset ($_POST['submit_fifth'] );


foreach($_POST AS $field => $value) {



if (strpos($field,"Added") !== false) {
   $Body .= "<hr/>";
}

$field = str_replace("_", " ", $field );

if ($field == "Schoolname" ) { $Body .=  "<hr/>" ; }


if ($field == "Telephone" ) { $Body .=  "<hr/><h3>Contact details</h3>" ; }

if ($field == "Address" ) { $Body .=  "<hr/><h3>Address details</h3>" ; }

if ($field == "Title" ) { $Body .=  "<p>DOB: $dob_day / $dob_month / $dob_year</p>" ; }

if ($field == "Ethinicity" ) { $Body .=  "<hr/><h3>Ethinicity details</h3>" ; }

if ($field == "Qualification Level" ) { $Body .=  "<hr/><h3>Qualification entry</h3>" ; }



if ($field == "Previous level q 01" ) { $Body .=  "<h4>Previous qualificiation 01</h4>" ; }

if ($field == "Previous level q 02" ) { $Body .=  "<h4>Previous qualificiation 02</h4>" ; }

if ($field == "Guidance" ) { $Body .=  "<hr/><h3>Find Out More</h3>" ; }

if ($field == "W School" ) { $Body .=  "<hr/><h3>Where did you hear about us?</h3>" ; }

if ($field == "Disability" ) { $Body .=  "<hr/><h3>Do you consider yourself to have a disability, specific learning difficulty or specific health problem?</h3>" ; }

if ($field == "No Disabilities" ) { $Body .=  "<hr/><h3>Health Issues?</h3>" ; }





$Body .= "<p>" .$field .": ".$value ."</p>";

}



$headers = "Content-type: text/html; charset=iso-8859-1"; 


//$headers .= "From: Waltham_Collage_Application_Form"; 

//$headers .= "From: Waltham_Collage_Application_Form" . "\r\n".
// "CC: info@waltham.ac.uk, marketing@waltham.ac.uk";


//mail($MailTo, "$Subject", "$Body", "$headers"); 

///////////////////////////////


$headers .= "From: Waltham_Collage_Application_Form<".$MailTo.">\r\n". 
"CC: info@waltham.ac.uk, marketing@waltham.ac.uk";


mail($MailTo, "$Subject", "$Body", "$headers", "-f ".$MailTo ); 





///////////////////////////////////////////

$Subject2 = "Mobile Course Application"; 
$MailTo2 = $_POST['email'];




$Body2 = "<p>Dear applicant<u></u><u></u></p>
<p><u></u> <u></u></p>
<p>Thank you for submitting an online application for your course.</p>

<h3>Community Fun Day in Lloyd Park<h3>
<p>(Winns Avenue, Walthamstow E17 5JW)</p>
<p>Saturday 15 June 2013<p>
<p>11.00am - 3.00pm<p>

<img src='http://www.waltham.ac.uk/m/images/Family-Funday.jpg'>
";
 

$headers2 = "Content-type: text/html; charset=iso-8859-1"; 
$headers2 .= "From: Waltham_Collage_Application_Form<".$MailTo.">"; 


mail($MailTo2, "$Subject2", "$Body2", "$headers2", "-f ".$MailTo ); 

}else {  }

	}
	
	
	
		/////////////////////////////////////////////////////////////////////////////////////////////////////////

	
}





?>