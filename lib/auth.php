<?php

require_once "./lib/config.php";

if ( !isset($_SESSION['user']) || empty($_SESSION['user']) ) {
    logout(false);
} else {
    $id = $_SESSION['user'];
}

$sql = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
$result = $link->query($sql);
if ( $result->num_rows ) {
    $user = $result->fetch_object();
} else {
    logout(false);
}
// dd($user);