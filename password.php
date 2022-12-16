<?php
$sql = mysqli_connect("localhost", "root", "", "passoword");
if ($sql -> connect_error) {
    die("Connection failed: " . $sql -> connect_error);
}
