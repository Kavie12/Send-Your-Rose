<?php

include '../library/db_conn.php';

$sender = $_REQUEST['sender'];
$receiver = $_REQUEST['receiver'];
$rand_id = rand(9999, 99999999);
$date = date('Y-m-d H:i:s');


$sql = "INSERT INTO data (sender, receiver, rand_id, date) VALUES ('$sender', '$receiver', '$rand_id', '$date')";

if ($conn->query($sql) === TRUE) {
    header('Location: ../post.php?love=' . $rand_id);
}


?>