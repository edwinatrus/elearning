<?php
$dir =  $_SERVER['DOCUMENT_ROOT'];
require($dir .  "/unsw/db_config/db_header.php");

if (isset($_GET["id"])) {
    $zid = $_GET["id"];
} else {
    die("Cannot obtain you zID. Please re-try!");
}

$conn = unsw_connect();

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}

$sql1 = "select zid, w1, w2, w3 from cven4309_2017s2 where zid = '{$zid}'";
$sql2 = "select * from cven4309_2017s2_tutorial where zid = '{$zid}'";

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$conn->close();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="Teaching and learning module"/>
        <meta name="keywords" content=""/>
        <meta name="author" content="Dr Xiaojun Chen"/>
        
        <title>Student Results Overview</title>
        <link rel="shortcut icon" href="http://www.lindenbaum.net.au/unsw/util/favicon.ico" type="image/vnd.microsoft.icon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <style>
        .caption {
            text-align: center;
            font-weight: bold;
        }
    </style>
    <body>
        <div class="h4" style="width: 80%; margin: 30px auto 30px auto;">
            <p><strong>Following is your result overview for your quiz and weekly tutorial. Note your results be updated to the Gradebook periodically</strong></p>
            <p><strong>Note: If your zid is not shown in the table, that means you have not made any submission yet.</strong></p>
        </div> 

        <div style="width: 80%; margin: 30px auto 0 auto;">
            <table id="myTable" class="table table-hover table-bordered table-striped">
                <caption class="h3 caption">Quiz Result</caption>
                <thead>
                    <tr>
                        <th>zID</th>
                        <th>Quiz 01</th>
                        <th>Quiz 02</th>
                        <th>Quiz 03</th>
                    </tr>
                </thead>
                <tbody>
<?php
                if ($result1->num_rows > 0) {
                    while($row = $result1->fetch_row()) {
                        echo "<tr>";
                        foreach ($row as $item) {
                            echo "<td>";
                            echo $item;
                            echo " </td>";
                        }
                        echo " </tr>";
                    }
                } else {

                }
?>
                </tbody>
            </table>

            <br/><br/><br/>

            <table id="myTable" class="table table-hover table-bordered table-striped">
                <caption class="h3 caption">Tutorial Results</caption>
                <thead>
                    <tr>
                        <th>zID</th>
                        <th>Week 01</th>
                        <th>Week 03</th>
                        <th>Week 04</th>
                        <th>Week 05</th>
                        <th>Week 06</th>
                        <th>Week 08</th>
                        <th>Week 10</th>
                        <th>Week 11</th>
                        <th>Week 12</th>
                    </tr>
                </thead>
                <tbody>
<?php
                if ($result2->num_rows > 0) {
                    while($row = $result2->fetch_row()) {
                        echo "<tr>";
                        foreach ($row as $item) {
                            echo "<td>";
                            echo $item;
                            echo " </td>";
                        }
                        echo " </tr>";
                    }
                } else {

                }
?>
                </tbody>
            </table>
        </div>
    </body>
    <script>
    </script>
</html>