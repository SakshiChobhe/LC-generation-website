<?php
include('dbconfig.php');
extract($_POST);
	if(isset($_POST['submit']))
	{
$enroll = $_POST['tx1'];
$fname = $_POST['tx2'];
$dept = $_POST['depa'];
$year = $_POST['tx3'];
$reason = $_POST['tx4'];
//$fee = $_FILES['fee']['name'];
//$scholarship = $_FILES['scholarship']['name'];
/*$sem1 = $_FILES['sem1']['name'];
$sem2 = $_FILES['sem2']['name'];
$sem3 = $_FILES['sem3']['name'];
$sem4 = $_FILES['sem4']['name'];
$sem5 = $_FILES['sem5']['name'];
$sem6 = $_FILES['sem6']['name'];*/


/*$conn = new mysqli('localhost','root','','final');

if ($conn->connect_error) 
{
	die('Connection Failed : '.$conn->connect_error);
}fee, scholarship, sem1, sem2, sem3, sem4, sem5, sem6)
'$fee' , '$scholarship', '$sem1', '$sem2', '$sem3', '$sem4', '$sem5', '$sem6')
else
{*/
	mysqli_query($conn,"insert into request(rid,enroll, sname, course, year, reason) 
		values(' ', '$enroll', '$fname', '$dept', '$year', '$reason')");
	//$stmt->execute();

	//upload image

mkdir("admin/documents/$enroll");
move_uploaded_file($_FILES['fee']['tmp_name'],"admin/documents/$enroll/".'fee.pdf');
move_uploaded_file($_FILES['scholarship']['tmp_name'],"admin/documents/$enroll/".'scholarship.pdf');
move_uploaded_file($_FILES['app']['tmp_name'],"admin/documents/$enroll/".'application.pdf');
move_uploaded_file($_FILES['sem1']['tmp_name'],"admin/documents/$enroll/".'sem1.pdf');
move_uploaded_file($_FILES['sem2']['tmp_name'],"admin/documents/$enroll/".'sem2.pdf');
move_uploaded_file($_FILES['sem3']['tmp_name'],"admin/documents/$enroll/".'sem3.pdf');
move_uploaded_file($_FILES['sem4']['tmp_name'],"admin/documents/$enroll/".'sem4.pdf');
move_uploaded_file($_FILES['sem5']['tmp_name'],"admin/documents/$enroll/".'sem5.pdf');
move_uploaded_file($_FILES['sem6']['tmp_name'],"admin/documents/$enroll/".'sem6.pdf');

	?>
	<script>
		alert('Form Filled Successfully !!');
		window.location.href='info.php';
	</script>

	<?php
//header('location:info.php');
	//$stmt->close();
	//$conn->close();
}
?>