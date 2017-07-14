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
        
        <title>Week 08 Tutorial</title>
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
        <div class="text-center h1" style="padding-top: 20px; padding-bottom: 20px;"><strong>Week 08 Tutorial Questions</strong></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="accordion">
                        <h2>Question 01</h2>
                        <div id="q1">
                            <div class="h4">
                                <strong>Choose the correct name for the following factors (you need to finish all the choices)</strong>
                            </div>
                            <div class="h4">
                                <ul class="list-seperate"></ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 02</h2>
                        <div id="q2">
                            <div class="h4 question">
                                <p>Consider a 220 5s (60/30/40/30/60) of C24 timber commercial floor that spans 6m between beams under the below loads. It further is cantilevered in the minor axis over the edge of a perimeter beam by 0.5m.</p>
                                <ul>
                                    <li>G (excl. SW) = 2.1 kPa</li>
                                    <li>Q = 3.0 kPa</li>
                                </ul>
                                <img src="resource/2.1.png" alt="image not loded"/>
                                <p>Assess the serviceability of the floor in the major axis for appearance against a span / 250 sag limit or maximum 25mm deflection under a G + &psi;lQ load. Consider a 1m panel width and a GR = 50 MPa.</p>
                                <img src="resource/2.2.png" alt="image not loded"/>
                                <p>Assess the serviceability of the floor in the minor axis for appearance against a span / 125 sag limit or maximum 10mm deflection under a G + &psi;lQ load. Assume a 1.75m backspan. Consider a 1m panel width and a GR = 50 MPa.</p>
                                <img src="resource/2.3.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine load and k<sub>def</sub> factor (press ENTER after input)</h4>
                                    <p class="answer">
                                        Load: w =
                                        <select onchange="choice_check(event, 'G + 0.4Q');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>G + Q</option>
                                            <option>G + 0.4Q</option>
                                            <option>G + 0.7Q</option>
                                        </select> = <input size="6" onkeypress="question_check(event, 4.224);"/> kN/m
                                        (AS1170.0 - Table 4.1)<br/><br/>
                                        Service Class
                                        <select onchange="choice_check(event, '1');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>, therefore k<sub>def</sub> =
                                        <select onchange="choice_check(event, '0.6');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.6</option>
                                            <option>0.8</option>
                                            <option>2.0</option>
                                        </select><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine member stiffness</h4>
                                    <p class="answer">
                                        Serveceability criteria is: 
                                        <select onchange="choice_check(event, 'Appearance consequence');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>Appearance consequence</option>
                                            <option>Vibration consequence</option>
                                            <option>Structural consequence</option>
                                            <option>Functional consequence</option>
                                        </select><br/><br/>
                                        Modulus of Elasticity, 
                                        <select onchange="choice_check(event, 'E-mean');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>E-mean</option>
                                            <option>E-5%ile</option>
                                        </select> = <input size="8" onkeypress="question_check(event, 11000);"/> MPa, (EN338 – Table 1)
                                    </p>
                                    <p class="answer">
                                        Modulus of Elasticity
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            E<sub>1</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>2</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>3</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>4</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>5</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Lamella Area
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            A<sub>1</sub> = <input size="5" onkeypress="question_check(event, 60);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>2</sub> = <input size="5" onkeypress="question_check(event, 30);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>3</sub> = <input size="5" onkeypress="question_check(event, 40);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>4</sub> = <input size="5" onkeypress="question_check(event, 30);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>5</sub> = <input size="5" onkeypress="question_check(event, 60);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Modulus of Inertia
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            I<sub>1</sub> = <input size="5" onkeypress="question_check(event, 18);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>2</sub> = <input size="5" onkeypress="question_check(event, 2.25);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>3</sub> = <input size="5" onkeypress="question_check(event, 12);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>4</sub> = <input size="5" onkeypress="question_check(event, 2.25);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>5</sub> = <input size="5" onkeypress="question_check(event, 18);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                    </ul>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Major Axis</h4>
                                    <p class="answer">
                                        Given Symmerty:&nbsp;&nbsp;&nbsp;&nbsp;
                                        &gamma;<sub>3</sub> = <input size="3" onkeypress="question_check(event, 1);"/> and
                                        &alpha;<sub>3</sub> = <input size="3" onkeypress="question_check(event, 0);"/>
                                        <br/><br/>
                                        <span style="border-top: solid 1px black;">K<sub>1</sub></span> =
                                        <span style="border-top: solid 1px black;">K<sub>5</sub></span> = <input size="8" onkeypress="question_check(event, 1666.667);"/> MPa<br/><br/>
                                        &gamma;<sub>1</sub> = &gamma;<sub>5</sub> = <input size="8" onkeypress="question_check(event, 0.902);"/><br/><br/>
                                        &alpha;<sub>1</sub> = &alpha;<sub>5</sub> = <input size="5" onkeypress="question_check(event, 80);"/> mm<br/><br/>
                                        (EI)<sub>ef</sub> = <input size="8" onkeypress="question_check(event, 8.075);"/> &times; 10<sup>12</sup> mm<sup>4</sup><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Minor Axis</h4>
                                    <p class="answer">
                                        <span style="border-top: solid 1px black;">K<sub>2</sub></span> =
                                        <span style="border-top: solid 1px black;">K<sub>4</sub></span> = <input size="8" onkeypress="question_check(event, 2500);"/> MPa<br/><br/>
                                        &gamma;<sub>2</sub> = &gamma;<sub>4</sub> = <input size="8" onkeypress="question_check(event, 0.161);"/><br/><br/>
                                        &alpha;<sub>2</sub> = &alpha;<sub>4</sub> = <input size="5" onkeypress="question_check(event, 35);"/> mm<br/><br/>
                                        (EI)<sub>ef</sub> = <input size="8" onkeypress="question_check(event, 1.797);"/> &times; 10<sup>11</sup> mm<sup>4</sup><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine the total deflection</h4>
                                    <p class="answer">
                                        Using elastic deflection formula,<br/><br/>Major axis<br/><br/>
                                        Instantaneous Deflection; &Delta;<sub>G+0.4Q</sub> = 
                                        <input size="8" onkeypress="question_check(event, 8.827);"/> mm<br/><br/>
                                        Total Deflection; &Delta;<sub>tot</sub> = 
                                        <input size="8" onkeypress="question_check(event, 14.123);"/> mm<br/><br/>
                                        &Delta;<sub>tot</sub> =  &Delta;<sub>G+0.4Q</sub> &times; (1 + k<sub>def</sub>) = 8.827 mm (1 + 0.6) = <input size="8" onkeypress="question_check(event, 14.123);"/> mm = span / 420<br/><br/>
                                        Now &Delta;<sub>tot</sub> is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than span / 250, <br/>and 
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 25 mm, 220 5s C24 CLT Floor <br/>
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for appearance deflection
                                    </p>
                                    <p class="answer">Minor axis</p>
                                    <img src="resource/2.4.png" alt="image not loded"/>
                                    <p class="answer">
                                        <br/><br/>
                                        Instantaneous Deflection; &Delta;<sub>G+0.4Q</sub> = 
                                        <input size="8" onkeypress="question_check(event, 1.584);"/> mm<br/><br/>
                                        Total Deflection; &Delta;<sub>tot</sub> = 
                                        <input size="8" onkeypress="question_check(event, 4.055);"/> mm<br/><br/>
                                        &Delta;<sub>tot</sub> =  &Delta;<sub>G+0.4Q</sub> &times; (1 + k<sub>def</sub>) = 8.827 mm (1 + 0.6) = <input size="8" onkeypress="question_check(event, 14.123);"/> mm = span / 420<br/><br/>
                                        Now &Delta;<sub>tot</sub> is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than span / 125, <br/>and 
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than 25 mm, 220 5s C24 CLT Floor <br/>
                                        <select onchange="choice_check(event, 'NOT OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for appearance deflection
                                    </p>
                                </section>
                                <section><strong>This question is finished</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 03</h2>
                        <div id="q3">
                            <div class="h4 question">
                                <p>Consider a 220 5s (60/30/40/30/60) of C24 timber commercial floor that spans 6m between beams under the below loads. It further is cantilevered in the minor axis over the edge of a perimeter beam by 0.5m.</p>
                                <ul>
                                    <li>G (excl. SW) = 2.1 kPa</li>
                                    <li>Q = 3.0 kPa</li>
                                </ul>
                                <img src="resource/2.1.png" alt="image not loded"/>
                                <p>Assess the bending, shear and bearing strength in the major axis of the floor under the below loads. Consider a 1m panel width, a G<sub>R</sub> = 50 MPa and a f<sub>R,k</sub> = 2.5MPa. The panel sits 240mm onto the beam.</p>
                                <img src="resource/2.2.png" alt="image not loded"/>
                                <p>Assess the bending and shear strength in the minor axis of the floor under the below loads. Assume a 1.75m backspan. Consider a 1m panel width, a G<sub>R</sub> = 50 MPa and a f<sub>R,k</sub> = 2.5MPa</p>
                                <img src="resource/2.3.png" alt="image not loded"/>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine load and k<sub>def</sub> factor (press ENTER after input)</h4>
                                    <p class="answer">
                                        Load: w =
                                        <select onchange="choice_check(event, '1.2G + 1.5Q');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1.35G</option>
                                            <option>1.2G + 1.5Q</option>
                                        </select> = <input size="6" onkeypress="question_check(event, 10.686);"/> kN/m
                                        (AS1170.0 - Table 4.1)<br/><br/>
                                        Service Class
                                        <select onchange="choice_check(event, '1');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>, therefore k<sub>def</sub> =
                                        <select onchange="choice_check(event, '0.8');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.5</option>
                                            <option>0.55</option>
                                            <option>0.6</option>
                                            <option>0.65</option>
                                            <option>0.7</option>
                                            <option>0.8</option>
                                            <option>0.9</option>
                                            <option>1.1</option>
                                        </select><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Bending Moment, Shear Force and Bearing Force</h4>
                                    <p class="answer">
                                        Major axis<br/><br/>
                                        Bending Moment M<sub>d</sub> = 
                                        <input size="8" onkeypress="question_check(event, 48.087);"/> kNm<br/><br/>
                                        Shear Force V<sub>d</sub> = 
                                        <input size="8" onkeypress="question_check(event, 32.058);"/> kN<br/><br/>
                                        Bearing Force N<sub>d</sub> = 
                                        <input size="8" onkeypress="question_check(event, 32.058);"/> kN<br/><br/>
                                    </p>
                                    <p class="answer">Minor axis</p>
                                    <img src="resource/3.4.png" alt="image not loded"/>
                                    <p class="answer">
                                        <br/><br/>
                                        Bending Moment M<sub>d</sub> = 
                                        <input size="8" onkeypress="question_check(event, 3.45);"/> kNm<br/><br/>
                                        Shear Force V<sub>d</sub> = 
                                        <input size="8" onkeypress="question_check(event, 110.114);"/> kN<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine member stiffness</h4>
                                    <p class="answer">
                                        Bending Strength f<sub>m,k</sub> = 
                                        <input size="6" onkeypress="question_check(event, 24);"/> MPa<br/><br/>
                                        Bearing Strength f<sub>c,90,k</sub> = 
                                        <input size="6" onkeypress="question_check(event, 2.5);"/> kN<br/><br/>
                                    </p>
                                    <p class="answer">
                                        Modulus of Elasticity
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            E<sub>1</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>2</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>3</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>4</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>5</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Lamella Area
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            A<sub>1</sub> = <input size="5" onkeypress="question_check(event, 60);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>2</sub> = <input size="5" onkeypress="question_check(event, 30);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>3</sub> = <input size="5" onkeypress="question_check(event, 40);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>4</sub> = <input size="5" onkeypress="question_check(event, 30);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>5</sub> = <input size="5" onkeypress="question_check(event, 60);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Modulus of Inertia
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            I<sub>1</sub> = <input size="5" onkeypress="question_check(event, 18);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>2</sub> = <input size="5" onkeypress="question_check(event, 2.25);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>3</sub> = <input size="5" onkeypress="question_check(event, 12);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>4</sub> = <input size="5" onkeypress="question_check(event, 2.25);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>5</sub> = <input size="5" onkeypress="question_check(event, 18);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                    </ul>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Major Axis</h4>
                                    <p class="answer">
                                        Given Symmerty:&nbsp;&nbsp;&nbsp;&nbsp;
                                        &gamma;<sub>3</sub> = <input size="3" onkeypress="question_check(event, 1);"/> and
                                        &alpha;<sub>3</sub> = <input size="3" onkeypress="question_check(event, 0);"/>
                                        <br/><br/>
                                        <span style="border-top: solid 1px black;">K<sub>1</sub></span> =
                                        <span style="border-top: solid 1px black;">K<sub>5</sub></span> = <input size="8" onkeypress="question_check(event, 1666.667);"/> MPa<br/><br/>
                                        &gamma;<sub>1</sub> = &gamma;<sub>5</sub> = <input size="8" onkeypress="question_check(event, 0.902);"/><br/><br/>
                                        &alpha;<sub>1</sub> = &alpha;<sub>5</sub> = <input size="5" onkeypress="question_check(event, 80);"/> mm<br/><br/>
                                        (EI)<sub>ef</sub> = <input size="8" onkeypress="question_check(event, 8.075);"/> &times; 10<sup>12</sup> mm<sup>4</sup><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Minor Axis</h4>
                                    <p class="answer">
                                        <span style="border-top: solid 1px black;">K<sub>2</sub></span> =
                                        <span style="border-top: solid 1px black;">K<sub>4</sub></span> = <input size="8" onkeypress="question_check(event, 2500);"/> MPa<br/><br/>
                                        &gamma;<sub>2</sub> = &gamma;<sub>4</sub> = <input size="8" onkeypress="question_check(event, 0.161);"/><br/><br/>
                                        &alpha;<sub>2</sub> = &alpha;<sub>4</sub> = <input size="5" onkeypress="question_check(event, 35);"/> mm<br/><br/>
                                        (EI)<sub>ef</sub> = <input size="8" onkeypress="question_check(event, 1.797);"/> &times; 10<sup>11</sup> mm<sup>4</sup><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine bending capacity</h4>
                                    <p class="answer">
                                        Bending Strength f<sub>m,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 16.246);"/> MPa<br/><br/>
                                        <strong>Major</strong><br/><br/>
                                        Section Modulus Z<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 7.186);"/> &times; 10<sup>6</sup> mm<sup>3</sup><br/><br/>
                                        Design Stress &sigma;<sub>m,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 6.692);"/> MPa<br/><br/>
                                        Now &sigma;<sub>m,d</sub> is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than f<sub>m,d</sub>,<br/>
                                        220 5s C24 CLT Floor 
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for major bending.<br/><br/>
                                        <strong>Minor</strong><br/><br/>
                                        Section Modulus Z<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 7.915);"/> &times; 10<sup>6</sup> mm<sup>3</sup><br/><br/>
                                        Design Stress &sigma;<sub>m,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 4.358);"/> MPa<br/><br/>
                                        Now &sigma;<sub>m,d</sub> is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than f<sub>m,d</sub>,<br/>
                                        220 5s C24 CLT Floor 
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for major bending.<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine shear capacity</h4>
                                    <p class="answer">
                                        Effective Width b<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 670);"/> mm<br/><br/>
                                        Bending Strength f<sub>R,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 1.692);"/> MPa<br/><br/>
                                        <strong>Major</strong><br/><br/>
                                        Modulus of Inertia I<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 7.341);"/> &times; 10<sup>8</sup> mm<sup>4</sup><br/><br/>
                                        Section Modulus S<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 4.73);"/> &times; 10<sup>6</sup> mm<sup>3</sup><br/><br/>
                                        Design Stress &tau;<sub>v,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 0.308);"/> MPa<br/><br/>
                                        Now &tau;<sub>v,d</sub> is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than f<sub>R,d</sub>,<br/>
                                        220 5s C24 CLT Floor 
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for major shear.<br/><br/>
                                        <strong>Minor</strong><br/><br/>
                                        Modulus of Inertia I<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 16.336);"/> &times; 10<sup>6</sup> mm<sup>4</sup><br/><br/>
                                        Section Modulus S<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 16.905);"/> &times; 10<sup>4</sup> mm<sup>3</sup><br/><br/>
                                        Design Stress &tau;<sub>v,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 1.701);"/> MPa<br/><br/>
                                        Now &tau;<sub>v,d</sub> is
                                        <select onchange="choice_check(event, 'larger');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than f<sub>R,d</sub>,<br/>
                                        220 5s C24 CLT Floor 
                                        <select onchange="choice_check(event, 'NOT OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for minor bending.<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine bearing capacity</h4>
                                    <p class="answer">
                                        Effective Contact Area A<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 270);"/> &times; 10<sup>3</sup> mm<sup>3</sup><br/><br/>
                                        Design Stress &sigma;<sub>c,90,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 0.119);"/> MPa<br/><br/>
                                        Bearing Strength f<sub>c,90,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 1.692);"/> MPa<br/><br/>
                                        Factor k<sub>c,90,d</sub> =
                                        <input size="6" onkeypress="question_check(event, 1);"/><br/><br/>
                                        Now &sigma;<sub>c,90,d</sub> is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than k<sub>c,90,d</sub>&bull;f<sub>c,90,d</sub>,<br/>
                                        220 5s C24 CLT Floor 
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for bearing.<br/><br/>
                                    </p>
                                </section>
                                <section><strong>This question is finished</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 04</h2>
                        <div id="q4">
                            <div class="h4 question">
                                <p>Consider a 140 5s (40/20/20/20/40) of C24 timber 4m high internal wall under the below loads. Two wind loads act on the panel, a tension wind load and a wind load on the face of the panel. Assess the tensile strength of the element and consider combined bending and tension. The major axis of the panel is vertical and the element is pinned at the top and bottom. Consider a 1m strip and G<sub>R</sub> = 50 MPa.</p>
                                <ul>
                                    <li>G (excl. SW) = 40 kN/m</li>
                                    <li>Q = 40 kN/m</li>
                                    <li>W = -100 kN/m (in tension)</li>
                                    <li>W = 2.0 kPa on face</li>
                                </ul>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine load and actions (press ENTER after input)</h4>
                                    <p class="answer">
                                        Load: w =
                                        <select onchange="choice_check(event, '0.9G + W');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.9G + W</option>
                                            <option>1.2G + 0.4Q + W</option>
                                        </select> = <input size="6" onkeypress="question_check(event, 64);"/> kN/m
                                        (AS1170.0 – Clause 4.2.2)<br/><br/>
                                        Service Class
                                        <select onchange="choice_check(event, '1');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>, therefore k<sub>mod</sub> =
                                        <select onchange="choice_check(event, '0.9');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.5</option>
                                            <option>0.55</option>
                                            <option>0.6</option>
                                            <option>0.65</option>
                                            <option>0.7</option>
                                            <option>0.8</option>
                                            <option>0.9</option>
                                            <option>1.1</option>
                                        </select><br/><br/>
                                        Bnding Moment M<sub>d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 4);"/> kNm<br/><br/>
                                        Tension Force N<sub>d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 64);"/> kN<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine member properties</h4>
                                    <p class="answer">
                                        Tension Strength f<sub>t,0,k</sub> = 
                                        <input size="6" onkeypress="question_check(event, 14);"/> MPa<br/><br/>
                                        Bending Strength f<sub>m,k</sub> = 
                                        <input size="6" onkeypress="question_check(event, 24);"/> kN<br/><br/>
                                        Tensile Area A = 
                                        <input size="6" onkeypress="question_check(event, 100);"/> &times; 10<sup>3</sup> mm<sup>2</sup><br/><br/>
                                    </p>
                                    <p class="answer">
                                        Modulus of Elasticity
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            E<sub>1</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>2</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>3</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>4</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>5</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Lamella Area
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            A<sub>1</sub> = <input size="5" onkeypress="question_check(event, 40);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>2</sub> = <input size="5" onkeypress="question_check(event, 20);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>3</sub> = <input size="5" onkeypress="question_check(event, 20);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>4</sub> = <input size="5" onkeypress="question_check(event, 20);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>5</sub> = <input size="5" onkeypress="question_check(event, 40);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Modulus of Inertia
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            I<sub>1</sub> = <input size="5" onkeypress="question_check(event, 5.333);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>2</sub> = <input size="5" onkeypress="question_check(event, 0.667);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>3</sub> = <input size="5" onkeypress="question_check(event, 0.667);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>4</sub> = <input size="5" onkeypress="question_check(event, 0.667);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>5</sub> = <input size="5" onkeypress="question_check(event, 5.333);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Given Symmetry: 
                                        &gamma;<sub>3</sub> = <input size="5" onkeypress="question_check(event, 1);"/>
                                        &alpha;<sub>3</sub> = <input size="5" onkeypress="question_check(event, 0);"/>
                                        <br/><br/>
                                        <span style="border-top: solid 1px black;">K<sub>1</sub></span> =
                                        <span style="border-top: solid 1px black;">K<sub>5</sub></span> = <input size="8" onkeypress="question_check(event, 2500);"/> MPa<br/><br/>
                                        &gamma;<sub>1</sub> = &gamma;<sub>5</sub> = <input size="8" onkeypress="question_check(event, 0.902);"/><br/><br/>
                                        &alpha;<sub>1</sub> = &alpha;<sub>5</sub> = <input size="5" onkeypress="question_check(event, 50);"/> mm<br/><br/>
                                        (EI)<sub>ef</sub> = <input size="8" onkeypress="question_check(event, 2.109);"/> &times; 10<sup>12</sup> Nmm<sup>2</sup><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Tensile capacity</h4>
                                    <p class="answer">
                                        Design Stress &sigma;<sub>t,0,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 0.64);"/> MPa<br/><br/>
                                        Tensile Strength f<sub>t,0,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 10.662);"/> MPa<br/><br/>
                                        Now &sigma;<sub>t,0,d</sub> is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than f<sub>t,0,d</sub>,<br/>
                                        140 5s C24 CLT Wall 
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for tension.<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Bending capacity</h4>
                                    <p class="answer">
                                        Bending Strength f<sub>m,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 16.246);"/> MPa<br/><br/>
                                        Section Modulus Z<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 2.945);"/> &times; 10<sup>6</sup> mm<sup>3</sup><br/><br/>
                                        Design Stress &sigma;<sub>m,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 1.358);"/> MPa<br/><br/>
                                        Now &sigma;<sub>m,d</sub> is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than f<sub>m,d</sub>,<br/>
                                        140 5s C24 CLT Wall 
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for bending.<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine combined capacity</h4>
                                    <p class="answer">
                                        Calculate:<br/><br/>
                                        (&sigma;<sub>t,0,d</sub> / f<sub>t,0,d</sub>) + (&sigma;<sub>m,d</sub> / f<sub>m,d</sub>) = 
                                        <input size="4" onkeypress="question_check(event, 0.14);"/><br/><br/>
                                        It is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> then 1, so
                                        140 5s C24 CLT Wall 
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for combined tension and bending.<br/><br/>
                                    </p>
                                </section>
                                <section><strong>This question is finished</strong></section>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 05</h2>
                        <div id="q5">
                            <div class="h4 question">
                                <p>Consider a 140 5s (40/20/20/20/40) of C24 timber 4m high internal wall under the below loads. Two wind loads act on the panel, a compression wind load and a wind load on the face of the panel. Assess the compression strength of the element and consider combined bending and compression. The major axis of the panel is vertical and the element is pinned at the top and bottom Consider a 1m strip and G<sub>R</sub> = 50 MPa.</p>
                                <ul>
                                    <li>G (excl. SW) = 40 kN/m</li>
                                    <li>Q = 40 kN/m</li>
                                    <li>W = 100 kN/m (in compression)</li>
                                    <li>W = 2.0 kPa on face</li>
                                </ul>
                            </div>
                            <div class="h4">
                                <section style="display: block">
                                    <h4 style="font-weight: bold;">Determine load and actions (press ENTER after input)</h4>
                                    <p class="answer">
                                        Load: w =
                                        <select onchange="choice_check(event, '1.2G + 0.4Q + W');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.9G + W</option>
                                            <option>1.2G + 0.4Q + W</option>
                                        </select> = <input size="6" onkeypress="question_check(event, 164);"/> kN/m
                                        (AS1170.0 – Clause 4.2.2)<br/><br/>
                                        Service Class
                                        <select onchange="choice_check(event, '1');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>, therefore k<sub>mod</sub> =
                                        <select onchange="choice_check(event, '0.9');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>0.5</option>
                                            <option>0.55</option>
                                            <option>0.6</option>
                                            <option>0.65</option>
                                            <option>0.7</option>
                                            <option>0.8</option>
                                            <option>0.9</option>
                                            <option>1.1</option>
                                        </select><br/><br/>
                                        Bnding Moment M<sub>d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 4);"/> kNm<br/><br/>
                                        Tension Force N<sub>d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 164);"/> kN<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine member properties</h4>
                                    <p class="answer">
                                        Compression Strength f<sub>c,0,k</sub> = 
                                        <input size="6" onkeypress="question_check(event, 21);"/> MPa<br/><br/>
                                        Bending Strength f<sub>m,k</sub> = 
                                        <input size="6" onkeypress="question_check(event, 24);"/> kN<br/><br/>
                                        Compression Area A<sub>ef,0</sub> = 
                                        <input size="6" onkeypress="question_check(event, 100);"/> &times; 10<sup>3</sup> mm<sup>2</sup><br/><br/>
                                        Modulus of Elasticity E<sub>0.05</sub> = 
                                        <input size="6" onkeypress="question_check(event, 7400);"/> MPa<br/><br/>
                                    </p>
                                    <p class="answer">
                                        Modulus of Elasticity
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            E<sub>1</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>2</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>3</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>4</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                        <li>
                                            E<sub>5</sub> = <input size="5" onkeypress="question_check(event, 11);"/> GPa
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Lamella Area
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            A<sub>1</sub> = <input size="5" onkeypress="question_check(event, 40);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>2</sub> = <input size="5" onkeypress="question_check(event, 20);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>3</sub> = <input size="5" onkeypress="question_check(event, 20);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>4</sub> = <input size="5" onkeypress="question_check(event, 20);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                        <li>
                                            A<sub>5</sub> = <input size="5" onkeypress="question_check(event, 40);"/> &times; 10<sup>3</sup> mm<sup>2</sup>
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Modulus of Inertia
                                    </p>
                                    <ul class="list-seperate">
                                        <li>
                                            I<sub>1</sub> = <input size="5" onkeypress="question_check(event, 5.333);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>2</sub> = <input size="5" onkeypress="question_check(event, 0.667);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>3</sub> = <input size="5" onkeypress="question_check(event, 0.667);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>4</sub> = <input size="5" onkeypress="question_check(event, 0.667);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                        <li>
                                            I<sub>5</sub> = <input size="5" onkeypress="question_check(event, 5.333);"/> &times; 10<sup>6</sup> mm<sup>4</sup>
                                        </li>
                                    </ul>
                                    <p class="answer">
                                        Given Symmetry: 
                                        &gamma;<sub>3</sub> = <input size="5" onkeypress="question_check(event, 1);"/>
                                        &alpha;<sub>3</sub> = <input size="5" onkeypress="question_check(event, 0);"/>
                                        <br/><br/>
                                        <span style="border-top: solid 1px black;">K<sub>1</sub></span> =
                                        <span style="border-top: solid 1px black;">K<sub>5</sub></span> = <input size="8" onkeypress="question_check(event, 2500);"/> MPa<br/><br/>
                                        &gamma;<sub>1</sub> = &gamma;<sub>5</sub> = <input size="8" onkeypress="question_check(event, 0.902);"/><br/><br/>
                                        &alpha;<sub>1</sub> = &alpha;<sub>5</sub> = <input size="5" onkeypress="question_check(event, 50);"/> mm<br/><br/>
                                        (EI)<sub>ef</sub> = <input size="8" onkeypress="question_check(event, 2.109);"/> &times; 10<sup>12</sup> Nmm<sup>2</sup><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine reduction factor</h4>
                                    <p class="answer">
                                        Effective length L<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 4);"/> m<br/><br/>
                                        Modulus of Inertia I<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 1.917);"/> &times; 10<sup>8</sup> mm<sup>4</sup><br/><br/>
                                        Slenderness &lambda; = 
                                        <input size="6" onkeypress="question_check(event, 91.352);"/><br/><br/>
                                        Relative Slenderness &lambda;<sub>rel</sub> =
                                        <input size="6" onkeypress="question_check(event, 1.944);"/><br/><br/>
                                        k factor k = 
                                        <input size="6" onkeypress="question_check(event, 2.554);"/><br/><br/>
                                        Slenderness Reduction k<sub>c</sub> = 
                                        <input size="6" onkeypress="question_check(event, 0.238);"/><br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Compression capacity</h4>
                                    <p class="answer">
                                        Design Stress &sigma;<sub>c,0,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 1.64);"/> MPa<br/><br/>
                                        Tensile Strength k<sub>c</sub>f<sub>c,0,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 3.806);"/> MPa<br/><br/>
                                        Now &sigma;<sub>c,0,d</sub> is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than k<sub>c</sub>f<sub>c,0,d</sub>,<br/>
                                        140 5s C24 CLT Wall 
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for compression.<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine Bending capacity</h4>
                                    <p class="answer">
                                        Bending Strength f<sub>m,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 16.246);"/> MPa<br/><br/>
                                        Section Modulus Z<sub>ef</sub> = 
                                        <input size="6" onkeypress="question_check(event, 2.945);"/> &times; 10<sup>6</sup> mm<sup>3</sup><br/><br/>
                                        Design Stress &sigma;<sub>m,d</sub> = 
                                        <input size="6" onkeypress="question_check(event, 1.358);"/> MPa<br/><br/>
                                        Now &sigma;<sub>m,d</sub> is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> than f<sub>m,d</sub>,<br/>
                                        140 5s C24 CLT Wall 
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for bending.<br/><br/>
                                    </p>
                                </section>
                                <section>
                                    <h4 style="font-weight: bold;">Determine combined capacity</h4>
                                    <p class="answer">
                                        Calculate:<br/><br/>
                                        (&sigma;<sub>c,0,d</sub> / k<sub>c</sub>f<sub>c,0,d</sub>) + (&sigma;<sub>m,d</sub> / f<sub>m,d</sub>) = 
                                        <input size="4" onkeypress="question_check(event, 0.51);"/><br/><br/>
                                        It is
                                        <select onchange="choice_check(event, 'smaller');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>smaller</option>
                                            <option>larger</option>
                                        </select> then 1, so
                                        140 5s C24 CLT Wall 
                                        <select onchange="choice_check(event, 'OK');">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>OK</option>
                                            <option>NOT OK</option>
                                        </select> for combined compression and bending.<br/><br/>
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
            
            create_selection("#q1");
        });
    </script>
</html>