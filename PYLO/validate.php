<?php
$username = $_POST['user'];
$password = $_POST['pass'];
if( ($username === "root@gmail.com")  && ($password ==="toor") ){
	echo "1";
}else {
	echo "0";
}
?>