<?php
$dbhost = 'localhost';
$dbuser = 'precitb3_pmtdb1';
$dbpass = 'zq7cTw*nevmy';
$file = "weekly";

$dbh = mysql_connect ($dbhost, $dbuser, $dbpass)
or die ('I cannot connect to the database.');
//mysql_select_db ("precitb3_pmtuserinfo");

if(! $dbh )
{
  die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully<br />';

echo strtotime("-1 week")."<br />";

$lastWeek = time() - (7 * 24 * 60 * 60);
               // 7 days; 24 hours; 60 mins; 60secs
  echo 'Now:       '. date('Y-m-d') ."<br />";
  echo 'Last Week: '. date('Y-m-d', $lastWeek) ."<br />";
  $startDate = date('Y-m-d', $lastWeek);
  echo strtotime($startDate);



$sql = "SELECT * FROM user_form_info WHERE UNIX_TIMESTAMP( submit_date ) >= ".strtotime($startDate)." ORDER BY submit_date";

/*$sql = "SELECT * INTO OUTFILE '/reports/weekly.csv'"
	." FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"'"
	." ESCAPED BY '\\'"
	." LINES TERMINATED BY '\n'"
	." FROM user_form_info WHERE UNIX_TIMESTAMP( submit_date ) >= ".strtotime($startDate)." ORDER BY submit_date";*/

mysql_select_db('precitb3_pmtuserinfo');
$retval = mysql_query( $sql, $dbh );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$csv_output = "Name,Company,Phone,Email,Subject,Msg,Date,Region,Type\n";

while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{

$csv_output .= "\"{$row['user_name']}\",";
$csv_output .= "\"{$row['user_company']}\",";
$csv_output .= "\"{$row['user_phone']}\",";
$csv_output .= "\"{$row['user_email']}\",";
$csv_output .= "\"{$row['user_subject']}\",";
$csv_output .= "\"{$row['user_msg']}\",";
$csv_output .= "\"{$row['submit_date']}\",";
$csv_output .= "\"{$row['region_type']}\",";
$csv_output .= "\"{$row['info_type']}\"";
$csv_output .= "\n";
} 


//error_reporting(E_ALL);
//ini_set('display_errors', 'On');


echo "Fetched data successfully\n";
echo $csv_output;

$filename = $file."_".date("Y-m-d",time()).".csv"; 
file_put_contents($filename, $csv_output);
/*header("Content-type: application/vnd.ms-excel");
header("Content-disposition: csv" . date("Y-m-d") . ".csv");
header("Content-disposition: filename=".$filename.".csv");
print $csv_output;
exit;*/

//EMAIL IT!
ini_set("include_path", ".:/usr/lib/php:/home/precitb3/php");
//include_once('PEAR.php');
include_once('Mail.php');
include_once('Mail_Mime/mime.php');
//The code below composes and sends the email


$to = "eric_marschall@pmt-fl.com, eric@ejmdesigns.com";
$from = "IT <eric_marschall@pmt-fl.com>";
$visitor_email = "noreply@pmt-fl.com";
$subject = "Weekly Contacts Update";
$text = "Attached is your weekly review of collected contacts.";
  
$message = new Mail_mime();
 
$message->setTXTBody($text);
 
$message->addAttachment($filename);
 
$body = $message->get();
 
$extraheaders = array("From"=>$from, "Subject"=>$subject,"Reply-To"=>$visitor_email);
 
$headers = $message->headers($extraheaders);
 
$mail = Mail::factory("mail");
 
$mail->send($to, $headers, $body);



 /*$thisfile = $filename;

  $to = "eric_marschall@pmt-fl.com, eric@ejmdesigns.com";

  $subject = "Weekly Contacts Update";

  $random_hash = md5(date('r', time()));

  $headers = "From: sales@pmt-fl.com\r\nReply-To: noreply@pmt-fl.com";

  $headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";

  $attachment = chunk_split(base64_encode(file_get_contents($filename)));

  $output = "
  --PHP-mixed-$random_hash
  Content-Type: multipart/alternative; boundary='PHP-alt-$random_hash'
  --PHP-alt-$random_hash
  Content-Type: text/plain; charset='iso-8859-1'
  Content-Transfer-Encoding: 7bit

  Hello World!
  This is the simple text version of the email message.

  --PHP-alt-$random_hash
  Content-Type: text/html; charset='iso-8859-1'
  Content-Transfer-Encoding: 7bit

  <h2>Hello World!</h2>
  <p>This is the <b>HTML</b> version of the email message.</p>

  --PHP-alt-$random_hash--

  --PHP-mixed-$random_hash
  Content-Type: application/zip; name=$filename
  Content-Transfer-Encoding: base64
  Content-Disposition: attachment

  $attachment
  --PHP-mixed-$random_hash--";

  @mail($to, $subject, $output, $headers);*/

mysql_close($dbh);
?>
