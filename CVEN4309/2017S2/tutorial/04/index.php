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
        
        <title>Week 04 Tutorial</title>
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
        <div class="text-center h1" style="padding-top: 20px; padding-bottom: 20px;"><strong>Week 04 Tutorial Questions</strong></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="accordion">
                        <h2>Question 01</h2>
                        <div id="q1">
                            <div class="h4 question">
                                <p>How does the tensile strength of a member change as the member size changes?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        The
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>larger</option>
                                            <option>smaller</option>
                                        </select> a member is, the higher probability there is of finding
                                        <select onchange="choice_check(event, 'strength reducing characteristics');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>higher moisture content</option>
                                            <option>strength reducing characteristics</option>
                                        </select> near the outside corners and therefore the tensile strength is
                                        <select onchange="choice_check(event, 'reduced');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>reduced</option>
                                            <option>increased</option>
                                        </select>
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
                                <p>What comprises the tensile and compression area of a timber member?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        The tensile area of a timber member is the<br/>
                                        <select onchange="choice_check(event, 'gross cross sectional area minus any holes, but including nail area');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>gross cross sectional area</option>
                                            <option>gross cross sectional area minus any holes</option>
                                            <option>gross cross sectional area minus any holes, but including nail area</option>
                                            <option>gross cross sectional area minus any unfilled holes</option>
                                        </select><br/><br/>
                                        The compression area of a timber member is the<br/>
                                        <select onchange="choice_check(event, 'gross cross sectional area minus any unfilled holes');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>gross cross sectional area</option>
                                            <option>gross cross sectional area minus any holes</option>
                                            <option>gross cross sectional area minus any holes, but including nail area</option>
                                            <option>gross cross sectional area minus any unfilled holes</option>
                                        </select>
                                    </p>
                                </section>
                                <section><strong>Correct</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 03</h2>
                        <div id="q3">
                            <div class="h4 question">
                                <p>What are the two compression failure modes?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        Failure of Stocky Elements is where<br/>
                                        <select onchange="choice_check(event, 'the material crushes as the load is applied');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>the member buckles</option>
                                            <option>the material crushes as the load is applied</option>
                                            <option>the member fails due to bending</option>
                                        </select><br/><br/>
                                        Failure of Slender Elements is where<br/>
                                        <select onchange="choice_check(event, 'the member buckles');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>the member buckles</option>
                                            <option>the material crushes as the load is applied</option>
                                            <option>the member fails due to bending</option>
                                        </select>
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
                                <p>Size a F11 Seasoned Softwood Diagonal Truss tension element with a square cross section to support the below roof loads in a factory in Perth, WA. The element is connected to the other truss elements using 1 M20 bolt at each end in 22 diameter holes.</p>
                                <ul>
                                    <li>G = 80 kN</li>
                                    <li>Q (distributed roof load) = 60 kN</li>
                                </ul>
                                <img src="resource/5.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine the load and actions (press ENTER after input)</h4>
                                    <p class="answer">
                                        Tension: N<sub>t</sub>* =
                                        <select onchange="choice_check(event, '1.2G + 1.5Q');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.35G</option>
                                            <option>1.2G + 1.5Q</option>
                                        </select> = <input size="6" onkeypress="question_check(event, 186);"/> kN
                                        (AS1170.0 - Table 4.1)<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate the factors</h4>
                                    <p class="answer">
                                        Capacity Factor: &phi; = 
                                        <select onchange="choice_check(event, '0.70');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.60</option>
                                            <option>0.70</option>
                                            <option>0.90</option>
                                        </select> (AS1720.0 – Table 2.1)<br/><br/>
                                        Duration of Load Factor: k<sub>1</sub> = 
                                        <select onchange="choice_check(event, '0.80');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.69</option>
                                            <option>0.77</option>
                                            <option>0.80</option>
                                            <option>0.94</option>
                                        </select> (AS1720.0 – Table G1)<br/><br/>
                                        Partial Seasoning Factor: k<sub>4</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.12</option>
                                        </select> (AS1720.0 – Clause 2.4.2.3)<br/><br/>
                                        Temperature Factor: k<sub>6</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.90</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Clause 2.4.3)<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Size Element (press ENTER after input)</h4>
                                    <p class="answer">
                                        Since N<sub>t</sub>* &lt; N<sub>d,t</sub>, f<sub>t</sub>'A<sub>t</sub> &gt;
                                        <input size="8" onkeypress="question_check(event, 332.143);"/> kN (AS1720.0 - Clause 3.4.1)<br/><br/>
                                        Now assume element is less than 150 mm wide, f<sub>t</sub>' = 
                                        <input size="8" onkeypress="question_check(event, 15);"/> MPa (AS1720.0 - Table H2.1)<br/><br/>
                                        Therefore: A<sub>t</sub> &gt; 
                                        <input size="12" onkeypress="question_check(event, 22142.867);"/> mm<sub>2</sub><br/><br/>
                                        Hence Square Element size is
                                        <select onchange="choice_check(event, '165mm * 165mm');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>135mm * 135mm</option>
                                            <option>150mm * 150mm</option>
                                            <option>165mm * 165mm</option>
                                        </select><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Tensile Capacity (press ENTER after input)</h4>
                                    <p class="answer">
                                        Tensile Strength f<sub>t</sub>' = <input size="10" onkeypress="question_check(event, 14.763);"/> MPa<br/><br/>
                                        Tensile Capacity N<sub>d,t</sub> = <input size="10" onkeypress="question_check(event, 348.333);"/> kN, which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 186 kN,<br/>therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Therefore 165 &times; 165 F11 Seasoned Softwood Diagonal Truss element is
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
                        <h2>Question 06</h2>
                        <div id="q6">
                            <div class="h4 question">
                                <p>Assess the tensile strength of the 70 &times; 35 seasoned F11 softwood studs at 450mm centres in the 5m high, 5m wide wall due to a 15 kN/m uplift due to wind. The studs are nailed to the top and bottom plate with 1 intermediate noggin at 2.5m high. The wall is located in Hobart, TAS.</p>
                                <p>At the same time, the wall is subject to a 0.5 kPa wind load on the face of the wall. Assess the combined bending and tensile strength of the studs.</p>
                                <img src="resource/6.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine the load and actions (press ENTER after input)</h4>
                                    <p class="answer">
                                        Tension: N<sub>t</sub>* = <input size="6" onkeypress="question_check(event, 6.75);"/> kN<br/><br/>
                                        Bending: M* = <input size="6" onkeypress="question_check(event, 0.703);"/> kNm<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate the factors</h4>
                                    <p class="answer">
                                        Capacity Factor: &phi; = 
                                        <select onchange="choice_check(event, '0.90');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.60</option>
                                            <option>0.70</option>
                                            <option>0.90</option>
                                        </select> (AS1720.0 – Table 2.1)<br/><br/>
                                        Duration of Load Factor: k<sub>1</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.69</option>
                                            <option>0.77</option>
                                            <option>0.80</option>
                                            <option>0.94</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Table G1)<br/><br/>
                                        Partial Seasoning Factor: k<sub>4</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.12</option>
                                        </select> (AS1720.0 – Clause 2.4.2.3)<br/><br/>
                                        Temperature Factor: k<sub>6</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.90</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Clause 2.4.3)<br/><br/>
                                        Strength Sharing Factor: k<sub>9</sub> = 
                                        <select onchange="choice_check(event, '1.27');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.27</option>
                                            <option>1.33</option>
                                        </select> (AS1720.0 – Clause 2.4.5)<br/><br/>
                                        Material Constant: &rho;<sub>b</sub> = 
                                        <select onchange="choice_check(event, '0.98');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.75</option>
                                            <option>0.85</option>
                                            <option>0.98</option>
                                        </select> (AS1720.0 – Table 3.1)<br/><br/>
                                        Now the member has
                                        <select onchange="choice_check(event, 'discrete');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>continuous</option>
                                            <option>discrete</option>
                                        </select> lateral restraint and is restrained by the noggin on the 
                                        <select onchange="choice_check(event, 'compression');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>tension</option>
                                            <option>compression</option>
                                        </select> side. Hence use equation
                                        <select onchange="choice_check(event, '3.2(4)');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>3.2(4)</option>
                                            <option>3.2(5)</option>
                                            <option>3.2(7)</option>
                                            <option>3.2(8)</option>
                                        </select>. (AS1720.0 – Clause 3.2.3)<br/><br/>
                                        Slenderness Coefficient: S<sub>1</sub> = <input size="6" onkeypress="question_check(event, 14.94);"/><br/><br/>
                                        Member Slenderness: &rho;<sub>b</sub>S<sub>1</sub> = <input size="6" onkeypress="question_check(event, 14.641);"/> &nbsp;&nbsp;(AS1720.0 – Clause 3.2.4)<br/><br/>
                                        Stability Factor: k<sub>12</sub> = <input size="6" onkeypress="question_check(event, 0.768);"/><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Section Properties</h4>
                                    <p class="answer">
                                        Tensile Area: A<sub>t</sub> = <input size="8" onkeypress="question_check(event, 2450);"/> mm<sup>2</sup><br/><br/>
                                        Section Modulus: Z = <input size="12" onkeypress="question_check(event, 28583.333);"/> mm<sup>3</sup><br/><br/>
                                        Bending Strength: f<sub>b</sub>' = <input size="8" onkeypress="question_check(event, 31);"/> MPa<br/><br/>
                                        Tensile Strength: f<sub>t</sub>' = <input size="8" onkeypress="question_check(event, 15);"/> MPa<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate the capacity (press ENTER after input)</h4>
                                    <p class="answer">
                                        Tensile Capacity N<sub>d,t</sub> = <input size="10" onkeypress="question_check(event, 33.075);"/> kN, <br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 6.75 kN, therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Bending Capacity M<sub>d,t</sub> = <input size="10" onkeypress="question_check(event, 0.778);"/> kN, <br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 0.703 kNm, therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Combined Capacity k<sub>12</sub> &times; M* / M<sub>d</sub> + N<sub>t</sub>* / N<sub>d,t</sub>
                                        = <input size="6" onkeypress="question_check(event, 0.898);"/><br/>which is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 1,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Combined Capacity M* / M<sub>d,x</sub> + (Z / A) &times; N<sub>t</sub>* / M<sub>d,x</sub>
                                        = <input size="6" onkeypress="question_check(event, 1.005);"/><br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 1,<br/>therefore
                                        <select onchange="choice_check(event, 'NOT OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        therefore , 70 &times; 35 F11 Seasoned softwood Studs at 450mm centres  is
                                        <select onchange="choice_check(event, 'NOT OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select>
                                    </p>
                                </section>
                                <section><strong>This question is finished</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 07</h2>
                        <div id="q7">
                            <div class="h4 question">
                                <p>Size a F11 Seasoned Softwood Diagonal Truss compression element 1.8m long with a square cross section to support the below roof loads in a factory in Perth, WA. The element is connected to the other truss elements using 1 M20 bolt at each end in 22 diameter holes. </p>
                                <ul>
                                    <li>G = 80 kN</li>
                                    <li>Q (distributed roof load) = 60 kN</li>
                                </ul>
                                <img src="resource/7.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine the load and actions (press ENTER after input)</h4>
                                    <p class="answer">
                                        Tension: N<sub>c</sub>* =
                                        <select onchange="choice_check(event, '1.2G + 1.5Q');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.35G</option>
                                            <option>1.2G + 1.5Q</option>
                                        </select> = <input size="6" onkeypress="question_check(event, 186);"/> kN
                                        (AS1170.0 - Table 4.1)<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate the factors</h4>
                                    <p class="answer">
                                        Capacity Factor: &phi; = 
                                        <select onchange="choice_check(event, '0.70');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.60</option>
                                            <option>0.70</option>
                                            <option>0.90</option>
                                        </select> (AS1720.0 – Table 2.1)<br/><br/>
                                        Duration of Load Factor: k<sub>1</sub> = 
                                        <select onchange="choice_check(event, '0.80');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.69</option>
                                            <option>0.77</option>
                                            <option>0.80</option>
                                            <option>0.94</option>
                                        </select> (AS1720.0 – Table G1)<br/><br/>
                                        Partial Seasoning Factor: k<sub>4</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.12</option>
                                        </select> (AS1720.0 – Clause 2.4.2.3)<br/><br/>
                                        Temperature Factor: k<sub>6</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.90</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Clause 2.4.3)<br/><br/>
                                        Temperature Factor: g<sub>13</sub> = 
                                        <select onchange="choice_check(event, '1.0');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.7</option>
                                            <option>0.75</option>
                                            <option>0.85</option>
                                            <option>0.9</option>
                                            <option>1.0</option>
                                            <option>1.5</option>
                                            <option>2.0</option>
                                        </select> (AS1720.0 – Clause 2.4.3)<br/><br/>
                                        Effective length:<br/>
                                        L<sub>ax</sub> = <input size="6" onkeypress="question_check(event, 1.8);"/> m<br/>
                                        L<sub>ay</sub> = <input size="6" onkeypress="question_check(event, 1.8);"/> m<br/><br/>
                                        Material Constant: &rho;<sub>c</sub> = <input size="6" onkeypress="question_check(event, 1.02);"/><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Size Element (press ENTER after input)</h4>
                                    <p class="answer">
                                        Since N<sub>c</sub>* &lt; N<sub>d,c</sub>, k<sub>12</sub>A<sub>c</sub> &gt; <input size="10" onkeypress="question_check(event, 15097.409);"/> mm<sup>2</sup> (AS1720.0 - Clause 3.4.1)<br/><br/>
                                        Hence assume Square Element size is
                                        <select onchange="choice_check(event, '140mm * 140mm');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>125mm * 125mm</option>
                                            <option>140mm * 140mm</option>
                                            <option>155mm * 155mm</option>
                                        </select><br/><br/>
                                        Slenderness Coefficient S<sub>3</sub> = S<sub>4</sub> = <input size="10" onkeypress="question_check(event, 12.857);"/><br/><br/>
                                        Member Slenderness
                                        &rho;<sub>c</sub>S<sub>3</sub> = &rho;<sub>c</sub>S<sub>4</sub> = <input size="10" onkeypress="question_check(event, 13.114);"/> (AS1720.0 – Clause 3.2.4)<br/><br/>
                                        Stability factor k<sub>12</sub> = <input size="10" onkeypress="question_check(event, 0.844);"/><br/><br/>
                                        Compression Capacity N<sub>d,c</sub> = <input size="10" onkeypress="question_check(event, 363.933);"/> kN,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 186 kN, therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Therefore 140 &times; 140 F11 Seasoned Softwood Diagonal Truss element is
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
                        <h2>Question 08</h2>
                        <div id="q8">
                            <div class="h4 question">
                                <p>Assess the compressive strength of the 70 &times; 45 seasoned F11 softwood studs at 450mm centres in the 5m high, 5m wide wall due to the below loads. The studs are nailed to the top and bottom plate with 1 intermediate noggin at 2.5m high. The wall is located in Hobart, TAS.</p>
                                <ul>
                                    <li>G = 1.2 kN/m</li>
                                    <li>Q (&lt; 5 days) = 1.5 kN/m</li>
                                </ul>
                                <p>At the same time, the wall is subject to a 0.5 kPa wind load on the face of the wall. Assess the combined bending and tensile strength of the studs.</p>
                                <img src="resource/8.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine the load and actions</h4>
                                    <p class="answer">
                                        Under compression alone:
                                        <select onchange="choice_check(event, '1.2G + 1.5Q');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.35G</option>
                                            <option>1.2G + 1.5Q</option>
                                            <option>1.2G + 0.4Q + w</option>
                                        </select> (AS1170.0 – Table 4.1)<br/> 
                                        Compression N<sub>c</sub>* = <input size="6" onkeypress="question_check(event, 1.661);"/> kN<br/><br/>
                                        Combined compression and bending:
                                        <select onchange="choice_check(event, '1.2G + 0.4Q + w');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.35G</option>
                                            <option>1.2G + 1.5Q</option>
                                            <option>1.2G + 0.4Q + w</option>
                                        </select> (AS1170.0 – Table 4.1)<br/> 
                                        Compression N<sub>c</sub>* = <input size="6" onkeypress="question_check(event, 0.918);"/> kN&nbsp;&nbsp;&nbsp;&nbsp;
                                        Bending M* = <input size="6" onkeypress="question_check(event, 0.703);"/> kN<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate the factors</h4>
                                    <p class="answer">
                                        Capacity Factor: &phi; = 
                                        <select onchange="choice_check(event, '0.90');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.60</option>
                                            <option>0.70</option>
                                            <option>0.90</option>
                                        </select> (AS1720.0 – Table 2.1)<br/><br/>
                                        Duration of Load Factor:<br>
                                        &nbsp;&nbsp;&nbsp;Compression: k<sub>1</sub> = 
                                        <select onchange="choice_check(event, '0.94');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.69</option>
                                            <option>0.77</option>
                                            <option>0.80</option>
                                            <option>0.94</option>
                                            <option>1.00</option>
                                        </select><br/>
                                        &nbsp;&nbsp;&nbsp;Combined: k<sub>1</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.69</option>
                                            <option>0.77</option>
                                            <option>0.80</option>
                                            <option>0.94</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Table G1)<br/><br/>
                                        Partial Seasoning Factor: k<sub>4</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.12</option>
                                        </select> (AS1720.0 – Clause 2.4.2.3)<br/><br/>
                                        Temperature Factor: k<sub>6</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.90</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Clause 2.4.3)<br/><br/>
                                        Strength Sharing Factor: k<sub>9</sub> = 
                                        <select onchange="choice_check(event, '1.27');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.27</option>
                                            <option>1.33</option>
                                        </select> (AS1720.0 – Clause 2.4.5)<br/><br/>
                                        Compression k<sub>12</sub><br/><br/>
                                        Effective Length Factor g<sub>13</sub> = 
                                        <select onchange="choice_check(event, '0.9');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.7</option>
                                            <option>0.75</option>
                                            <option>0.85</option>
                                            <option>0.9</option>
                                            <option>1.0</option>
                                            <option>1.5</option>
                                            <option>2.0</option>
                                        </select> (AS1720.0 – Table 3.2)<br/><br/>
                                        Effective Length:
                                        L<sub>ax</sub> = <input size="5" onkeypress="question_check(event, 4.5);"/> m&nbsp;&nbsp;
                                        L<sub>ay</sub> = <input size="5" onkeypress="question_check(event, 2.25);"/> m<br/><br/>
                                        Material Constant: &rho;<sub>c</sub> = <input size="6" onkeypress="question_check(event, 1.02);"/><br/><br/>
                                        Slenderness Coefficient:
                                        S<sub>3</sub> = <input size="7" onkeypress="question_check(event, 64.286);"/>&nbsp;&nbsp;
                                        S<sub>4</sub> = <input size="7" onkeypress="question_check(event, 50);"/><br/><br/>
                                        Member Slenderness:
                                        &rho;<sub>c</sub>S<sub>3</sub> = <input size="7" onkeypress="question_check(event, 65.571);"/>&nbsp;&nbsp;
                                        &rho;<sub>c</sub>S<sub>4</sub> = <input size="7" onkeypress="question_check(event, 51);"/> (AS1720.0 – Clause 3.2.4)<br/><br/>
                                        Stability Factor:
                                        k<sub>12,x</sub> = <input size="7" onkeypress="question_check(event, 0.047);"/>&nbsp;&nbsp;
                                        k<sub>12,y</sub> = <input size="7" onkeypress="question_check(event, 0.077);"/><br/><br/>
                                        Bending k<sub>12</sub><br/><br/>
                                        Material Constant &rho;<sub>b</sub> = 
                                        <select onchange="choice_check(event, '0.98');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.75</option>
                                            <option>0.85</option>
                                            <option>0.98</option>
                                        </select> (AS1720.0 – Table 3.1)<br/><br/>
                                        Now the member has
                                        <select onchange="choice_check(event, 'discrete');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>continuous</option>
                                            <option>discrete</option>
                                        </select> lateral restraint and is restrained by the noggin on the 
                                        <select onchange="choice_check(event, 'compression');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>tension</option>
                                            <option>compression</option>
                                        </select> side. Hence use equation
                                        <select onchange="choice_check(event, '3.2(4)');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>3.2(4)</option>
                                            <option>3.2(5)</option>
                                            <option>3.2(7)</option>
                                            <option>3.2(8)</option>
                                        </select>. (AS1720.0 – Clause 3.2.3)<br/><br/>
                                        Slenderness Coefficient: S<sub>1</sub> = <input size="6" onkeypress="question_check(event, 11.62);"/><br/><br/>
                                        Member Slenderness: &rho;<sub>b</sub>S<sub>1</sub> = <input size="6" onkeypress="question_check(event, 11.388);"/> &nbsp;&nbsp;(AS1720.0 – Clause 3.2.4)<br/><br/>
                                        Stability Factor: k<sub>12</sub> = <input size="6" onkeypress="question_check(event, 0.931);"/><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Section Properties</h4>
                                    <p class="answer">
                                        Compression Area: A<sub>c</sub> = <input size="8" onkeypress="question_check(event, 3150);"/> mm<sup>2</sup><br/><br/>
                                        Section Modulus: Z = <input size="12" onkeypress="question_check(event, 36750);"/> mm<sup>3</sup><br/><br/>
                                        Bending Strength: f<sub>b</sub>' = <input size="8" onkeypress="question_check(event, 31);"/> MPa<br/><br/>
                                        Tensile Strength: f<sub>t</sub>' = <input size="8" onkeypress="question_check(event, 22);"/> MPa<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate the capacity (press ENTER after input)</h4>
                                    <p class="answer">
                                        Under Compression alone:<br/><br/>
                                        Compression Capacity N<sub>d,cx</sub> = <input size="10" onkeypress="question_check(event, 2.756);"/> kN, <br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 1.661 kN, therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Tensile Capacity N<sub>d,cy</sub> = <input size="10" onkeypress="question_check(event, 4.514);"/> kN, <br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 1.661 kN, therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Combined compression and bending:<br/><br/>
                                        Compression Capacity N<sub>d,cx</sub> = <input size="10" onkeypress="question_check(event, 2.756);"/> kN, <br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 0.918 kN, therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Tensile Capacity N<sub>d,cy</sub> = <input size="10" onkeypress="question_check(event, 4.514);"/> kN, <br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 0.918 kN, therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Bending Capacity M<sub>d</sub> = <input size="10" onkeypress="question_check(event, 1.212);"/> kN, <br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 0.703 kNm, therefore,
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Combined Capacity M*<sup>2</sup> / M<sub>d,x</sub><sup>2</sup> + N<sub>c</sub>* / N<sub>d,cy</sub>
                                        = <input size="6" onkeypress="question_check(event, 0.54);"/><br/>which is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 1,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Combined Capacity M* / M<sub>d,x</sub> + N<sub>c</sub>* / M<sub>d,cx</sub>
                                        = <input size="6" onkeypress="question_check(event, 0.913);"/><br/>which is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 1,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        therefore , 70 &times; 35 F11 Seasoned softwood Studs at 450mm centres  is
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select>
                                    </p>
                                </section>
                                <section><strong>This question is finished</strong></section>
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