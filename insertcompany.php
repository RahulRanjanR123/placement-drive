<?php
// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("placement",$con);
 
$cname=$_POST['cname'];
$addrs=$_POST['addrs'];
$email=$_POST['email'];
$Phone=$_POST['Phone'];
$alterno=$_POST['alterno'];
$website=$_POST['website'];




$sql="INSERT INTO company(cname,addrs,email,Phone,alterno,website) VALUES('$cname','$addrs','$email','$Phone','$alterno','$website')";

if(!mysql_query($sql,$con))
die('Error: ' . mysql_error());
echo "1 record added";
mysql_close($con)
?>

