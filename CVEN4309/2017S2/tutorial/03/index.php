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
        
        <title>Week 03 Tutorial</title>
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
        <div class="text-center h1" style="padding-top: 20px; padding-bottom: 20px;"><strong>Week 03 Tutorial Questions</strong></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="accordion">
                        <h2>Question 01</h2>
                        <div id="q1">
                            <div class="h4">
                                <strong>When do you use E<sub>mean</sub> and E<sub>5&#37;ile</sub> for serviceability calculations?</strong>
                            </div>
                            <div class="h4">
                                <strong>Answer: </strong>We use E<sub>mean</sub> for
                                <select id="q1-1">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>appearance and vibration serviceability calculations</option>
                                    <option>structural and functional serviceability calculations</option>
                                </select> and use E<sub>5&#37;ile</sub> for 
                                <select id="q1-2">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>appearance and vibration serviceability calculations</option>
                                    <option>structural and functional serviceability calculations</option>
                                </select>.<br/>
                                <button class="btn btn-primary" onclick="check_1(this);">Check</button>
                            </div>
                            <div id="a1-1" class="h4" style="display: none; font-weight: bold;">
                                Use E<sub>mean</sub> for appearance and vibration serviceability calculations and E<sub>5&#37;ile</sub> for structural and functional serviceability calculations
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 02</h2>
                        <div id="q2">
                            <div class="h4">
                                <strong>Choose the correct name for the following factors (you need to finish all the choices)</strong>
                            </div>
                            <div class="h4">
                                <ul class="list-seperate"></ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 03</h2>
                        <div id="q3">
                            <div class="h4">
                                <strong>What are the three failure modes of bending elements?</strong>
                            </div>
                            <div class="h4">
                                <ul class="list-seperate">
                                    <li>
                                        <strong>Bending Capacity:&nbsp;&nbsp;&nbsp;</strong>
                                        <select id="q3-1">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>Capacity limited by shear fracture</option>
                                            <option>Crushing of the timber over a bearing point or under a point load</option>
                                            <option>Capacity limited by a flexural fracture</option>
                                        </select>
                                    </li>
                                    <li>
                                        <strong>Shear Capacity:&nbsp;&nbsp;&nbsp;</strong>
                                        <select id="q3-2">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>Capacity limited by shear fracture</option>
                                            <option>Crushing of the timber over a bearing point or under a point load</option>
                                            <option>Capacity limited by a flexural fracture</option>
                                        </select>
                                    </li>
                                    <li>
                                        <strong>Bearing Capacity:&nbsp;&nbsp;&nbsp;</strong>
                                        <select id="q3-3">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>Capacity limited by shear fracture</option>
                                            <option>Crushing of the timber over a bearing point or under a point load</option>
                                            <option>Capacity limited by a flexural fracture</option>
                                        </select>
                                    </li>
                                </ul>
                                <button class="btn btn-primary" onclick="check_3(this);">Check</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 04</h2>
                        <div id="q4">
                            <div class="h4">
                                <strong>What is the difference between a primary member and a secondary member</strong>
                            </div>
                            <div class="h4">
                                <ul class="list-seperate">
                                    <li>
                                        <strong>Primary members:&nbsp;&nbsp;&nbsp;</strong>
                                        <select id="q4-1">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>have the capacity to share the load between each other in the event of a failure and no collapse would occur</option>
                                            <option>function in isolation, if they were to failure collapse would occur</option>
                                        </select>
                                    </li>
                                    <li>
                                        <strong>Secondary members:&nbsp;&nbsp;&nbsp;</strong>
                                        <select id="q4-2">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>have the capacity to share the load between each other in the event of a failure and no collapse would occur</option>
                                            <option>function in isolation, if they were to failure collapse would occur</option>
                                        </select>
                                    </li>
                                </ul>
                                <button class="btn btn-primary" onclick="check_4(this);">Check</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 05</h2>
                        <div id="q5">
                            <div class="h4 question">
                                <p>Floor Joists are supported by a 140 &times; 45 seasoned MGP10 bearer that spans 2m above a sliding door. Assess the serviceability of the bearer against a maximum deflection of 5mm under a G + &psi;lQ load to allow functionality of the door.</p>
                                <ul>
                                    <li>G (incl. SW) = 0.7 kN/m</li>
                                    <li>Q (&lt;1 day duration) = 1.5 kN/m</li>
                                </ul>
                                <img src="resource/5.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine the j<sub>2</sub> factor and load</h4>
                                    <p class="answer">
                                        Load: w =
                                        <select onchange="choice_check(event, 'G + 0.4Q');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>G + Q</option>
                                            <option>G + 0.4Q</option>
                                            <option>G + 0.7Q</option>
                                        </select>
                                        (AS1170.0 - Table 4.1)<br/><br/>
                                        Now G is a 
                                        <select onchange="choice_check(event, 'permanent load (Duration longer than 1 year)');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>permanent load (Duration longer than 1 year)</option>
                                            <option>short term load (Duration shorter than 1 day)</option>
                                        </select><br/>and Q is a 
                                        <select onchange="choice_check(event, 'short term load (Duration shorter than 1 day)');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>permanent load (Duration longer than 1 year)</option>
                                            <option>short term load (Duration shorter than 1 day)</option>
                                        </select><br/><br/>
                                        Therefore we need to have two j<sub>2</sub> factors to calculate the functional deflection.<br/>
                                        &Delta;<sub>tot</sub> = j<sub>2,G</sub>&Delta;<sub>G</sub> + j<sub>2,Q</sub>&Delta;<sub>Q</sub><br/><br/>
                                        j<sub>2,G</sub> = 
                                        <select onchange="choice_check(event, '2');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1</option>
                                            <option>1.5</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>,&nbsp;&nbsp;&nbsp; j<sub>2,Q</sub> = 
                                        <select onchange="choice_check(event, '1');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1</option>
                                            <option>1.5</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select> (AS1720.1 - Table 2.4)
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine member stiffness (press ENTER after input)</h4>
                                    <p class="answer">
                                        Modulus of Inertia: I = <input size="10" onkeypress="question_check(event, 10.29);"/> &times; 10<sup>6</sup> mm<sup>4</sup><br/><br/>
                                        Serviceability criteria: 
                                        <select onchange="choice_check(event, 'Functional consequence');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>Appearance consequence</option>
                                            <option>Vibration consequence</option>
                                            <option>Structural consequence</option>
                                            <option>Functional consequence</option>
                                        </select><br/><br/>
                                        Modulus of Elasticity: 
                                        <select onchange="choice_check(event, 'E-5%ile');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>E-mean</option>
                                            <option>E-5%ile</option>
                                        </select> = <input size="10" onkeypress="question_check(event, 7000);"/> MPa (AS1720.1 – Table 3.1 and Note to Table B1) <br/><br/>
                                        Stiffness: EI = <input size="10" onkeypress="question_check(event, 72.03);"/> &times; 10<sup>9</sup> N/mm<sup>2</sup>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine the total deflection (press ENTER after input)</h4>
                                    <p class="answer">
                                        Dead Load Deflection &Delta;<sub>G</sub> = <input size="10" onkeypress="question_check(event, 2.025);"/> mm<br/><br/>
                                        Live Load Deflection &Delta;<sub>0.4Q</sub> = <input size="10" onkeypress="question_check(event, 1.735);"/> mm<br/><br/>
                                        Total Deflection is: <input size="10" onkeypress="question_check(event, 5.785);"/><br/><br/>
                                        Now &Delta;<sub>tot</sub> =
                                        <select onchange="choice_check(event, 'larger than 5 mm');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller than 5 mm</option>
                                            <option>larger than 5 mm</option>
                                        </select>,<br/>
                                        therefore 140 &times; 45 Seansoned MGP10 bearer is
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
                        <h2>Question 06</h2>
                        <div id="q6">
                            <div class="h4 question">
                                <p>Assess the serviceability of 140 &times; 45 seasoned MGP10 residential floor joists at 450mm centres with F11 21mm 7 ply plywood flooring nailed at 600mm centres for vibration under a short term imposed 1.0 kN load against a 2mm deflection limit.</p>
                                <img src="resource/6.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine member stiffness</h4>
                                    <p class="answer">
                                        Serviceability criteria: 
                                        <select onchange="choice_check(event, 'Vibration consequence');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>Appearance consequence</option>
                                            <option>Vibration consequence</option>
                                            <option>Structural consequence</option>
                                            <option>Functional consequence</option>
                                        </select><br/><br/>
                                        <em>Joists:</em><br/><br/>
                                        Modulus of Inertia I = <input size="10" onkeypress="question_check(event, 10.29);"/> &times; 10<sup>6</sup> mm<sup>4</sup><br/><br/>
                                        Modulus of Elasticity: 
                                        <select onchange="choice_check(event, 'E-mean');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>E-mean</option>
                                            <option>E-5%ile</option>
                                        </select> = <input size="10" onkeypress="question_check(event, 10000);"/> MPa (AS1720.1 – Table 3.1 and Note to Table B1) <br/><br/>
                                        Stiffness: EI = <input size="10" onkeypress="question_check(event, 102.9);"/> &times; 10<sup>9</sup> N/mm<sup>2</sup><br/><br/>
                                        <em>Plywood:</em><br/><br/>
                                        Modulus of Inertia I = <input size="10" onkeypress="question_check(event, 555);"/> &times; 10<sup>3</sup> mm<sup>4</sup> (AS1720.1 – Table I5)<br/><br/>
                                        Modulus of Elasticity E = <input size="10" onkeypress="question_check(event, 10500);"/> MPa (AS1720.1 – Table 5.1)<br/><br/>
                                        Stiffness: EI = <input size="10" onkeypress="question_check(event, 5.828);"/> &times; 10<sup>9</sup> N/mm<sup>2</sup>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine the j<sub>2</sub> factor and load</h4>
                                    <p class="answer">
                                        Now the applied load is shared across the grid of joists and flooring using g<sub>41</sub>: (AS1720.1 – Clause E8.2)<br/><br/>
                                        n<sub>c</sub>h<sub>c</sub> = n<sub>c</sub>E<sub>c</sub>I<sub>c</sub> / S<sup>3</sup> = <input size="10" onkeypress="question_check(event, 191.868);"/> Nmm<sup>3</sup><br/><br/>
                                        h<sub>B</sub> = E<sub>B</sub>I<sub>B</sub> / L<sup>3</sup> = <input size="10" onkeypress="question_check(event, 3.811);"/> Nmm<sup>3</sup><br/><br/>
                                        Hence, g<sub>41</sub> = <input size="10" onkeypress="question_check(event, 0.303);"/><br/><br/>
                                        Therefore P = <input size="10" onkeypress="question_check(event, 0.303);"/> kN<br/><br/><br/>
                                        Now the vibration load is a
                                        <select onchange="choice_check(event, 'short term load (Duration shorter than 1 day)');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>permanent load (Duration longer than 1 year)</option>
                                            <option>short term load (Duration shorter than 1 day)</option>
                                        </select>, and<br/>
                                        j<sub>2</sub> = 
                                        <select onchange="choice_check(event, '1');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1</option>
                                            <option>1.5</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>&nbsp;&nbsp;(AS1720.1 – Table 2.4)
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine the total deflection</h4>
                                    <p class="answer">
                                        Using elastic delfection formula,
                                        Deflectoin is: &Delta; = <input size="10" onkeypress="question_check(event, 1.656);"/> mm<br/><br/>
                                        Total Deflectoin is: &Delta;<sub>tot</sub>= <input size="10" onkeypress="question_check(event, 1.656);"/> mm<br/><br/>
                                        Now &Delta;<sub>tot</sub> =
                                        <select onchange="choice_check(event, 'smaller than 2 mm');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller than 2 mm</option>
                                            <option>larger than 2 mm</option>
                                        </select>,<br/>
                                        therefore 140 &times; 45 Seasoned MGP10 joists with F11 21mm 7 ply plywood is
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
                    
                    <div class="accordion">
                        <h2>Question 07</h2>
                        <div id="q7">
                            <div class="h4 question">
                                <p>Floor Joists at 450 mm c/c are supported by a 140x45 seasoned MGP10 bearer that spans 2m above a sliding door in Cairns, QLD. Assess the bending, shear and bearing strength of the bearer under the below loads with a 45 mm bearing length at each end.</p>
                                <ul>
                                    <li>G (incl. SW) = 0.7 kN/m</li>
                                    <li>Q (floor live load) = 1.5 kN/m</li>
                                </ul>
                                <p>The element is further subject to a horizontal wind load of 0.5 kN/m. Check for combined bending.</p>
                                <img src="resource/7.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine the load and actions</h4>
                                    <p class="answer">
                                        Load: w = 
                                        <select onchange="choice_check(event, '1.2G + 1.5Q');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.35G</option>
                                            <option>1.2G + 1.5Q</option>
                                        </select>
                                        = <input size="6" onkeypress="question_check(event, 3.09);"/> kN/m (AS1170.0 - Clause 4.2.2)<br/><br/>
                                        Bending Moment: M* = <input size="6" onkeypress="question_check(event, 1.545);"/> kNm<br/><br/>
                                        Shear Force: V* = <input size="6" onkeypress="question_check(event, 3.09);"/> kN<br/><br/>
                                        Bearing Force: N<sub>p</sub>* = <input size="6" onkeypress="question_check(event, 3.09);"/> kN
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate the Factors</h4>
                                    <p class="answer">
                                        Capacity Factor: &phi; = 
                                        <select onchange="choice_check(event, '0.90');">
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
                                        <select onchange="choice_check(event, '0.90');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.90</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Clause 2.4.3)<br/><br/>
                                        Bearing Factor: k<sub>7</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.10</option>
                                            <option>1.20</option>
                                        </select> (AS1720.0 – Clause 2.4.4)<br/><br/>
                                        Strength Sharing Factor: k<sub>9</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.14</option>
                                            <option>1.33</option>
                                        </select> (AS1720.0 – Clause 2.4.5)<br/><br/>
                                        Material Constant: &rho;<sub>b</sub> = 
                                        <select onchange="choice_check(event, '0.75');">
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
                                        </select> lateral restraint and is restrained by the joists on the
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
                                        Slenderness Coefficient: S<sub>1</sub> = <input size="6" onkeypress="question_check(event, 6.972);"/><br/><br/>
                                        Member Slenderness: &rho;<sub>b</sub>S<sub>1</sub> = <input size="6" onkeypress="question_check(event, 5.229);"/> &nbsp;&nbsp;(AS1720.0 – Clause 3.2.4)<br/><br/>
                                        Stability Factor: k<sub>12</sub> = <input size="6" onkeypress="question_check(event, 1);"/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Section Properties</h4>
                                    <p class="answer">
                                        Section Modulus: Z = <input size="8" onkeypress="question_check(event, 147);"/> &times; 10<sup>3</sup> mm<sup>3</sup><br/><br/>
                                        Shear Area: A<sub>s</sub> = <input size="8" onkeypress="question_check(event, 4.2);"/> &times; 10<sup>3</sup> mm<sup>2</sup><br/><br/>
                                        Bearing Area: A<sub>p</sub> = <input size="8" onkeypress="question_check(event, 2.025);"/> &times; 10<sup>3</sup> mm<sup>2</sup><br/><br/>
                                        Bending Strength: f<sub>b</sub>' = 
                                        <select onchange="choice_check(event, '17');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                        </select> MPa (AS1720.0 – Table H3.1)<br/><br/>
                                        Shear Strength: f<sub>s</sub>' = 
                                        <select onchange="choice_check(event, '2.6');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>2.3</option>
                                            <option>2.4</option>
                                            <option>2.5</option>
                                            <option>2.6</option>
                                        </select> MPa<br/><br/>
                                        Bearing Strength: f<sub>p</sub>' = 
                                        <select onchange="choice_check(event, '10');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>10</option>
                                            <option>17</option>
                                        </select> MPa
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Bending Capacity</h4>
                                    <p class="answer">
                                        M<sub>d</sub> = <input size="6" onkeypress="question_check(event, 1.619);"/> kNm,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 1.545 kNm,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        V<sub>d</sub> = <input size="6" onkeypress="question_check(event, 7.076);"/> kNm,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 3.090 kNm,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        N<sub>d,p</sub> = <input size="6" onkeypress="question_check(event, 13.122);"/> kNm,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 3.090 kNm,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Therefore, 140 &times; 45 seasoned MGP10 bearer with 45mm bearing length
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Combined Bending</h4>
                                    <p class="answer">
                                        For combined bending, the below load acts in the major axis at the same time as a Wind load of 0.50 kN/m in the minor axis.<br/><br/>
                                        Load: w = 
                                        <select onchange="choice_check(event, '1.2G + 0.4Q');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>G + Q</option>
                                            <option>1.2G + 0.4Q</option>
                                        </select>
                                        = <input size="6" onkeypress="question_check(event, 1.44);"/> kN/m (AS1170.0 - Clause 4.2.2)<br/><br/>
                                        Therefore:<br/>
                                        M<sub>major</sub>* = <input size="6" onkeypress="question_check(event, 0.72);"/> kNm<br/><br/>
                                        M<sub>minor</sub>* = <input size="6" onkeypress="question_check(event, 0.25);"/> kNm<br/><br/>
                                        Now all factors remain the same in the minor case except k<sub>1</sub> and k<sub>12</sub>.<br/><br/>
                                        Duration of Load Factor k<sub>1</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.80</option>
                                            <option>0.94</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Table G1)<br/><br/>
                                        Stability Factor k<sub>12</sub> = <input size="6" onkeypress="question_check(event, 1);"/> (AS1720.0 – Clause 3.2.3)<br/><br/>
                                        Minor Section Properties:<br/><br/>
                                        Minor Section Modulus Z = <input size="6" onkeypress="question_check(event, 47.25);"/> &times; 10<sup>3</sup> mm<sup>3</sup><br/><br/>
                                        Therefore<br/><br/>
                                        Minor Axis Capacity M<sub>d,minor</sub> = <input size="6" onkeypress="question_check(event, 0.651);"/> kNm,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 0.25 kNm,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Major Axis Capacity M<sub>d,major</sub> = <input size="6" onkeypress="question_check(event, 2.024);"/> kNm,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 0.72 kNm,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Combined Capacity M<sub>major</sub>* / M<sub>d,major</sub> + M<sub>minor</sub>* / M<sub>d,minor</sub> = <input size="6" onkeypress="question_check(event, 0.74);"/><br/>which is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 1,<br/>therefore
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
                    
                    <div class="accordion">
                        <h2>Question 08</h2>
                        <div id="q8">
                            <div class="h4 question">
                                <p>Assess the bearing, shear and bearing strength of 140 &times; 45 seasoned MGP10 residential floor joists at 450mm centres with F11 21mm 7 ply plywood flooring nailed at 450mm centres and spanning 3m for under the below loads in Cairns, QLD.</p>
                                <ul>
                                    <li>G (incl. SW) = 0.7 kN/m</li>
                                    <li>Q (floor live load) = 1.5 kN/m</li>
                                </ul>
                                <img src="resource/8.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine the load and actions</h4>
                                    <p class="answer">
                                        Load: w = 
                                        <select onchange="choice_check(event, '1.2G + 1.5Q');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.35G</option>
                                            <option>1.2G + 1.5Q</option>
                                        </select>
                                        = <input size="6" onkeypress="question_check(event, 1.391);"/> kN/m (AS1170.0 - Clause 4.2.2)<br/><br/>
                                        Bending Moment: M* = <input size="6" onkeypress="question_check(event, 1.565);"/> kNm<br/><br/>
                                        Shear Force: V* = <input size="6" onkeypress="question_check(event, 2.087);"/> kN<br/><br/>
                                        Bearing Force: N<sub>p</sub>* = <input size="6" onkeypress="question_check(event, 2.087);"/> kN
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate the Factors</h4>
                                    <p class="answer">
                                        Capacity Factor: &phi; = 
                                        <select onchange="choice_check(event, '0.90');">
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
                                        <select onchange="choice_check(event, '0.90');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.90</option>
                                            <option>1.00</option>
                                        </select> (AS1720.0 – Clause 2.4.3)<br/><br/>
                                        Bearing Factor: k<sub>7</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.10</option>
                                            <option>1.20</option>
                                        </select> (AS1720.0 – Clause 2.4.4)<br/><br/>
                                        Geometric Factor:<br/>g<sub>31</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.26</option>
                                            <option>1.33</option>
                                        </select><br/>g<sub>32</sub> = 
                                        <select onchange="choice_check(event, '1.33');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.26</option>
                                            <option>1.33</option>
                                        </select> (AS1720.0 – Table 2.7)<br/><br/>
                                        Strength Sharing Factor: k<sub>9</sub> = 
                                        <select onchange="choice_check(event, '1.00');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.00</option>
                                            <option>1.14</option>
                                            <option>1.33</option>
                                        </select> (AS1720.0 – Clause 2.4.5)<br/><br/>
                                        Material Constant: &rho;<sub>b</sub> = 
                                        <select onchange="choice_check(event, '0.75');">
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
                                        </select> lateral restraint and is restrained by the joists on the
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
                                        Slenderness Coefficient: S<sub>1</sub> = <input size="6" onkeypress="question_check(event, 6.972);"/><br/><br/>
                                        Member Slenderness: &rho;<sub>b</sub>S<sub>1</sub> = <input size="6" onkeypress="question_check(event, 5.229);"/> &nbsp;&nbsp;(AS1720.0 – Clause 3.2.4)<br/><br/>
                                        Stability Factor: k<sub>12</sub> = <input size="6" onkeypress="question_check(event, 1);"/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Section Properties</h4>
                                    <p class="answer">
                                        Section Modulus: Z = <input size="8" onkeypress="question_check(event, 147);"/> &times; 10<sup>3</sup> mm<sup>3</sup><br/><br/>
                                        Shear Area: A<sub>s</sub> = <input size="8" onkeypress="question_check(event, 4.2);"/> &times; 10<sup>3</sup> mm<sup>2</sup><br/><br/>
                                        Bearing Area: A<sub>p</sub> = <input size="8" onkeypress="question_check(event, 2.025);"/> &times; 10<sup>3</sup> mm<sup>2</sup><br/><br/>
                                        Bending Strength: f<sub>b</sub>' = 
                                        <select onchange="choice_check(event, '17');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                        </select> MPa (AS1720.0 – Table H3.1)<br/><br/>
                                        Shear Strength: f<sub>s</sub>' = 
                                        <select onchange="choice_check(event, '2.6');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>2.3</option>
                                            <option>2.4</option>
                                            <option>2.5</option>
                                            <option>2.6</option>
                                        </select> MPa<br/><br/>
                                        Bearing Strength: f<sub>p</sub>' = 
                                        <select onchange="choice_check(event, '10');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>10</option>
                                            <option>17</option>
                                        </select> MPa
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Bending Capacity</h4>
                                    <p class="answer">
                                        M<sub>d</sub> = <input size="6" onkeypress="question_check(event, 1.914);"/> kNm,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 1.565 kNm,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        V<sub>d</sub> = <input size="6" onkeypress="question_check(event, 7.076);"/> kNm,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 2.087 kNm,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        N<sub>d,p</sub> = <input size="6" onkeypress="question_check(event, 13.122);"/> kNm,<br/>which is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 2.087 kNm,<br/>therefore
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select><br/><br/>
                                        Therefore, 140 &times; 45 MGP10 joists with F11 21mm 7 ply plywood 
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
            
            create_q2();
        });
    </script>
</html>