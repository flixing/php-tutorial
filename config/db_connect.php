<?php

//conection
$conn = mysqli_connect('localhost', 'root', '', 'tuts');
//test conection
if (!$conn) {
	echo 'Connection error' . mysqli_connect_error();
}