<?php

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$education = $_POST['education'];
$detail_use = $_POST['detail_use'];

$message = "The contact form has just been filled. Here are the details: \n";
$message .= "Name: " . $full_name . "\n";
$message .= "Email: " . $email . "\n";
$message .= "Gender: " . $gender . "\n";
$message .= "Address: " . $address . "\n";
$message .= "Level of education: " .$education . "\n";
$message .= "Allow usage of information: " . $detail_use . "\n";


$myfile = fopen($full_name . ".txt", "w") or die("Unable to open file!");
fwrite($myfile, $message);
fclose($myfile);

echo "Your file has been downloaded, Please check your current directory"
?>
