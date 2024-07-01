<?php
include('qwerty_dbconnect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];





$sql="insert into contact values(null,'$name','$email','$phone','$message')";
mysqli_query($conn,$sql);
?>
<script>
alert("Thank you for reaching out to us .....");
document.location="contact.html"
</script>