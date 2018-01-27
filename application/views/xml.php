<?php
//include "connection.php";

$hostname_conn = "localhost";
$database_conn = "pharmacovigilance";
$username_conn = "root";
$password_conn = "eng_hoba123";
$conn = new mysqli("localhost", "root", "eng_hoba123", 
	"pharmacovigilance")or trigger_error(mysqli_error(),E_USER_ERROR); 
$db=mysqli_select_db($database_conn,$conn);




$myFile = "rss.xml";
$fh = fopen($myFile,'w') or die("can't open file");
exit ;

$rss_txt .= '<?xml version="1.0" encoding="utf-8"?>';
$rss_txt .= "<rss version='2.0'>";
$rss_txt .= '<channel>';
    $query = mysql_query("SELECT * FROM  drug_status");
    while($values_query = mysql_fetch_assoc($query))
    {
        $rss_txt .= '<item>';

        $rss_txt .= '<id>' .$values_query['drug_status_id']. '</id>';
        $rss_txt .= '<desc>' .$values_query['drug_status_desc']. '</desc>';
        $rss_txt .= '</item>';
    }
$rss_txt .= '</channel>';
$rss_txt .= '</rss>';

fwrite($fh,$rss_txt);
fclose($fh);
?>