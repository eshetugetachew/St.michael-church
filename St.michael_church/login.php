<html>
<head>
<title>login_page</title>
</head>
<body>
<?php
$name=$_POST['name'];
$Password=$_POST['password'];
$conn = mysql_connect("localhost","root");
mysql_select_db( "test",$conn);
$sql = "select * from new where name='".$name."' and password='".$Password."'";
$result = mysql_query($sql,$conn);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo $records;
echo '<script type="text/javascript">alert("username and password is incorrect");window.location=\'index.html\';</script>';
} 
else 
{
echo '<script type="text/javascript">alert("logged_in!");window.location=\'home.html\';</script>';
}
mysql_close($conn);
?>
