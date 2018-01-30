<?php

$hostname_conn = "localhost";
$database_conn = "pharmacovigilance";
$username_conn = "root";
$password_conn = "enghoba_123";
$mysqli = new mysqli("localhost", "root", "enghoba_123", 
	"pharmacovigilance")or trigger_error(mysqli_error(),E_USER_ERROR); 


 


$myFile = "rss".date("Y-m-dHis").".xml";
$myFilePath = "application/views/xml/rss".date("Y-m-d His").".xml";
$fh = fopen($myFilePath,'w') or die("can't open file thhhhh");


//start of the file xml 
$rss_txt='';
$rss_txt .= '<?xml version="1.0" encoding="iso-8859-1"?>'."\n";
$rss_txt .='<!DOCTYPE ichicsr SYSTEM "http://eudravigilance.ema.europa.eu/dtd/icsr21xml.dtd">'."\n";
$rss_txt .= "<rss version='2.0'>"."\n";
$rss_txt .='<ichicsr lang="en">'."\n"."\t";

$rss_txt .='<ichicsrmessageheader>'."\n"."\t"."\t";
	$rss_txt .='<messagetype>ichicsr</messagetype>'."\n"."\t"."\t";
	$rss_txt .='<messageformatversion>2.1</messageformatversion>'."\n"."\t"."\t";
	$rss_txt .='<messageformatrelease>2.0</messageformatrelease>'."\n"."\t"."\t";
	$rss_txt .='<messagenumb>EG-EEPI-84</messagenumb>'."\n"."\t"."\t";
	$rss_txt .='<messagesenderidentifier>EEPI</messagesenderidentifier>'."\n"."\t"."\t";
	$rss_txt .='<messagereceiveridentifier>1</messagereceiveridentifier>'."\n"."\t"."\t";
	$rss_txt .='<messagedateformat>204</messagedateformat>'."\n"."\t"."\t";
	$rss_txt .='<messagedate>20180123092020</messagedate>'."\n"."\t";
$rss_txt .='</ichicsrmessageheader>';





$rss_txt .= '<channel>'."\n";



$sql=("SELECT * FROM drug_status");
$res = $mysqli->query($sql);
     while($row = mysqli_fetch_assoc($res))
   {


   		$rss_txt .= '<item>'."\n";
     	$rss_txt .= '<id>'.$row['drug_status_id']. '</id>'."\n";
      	$rss_txt .= '<desc>' .$row['drug_status_desc']. '</desc>'."\n";
     	$rss_txt .= '</item>'."\n";
   }
 $rss_txt .= '</channel>'."\n";
$rss_txt .='</ichicsr>'."\n"."\t";
 $rss_txt .= '</rss>'."\n";

 fwrite($fh,$rss_txt);
fclose($fh);



 header('Content-Type: application/download');
 header("Content-Disposition: attachment; filename=$myFile");
 header( 'Content-Length:'. filesize($myFilePath));
 $fp = fopen($myFilePath, "r");
 fpassthru($fp);

fclose($fp);
?>
