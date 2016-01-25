<?php
session_start();
if(isset($_SESSION['formdata'])!="")
{
 header("Location: index.html");
}
include_once 'formtableconnect.php';

if(isset($_POST['register']))
{
 $fname = mysql_real_escape_string($_POST['fname']);
 $lname = mysql_real_escape_string($_POST['lname']);
 $address = mysql_real_escape_string($_POST['address']);
 $contact = mysql_real_escape_string($_POST['contact']);
 $email = mysql_real_escape_string($_POST['email']);
 $question = mysql_real_escape_string($_POST['question']);
 $subject = mysql_real_escape_string($_POST['subject']);
 
 if(mysql_query("INSERT INTO `formdata` (`fname`, `lname`, `contact`,'address',`email`, `subject`,'question')VALUES('$fname','$lname','$contact','$address','$email','$subject','$question')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
