<!DOCTYPE html>
<html>
<head>
<title>Dr Singh's Dental Clinic | Delivering Smiles</title>
<meta name="keywords" content="dentist, good dentist, dentist delhi, cheap good dentist, dentist south delhi">	
<meta charset="utf-8" name="Perfect 32 Dental Care" content="dentist delhi">
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<script language="JavaScript" src="Jscripts/gen_validatorv31.js" type="text/javascript"></script>
<body>
	<div id="header">
                        <div id="logo" style="position:relative;">
                                <a href="index.html"><img class="bottom"src="images/newlogo.png"  style="position:absolute; bottom:0; "height="100px" width="350px"alt="" /></a>                
                        </div>          
                        <div id="logo1" style="position:relative;">
                                <a href="index.html"><img src="images/new_logo.jpg"  style="position:absolute; bottom:0;" height="100px" width="350px"alt="" /></a>                            
                        </div>  
			<ul>
				<li><a href="index.html"><span>home</span></a></li>
				<li><a href="services.html"><span>services</span></a></li>
				<li  class="selected"><a href="testi.html"><span>testimonials</span></a></li>
				<li><a href="contact.html"><span>contact us</span></a></li>			
			</ul>
	</div>
	<div id="body">
		<div class="contact">
			<h1>Testimonials</h1>
			<p>We would like to hear from you. Please send us your commments, suggestions, complaints through the following form. Selected testimonials shall be displayed on the website </p>
			<div>	
			<h3>Tell us what you think of us :</h3>

<?php
//if(isset($_POST['name'])){ $name = $_POST['name']; } 
//if(isset($_POST['email'])){ $email = $_POST['email']; } 
//if(isset($_POST['message'])){ $message = $_POST['message']; } 

if(!isset($_POST['submit']))
{
?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" name="myemailform">

<fieldset>
				<!--legend>Testimonial</legend-->
				<p>Full Name :<br><input type="text" name="name"><br>
				   Email Address  :<br><input type="text" name="email"><br>
				   Comment   :<br><textarea rows="4" cols="50" name="message"></textarea><br>
				<input type="submit" name="submit" value="Submit">
				<input type="reset" value="Reset">

			</fieldset>

  </form>
  <?php
} else {    // the user has submitted the form    	//This page should not be accessed directly. Need to submit the form.
if (isset($_POST["email"])){
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = $visitor_email;//<== update the email address
$email_subject = "New Testimonial";
$email_body = "You have received a new message from the user - $name.\n".
    "Here is the message:\n $message".
    
$to = "drjskaransingh@outlook.com";//<== update the email address
//$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
echo "Thank you for sending us feedback";
//done. redirect to thank-you page.
//header('Location: thank-you.html');


// Function to validate against any email injection attempts
}
}   
?> 
			
			<h3>Recent Testimonials</h3>
                        <ul class="news">
                                <li>
                                       <fieldset> "Dr. Singh has a big butt and I like it." - Anonymous</fieldset>
                                </li>
                                <li>
                                        <fieldset>"The equipment here tastes like stale paan and I love it" - Ram charan</fieldset>
                                </li>
                                <li>
                                        <fieldset>"Daktar Sahab bahot badhiya insaan hain"- Asharam</fieldset>
                                </li>
                                <li>
                                        <fieldset>"Meri maano aur kisi achche Doctor ko dikha lo, inke chakkar mein mat pado" - Hot_Tina91</fieldset>
                                </li>
                                <li>
                                        <fieldset>"Best nimbu pani in town, right behind the clinic, must try." - Jaskaran</fieldset>
                                </li>
                        </ul>

			</div>	
		</div>
	</div>
                <div id="footer">
                        <div>
                                <div>
                                <h3>Netaji Nagar</h3>
                                <ul>
                                        <li>+91-9711928585 mobile</li>
                                        <li>011-26118002 clinic</li>
                                </ul>
                        </div>
                        <div>
                                <h3>Kalkaji</h3>
                                <ul>
                                        <li>+91-9711528585 mobile</li>
                                </ul>
                        </div>
                        <div>
                                <ul>
                                        <li>Click <a href="Perfect32_Brochure.pdf"><span>here</span></a> to Download our Brochure</li>
                                </ul>
                        </div>
                        <div>
                                <h3>follow us on facebook:</h3>
                                <a class="facebook" href="https://www.facebook.com/perfect32dentalcarenetajinagar" target="_blank">facebook</a>
                        </div>
                </div>
                <div>
                        <p>&copy Copyright 2014. All rights reserved</p>
                </div>
        </div>

	</body>
</html>
