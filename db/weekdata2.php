<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');


$dbhost = 'localhost';
$dbuser = 'precitb3_pmtdb1';
$dbpass = 'zq7cTw*nevmy';

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



//$sql = "SELECT * FROM user_form_info WHERE UNIX_TIMESTAMP( submit_date ) >= ".strtotime($startDate)." ORDER BY submit_date";

/*$sql = "SELECT * INTO OUTFILE '/reports/weekly.csv'"
	." FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"'"
	." ESCAPED BY '\\'"
	." LINES TERMINATED BY '\n'"
	." FROM user_form_info WHERE UNIX_TIMESTAMP( submit_date ) >= ".strtotime($startDate)." ORDER BY submit_date";*/
	
//ENTERED CODE


<?php
/* vars for export */
// database record to be exported
$db_record = 'weekly';
// optional where query
$where = "WHERE UNIX_TIMESTAMP( submit_date ) >= ".strtotime($startDate)." ORDER BY submit_date";
// filename for export
$csv_filename = 'export_'.$db_record.'_'.date('Y-m-d').'.csv';

mysql_select_db('precitb3_pmtuserinfo');
$retval = mysql_query( $sql, $dbh );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

 
// create empty variable to be filled with export data
$csv_export = '';
 
// query to get data from database
$query = mysql_query("SELECT * FROM ".$db_record." ".$where);
$field = mysql_num_fields($query);
 
// create line with field names
for($i = 0; $i < $field; $i++) {
  $csv_export.= mysql_field_name($query,$i).';';
}
// newline (seems to work both on Linux & Windows servers)
$csv_export.= '
';
 
// loop through database query and fill export variable
while($row = mysql_fetch_array($query)) {
  // create line with field values
  for($i = 0; $i < $field; $i++) {
    $csv_export.= '"'.$row[mysql_field_name($query,$i)].'";';
  }	
  $csv_export.= '
';	
}
 
// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($csv_export);
?>


//END CODE	
	
	
	
	



/*	echo "<table border=1 cellpadding=2>";
	echo "<tr><td>Name</td>";
	echo "<td>Company</td>";
	echo "<td>Phone</td>";
	echo "<td>Email</td>";
	echo "<td>Subject</td>";
	echo "<td>Msg</td>";
	echo "<td>Date</td>";
	echo "<td>Region</td>";
	echo "<td>Type</td></tr>\n";

while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
	echo "<tr>";
	echo "<td>{$row['user_name']}</td>";
	echo "<td>{$row['user_company']}</td>";
	echo "<td>{$row['user_phone']}</td>";
	echo "<td>{$row['user_email']}</td>";
	echo "<td>{$row['user_subject']}</td>";
	echo "<td>{$row['user_msg']}</td>";
	echo "<td>{$row['submit_date']}</td>";
	echo "<td>{$row['region_type']}</td>";
	echo "<td>{$row['info_type']}</td>";
	echo "</tr>\n";
} 
echo "</table>";*/
echo "Fetched data successfully\n";
mysql_close($dbh);
?>
