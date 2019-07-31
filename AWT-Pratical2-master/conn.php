<?php
define('url','localhost');
define('uname','root');
define('pwd', '');
define('dbname','reg17it104');


 $con = mysqli_connect(url,uname,pwd,dbname);
if(!$con){
die('Could not Connect My Sql:' .mysql_error());
}

?>