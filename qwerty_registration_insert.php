<?php
include('qwerty_dbconnect.php');
$name=$_POST['name'];
$branch=$_POST['branch'];
$usn=$_POST['usn'];
$year=$_POST['year'];
$phone_no=$_POST['phoneno'];
$email=$_POST['email'];
$resume=$_FILES['resume']['name'];
$tmp_location=$_FILES['resume']['tmp_name'];
$target="../img/".$resume;
move_uploaded_file($tmp_location,$target);
$roles = implode(",", $_POST['roles']);






$sql="insert into registration values(null,'$name','$branch','$usn','$year','$phone_no','$email','$resume','$roles')";
mysqli_query($conn,$sql);
?>
<script>
alert("Form Submitted....");
document.location="index.html"
</script>