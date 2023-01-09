<?php
$mysqli=new mysqli('localhost','root','','comlabdb')or die(mysqli_error($mysqli));
if(isset($_POST['submit'])){
	
$ID=$_POST['ID'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$fname=$_POST['fname'];
$course=$_POST['course'];
$email=$_POST['email'];
$contactnum=$_POST['contact_num'];
$password=$_POST['password'];

// mysqli_query and variable must be no space
mysqli_query($mysqli,"INSERT INTO tblstudents(stud_id,lname,mname,fname,course,email,contact_num,password) 
VALUES('$ID','$lname','$mname','$fname','$course','$email','$contactnum','$password')")or die($mysqli->error); 
}
$_SESSION['message']="Record has been saved!";
$_SESSION['msg_type']="success";
header("location: home.php");

/*
if(isset($_GET['delete'])){
$bookaccno=$_GET['delete'];
$sqldelete=("DELETE FROM tbl_books WHERE BookAccNo=$bookaccno")or die($mysqli->error());
$_SESSION['message']="Record has been deleted!";
$_SESSION['msg_type']="danger";
header("location: home.php");
}
*/
?>
