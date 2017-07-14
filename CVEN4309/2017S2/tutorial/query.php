<?php
$dir =  $_SERVER['DOCUMENT_ROOT'];
require($dir . "/unsw/db_config/db_header.php");

if ((!isset($_POST["week"])) || (!isset($_POST["zid"]))) {
    echo "0";
} else {

	if ($_POST["zid"][0] !== "z") {
		die("Invalid zid!");
	}

    $table = "cven4309_2017s2_tutorial";
    $week = $_POST["week"];  // be either week01 .. week 09
    $zid = $_POST["zid"];
    
    $sql1 = "insert into {$table} (zid, {$week}) values ('{$zid}', 100) on duplicate key update {$week} = 100";
    
    // $sql1 = "insert into {$table} (zid, {$week}, {$dataName}) values ('{$zid}', {$mark}, '{$data}') on duplicate key update {$week} = if({$week} < {$mark}, {$mark}, {$week}), {$dataName} = if({$week} < {$mark}, '{$data}', {$dataName})";

    $conn = unsw_connect();

    if ($conn->connect_error) {
        die("Error: " . $conn->connect_error);
    } 

    $result = $conn->query($sql1);

    echo "1";

    $conn->close();
}
?>