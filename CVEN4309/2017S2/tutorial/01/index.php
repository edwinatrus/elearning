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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Week 01 Tutorial</title>
        <link rel="shortcut icon" href="http://www.lindenbaum.net.au/unsw/util/favicon.ico" type="image/vnd.microsoft.icon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
        <script src="https://use.fontawesome.com/582f5b6b01.js"></script>
        <script src="http://www.lindenbaum.net.au/unsw/util/util.js"></script>
        <link rel="stylesheet" type="text/css" href="css/layout.css?v=2"/>
        <script>
            var id = '<?php echo $_GET["id"]; ?>';
        </script>
    </head>
    <body>
        <div class="text-center h1" style="padding-top: 20px; padding-bottom: 20px;"><strong>Week 01 Tutorial Questions</strong></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="accordion">
                        <h2>Question 01</h2>
                        <div id="q1">
                            <div class="h4">
                                <strong>Choose at lease five different structural systems in which you can use timber.</strong>
                            </div>
                            <table class="table" style="border: none;">
                                <tbody style="font-weight: bold;">
                                    <tr>
                                        <td><input type="checkbox" value="yes"> Trusses</td>
                                        <td><input type="checkbox" value="yes"> Post and beam</td>
                                        <td><input type="checkbox" value="no"> On ground slab</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="yes"> Space frame</td>
                                        <td><input type="checkbox" value="no"> Pavement</td>
                                        <td><input type="checkbox" value="no"> Prestressed tendon</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="yes"> Framed structures</td>
                                        <td><input type="checkbox" value="yes"> Beam</td>
                                        <td><input type="checkbox" value="yes"> Arches</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="yes"> Portal frame</td>
                                        <td><input type="checkbox" value="yes"> Solid panel</td>
                                        <td><input type="checkbox" value="yes"> Domes</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="h4">
                                <button class="btn btn-primary" onclick="check_1(this);">Check</button>
                                <span id="a1-1" class="h4" style="font-weight: bold;"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 02</h2>
                        <div id="q2">
                            <div class="h4">
                                <strong>How does a tree take carbon dioxide out of the atmosphere? When is the carbon dioxide released?</strong>
                            </div>
                            <div class="h4">
                                <strong>Answer: </strong>A tree uses 
                                <select id="q2-1">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>chemosynthesis</option>
                                    <option>xylose metabolism</option>
                                    <option>photosynthesis</option>
                                    <option>respiration</option>
                                </select> to take carbon dioxide out of the atmosphere and stores it as carbon within the heartwood. The tree will release carbon as carbon dioxide when it is 
                                <select id="q2-2">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>growing</option>
                                    <option>burnt</option>
                                    <option>decaying</option>
                                </select>.<br/>
                                <button class="btn btn-primary" onclick="check_2(this);">Check</button>
                            </div>
                            <div id="a2-1" class="h4" style="display: none; font-weight: bold;">
                                A tree uses photosynthesis to take carbon dioxide out of the atmosphere and stores it as carbon within the heartwood. The tree will release carbon as carbon dioxide when it is burnt.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 03</h2>
                        <div id="q3">
                            <div class="h4">
                                <strong>What is the difference between a hardwood and a softwood</strong>
                            </div>
                            <div class="h4">
                                <strong>Answer: </strong>They differ in their cell structures. For softwood they are 
                                <select id="q3-1">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>thinner</option>
                                    <option>thicker</option>
                                </select> 
                                and hence their density is 
                                <select id="q3-2">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>low</option>
                                    <option>high</option>
                                </select>. For hardwood they are 
                                <select id="q3-3">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>thinner</option>
                                    <option>thicker</option>
                                </select> 
                                and hence their density is 
                                <select id="q3-4">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>low</option>
                                    <option>high</option>
                                </select>.<br/>
                                <button class="btn btn-primary" onclick="check_3(this);">Check</button>
                            </div>
                            <div id="a3-1" class="h4" style="display: none; font-weight: bold;">
                                The cell structure differs. The softwood cell walls are thinner and hence are less dense. The Hardwood cell walls are thicker and hence are more dense.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 04</h2>
                        <div id="q4">
                            <div class="h4">
                                <strong>As humidity rises, what happens to the moisture content of timber and why?</strong>
                            </div>
                            <div class="h4">
                                <strong>Answer: </strong>As humidity rises the moisture content of the timber will
                                <select id="q4-1">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>rise</option>
                                    <option>fall</option>
                                    <option>remain the same</option>
                                </select>
                                until it reaches equilibrium.<br/>
                                <button class="btn btn-primary" onclick="check_4(this);">Check</button>
                            </div>
                            <div id="a4-1" class="h4" style="display: none; font-weight: bold;">
                                Wood is hygroscopic, it soaks up water from the atmosphere. As humidity rises the moisture content of the timber will rise until it reaches equilibrium.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 05</h2>
                        <div id="q5">
                            <div class="h4">
                                <strong>Why does timber creep? How does moisture content affect creep?</strong>
                            </div>
                            <div class="h4">
                                <strong>Answer: </strong>timber's creeping occurs as its cell wall move
                                <select id="q5-1">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>under tension load over a long period of time</option>
                                    <option>under compression load over a long period of time</option>
                                    <option>under tension load over a short period of time</option>
                                    <option>under compression load over a short period of time</option>
                                </select>
                                . It creeps more if the moisture content is 
                                <select id="q5-2">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>high</option>
                                    <option>low</option>
                                </select>
                                <br/>
                                <button class="btn btn-primary" onclick="check_5(this);">Check</button>
                            </div>
                            <div id="a5-1" class="h4" style="display: none; font-weight: bold;">
                                Timber 'creeps' as the cell walls move under compression load over a long period of time. The higher the moisture content, the more easily the cell walls can slide around each other and hence creep more.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 06</h2>
                        <div id="q6">
                            <div class="h4">
                                <strong>What properties of the following does the stress grade give?</strong>
                            </div>
                            <div class="h4">
                                <table class="table" style="border: none;">
                                    <tbody style="font-weight: bold;">
                                        <tr>
                                            <td><input type="checkbox" value="yes"> bending strength</td>
                                            <td><input type="checkbox" value="yes"> tensile strength</td>
                                            <td><input type="checkbox" value="no"> colour of timber</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" value="yes"> shear strengh</td>
                                            <td><input type="checkbox" value="no"> mass density</td>
                                            <td><input type="checkbox" value="no"> creep factor</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" value="no"> coefficient of friction</td>
                                            <td><input type="checkbox" value="yes"> compression strength</td>
                                            <td><input type="checkbox" value="yes"> modulus of elasticity</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br/>
                                <button class="btn btn-primary" onclick="check_6(this);">Check</button>
                                <span id="a6-1" class="h4" style="font-weight: bold;"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 07</h2>
                        <div id="q7">
                            <div class="h4">
                                <strong>What values of modulus of elasticity and strength do you use for each stress grade?</strong>
                            </div>
                            <div class="h4">
                                <strong>Answer: </strong>The characteristic modulus of elasticity is taken as the
                                <select id="q7-1">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>mean modulus of elasticity</option>
                                    <option>the lower 5th percentile modulus of elasticity</option>
                                </select>
                                whilst for critical deflection elements we use
                                <select id="q7-2">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>mean modulus of elasticity</option>
                                    <option>the lower 5th percentile modulus of elasticity</option>
                                </select>.
                                The characteristic strength is taken as the
                                <select id="q7-3">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>mean strength value</option>
                                    <option>the lower 5th percentile strength value</option>
                                </select>
                                <br/>
                                <button class="btn btn-primary" onclick="check_7(this);">Check</button>
                            </div>
                            <div id="a7-1" class="h4" style="display: none; font-weight: bold;">
                                The characteristic modulus of elasticity is taken as the mean modulus of elasticity of all timbers within the stress grade. For critical deflection elements we use the lower 5th percentile modulus of elasticity. The characteristic strength is taken as the lower 5th percentile of all timber within the stress grade.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <h2>Question 08</h2>
                        <div id="q8">
                            <div class="h4">
                                <strong>What is the difference between Glulam, Laminated Veneer Lumber and Laminated Strand Lumber?</strong>
                            </div>
                            <div class="h4">
                                <strong>Answer: </strong>Glulam is made by
                                <select id="q8-1">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>gluing strands of timber together</option>
                                    <option>gluing sawn timber together</option>
                                    <option>gluing veneers of timber together</option>
                                </select>
                                . Laminated Veneer Lumber is made by
                                <select id="q8-2">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>gluing strands of timber together</option>
                                    <option>gluing sawn timber together</option>
                                    <option>gluing veneers of timber together</option>
                                </select>
                                . Laminated Strand Lumber is made by
                                <select id="q8-3">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option>gluing strands of timber together</option>
                                    <option>gluing sawn timber together</option>
                                    <option>gluing veneers of timber together</option>
                                </select>
                                <br/>
                                <button class="btn btn-primary" onclick="check_8(this);">Check</button>
                            </div>
                            <div id="a8-1" class="h4" style="display: none; font-weight: bold;">
                                Glulam is made by gluing sawn timber together. Laminated Veneer Lumber is made by gluing veneers of timber together. Laminated Strand Lumber is made by gluing strands of timber together.
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
    <script type="text/javascript" src="script/script.js?v=2"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".accordion").accordion({
                collapsible: true,
                heightStyle: "content",
                active: false
            });
        });
    </script>
</html>