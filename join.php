<?php
$email = $_POST['emailtxt'];
$name = $_POST['nametxt'];
$pwd = $_POST['passwordtxt'];
$zip = $_POST['ziptxt'];
$street = $_POST['streettxt'];
$city = $_POST['citytxt'];
$state = $_POST['statetxt'];


mysql_connect('localhost', 'root', 'password');
$query = "INSERT INTO person SET name='$name', emailid='$email', street='$street', city='$city', state='$state', zip='$zip'";
mysql_db_query('metrocab', $query);

$pid = mysql_insert_id();

$query1 = "INSERT INTO useraccount SET username='$email', password='$pwd', personid='$pid'";
mysql_db_query('metrocab', $query1);


?>
