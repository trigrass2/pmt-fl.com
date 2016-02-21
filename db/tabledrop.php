
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
echo 'Connected successfully<br />';
$sql = "DROP TABLE user_form_info";
mysql_select_db( 'precitb3_pmtuserinfo' );
$retval = mysql_query( $sql, $dbh );
if(! $retval )
{
  die('Could not drop table: ' . mysql_error());
}
echo "Table dropped successfully\n";
mysql_close($dbh);
?>