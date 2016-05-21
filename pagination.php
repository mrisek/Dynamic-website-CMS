<html>
<head>
<title>Paging Using PHP</title>
</head>
<body>


//make connection
$con=mysql_connect("localhost","mrisek_000002","313007875","mrisek_000002");

//select db
mysql_select_db('mrisek_000002');



<?php
$dbhost = 'localhost:3036';
$dbuser = 'mrisek_000002';
$dbpass = '313007875';
$rec_limit = 10;

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('mrisek_000002');
/* Get total number of records */
$sql = "SELECT * FROM Soba ";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$row = mysql_fetch_array($retval, MYSQL_NUM );
$rec_count = $row[0];

if( isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $rec_limit * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "SELECT idSoba, nazivSoba, cijenaSoba ".
       "FROM Soba ";


$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "EMP ID :{$row['idSoba']}  <br> ".
         "EMP NAME : {$row['nazivSoba']} <br> ".
         "EMP SALARY : {$row['cijenaSoba']} <br> ".
         "--------------------------------<br>";
} 

if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a> |";
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
}
else if( $page == 0 )
{
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a>";
}
mysql_close($conn);
?>


</body>