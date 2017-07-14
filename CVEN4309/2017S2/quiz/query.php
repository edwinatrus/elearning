<?php
$dir =  $_SERVER['DOCUMENT_ROOT'];
require($dir . "/unsw/db_config/db_header.php");

if ((!isset($_POST["week"])) || (!isset($_POST["zid"])) || (!isset($_POST["mark"])) || (!isset($_POST["data"]))) {
    echo "0";
} else {

	if ($_POST["zid"][0] !== "z") {
		die("Invalid zid!");
	}

    $table = "cven4309_2017s2";
    $week = $_POST["week"];  // be either w1, w2, w3
    $zid = $_POST["zid"];
    $mark = $_POST["mark"];
    $data = $_POST["data"];  // data conent
    $dataName = "d" . $week[1];    // column name: d1, d2, d3
    
    $sql1 = "insert into {$table} (zid, {$week}, {$dataName}) values ('{$zid}', {$mark}, '{$data}') on duplicate key update {$week} = {$mark}, {$dataName} = '{$data}'";
    
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