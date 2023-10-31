<?php
$conn = mysqli_connect("localhost:3306", "root", "", "wad_project3");

$result = mysqli_query($conn,"SELECT * FROM students");

//mysqli_fetch_row()
//mysqli_fetch_assoc()
//mysqli_fetch_array()
//mysqli_fetch_object()

var_dump(mysqli_fetch_object($result));


?>