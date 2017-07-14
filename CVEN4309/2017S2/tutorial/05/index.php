<?php

if (!isset($_GET["id"])) {
    die("Cannot obtain your id, probably due to your network connection, please close the tab and re-try");
} else {
    
}

header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="Teaching and learning module"/>
        <meta name="keywords" content=""/>
        <meta name="author" content="Dr Xiaojun Chen"/>
        
        <title>Week 05 Tutorial</title>
        <link rel="shortcut icon" href="http://www.lindenbaum.net.au/unsw/util/favicon.ico" type="image/vnd.microsoft.icon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
        <script src="https://use.fontawesome.com/582f5b6b01.js"></script>
        <script src="http://www.lindenbaum.net.au/unsw/util/util.js"></script>
        <link rel="stylesheet" type="text/css" href="css/layout.css?v=4"/>
        <script>
            var id = '<?php echo $_GET["id"]; ?>';
        </script>
    </head>
    <body>
        <div class="text-center h1" style="padding-top: 20px; padding-bottom: 20px;"><strong>Week 05 Tutorial Questions</strong></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="accordion">
                        <h2>Question 01</h2>
                        <div id="q1">
                            <div class="h4 question">
                                <p>What is the difference between Type 1 and Type 2 connections?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        Type 1 connections occur where the fastener is in
                                        <select onchange="choice_check(event, 'shear');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>tension</option>
                                            <option>shear</option>
                                        </select>
                                        while Type 2 connections occur where the fastener is in
                                        <select onchange="choice_check(event, 'tension');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>tension</option>
                                            <option>shear</option>
                                        </select>.
                                    </p>
                                </section>
                                <section><strong>Correct</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 02</h2>
                        <div id="q2">
                            <div class="h4 question">
                                <p>What three things should you consider when detailing connections?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <ul class="answer list-seperate">
                                        <li>
                                            Fasteners are stronger in the
                                            <select onchange="choice_check(event, 'side');">
                                                <option disabled selected value> -- select an option -- </option>
                                                <option>end</option>
                                                <option>side</option>
                                            </select>
                                            grain than the
                                            <select onchange="choice_check(event, 'end');">
                                                <option disabled selected value> -- select an option -- </option>
                                                <option>end</option>
                                                <option>side</option>
                                            </select>
                                        </li>
                                        <li>
                                            Minimise tension
                                            <select onchange="choice_check(event, 'perpendicular');">
                                                <option disabled selected value> -- select an option -- </option>
                                                <option>parallel</option>
                                                <option>perpendicular</option>
                                            </select>
                                            to the grain to reduce splitting
                                        </li>
                                        <li>
                                            Allow for movement
                                            <select onchange="choice_check(event, 'perpendicular');">
                                                <option disabled selected value> -- select an option -- </option>
                                                <option>parallel</option>
                                                <option>perpendicular</option>
                                            </select>
                                            to the grain for shrinkage
                                        </li>
                                    </ul>
                                </section>
                                <section><strong>Correct</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 03</h2>
                        <div id="q3">
                            <div class="h4 question">
                                <p>When measuring edge distances, what part of the fastener do you measure to?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        When measuring edge distances, you measure to the
                                        <select onchange="choice_check(event, 'centre');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>head</option>
                                            <option>centre</option>
                                            <option>tip</option>
                                        </select> of the fastener
                                    </p>
                                </section>
                                <section><strong>Correct</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 04</h2>
                        <div id="q4">
                            <div class="h4">
                                <strong>Choose the correct name for the following factors (you need to finish all the choices)</strong>
                            </div>
                            <div class="h4">
                                <ul class="list-seperate"></ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 05</h2>
                        <div id="q5">
                            <div class="h4 question">
                                <p>What does the D stand for in JD3?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        The D means that the timber element being connected in
                                        <select onchange="choice_check(event, 'seasoned');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>seasoned</option>
                                            <option>unseasoned</option>
                                        </select>.
                                    </p>
                                </section>
                                <section><strong>Correct</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 06</h2>
                        <div id="q6">
                            <div class="h4 question">
                                <p>How do nails, screws and bolts get their strength? (select from the list below)</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        Nails get their strength from
                                        <select onchange="choice_check(event, 'b');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>a</option>
                                            <option>b</option>
                                            <option>c</option>
                                        </select><br/><br/>Screws get their strength from
                                        <select onchange="choice_check(event, 'a');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>a</option>
                                            <option>b</option>
                                            <option>c</option>
                                        </select><br/><br/>Bolts get their strength from
                                        <select onchange="choice_check(event, 'c');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>a</option>
                                            <option>b</option>
                                            <option>c</option>
                                        </select>.
                                    </p><br/>
                                    <ol class="list-seperate" type="a" style="font-weight: bold;">
                                        <li>drilling their way into the timber. The flutes of the thread cut into the timber, bonding to the timber structure.</li>
                                        <li>the friction between thread and timber. This is strongest in seasoned timber as the lubrication of the moisture in unseasoned timber reduces the friction</li>
                                        <li>bearing onto the timber. Bearing strength differs depending on the angle to the grain and so strength varies depending on the direction of load to the grain.</li>
                                    </ol>
                                </section>
                                <section><strong>Correct</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 07</h2>
                        <div id="q7">
                            <div class="h4 question">
                                <p>In what direction is a row of fasteners defined?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        A row of fasteners is defined as being
                                        <select onchange="choice_check(event, 'perpendicular');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>parallel</option>
                                            <option>perpendicular</option>
                                        </select> to the direction of force.
                                    </p>
                                </section>
                                <section><strong>Correct</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 08</h2>
                        <div id="q8">
                            <div class="h4 question">
                                <p>How does the design of coach screws differ from bolts?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        Coach screws are designed
                                        <select onchange="choice_check(event, 'the same as bolts');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>as screws, not bolts</option>
                                            <option>the same as bolts</option>
                                            <option>as bolts but with an extra failure mode</option>
                                        </select> for type 1 connections<br/> and as screws
                                        <select onchange="choice_check(event, 'as bolts but with an extra failure mode');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>as screws, not bolts</option>
                                            <option>the same as bolts</option>
                                            <option>as bolts but with an extra failure mode</option>
                                        </select> for type 2 connections.
                                    </p>
                                </section>
                                <section><strong>Correct</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 09</h2>
                        <div id="q9">
                            <div class="h4 question">
                                <p>A single steel screw is used to connect a 90 &times; 45 seasoned imported softwood top plate to 90 &times; 45 seasoned imported softwood studs. This screw is required to withstand an ultimate load of 500 N. Choose an appropriate screw considering edge distances. The screw is manufactured to maximum tensile capacity.</p>
                                <img src="resource/09.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Propose Screw (press ENTER after input)</h4>
                                    <p class="answer">
                                        Considering edge distances, the governing edge distance is from the centre of the screw to the
                                        <select onchange="choice_check(event, 'long side');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>short side</option>
                                            <option>long side</option>
                                        </select> of the stud. Since the stud if 45mm wide;<br/><br/>
                                        45 mm / 2 &gt;
                                        <select onchange="choice_check(event, '5D');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>3D</option>
                                            <option>5D</option>
                                            <option>10D</option>
                                        </select>
                                        , therefore D &lt; <input size="6" onkeypress="question_check(event, 4.5);"/> mm. (AS1720 - Table 4.8)<br/><br/>
                                        Hence choose Screw size
                                        <select onchange="choice_check(event, '8');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>4</option>
                                            <option>6</option>
                                            <option>8</option>
                                            <option>10</option>
                                            <option>12</option>
                                            <option>14</option>
                                            <option>18</option>
                                        </select> with shank diameter D =
                                        <input size="6" onkeypress="question_check(event, 4.17);"/> mm<br/><br/>
                                        Choose
                                        <select onchange="choice_check(event, '90');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>45</option>
                                            <option>60</option>
                                            <option>75</option>
                                            <option>90</option>
                                            <option>120</option>
                                        </select> mm long screw, with a penetration length of
                                        <input size="6" onkeypress="question_check(event, 45);"/> mm in both top plane and stud.
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine the Actions</h4>
                                    <p class="answer">
                                        The load direction creates a Type
                                        <select onchange="choice_check(event, '2');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate the factors</h4>
                                    <p class="answer">
                                        Capacity Factor: &phi; = 
                                        <select onchange="choice_check(event, '0.85');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.60</option>
                                            <option>0.65</option>
                                            <option>0.75</option>
                                            <option>0.80</option>
                                            <option>0.85</option>
                                        </select> (AS1720.0 – Table 2.1)<br/><br/>
                                        Grain Orientation Factor: k<sub>13,side</sub> = 
                                        <select onchange="choice_check(event, '1.0');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.6</option>
                                            <option>1.0</option>
                                        </select><br/>
                                        Grain Orientation Factor: k<sub>13,end</sub> = 
                                        <select onchange="choice_check(event, '0.6');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.6</option>
                                            <option>1.0</option>
                                        </select> (AS1720.0 – Clause 4.3.3.2)<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Joint Group</h4>
                                    <p class="answer">
                                        Joint Group
                                        <select onchange="choice_check(event, 'JD6');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>J1</option>
                                            <option>J2</option>
                                            <option>J3</option>
                                            <option>J4</option>
                                            <option>J5</option>
                                            <option>J6</option>
                                            <option>JD1</option>
                                            <option>JD2</option>
                                            <option>JD3</option>
                                            <option>JD4</option>
                                            <option>JD5</option>
                                            <option>JD6</option>
                                        </select> (AS1720.0 – Table H2.4)<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate Individual Capacity (press ENTER after input)</h4>
                                    <p class="answer">
                                        Consider
                                        <select onchange="choice_check(event, 'side');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>side</option>
                                            <option>end</option>
                                        </select> grain as worst case<br/><br/>
                                        Withdrawal Strength Q<sub>k</sub> = <input size="5" onkeypress="question_check(event, 35);"/> N/mm per penetration length per screw (AS1720.0 – Table 4.6(B))<br/><br/>
                                        Tensile Strength of Screw N<sub>d,ts</sub> = <input size="5" onkeypress="question_check(event, 3.18);"/> kN (AS1720.0 – Table 4.7)<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Connection Capacity (press ENTER after input)</h4>
                                    <p class="answer">
                                        Tensile Capacity<br/><br/> 
                                        &phi;k<sub>13</sub>I<sub>p</sub>nQ<sub>k</sub> = <input size="10" onkeypress="question_check(event, 803.25);"/> kN<br/><br/>
                                        nN<sub>d,ts</sub> = <input size="10" onkeypress="question_check(event, 3180);"/> N<br/><br/>
                                        N<sub>t,d,2</sub> = <input size="10" onkeypress="question_check(event, 803.25);"/> N,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 500 N, therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Therefore, Size 8, 90 mm steel screw is
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select>to connect top plate to stud.<br/><br/>
                                    </p>
                                </section>
                                <section><strong>This question is finished</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 10</h2>
                        <div id="q10">
                            <div class="h4 question">
                                <p>Assess the capacity of the 8 M12 bolts connecting an unseasoned imported softwood timber member to an internal steel plate under the following load P(duration &lt; 5 days) = 30 kN</p>
                                <img src="resource/10.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine the action</h4>
                                    <p class="answer">
                                        The load direction creates a Type
                                        <select onchange="choice_check(event, '2');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select> connection<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate the factors</h4>
                                    <p class="answer">
                                        Capacity Factor: &phi; = 
                                        <select onchange="choice_check(event, '0.80');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.60</option>
                                            <option>0.65</option>
                                            <option>0.75</option>
                                            <option>0.80</option>
                                            <option>0.85</option>
                                        </select> (AS1720.0 – Table 2.1)<br/><br/>
                                        Duration of Load Factor: k<sub>1</sub> = 
                                        <select onchange="choice_check(event, '0.77');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.69</option>
                                            <option>0.77</option>
                                            <option>0.80</option>
                                            <option>0.94</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Table G1)<br/><br/>
                                        Head Fixity Factor: k<sub>16</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.20</option>
                                        </select> (AS1720.0 – Clause 4.4.3.2)<br/><br/>
                                        Now given the connection created by the 8 bolts, it can be assumed that bolts provide
                                        <select onchange="choice_check(event, 'transverse restraint');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>no transverse restraint</option>
                                            <option>transverse restraint</option>
                                        </select> to shrinkage of the timber.<br/><br/>
                                        Multiple Fasteners Factor: k<sub>17</sub> = 
                                        <select onchange="choice_check(event, '0.50');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.50</option>
                                            <option>0.55</option>
                                            <option>0.80</option>
                                            <option>0.95</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Table 4.12)<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Joint Group</h4>
                                    <p class="answer">
                                        Joint Group
                                        <select onchange="choice_check(event, 'J6');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>J1</option>
                                            <option>J2</option>
                                            <option>J3</option>
                                            <option>J4</option>
                                            <option>J5</option>
                                            <option>J6</option>
                                            <option>JD1</option>
                                            <option>JD2</option>
                                            <option>JD3</option>
                                            <option>JD4</option>
                                            <option>JD5</option>
                                            <option>JD6</option>
                                        </select> (AS1720.0 – Table H2.4)<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Configuration</h4>
                                    <p class="answer">
                                        Now given internal steel plate, we have a three-member joint configuration where<br/><br/>
                                        b<sub>eff</sub> = <input size="6" onkeypress="question_check(event, 100);"/> mm and Q<sub>sk</sub> =
                                        <select onchange="choice_check(event, '2');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select> Q<sub>kl</sub>, (AS1720.0 Table 4.9(A))<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Capacity (press ENTER after input)</h4>
                                    <p class="answer">
                                        Q<sub>kl</sub> = <input size="10" onkeypress="question_check(event, 6.2);"/> kN (AS1720.0 – Table 4.9(B))<br/><br/>
                                        N<sub>t,d,1</sub> = <input size="10" onkeypress="question_check(event, 30.554);"/> N,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 30 kN, therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Therefore 8 M12 bolts is
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                    </p>
                                </section>
                                <section><strong>This question is finished</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 11</h2>
                        <div id="q11">
                            <div class="h4 question">
                                <p>What are the six hazard classes for timber?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        H1:
                                        <select onchange="choice_check(event, 'inside, above ground, visible');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>in contact with saltwater</option>
                                            <option>inside, above ground, visible</option>
                                            <option>outside, in dry ground</option>
                                            <option>outside, above ground</option>
                                            <option>inside, above ground, hidden</option>
                                            <option>outside, in wet ground / freshwater</option>
                                        </select><br/><br/>
                                        H2:
                                        <select onchange="choice_check(event, 'inside, above ground, hidden');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>in contact with saltwater</option>
                                            <option>inside, above ground, visible</option>
                                            <option>outside, in dry ground</option>
                                            <option>outside, above ground</option>
                                            <option>inside, above ground, hidden</option>
                                            <option>outside, in wet ground / freshwater</option>
                                        </select><br/><br/>
                                        H3:
                                        <select onchange="choice_check(event, 'outside, above ground');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>in contact with saltwater</option>
                                            <option>inside, above ground, visible</option>
                                            <option>outside, in dry ground</option>
                                            <option>outside, above ground</option>
                                            <option>inside, above ground, hidden</option>
                                            <option>outside, in wet ground / freshwater</option>
                                        </select><br/><br/>
                                        H4:
                                        <select onchange="choice_check(event, 'outside, in dry ground');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>in contact with saltwater</option>
                                            <option>inside, above ground, visible</option>
                                            <option>outside, in dry ground</option>
                                            <option>outside, above ground</option>
                                            <option>inside, above ground, hidden</option>
                                            <option>outside, in wet ground / freshwater</option>
                                        </select><br/><br/>
                                        H5:
                                        <select onchange="choice_check(event, 'outside, in wet ground / freshwater');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>in contact with saltwater</option>
                                            <option>inside, above ground, visible</option>
                                            <option>outside, in dry ground</option>
                                            <option>outside, above ground</option>
                                            <option>inside, above ground, hidden</option>
                                            <option>outside, in wet ground / freshwater</option>
                                        </select><br/><br/>
                                        H6:
                                        <select onchange="choice_check(event, 'in contact with saltwater');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>in contact with saltwater</option>
                                            <option>inside, above ground, visible</option>
                                            <option>outside, in dry ground</option>
                                            <option>outside, above ground</option>
                                            <option>inside, above ground, hidden</option>
                                            <option>outside, in wet ground / freshwater</option>
                                        </select>
                                    </p>
                                </section>
                                <section><strong>Correct</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 12</h2>
                        <div id="q12">
                            <div class="h4 question">
                                <p>When timber elements are hidden, how can you protect for durability?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        When timber elements are hidden you can reduce the risk of rot in the timber due to moisture by<br/>
                                        <select onchange="choice_check(event, 'allowing air movement to one side of the timber element');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>allowing air movement to one side of the timber element</option>
                                            <option>treating the timber to hazard class H2</option>
                                        </select><br/>and reduce the risk of termite attack by<br/>
                                        <select onchange="choice_check(event, 'treating the timber to hazard class H2');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>allowing air movement to one side of the timber element</option>
                                            <option>treating the timber to hazard class H2</option>
                                        </select>
                                    </p>
                                </section>
                                <section><strong>Correct</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 13</h2>
                        <div id="q13">
                            <div class="h4">
                                <strong>Select all the different types of termite protection from the list below.</strong>
                            </div>
                            <table class="table" style="border: none;">
                                <tbody style="font-weight: bold;">
                                    <tr>
                                        <td><input type="checkbox" value="yes"> Concrete slabs</td>
                                        <td><input type="checkbox" value="no"> Timber Flooring</td>
                                        <td><input type="checkbox" value="yes"> Steel Capping</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="yes"> Crushed Stone</td>
                                        <td><input type="checkbox" value="no"> Sand</td>
                                        <td><input type="checkbox" value="yes"> Stainless Steel Mesh</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="no"> High Moisture Soil</td>
                                        <td><input type="checkbox" value="yes"> Hand Sprayed Chemicals</td>
                                        <td><input type="checkbox" value="yes"> Reticulation System</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="no"> Geothermal Heating</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="h4">
                                <button class="btn btn-primary" onclick="multi_check(this);">Check</button>
                                <span id="a13-1" class="h4" style="font-weight: bold;"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center" style="border-top: 3px solid black; margin-top: 100px;">
                        <button class="btn btn-danger btn-lg" onclick="window.close();">Close</button>&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-success btn-lg" onclick="window.location.reload(true);">Restart</button>&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-primary btn-lg" onclick="toSubmit(this);">Submit</button><br/><br/>
                        <span id="result" class="h3" style="font-weight: bold;">Please remember to submit when finishing!</span>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="script/script.js?v=4"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".accordion").accordion({
                collapsible: true,
                heightStyle: "content",
                active: false
            });
            
            create_selection("#q4");
        });
    </script>
</html>