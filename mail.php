<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['contactnumber'];
$subjects = $_POST['subjects'];
$comments = $_POST['comments'];


$to = "sales@sgstechnologies.in";
$subject = "Contact Us Page";

$message = "
<html>
<head>
<title>Contact Us Page</title>
</head>

<body>

<table>

<tr><td>Name : </td> <td>" . $name . "</td></tr>
<tr><td>EMail Id: </td> <td>" . $email . "</td></tr>
<tr><td>Contact Number : </td> <td>" . $number . "</td></tr>
<tr><td>Subject : </td> <td>" . $subjects . "</td></tr>
<tr><td>Comment : </td> <td>" . $comments . "</td></tr>

</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



mail($to, $subject, $message, $headers);

echo "<script>alert(' THANK YOU FOR CONTACTING SILVERBIRCH HOSPITAL WE LOOK FORWARD TO WORKING WITH YOU SOON');location.replace('index.php')</script>";
?>