<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysql_connect('localhost', 'root', 'password');
    $query = "Select p.id, p.name from person p where p.id = (Select personid from useraccount where username = '$username' and password = '$password')";
    $result = mysql_db_query('metrocab', $query);

    if (mysql_num_rows($result) == 1) {
        session_start();
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
         $_SESSION['pid'] = $row['id'];
         $_SESSION['pname'] = $row['name'];
        }
        header("Location: mobiledashboard.php");
    }
}
?>
