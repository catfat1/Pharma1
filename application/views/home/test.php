<?php

session_start();
// require_once('Connections/conn.php');

if (isset($_POST['name'],$_POST['password']))
	{
	
	$name=$_POST['name'];
	$password=$_POST['password'];
	}

$mysqli = new mysqli("localhost", "root", "", "pharmacovigilance");
if($mysqli->connect_error)
{
	//echo $mysqli->connect_error;
}
else 
{
	//echo "connected to my server";
	$sql="select * from user where user_password='".$password."' and user_name='".$name."'" ;
	$res = $mysqli->query($sql);

	if(mysqli_num_rows($res)>0)
		{
		$_SESSION['flag']=1;
		header("location:index.php");
		}
	else
		{
		header("location:index.php");
		}


}

//mysqli_connect('localhost','root','eng_hoba123');
//mysqli_select_db("pharmacovigilance");
//$sql="select * from user";
//$res = $mysqli_query->query($sql);
//echo $res;



/*

if (isset($_POST['name'],$_POST['password']))
	{
	
	$name=$_POST['name'];
	$password=$_POST['password'];

echo $name;
echo $password;*/

/*

	$sql="select * from user where user_password='".$password."' and user_name='".$name."'" ;
	echo $sql;
	//$res=mysql_query($sql);
	// $res = $mysqli->query($sql);
	 $res = $mysql_query->query($sql);
	$outp=mysql_fetch_assoc($res);
	if(mysql_num_rows($res)>0)
		{
		$_SESSION['flag']=1;
		header("location:index.php");
		}
	else
		{
		header("location:index.php");
		//echo "bad";
		}
	
	}*/
?>
<?php 


	if (isset($_POST['name'],$_POST['password']))

	{

	$name=$_POST['name'];

	$password=$_POST['password'];

	echo $name;
	echo $password;


	}


//$sql="select * from user";
//$res = $mysql_query->query($sql);
//if($res) echo "1"


?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>



</body>
</html>
