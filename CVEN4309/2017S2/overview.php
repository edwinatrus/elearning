<?php
$dir =  $_SERVER['DOCUMENT_ROOT'];
require($dir .  "/unsw/db_config/db_header.php");

$conn = unsw_connect();

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}

$sql1 = "select zid, w1, w2, w3 from cven4309_2017s2";
$sql2 = "select * from cven4309_2017s2_tutorial";

$sql_stat = <<<EOT
SELECT count(CASE WHEN week01=100 THEN 1 END) as week01,
       count(CASE WHEN week03=100 THEN 1 END) as week03,
       count(CASE WHEN week04=100 THEN 1 END) as week04,
       count(CASE WHEN week05=100 THEN 1 END) as week05,
       count(CASE WHEN week06=100 THEN 1 END) as week06,
       count(CASE WHEN week08=100 THEN 1 END) as week08,
       count(CASE WHEN week09=100 THEN 1 END) as week10,
       count(CASE WHEN week10=100 THEN 1 END) as week11,
       count(CASE WHEN week11=100 THEN 1 END) as week12 FROM cven4309_2017s2_tutorial
EOT;

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result_stat = $conn->query($sql_stat);
$conn->close();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="Teaching and learning module"/>
        <meta name="keywords" content=""/>
        <meta name="author" content="Dr Xiaojun Chen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Student Results Overview</title>
        <link rel="shortcut icon" href="http://www.lindenbaum.net.au/unsw/util/favicon.ico" type="image/vnd.microsoft.icon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    </head>
    <style>
        .caption {
            text-align: center;
            font-weight: bold;
        }

        #main-body {
            background: none; 
            border-width: 0px; 
        }

        #main-body .ui-tabs-nav { 
            padding-left: 0px; 
            background: transparent; 
            border-width: 0px 0px 1px 0px; 
            -moz-border-radius: 0px; 
            -webkit-border-radius: 0px; 
            border-radius: 0px; 
        }

        #main-body .ui-tabs-panel { 
            background: white; 
            border-width: 0px 0px 0px 0px; 
        }
    </style>
    <script>
        <?php 
            $rows = array();
            while($r = mysqli_fetch_assoc($result_stat)) {
                $rows[] = $r;
            }
        ?>
        var sql_json = '<?php echo json_encode($rows); ?>';
        sql_json = JSON.parse(sql_json)[0];
    </script>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="h1" style="margin: 20px;">
                        <p align="center"><strong>Grade Overview and Statistics</strong></p>
                    </div>

                    <div id="main-body">
                        <ul>
                            <li><a href="#t0" class="bold">Quiz Summary</a></li>
                            <li><a href="#t1" class="bold">Tutorial Summary</a></li>
                            <li><a href="#t2" class="bold">Tutorial Statistics</a></li>
                        </ul>

                        <div id="t0">
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
                        </div>

                        <div id="t1">    
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

                        <div id="t2">
                            <table id="myTable" class="table table-hover table-bordered table-striped">
                                <caption class="h3 caption">No. of Completion</caption>
                                <thead>
                                    <tr>
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
                                    <tr id="numbers">
                                        <td id="week01"></td>
                                        <td id="week03"></td>
                                        <td id="week04"></td>
                                        <td id="week05"></td>
                                        <td id="week06"></td>
                                        <td id="week08"></td>
                                        <td id="week10"></td>
                                        <td id="week11"></td>
                                        <td id="week12"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function() {
            $("#main-body").tabs();

            $("#numbers td").each(function(idx, ele) {
                $(ele).html(sql_json[$(ele).prop("id")]);
            })
        });
    </script>
</html>