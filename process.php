<?php
$con=mysqli_connect("localhost","root","","details");
/*
if(!$con)
{
	die("could not connected.");
}
else
{
	echo '<script>alert("connected succesfully");</script>';
}
*/
//--------------------------------------create databse----------------------------------------
/*$db="CREATE DATABASE details";
mysqli_query($con,$db);*/

//--------------------------------------create table------------------------------------------
/*$sql="CREATE TABLE feedd(
Fname VARCHAR(30) NOT NULL,
Lname VARCHAR(30) NOT NULL,
contact VARCHAR(10) unique,
Email VARCHAR(50),
date VARCHAR(30) NOT NULL,
time VARCHAR(30) NOT NULL,
event VARCHAR(30) NOT NULL,
loc VARCHAR(30) NOT NULL,
msg VARCHAR(100)
)";
if(mysqli_query($con,$sql))
{
	echo '<script>alert("table created succesfully");</script>';
}
else
{
	echo "Error creating table:".mysqli_error($con);
}
*/
//------------------------------inserting data in table using form----------------------------

$fn=$_REQUEST['Fname'];
$ln=$_REQUEST['Lname'];
$eid=$_REQUEST['Email'];
$ct=$_REQUEST['contact'];
$date=$_REQUEST['date'];
$time=$_REQUEST['time'];
$event=$_REQUEST['event'];
$loca=$_REQUEST['loc'];
$com=$_REQUEST['msg'];
$a="insert into feedd(Fname,Lname,Email,contact,date,time,event,loc,msg)values('$fn','$ln','$eid','$ct','$date','$time','$event','$loca','$com')";
if(mysqli_query($con,$a))
{
	echo '<script>alert("inserted succesfully");</script>';
}
else
{
	echo "Error inserting:".mysqli_error($con);
}


mysqli_close($con);


?>