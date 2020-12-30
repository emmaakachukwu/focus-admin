<?php

$sql = "CREATE TABLE IF NOT EXISTS `users` (
    `id` varchar(100) NOT NULL PRIMARY KEY,
    `email` varchar(100) NOT NULL,
    `username` varchar(100) NOT NULL,
    `role` VARCHAR(50) NOT NULL DEFAULT 'user',
    `password` varchar(250) NOT NULL,
    `fname` varchar(100) DEFAULT NULL,
    `lname` varchar(100) DEFAULT NULL,
    `country` varchar(100) DEFAULT NULL,
    `state` varchar(100) DEFAULT NULL,
    `city` varchar(100) DEFAULT NULL,
    `phone` varchar(20) DEFAULT NULL,
    `balance` int(50) DEFAULT 0,
    `image_path` varchar(250) DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)";
$link->query($sql);

$admin_email = 'admin@focus.com';
$id = md5($admin_email . '...');
$sql = "SELECT id FROM users WHERE id = '$id' LIMIT 1";
$result = $link->query($sql);
if ( !$result->num_rows ) {
    $sql = "INSERT INTO users (id, username, email, fname, lname, password, role) VALUES ('$id', 'focusshopadmin', '$admin_email', 'focus', 'shop', 'focuspass100', 'admin')";
    $link->query($sql);
}