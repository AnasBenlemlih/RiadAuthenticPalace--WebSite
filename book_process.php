<?php

    $to = "anas.benlemlih@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
	$cmessage = $_REQUEST['message'];
	$cmobile = $_REQUEST['mobile'];
	$pays = $_REQUEST['Pays'];


	$datepicker1 = $_REQUEST['datepicker1'];
	$datepicker2 = $_REQUEST['datepicker2'];
	$adult = $_REQUEST['select1'];
	$Children = $_REQUEST['select2'];
	$Rooms = $_REQUEST['select3'];





    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr><tr>";
	
	$body .= "<td style='border:none;'><strong>Num:</strong> {$cmobile}</td>";
	$body .= "<td style='border:none;'><strong>Pays:</strong> {$pays}</td>";

	$body .= "<td style='border:none;'><strong>Check In Date:</strong> {$datepicker1}</td>";
	$body .= "<td style='border:none;'><strong>Check OutDate:</strong> {$datepicker2}</td>";

	$body .= "<td style='border:none;'><strong>adult:</strong> {$adult}</td>";
	$body .= "<td style='border:none;'><strong>Children:</strong> {$Children}</td>";
	$body .= "<td style='border:none;'><strong>Rooms:</strong> {$Rooms}</td>";

	
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'><strong>Message:</strong>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

?>