<?php

header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

// connect to database to see if it is a new attempt
if (!isset($_POST["id"])) {
    die("Cannot obtain your id, probably due to your network connection, please close the tab and re-try");
} else {
    $zid = $_POST["id"];
}

$dir =  $_SERVER['DOCUMENT_ROOT'];
require($dir . "/unsw/db_config/db_header.php");

$table = "cven4309_2017s2";
$column_data = "d2";

$conn = unsw_connect();

if ($conn->connect_error) {
    die("Netword Error: Unable to read Moodle Gradebook");
}

$sql1 = "select zid from {$table} where {$column_data}<>'' and zid='{$zid}'";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    $attempt = "not first attempt";
} else {
    $attempt = "first attempt";
}

if ($attempt == "first attempt") {
    $sql2 = "insert into {$table} (zid, {$column_data}) values ('{$zid}', 'no submission') on duplicate key update {$column_data} = 'no submission'";
    $conn->query($sql2);
}

$conn->close();

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="Teaching and learning module"/>
        <meta name="keywords" content=""/>
        <meta name="author" content="Dr Xiaojun Chen"/>
        
        <title>Quiz 02</title>
        <link rel="shortcut icon" href="http://www.lindenbaum.net.au/unsw/util/favicon.ico" type="image/vnd.microsoft.icon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
        <script src="https://use.fontawesome.com/582f5b6b01.js"></script>
        <script src="https://unpkg.com/vue"></script>
        <script src="script/data.js?v=2"></script>
        <script src="script/mulitple.js?v=1"></script>
        <script src="http://www.lindenbaum.net.au/unsw/util/util.js"></script>
        <link rel="stylesheet" type="text/css" href="css/layout.css?v=0"/>
        
        <script>
            var who = '<?php echo isset($_POST["id"]) ? $_POST["id"] : ""; ?>';
            var isFirst = '<?php echo $attempt; ?>';
        </script>
    </head>
    <body>
        <div id="myapp">
            <div id="id-bar">
                <p id="main-score">
                    Your zID: <input id="zid" size="10"/> (e.g. z1234567, no spacing before or after)
                </p>
                <p>
                    <button class="btn btn-primary" id="id-btn" onclick="check_id()">Start</button><label id="after-id"></label>
                </p>
            </div>
            
            <div id="score-bar">
                <p>
                    Question answered: {{answered}} out of 23. &nbsp;&nbsp;<button class="btn btn-primary" id="id-submit" v-on:click="tofinish">Finish and Submit</button>
                </p>
                <p class="instruction">
                    <span class="bold">Instruction: </span>There are five parts of questions in this quiz, corresponding to the three tabs below. Some questions are grouped into sections. After a section being answered, click the "Record Answers" button, so that your answer will be recorded. Please double-check your answer before clicking "Record Answers" button because you cannot edit your answer after that. Invalid answers will not be recorded (such as that you answer is not a number where number is required).
                </p>
                <div class="h2 timer">Time Left <span id="min">90</span>:<span id="sec">00</span></div>
            </div>
            
            <div id="main-body">
                <ul>
                    <li><a href="#p0" class="bold">Part 1</a></li>
                    <li><a href="#p1" class="bold">Part 2</a></li>
                    <li><a href="#p2" class="bold">Part 3</a></li>
                    <li><a href="#p3" class="bold">Part 4</a></li>
                    <li><a href="#p4" class="bold">Part 5</a></li>
                </ul>
                
                <div id="p0" class="question">
                    <p class="bold">
                        {{part0[0].question}}
                    </p>
                    <form id="s0">
                        <ul>
                            <li><input type="radio" name="0-0" value="0"/> {{part0[0].options[0]}}</li>
                            <li><input type="radio" name="0-0" value="1"/> {{part0[0].options[1]}}</li>
                            <li><input type="radio" name="0-0" value="2"/> {{part0[0].options[2]}} <button type="button" class="btn btn-danger btn-xs" v-on:click="toSelect(0, $event);">Record Answers</button></li>
                        </ul>
                    </form>
                    
                    <p class="bold">
                        {{part0[1].question}}
                    </p>
                    <form id="s1">
                        <ul>
                            <li><input type="radio" name="0-1" value="0"/> {{part0[1].options[0]}}</li>
                            <li><input type="radio" name="0-1" value="1"/> {{part0[1].options[1]}}</li>
                            <li><input type="radio" name="0-1" value="2"/> {{part0[1].options[2]}} <button type="button" class="btn btn-danger btn-xs" v-on:click="toSelect(1, $event);">Record Answers</button></li>
                        </ul>
                    </form>
                    
                    <p class="bold">
                        {{part0[2].question}}
                    </p>
                    <form id="s2">
                        <ul>
                            <li><input type="radio" name="0-2" value="0"/> {{part0[2].options[0]}}</li>
                            <li><input type="radio" name="0-2" value="1"/> {{part0[2].options[1]}}</li>
                            <li><input type="radio" name="0-2" value="2"/> {{part0[2].options[2]}} <button type="button" class="btn btn-danger btn-xs" v-on:click="toSelect(2, $event);">Record Answers</button></li>
                        </ul>
                    </form>
                    
                    <p class="bold">
                        {{part0[3].question}}
                    </p>
                    <form id="s3">
                        <ul>
                            <li><input type="radio" name="0-3" value="0"/> {{part0[3].options[0]}}</li>
                            <li><input type="radio" name="0-3" value="1"/> {{part0[3].options[1]}}</li>
                            <li><input type="radio" name="0-3" value="2"/> {{part0[3].options[2]}} <button type="button" class="btn btn-danger btn-xs" v-on:click="toSelect(3, $event);">Record Answers</button></li>
                        </ul>
                    </form>
                </div>

                <div id="p1" class="question">
                    <p class="bold">
                        NOTE: To get the correct rounding, work with four decimal places only for the calculation. Present your answer to three decimal places.
                    </p>
                    <div class="figure">
                        <img src="resource/01.png"/>
                    </div>
                    <p>
                        Two {{part1.stud.width}} &times; {{part1.stud.depth}} seasoned Australian Radiata Pine primary timber elements are connected perpendicular to each other. Assume a load duration of {{part1.duration}}.
                    </p>
                    
                    <p class="bold">
                        1. What is the capacity of a Size {{part1.screwSize}} screw under a load in the direction of P? <input id="q0" size="8"/> kN <button type="button" class="btn btn-danger btn-xs" v-on:click="check(0, $event);">Record Answers</button>
                    </p>
                    
                    <p class="bold">
                        2. Calculate the capacity of a {{part1.boltSize}} bolt under a load in the direction of P? <input id="q1" size="8"/> kN <button type="button" class="btn btn-danger btn-xs" v-on:click="check(1, $event);">Record Answers</button>
                    </p>
                    
                    <p class="bold">
                        3. How many Size {{part1.screwSize}} screws would be required to achieve the same capacity of the {{part1.boltSize}} bolt? Ignore the effects of k<sub>17</sub>. <input id="q2" size="8"/> <button type="button" class="btn btn-danger btn-xs" v-on:click="check(2, $event);">Record Answers</button>
                    </p>
                </div>
                
                <div id="p2" class="question">
                    <p class="bold">
                        NOTE: To get the correct rounding, work with four decimal places only for the calculation. Present your answer to three decimal places.
                    </p>
                    <div class="figure">
                        <img src="resource/02.png"/>
                    </div>
                    <p>
                        Calculate the effective stiffness for the CLT panel if it is orientated to the major or minor axis. The width of the panel is {{part2.length}} m and the length of the panel is {{part2.width}} m. The layer thicknesses are:
                    </p>
                    <ul>
                        <li>h<sub>1</sub> = h<sub>5</sub> = {{part2.h1}}</li>
                        <li>h<sub>2</sub> = h<sub>4</sub> = {{part2.h2}}</li>
                        <li>h<sub>3</sub> = {{part2.h3}}</li>
                        <li>E<sub>0</sub> = 17,000 MPa, &nbsp;&nbsp;&nbsp;G<sub>R</sub> = 170 MPa</li>
                    </ul>
                    
                    <p class="bold">
                        1. What is the effective stiffness of the major axis <input id="q3" size="8"/> &times; 10<sup>10</sup> Nmm<sup>2</sup> <button type="button" class="btn btn-danger btn-xs" v-on:click="check(3, $event);">Record Answers</button>
                    </p>
                    
                    <p class="bold">
                        2. What is the effective stiffness of the minor axis <input id="q4" size="8"/> &times; 10<sup>10</sup> Nmm<sup>2</sup> <button type="button" class="btn btn-danger btn-xs" v-on:click="check(4, $event);">Record Answers</button>
                    </p>
                </div>
                
                <div id="p3" class="question">
                    <p class="bold">
                        NOTE: To get the correct rounding, work with four decimal places only for the calculation. Present your answer to three decimal places.
                    </p>
                    <p>
                        Consider a {{part3.panel}} 3s ( {{part3.h1}} / {{part3.h2}} / {{part3.h1}} ) floor panel of C24 timber that spans {{part3.span}} m in the major axis under the below loads. The soffit of the panel is exposed but protected from direct wetting. Consider a 1m panel width, a G<sub>%</sub> = 50 MPa and an F<sub>R,k</sub> = 2.5 MPa. The panel sits on top of a {{part3.length}} mm thick stud wall.
                    </p>
                    <ul>
                        <li>G (excl. SW) = {{part3.g}} kPa</li>
                        <li>Q = {{part3.q}} kPa</li>
                    </ul>
                    
                    <p class="bold">
                        1. Assess the bending strength of the floor
                    </p>
                    <ol>
                        <li>What is the bending stress on the floor? <input id="q5-1" size="8"/> MPa</li>
                        <li>What is the bending capacity of the floor?  <input id="q5-2" size="8"/> MPa <button type="button" class="btn btn-danger btn-xs" v-on:click="check(5, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        2. Assess the shear strength of the floor
                    </p>
                    <ol>
                        <li>What is the shear stress on the floor? <input id="q6-1" size="8"/> MPa</li>
                        <li>What is the shear capacity of the floor? <input id="q6-2" size="8"/> MPa <button type="button" class="btn btn-danger btn-xs" v-on:click="check(6, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        3. Assess the bearing strength of the floor
                    </p>
                    <ol>
                        <li>What is the bearing stress on the floor? <input id="q7-1" size="8"/> MPa</li>
                        <li>What is the bearing capacity of the floor? <input id="q7-2" size="8"/> MPa <button type="button" class="btn btn-danger btn-xs" v-on:click="check(7, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        4. Assess the serviceability the floor for appearance against a span / 300 sag limit under a G + &psi;lQ load. 
                    </p>
                    <ol>
                        <li>What is the deflection on the floor? <input id="q8-1" size="8"/> mm</li>
                        <li>What is the deflection limit of the floor? <input id="q8-2" size="8"/> mm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(8, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        5. Is the floor appropriate?
                    </p>
                    <form id="q9">
                        <ul>
                            <li><input type="radio" name="1-9" value="yes"/> Yes</li>
                            <li><input type="radio" name="1-9" value="no"/> No <button type="button" class="btn btn-danger btn-xs" v-on:click="check(9, $event);">Record Answers</button></li>
                        </ul>
                    </form>
                </div>
                
                <div id="p4" class="question">
                    <p class="bold">
                        NOTE: To get the correct rounding, work with four decimal places only for the calculation. Present your answer to three decimal places.
                    </p>
                    <p>
                        Consider a {{part4.panel}} 5s ( {{part4.h1}} / {{part4.h2}} / {{part4.h1}} / {{part4.h2}} / {{part4.h1}} ) internal wall panel of C24 timber that is {{part4.span}} m high under the below loads. The major axis spans horizontally and the wall is assumed to be fixed at the top and bottom. The wind load acting could be in the positive or negative direction. Consider a 1 m strip and G<sub>R</sub> = 50 MPa.
                    </p>
                    <ul>
                        <li>G (excl. SW) = {{part4.g}} kN/m</li>
                        <li>Q = {{part4.q}} kN/m</li>
                        <li>W = {{part4.w}} kN/m</li>
                    </ul>
                    
                    <p class="bold">
                        1. Assess the tensile strength of the element
                    </p>
                    <ol>
                        <li>What is the tensile stress on the element? <input id="q10-1" size="8"/> MPa</li>
                        <li>What is the tensile capacity on the element? <input id="q10-2" size="8"/> MPa <button type="button" class="btn btn-danger btn-xs" v-on:click="check(10, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        2. Assess the compression strength of the element
                    </p>
                    <ol>
                        <li>What is the compression stress on the element? <input id="q11-1" size="8"/> MPa</li>
                        <li>What is the compression capacity on the element? <input id="q11-2" size="8"/> MPa <button type="button" class="btn btn-danger btn-xs" v-on:click="check(11, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        3. Is the element appropriate?
                    </p>
                    <form id="q12">
                        <ul>
                            <li><input type="radio" name="1-12" value="yes"/> Yes</li>
                            <li><input type="radio" name="1-12" value="no"/> No <button type="button" class="btn btn-danger btn-xs" v-on:click="check(12, $event);">Record Answers</button></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        
        <div id="dialog-message" title="Submission Comfirmation!" style="display: none;">
            <div>
                <p style="font-weight: bold;">
                    Warning: you only have ONE chance to submit. Questions and answers will not show after submission.
                    <br/><br/>
                    Are you sure to submit?
                </p>
            </div>
        </div>
    </body>
    <script src="script/vm.js?v=1"></script>
</html>