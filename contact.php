<?php
$conn = mysqli_connect("localhost","root","","rait");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if(isset($_POST['contact_submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$number=$_POST['number'];
$year=$_POST['year'];
$field=$_POST['field'];
$query=$_POST['query'];
//Database Connection

$stmt = mysqli_query($conn,"INSERT INTO form(first_name, last_name, email_id, contact_number, year, field ,queries) values('".$firstname."','".$lastname."','".$email."','".$number."','".$year."','".$field."','".$query."')");

echo "Submitted";
}
else
{
echo "<script>window.location='index.html'</script>";
}
?>