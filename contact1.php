<?php
include("databaseconnection.php");
?><html>
<head>
<title>html contact form</title>
<style>
{
	font-family: 'Roboto', sans-serif;
	font-weight: 400;
	font-height:100%;
}

/* Remove outline of all elements on focus */
*:focus {
	outline: 0;
}
body {
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}
h3 {
	text-align: center;
}

/* Add styles to 'container' class */
.container {
	padding: 12px 24px 24px 24px;
	margin: 48px 12px;
	background: #E3F2FD;
	border-radius: 4px;
}

/* Add styles to 'label' selector */
label {
	font-size: 0.85em;
	margin-left: 12px;
}

/* Add styles to 'input' and 'textarea' selectors */
input[type=text],input[type=email], textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

/* Add styles to show 'focus' of selector */
input[type=text]:focus,input[type=email]:focus, textarea:focus {
	border: 1px solid green;
}

/* Add styles to the submit button */
input[type=submit] {
	background: #64B5F6;
	margin: 0 auto;
	outline: 0;
	color: white;
	border: 0;
	padding: 12px 24px;
	border-radius: 4px;
	transition: all ease-in-out 0.1s;
	position: relative;
	display: inline-block;
	text-align: center;
}

/* Add styles for 'focus' property */
input[type=submit]:focus {
	background: #A5D6A7;
	color: whitesmoke;
}

/* Style 'hover' property */
input[type=submit]:hover {
	background: #2196F3;
}

/* Align items to center of the 'div' with the class 'center' */
.center {
	text-align: center;
}
    
</style>
</head>
<body>
	<h2 style=color:green;>ONLINE RAIL RESERVATION</h2>
	
    <div class="container">
	<h3>Contact Form</h3>
	<form name="frmcontact" method="POST" action="user_process.php">
		<label for="name">Name:</label>
		<input name="name" type="text" id="name" required placeholder="Enter your name"/>
		<br>
		<label for="email">Email</label>
		<input name="email" type="email" required placeholder="Enter your email address"/>
		<br>
		<label for="phone No.">Phone No.</label>
		<input name="phoneno" id="phoneno" type="text" required placeholder="Enter your phone number"/>
		<br>
		<label for="message">Message</label><br>
		<textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message here ..." required> </textarea>
		<div class="center">
			<input type="submit" name="submit" id="submit" value="Submit">
		</div>
	</form>	
</div>
</body>
</html>









