
<?php
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

$sql = 'SELECT * FROM user_form_info';

mysql_select_db('precitb3_pmtuserinfo');
$retval = mysql_query( $sql, $dbh );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

	echo "<table border=1 cellpadding=2>";
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
echo "</table>";
echo "Fetched data successfully\n";
mysql_close($dbh);
?>
