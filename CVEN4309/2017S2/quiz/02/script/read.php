<?php 

$dir =  $_SERVER['DOCUMENT_ROOT'];
require($dir . "/unsw/db_config/db_header.php");

if ((!isset($_GET["id"]))) {
    die("no parameter");
}

$zid = $_GET["id"];
$table = "cven4309_2017s2";
$column_data = "d2";

$sql1 = "select {$column_data} from {$table} where zid='{$zid}'";

$conn = unsw_connect();

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
} 

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    while($row = $result->fetch_row()) {
        foreach ($row as $item) {
        	echo $item;
        }
        echo "<br/>";
    }
} else {
    echo "no data";
}

$conn->close();

?>