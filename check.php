
<!--Created By Manish Singh Bhakuni (MSB)-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow" />
    <title>Contact Us </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        #echodiv{width:550px}@media screen and (max-width:425px){#echodiv{width:100%}}
    </style>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175974840-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'UA-175974840-1');
        </script>

</head>

<body> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFWMXTH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <?php 
    session_start();
	if(isset($_REQUEST['fname']) && ($_REQUEST['phone'])) 
	{ 
 $fname = $_REQUEST['fname'];
 $name = $fname; 
 $phone = $_REQUEST['phone']; 
 $email = $_REQUEST['email'];
$comment = $_REQUEST['message'];
 $to = 'msbonlinework@gmail.com'; 
 $subject = "Contact Request";
 $from = $email; 
 // To send HTML mail, the Content-type header must be set 
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 // Create email headers

 $headers .= 'From: '.$from."\r\n". 'Reply-To: '.$from."\r\n" . 'X-Mailer: PHP/' . phpversion(); 
 
 // Compose a simple HTML email message
  $message = '<html><body>'; 
 $message .= '<div style="text-align:center"> <img src="images/logo.png" alt=""style="text-align:center" align="center"></div>';
 $message .= '<p style="color:#000;font-size:14px;">Name : ' .$name. '</p>'; 
 $message .= '<p style="color:#000;font-size:14px;">Email : ' .$email. '</p>';
 $message .= '<p style="color:#000;font-size:14px;">'; 
 $message .= '<p style="color:#000;font-size:14px;">Phone : ' .$phone. '</p>';
 $message .= '<p style="color:#000;font-size:14px;">'; 
 $message .= '<p style="color:#000;font-size:14px;">Comment : ' .$comment. '</p>'; $message .= '</body></html>'; $urlredirect = "https://vichitraworld.com/tattoo/";
 
 // Sending email
 if(mail($to, $subject, $message, $headers))
 { 
echo '<div class="d-flex justify-content-center align-items-center" id="" style="height:100vh; "><div class="container"><div class="row justify-content-center" id="echodiv" style=" background:#fff; box-shadow: 1px 1px 4px 1px #2d2d2d; padding:50px 0px 50px 0px; margin: auto;"><div class="col-12 col-md-11 col-lg-11 col-xl-11"><hr style="text-align:center; background-color:green; width:20%; height:1px"><h4 class="text-center text-success pt-4">Your details have been submitted successfully here.</h4><div class="pt-5"><p class="text-center">Our Team will be contacting you soon</p></div><div class="pt-3 text-center"> <a href="javascript:history.back()" class=""><button style="width:20%; padding:5px; border-radius:60px; border:none; background:green; color:#fff; font-weight:500;">OK</button></a></div></div></div></div></div>'; } else{ echo '<div style="font-size:17px; color:#FF0024; font-weight:bold;">Unable to send email. Please try again.</div>'; }

//header("Location:".$urlredirect."?message=1");


 }
 ?>
</body>

</html>