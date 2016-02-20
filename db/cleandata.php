<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

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

$sorting = $_GET['q'];
$rev = $_GET['o'];
$del = $_GET['d'];
$rowclr = "one";
$dq = '';
$qst = '';
$meta = '';

if($sorting){ $qst = "q=". $sorting; }
if($rev){ $qst .= "&o=1"; }

//$backsort = "cleandata.php".$qst;

if($qst){$dq="&".$qst;}

if($del){
	$sql = 'DELETE FROM user_form_info WHERE user_id='.$del;
	
	mysql_select_db('precitb3_pmtuserinfo');
	$retval = mysql_query( $sql, $dbh );
	if(! $retval )
	{
	  die('Could not delete data: ' . mysql_error());
	}

	//$meta = "<meta http-equiv=\"refresh\" content=\"0; url=".$backsort."\">";
	
	//mysql_close($dbh);
	//header( 'Location:'.$backsort ) ;
	
	
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Data | Precision Measurement Technologies</title>
	<?php $meta ?>
	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="precision measurement technologies, time to digital tech" />
	<meta name="description" content="Precision Measurement Technologies specializes in high resolution time-to-digital converters and all-in-one build solutions." />	

	<!--<link rel="stylesheet" type="text/css" href="/css/control.css" />
	
	<script src="/js/javascript.js" type="text/javascript"></script>
	<script src="/js/javascript-menu.js" type="text/javascript"></script>-->
	
<script type="text/javascript">
<!--
function doublecheck(name, refresh){
	if(confirm('Are you sure you want to delete ' + name + '?')){
		window.location = refresh;
	}
}

//-->
</script>

<style type="text/css">
body {font-family: Arial, "sans-serif";font-size:12px;}
table {border:0;}
tr.one {background-color:#99ccff;}
tr.two {background-color:#ffcc99;}
th {border:0;}
td {border:0;padding:3px;font-size:12px;}
</style>
	
</head>
<body>

<?


	$sql = 'SELECT * FROM user_form_info';
	if($rev) {$desc = " DESC";}
	if($sorting) 
	{
		
		$col = "";
		/*switch($sorting){
			case 1: $col = "user_name"; break;
			case 2: $col = "user_company"; break;
			case 3: $col = "user_phone"; break;
			case 4: $col = "user_email"; break;
			case 5: $col = "user_subject"; break;
			case 6: $col = "user_msg"; break;
			case 7: $col = "submit_date"; break;
			case 8: $col = "region_type"; break;
			case 9: $col = "info_type"; break;
		}*/
			if($sorting == 1){$col = "user_name";}
			if($sorting == 2){$col = "user_company";}
			if($sorting == 3){$col = "user_phone";}
			if($sorting == 4){$col = "user_email";}
			if($sorting == 5){$col = "user_subject";}
			if($sorting == 6){$col = "user_msg";}
			if($sorting == 7){$col = "submit_date";}
			if($sorting == 8){$col = "region_type";}
			if($sorting == 9){$col = "info_type";}
		

		
		$sql .= ' ORDER BY ' . $col . $desc;
	}

		//echo $_SERVER['QUERY_STRING'];
		
		//echo "rev=".$rev."<br />";
		//echo "sorting=".$sorting."<br />";
		//echo "col=".$col."<br />";
		//echo "sql=".$sql."<br />";

	mysql_select_db('precitb3_pmtuserinfo');
	$retval = mysql_query( $sql, $dbh );
	if(! $retval )
	{
	  die('Could not get data: ' . mysql_error());
	}

		echo "<table border=1 cellpadding=2>";
		echo "<tr><th>&nbsp;</th><th><strong>Name</strong>&nbsp;<a href=\"cleandata.php?q=1\"><img src=\"/images/db/arrow-down.png\" /></a>&nbsp;&nbsp;<a href=\"cleandata.php?q=1&o=1\"><img src=\"/images/db/arrow-up.png\" /></a></th>";
		echo "<th><strong>Company</strong>&nbsp;<a href=\"cleandata.php?q=2\"><img src=\"/images/db/arrow-down.png\" /></a>&nbsp;&nbsp;<a href=\"cleandata.php?q=2&o=1\"><img src=\"/images/db/arrow-up.png\" /></a></th>";
		echo "<th><strong>Phone</strong>&nbsp;<a href=\"cleandata.php?q=3\"><img src=\"/images/db/arrow-down.png\" /></a>&nbsp;&nbsp;<a href=\"cleandata.php?q=3&o=1\"><img src=\"/images/db/arrow-up.png\" /></a></th>";
		echo "<th><strong>Email</strong>&nbsp;<a href=\"cleandata.php?q=4\"><img src=\"/images/db/arrow-down.png\" /></a>&nbsp;&nbsp;<a href=\"cleandata.php?q=4&o=1\"><img src=\"/images/db/arrow-up.png\" /></a></th>";
		echo "<th><strong>Subject</strong>&nbsp;<a href=\"cleandata.php?q=5\"><img src=\"/images/db/arrow-down.png\" /></a>&nbsp;&nbsp;<a href=\"cleandata.php?q=5&o=1\"><img src=\"/images/db/arrow-up.png\" /></a></th>";
		echo "<th><strong>Msg</strong>&nbsp;<a href=\"cleandata.php?q=6\"><img src=\"/images/db/arrow-down.png\" /></a>&nbsp;&nbsp;<a href=\"cleandata.php?q=6&o=1\"><img src=\"/images/db/arrow-up.png\" /></a></th>";
		echo "<th><strong>Date</strong>&nbsp;<a href=\"cleandata.php?q=7\"><img src=\"/images/db/arrow-down.png\" /></a>&nbsp;&nbsp;<a href=\"cleandata.php?q=7&o=1\"><img src=\"/images/db/arrow-up.png\" /></a></th>";
		echo "<th><strong>Region</strong>&nbsp;<a href=\"cleandata.php?q=8\"><img src=\"/images/db/arrow-down.png\" /></a>&nbsp;&nbsp;<a href=\"cleandata.php?q=8&o=1\"><img src=\"/images/db/arrow-up.png\" /></a></th>";
		echo "<th><strong>Type</strong>&nbsp;<a href=\"cleandata.php?q=9\"><img src=\"/images/db/arrow-down.png\" /></a>&nbsp;&nbsp;<a href=\"cleandata.php?q=9&o=1\"><img src=\"/images/db/arrow-up.png\" /></a></th></tr>\n";

	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		echo "<tr class=\"".$rowclr."\">";
		//echo "<td>{$row['user_id']}</td>";
		echo "<td><a href=\"javascript:doublecheck('{$row['user_name']}','cleandata.php?d={$row['user_id']}".$dq."');\"><img src=\"/images/all/x.png\" border=\"0\" /></a></td>";
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
		
		if($rowclr=="one"){$rowclr="two";} else if($rowclr=="two"){$rowclr="one";}
	} 
	echo "</table>";
	echo "Fetched data successfully\n";
	mysql_close($dbh);
?>
</body>
</html>



