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
$column_data = "d1";

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
    // TODO? need to dump something to d1?
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
        
        <title>Quiz 01</title>
        <link rel="shortcut icon" href="http://www.lindenbaum.net.au/unsw/util/favicon.ico" type="image/vnd.microsoft.icon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
        <script src="https://use.fontawesome.com/582f5b6b01.js"></script>
        <script src="https://unpkg.com/vue"></script>
        <script src="script/data.js?v=3"></script>
        <script src="script/mulitple.js?v=3"></script>
        <script src="http://www.lindenbaum.net.au/unsw/util/util.js"></script>
        <link rel="stylesheet" type="text/css" href="css/layout.css?v=2"/>
        
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
                    Question answered: {{answered}} out of 27. &nbsp;&nbsp;<button class="btn btn-primary" id="id-submit" v-on:click="tofinish">Finish and Submit</button>
                </p>
                <p class="instruction">
                    <span class="bold">Instruction: </span>There are three parts of questions in this quiz, corresponding to the three tabs below. Some questions are grouped into sections. After a section being answered, click the "Record Answers" button, so that your answer will be recorded. Please double-check your answer before clicking "Record Answers" button because you cannot edit your answer after that. Invalid answers will not be recorded (such as that you answer is not a number where number is required).
                </p>
                <div class="h2 timer">Time Left <span id="min">90</span>:<span id="sec">00</span></div>
            </div>
            
            <div id="main-body">
                <ul>
                    <li><a href="#p0" class="bold">Part 1</a></li>
                    <li><a href="#p1" class="bold">Part 2</a></li>
                    <li><a href="#p2" class="bold">Part 3</a></li>
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
                        {{part1.joist.depth}} &times; {{part1.joist.width}} seasoned MGP12 joists support a residential floor at {{part1.joist.centres}} centres in {{part1.location}} under the below loads, spanning {{part1.joist.span}} m. These floor joists are supported by a 2 &times; {{part1.bearer.depth}} &times; {{part1.bearer.width}} seasoned MGP12 bearer that spans {{part1.bearer.span}} above a window with a bearing length of 45mm (assume the load of the joists acts as a UDL on the bearer).
                    </p>
                    <ul>
                      <li>G (incl. SW) = {{part1.deadload}} kPa</li>
                      <li>Q (&lt; 1 day duration) = {{part1.liveload}} kPa</li>
                    </ul>
                    
                    <p class="bold">
                        1. Assess the bending strength of the joists
                    </p>
                    <ol>
                        <li>What is the bending load on the joists? <input id="q0-1" size="8"/> kNm</li>
                        <li>What is the bending capacity of the joists? <input id="q0-2" size="8"/> kNm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(0, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        2. Assess the flexural shear strength of the joists
                    </p>
                    <ol>
                        <li>What is the flexural load on the joists? <input id="q1-1" size="8"/> kNm</li>
                        <li>What is the flexural capacity of the joists? <input id="q1-2" size="8"/> kNm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(1, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        3. Assess the bearing strength of the joists
                    </p>
                    <ol>
                        <li>What is the bearing load on the joists? <input id="q2-1" size="8"/> kNm</li>
                        <li>What is the bearing capacity of the joists? <input id="q2-2" size="8"/> kNm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(2, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        4. Assess the serviceability the floor joists for appearance under the below loads against a span / 300 sag limit under a G + &psi;lQ load
                    </p>
                    <ol>
                        <li>What is the deflection of the joists? <input id="q3-1" size="8"/> kNm</li>
                        <li>What is the deflection limit on the joists? <input id="q3-2" size="8"/> kNm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(3, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        5. Is the floor joist appropriate?
                    </p>
                    <form id="q4">
                        <ul>
                            <li><input type="radio" name="1-5" value="yes"/> Yes</li>
                            <li><input type="radio" name="1-5" value="larger"/> No, need larger joist</li>
                            <li><input type="radio" name="1-5" value="smaller"/> No, need smaller joist <button type="button" class="btn btn-danger btn-xs" v-on:click="check(4, $event);">Record Answers</button></li>
                        </ul>
                    </form>
                    
                    <p class="bold">
                        6. Assess the bending strength of the bearer
                    </p>
                    <ol>
                        <li>What is the bending load on the bearer? <input id="q5-1" size="8"/> kNm</li>
                        <li>What is the bending capacity of the bearer? <input id="q5-2" size="8"/> kNm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(5, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        7. Assess the flexural shear strength of the bearer
                    </p>
                    <ol>
                        <li>What is the flexural load on the bearer? <input id="q6-1" size="8"/> kNm</li>
                        <li>What is the flexural capacity of the bearer? <input id="q6-2" size="8"/> kNm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(6, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        8. Assess the bearing strength of the bearer
                    </p>
                    <ol>
                        <li>What is the bearing load on the bearer? <input id="q7-1" size="8"/> kNm</li>
                        <li>What is the bearing capacity of the bearer? <input id="q7-2" size="8"/> kNm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(7, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        9. Assess the serviceability of the bearer against a maximum deflection of 5mm under a G + &psi;lQ load to prevent load transfer to the window
                    </p>
                    <ol>
                        <li>What is the deflection of the bearer? <input id="q8-1" size="8"/> kNm</li>
                        <li>What is the deflection limit on the bearer the bearer? <input id="q8-2" size="8"/> kNm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(8, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        10. Is the bearer appropriate?
                    </p>
                    <form id="q9">
                        <ul>
                            <li><input type="radio" name="1-10" value="yes"/> Yes</li>
                            <li><input type="radio" name="1-10" value="larger"/> No, need larger bearer</li>
                            <li><input type="radio" name="1-10" value="smaller"/> No, need smaller bearer <button type="button" class="btn btn-danger btn-xs" v-on:click="check(9, $event);">Record Answers</button></li>
                        </ul>
                    </form>
                </div>

                <div id="p2" class="question">
                    <p class="bold">
                        NOTE: To get the correct rounding, work with four decimal places only for the calculation. Present your answer to three decimal places.
                    </p>
                    <div class="figure">
                        <img src="resource/02.png"/>
                    </div>
                    <p>
                        {{part2.element.depth}} &times; {{part2.element.width}} seasoned F11 hardwood diagonal elements that are {{part2.element.length}} m long are used in a truss supporting a roof in {{part2.location}}. The worst case element is subject to the below loads. The element is fixed to the surrounding truss elements with two {{part2.boltsize}} bolts in {{part2.holesize}} m diameter holes at each end. 
                    </p>
                    <ul>
                      <li>P (duration &lt; 5 hours) = {{part2.load}}</li>
                    </ul>
                    
                    <p class="bold">
                        1. Assess the tensile strength of the element
                    </p>
                    <ol>
                        <li>What is the tensile load on the element ? <input id="q10-1" size="8"/> kNm</li>
                        <li>What is the tensile capacity on the element ? <input id="q10-2" size="8"/> kNm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(10, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        2. Assess the compression strength of the element
                    </p>
                    <ol>
                        <li>What is the compression load on the element ? <input id="q11-1" size="8"/> kNm</li>
                        <li>What is the compression capacity on the element ? <input id="q11-2" size="8"/> kNm <button type="button" class="btn btn-danger btn-xs" v-on:click="check(11, $event);">Record Answers</button></li>
                    </ol>
                    
                    <p class="bold">
                        3. Is the element appropriate?
                    </p>
                    <form id="q12">
                        <ul>
                            <li><input type="radio" name="1-13" value="yes"/> Yes</li>
                            <li><input type="radio" name="1-13" value="larger"/> No, need larger element</li>
                            <li><input type="radio" name="1-13" value="smaller"/> No, need smaller element <button type="button" class="btn btn-danger btn-xs" v-on:click="check(12, $event);">Record Answers</button></li>
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
    <script src="script/vm.js?v=5"></script>
</html>