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
        
        <title>Week 06 Tutorial</title>
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
        <div class="text-center h1" style="padding-top: 20px; padding-bottom: 20px;"><strong>Week 06 Tutorial Questions</strong></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="accordion">
                        <h2>Question 01</h2>
                        <div id="q1">
                            <div class="h4 question">
                                <p>What is Cross Laminated Timber?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        Cross Laminated Timber, or CLT, is a prefabricated,
                                        <select onchange="choice_check(event, 'solid');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>lightweight</option>
                                            <option>solid</option>
                                        </select>
                                        , engineered wood product made of timber
                                        <select onchange="choice_check(event, 'orthogonally');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>orthogonally</option>
                                            <option>parallel</option>
                                        </select>
                                        layered and laminated together with
                                        <select onchange="choice_check(event, 'structural adhesives');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>finger joints</option>
                                            <option>structural adhesives</option>
                                        </select>
                                        to form panels.
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
                                <p>What is Rolling Shear?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        Rolling shear is the shear stress induced in the
                                        <select onchange="choice_check(event, 'perpendicular');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>parallel</option>
                                            <option>perpendicular</option>
                                        </select>
                                        layers of a CLT panel due to<br/>
                                        <select onchange="choice_check(event, 'the layers sliding with respect to each other under load');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>the layers sliding with respect to each other under load</option>
                                            <option>the shear force induced by bending</option>
                                            <option>the failure of the glue between lamellas</option>
                                        </select><br/><br/>
                                        The
                                        <select onchange="choice_check(event, 'low');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>low</option>
                                            <option>high</option>
                                        </select>
                                        rolling shear stiffness of CLT leaders to
                                        <select onchange="choice_check(event, 'large');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>small</option>
                                            <option>large</option>
                                        </select>
                                        strains causing a
                                        <select onchange="choice_check(event, 'laminate specific');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>randomised</option>
                                            <option>laminate specific</option>
                                        </select> deformation pattern in the panel known as the
                                        <select onchange="choice_check(event, 'zig zag effect');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>straight line effect</option>
                                            <option>zig zag effect</option>
                                            <option>xylophone effect</option>
                                        </select>.<br/><br/>
                                        This deformation results in failure of the
                                        <select onchange="choice_check(event, 'perpendicular');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>parallel</option>
                                            <option>perpendicular</option>
                                        </select>
                                        layers inducing more force in the
                                        <select onchange="choice_check(event, 'parallel');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>parallel</option>
                                            <option>perpendicular</option>
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
                                <p>What is the Mechanically Jointed Beams Method?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        The Mechanically Jointed Beams Method, or
                                        <select onchange="choice_check(event, 'gamma');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>alpha</option>
                                            <option>beta</option>
                                            <option>gamma</option>
                                            <option>delta</option>
                                        </select>
                                        method is a way of calculating the effective bending
                                        <select onchange="choice_check(event, 'stiffness');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>strength</option>
                                            <option>stiffness</option>
                                        </select>
                                        of CLT by considering the
                                        <select onchange="choice_check(event, 'perpendicular');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>parallel</option>
                                            <option>perpendicular</option>
                                        </select>
                                        layers as connections between the
                                        <select onchange="choice_check(event, 'parallel');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>parallel</option>
                                            <option>perpendicular</option>
                                        </select>
                                        layers to account for the slip caused by
                                        <select onchange="choice_check(event, 'rolling shear');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>bending</option>
                                            <option>rolling shear</option>
                                        </select>.
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
                                <strong>Besides Strength and Serviceability, select all the different elements to consider when designing CLT?</strong>
                            </div>
                            <table class="table" style="border: none;">
                                <tbody style="font-weight: bold;">
                                    <tr>
                                        <td><input type="checkbox" value="yes"> Fire</td>
                                        <td><input type="checkbox" value="yes"> Acoustics</td>
                                        <td><input type="checkbox" value="no"> Smell</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="yes"> Floor and Ceiling Height</td>
                                        <td><input type="checkbox" value="no"> Furniture Used</td>
                                        <td><input type="checkbox" value="yes"> Installation Cost</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="yes"> Panel Optimisation</td>
                                        <td><input type="checkbox" value="no"> Cost of Site Sheds</td>
                                        <td><input type="checkbox" value="yes"> Construction Time</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="h4">
                                <button class="btn btn-primary" onclick="multi_check(this);">Check</button>
                                <span id="a4-1" class="h4" style="font-weight: bold;"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 05</h2>
                        <div id="q5">
                            <div class="h4 question">
                                <p>Consider the below CLT panel. The width of the panel is 2.25m and the length of the panel is 6.00m. Calculate the effective stiffness for both scenarios where the major axis is in the direction of the load arrangement and if the minor axis is in the direction of the load arrangement.<br/><br/>E<sub>0</sub> = 17,000 MPa, G<sub>R</sub> = 170 MPa</p>
                                <img src="resource/05.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Calculate Layer Properties (press ENTER after input)</h4>
                                    <p class="answer">
                                        Modulus of Elasticity
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            E<sub>1</sub> = <input size="5" onkeypress="question_check(event, 17);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>2</sub> = <input size="5" onkeypress="question_check(event, 17);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>3</sub> = <input size="5" onkeypress="question_check(event, 17);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>4</sub> = <input size="5" onkeypress="question_check(event, 17);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>5</sub> = <input size="5" onkeypress="question_check(event, 17);"/> GPa
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Lamella Area
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            A<sub>1</sub> = <input size="5" onkeypress="question_check(event, 135);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>2</sub> = <input size="5" onkeypress="question_check(event, 67.5);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>3</sub> = <input size="5" onkeypress="question_check(event, 90);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>4</sub> = <input size="5" onkeypress="question_check(event, 67.5);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>5</sub> = <input size="5" onkeypress="question_check(event, 135);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Modulus of Inertia
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            I<sub>1</sub> = <input size="5" onkeypress="question_check(event, 40.5);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>2</sub> = <input size="5" onkeypress="question_check(event, 5.063);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>3</sub> = <input size="5" onkeypress="question_check(event, 12);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>4</sub> = <input size="5" onkeypress="question_check(event, 5.063);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>5</sub> = <input size="5" onkeypress="question_check(event, 40.5);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                    </ul>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate Major Stiffness</h4>
                                    <p class="answer">
                                        Given Symmerty:&nbsp;&nbsp;&nbsp;&nbsp;
                                        &gamma;<sub>3</sub> = <input size="3" onkeypress="question_check(event, 1);"/> and
                                        &alpha;<sub>3</sub> = <input size="3" onkeypress="question_check(event, 0);"/>
                                        <br/><br/>
                                        <span style="border-top: solid 1px black;">K<sub>1</sub></span> =
                                        <span style="border-top: solid 1px black;">K<sub>5</sub></span> = <input size="8" onkeypress="question_check(event, 12750);"/> MPa<br/><br/>
                                        &gamma;<sub>1</sub> = &gamma;<sub>5</sub> = <input size="8" onkeypress="question_check(event, 0.953);"/><br/><br/>
                                        &alpha;<sub>1</sub> = &alpha;<sub>5</sub> = <input size="5" onkeypress="question_check(event, 80);"/> mm<br/><br/>
                                        (EI)<sub>ef</sub> = <input size="8" onkeypress="question_check(event, 2.958);"/> &times; 10<sup>13</sup> mm<sup>4</sup><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate Minor Stiffness</h4>
                                    <p class="answer">
                                        Given Symmerty
                                        <br/><br/>
                                        <span style="border-top: solid 1px black;">K<sub>2</sub></span> =
                                        <span style="border-top: solid 1px black;">K<sub>4</sub></span> = <input size="8" onkeypress="question_check(event, 19125);"/> MPa<br/><br/>
                                        &gamma;<sub>2</sub> = &gamma;<sub>4</sub> = <input size="8" onkeypress="question_check(event, 0.984);"/><br/><br/>
                                        &alpha;<sub>2</sub> = &alpha;<sub>4</sub> = <input size="5" onkeypress="question_check(event, 30);"/> mm<br/><br/>
                                        (EI)<sub>ef</sub> = <input size="8" onkeypress="question_check(event, 0.22);"/> &times; 10<sup>13</sup> mm<sup>4</sup><br/><br/>
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
                                <p>Consider the below CLT panel. The width of the panel is 1.00m and the length of the panel is 2.00m. Calculate the effective stiffness for both scenarios where the major axis is in the direction of the load arrangement and if the minor axis is in the direction of the load arrangement.<br/><br/>E<sub>0</sub> = 17,000 MPa, G<sub>R</sub> = 170 MPa</p>
                                <img src="resource/06.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Calculate Layer Properties (press ENTER after input)</h4>
                                    <p class="answer">
                                        Modulus of Elasticity
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            E<sub>1</sub> = <input size="5" onkeypress="question_check(event, 17);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>2</sub> = <input size="5" onkeypress="question_check(event, 17);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>3</sub> = <input size="5" onkeypress="question_check(event, 17);"/> GPa
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Lamella Area
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            A<sub>1</sub> = <input size="5" onkeypress="question_check(event, 30);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>2</sub> = <input size="5" onkeypress="question_check(event, 40);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>3</sub> = <input size="5" onkeypress="question_check(event, 30);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Modulus of Inertia
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            I<sub>1</sub> = <input size="5" onkeypress="question_check(event, 2.25);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>2</sub> = <input size="5" onkeypress="question_check(event, 5.333);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>3</sub> = <input size="5" onkeypress="question_check(event, 2.25);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                    </ul>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate Major Stiffness</h4>
                                    <p class="answer">
                                        Given Symmerty:<br/><br/>
                                        <span style="border-top: solid 1px black;">K<sub>1</sub></span> =
                                        <span style="border-top: solid 1px black;">K<sub>3</sub></span> = <input size="8" onkeypress="question_check(event, 8500);"/> MPa<br/><br/>
                                        &gamma;<sub>1</sub> = &gamma;<sub>3</sub> = <input size="8" onkeypress="question_check(event, 0.871);"/><br/><br/>
                                        &alpha;<sub>1</sub> = &alpha;<sub>3</sub> = <input size="5" onkeypress="question_check(event, 40);"/> mm<br/><br/>
                                        (EI)<sub>ef</sub> = <input size="8" onkeypress="question_check(event, 1.498);"/> &times; 10<sup>12</sup> mm<sup>4</sup><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Calculate Minor Stiffness</h4>
                                    <p class="answer">
                                        (EI)<sub>ef</sub> = <input size="8" onkeypress="question_check(event, 0.091);"/> &times; 10<sup>12</sup> mm<sup>4</sup><br/><br/>
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
                                <p>What design standard do we use to design CLT?</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        We use the Australian Standards for the<br/>
                                        <select onchange="choice_check(event, 'derivation of the design load cases');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>design of CLT elements</option>
                                            <option>derivation of the design load cases</option>
                                        </select><br/>
                                        whilst we use the European standards for the<br/>
                                        <select onchange="choice_check(event, 'design of CLT elements');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>design of CLT elements</option>
                                            <option>derivation of the design load cases</option>
                                        </select>
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
                                <p>What are the following factors (select from the list below)</p>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <p class="answer">
                                        &gamma;<sub>m</sub> is
                                        <select onchange="choice_check(event, 'b');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>a</option>
                                            <option>b</option>
                                            <option>c</option>
                                        </select><br/><br/>k<sub>mod</sub> is
                                        <select onchange="choice_check(event, 'a');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>a</option>
                                            <option>b</option>
                                            <option>c</option>
                                        </select><br/><br/>k<sub>def</sub> is
                                        <select onchange="choice_check(event, 'c');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>a</option>
                                            <option>b</option>
                                            <option>c</option>
                                        </select>.
                                    </p><br/>
                                    <ol class="list-seperate" type="a" style="font-weight: bold;">
                                        <li>the modification factor to account for the duration of load and moisture content</li>
                                        <li>the partial material factor</li>
                                        <li>the deformation factor to account for the duration of load and moisture content</li>
                                    </ol>
                                </section>
                                <section><strong>Correct</strong></section>
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