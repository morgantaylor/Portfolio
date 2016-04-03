<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent= $name . "\r\n\n" . $message;
$recipient = "mtwebmedia@gmail.com";
$subject = "MTWebmedia Contact Form";
$mailheader = $email;
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>
 
    
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Me</title>
<style>
html {margin:0 auto;width:100%;background: #f7f5f0;}
body {margin:0 auto;width:100%;font-family: 'Open Sans', sans-serif;font-size:14px;font-style:normal;font-weight:400;height:auto;}
form {max-width:100%;min-width:20%;color:#222;margin:5px;padding:15px;}
.content{margin:8px;}
.content h2 {color:#ff9904;padding-bottom:20px;}
.fillfield {display:block;clear:both;height:40px;margin: 5px 0px 10px 0px;max-width: 300px;width:100%;padding: 10px;border-radius:5%;}
.return-text {width:100%;max-width: 200px;margin:10px 20px 20px 0px; color:#000;}
.form label {color:#222;font-size:14px;display:block;}
.form div {display:block;margin-bottom:15px;}
.form input,.form select,.form textarea {border-width:1px;border-style:solid;border-color:#666;border-radius:10px;padding:5px;width:100%;}
#form {max-width:600px;margin-left:auto;margin-right:auto;}
.form textarea {margin-top:5px;height:100px; width:100%;}
.form input[type=submit] {width:20%;height:40px;background-color:#0399ff;color:#fff;font-size:18px;}
.form input[type=submit]:hover {background-color:#0066BC;}
.field {margin-bottom:5px;}


@media screen
 and (max-width:500px) {
	textarea {max-width:280px;width:100%;height:250px;} 
 }

</style>
</head>

<body>



<form id="form" class="form" enctype="multipart/form-data" action="contact.php" method="POST">
<div class="content">
<h2>Send me a message!</h2>
<div class="field">
<label>Your Name: </label><input class="fillfield" type="text" required="" name="name" value="Your Name">
</div>
<div class="field">
<label>Your Name: </label><input class="fillfield" type="text" required="" name="email" value="Your Email">
</div>
<div class="field"><label for="Message">Message:</label>
<textarea id="Message" name="message" value="Type your message here" maxlength="150" wrap="hard"></textarea>
</div>

<p><input type="submit" class="submit" name="submit" id="submit" value="Submit"></p>
</div>
</form>

	
</body>
</html>




