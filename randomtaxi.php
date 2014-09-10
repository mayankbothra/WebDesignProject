<?php

$type = $_POST['type'];
//Random Cab Vacant Number
if ($type == 'random') {
    echo mt_rand(470, 500);
}
?>
