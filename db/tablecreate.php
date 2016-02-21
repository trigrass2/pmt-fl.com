
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
$sql = "CREATE TABLE user_form_info( ".
       "user_id INT NOT NULL AUTO_INCREMENT, ".
       "user_name VARCHAR(100) NOT NULL, ".
       "user_company VARCHAR(40) , ".
	   "user_phone VARCHAR(40) NOT NULL, ".
	   "user_email VARCHAR(40) NOT NULL, ".
	   "user_subject VARCHAR(40) , ".
	   "user_msg VARCHAR(1000) , ".
       "submit_date DATE, ".
	   "region_type INT, ".
	   "info_type INT NOT NULL, ".
       "PRIMARY KEY ( user_id )); ";
mysql_select_db( 'precitb3_pmtuserinfo' );
$retval = mysql_query( $sql, $dbh );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($dbh);
?>