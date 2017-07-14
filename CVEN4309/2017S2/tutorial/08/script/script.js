var selection = [
    ["k<sub>sys</sub>", "ksys", "the system strength factor"],
    ["k<sub>cr</sub>", "kcr", "the crack factor"],
    ["k<sub>c</sub>", "kc", "the slenderness reduction factor"],
    ["&beta;<sub>c</sub>", "betac", "the material factor that accounts for the straightness of the element"],
    ["k<sub>c,90</sub>", "kc90", "the factor that accounts for configuration and the possibility of splitting and the degree of compressive deformation perpendicular to the grain"]
];

function toSubmit(event) {
    var postData = {
        zid: id,
        week: "week08"
    };
    
    var isDone = true;
    
    $(".accordion").each(function(i, e) {
        $(e).find("select").each(function(idx, ele) {
            if ($(ele).prop("disabled") === false) {
                isDone = false;
            }
        });
        $(e).find("input").each(function(idx, ele) {
            if ($(ele).prop("disabled") === false) {
                isDone = false;
            }
        });
    });
    
    if (isDone !== true) {
        $("#result").html("You have not completed all questions");
    } else {
        $(event).prop("disabled", true).html("Submitting...");
        $.post("../query.php", postData, function(data, status) {
            if (data.toString() == "1") {
                $(event).html("Submitted");
                $("#result").html("You have completed this tutorial. You can close now.");
            } else {
                $("#result").html("We have confronted a problem when sending the mark. Please send a screenshot of this page with your zID to xiaojun.chen@unsw.edu.au");
                $(event).html("Submit").prop("disabled", false);
            }
        });
    }
}

function choice_check(e, co) {
    var in1 = $(e.target).find(":selected").text();
    if (in1 === co) {
        $(e.target).css("background-color", "white").prop("disabled", true).css("background", "#d3d3d3")
                   .after("<span>&nbsp;</span><span class='glyphicon glyphicon-ok' style='color: blue;'></span>");
        if ($(e.target).closest("section").find("input:not([disabled]),select:not([disabled])").length == 0) {
            var next = $(e.target).closest("section").next();    // display next section
            if (next.is("section")) {
                next.css("display", "block");
            }
        }
    } else {
        $(e.target).css("background-color", "red").prop("disabled", false);
    }
}

function question_check(e, co) {
    if (e.keyCode == 13) {
        var in1 = $(e.target).val();
        in1 = Number(Number(in1).toFixed(3));
        if (in1 === co) {
            $(e.target).css("background-color", "white").prop("disabled", true).css("background", "#d3d3d3")
                       .after("<span>&nbsp;</span><span class='glyphicon glyphicon-ok' style='color: blue;'></span>");
            if ($(e.target).closest("section").find("input:not([disabled]),select:not([disabled])").length == 0) {
                var next = $(e.target).closest("section").next();    // display next section
                if (next.is("section")) {
                    next.css("display", "block");
                }
            }
        } else {
            $(e.target).css("background-color", "red").prop("disabled", false);
        }
    }
}

function create_selection(qtag) {
    // qtag is the question #id (i.e #q2) where selection need to be added
    
    function randomize(original_arr) {
        var arr = original_arr.slice();
        var currentIndex = arr.length;
        var temporaryValue;
        var randomIndex;

        while (0 !== currentIndex) {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            temporaryValue = arr[currentIndex];
            arr[currentIndex] = arr[randomIndex];
            arr[randomIndex] = temporaryValue;
        }

        return arr;
    }

    var qlist = randomize(selection);
    
    $.each(qlist, function(k, v) {
        var newlist = $("<li></li>");
        var newtag = $("<strong></strong>").appendTo(newlist).html("What is " + v[0] + " factor? &nbsp;&nbsp;&nbsp;");
        
        var newselect = $("<select></select>").prop("name", v[1]).appendTo(newlist);
        newselect.change(check_selection);
        
        $("<option disabled selected value> -- select an option -- </option>").appendTo(newselect);
        
        randomize(selection).forEach(function(e) {
            $("<option></option>").html(e[2]).appendTo(newselect);
        });
        
        $(qtag + " ul").append(newlist);
    });
}

function check_selection(event) {
    var tag = $(event.target).prop("name");
    var correct_item = selection.filter(function(e) {
        return e[1] === tag;
    });
    
    var correct_selection = correct_item[0][2];
    var selected = $(event.target).find(":selected").html();
    
    if (correct_selection === selected) {
        $(event.target).prop("disabled", true).css("background", "#d3d3d3");
        $(event.target).after("<span>&nbsp;&nbsp;</span><span class='glyphicon glyphicon-ok' style='color: blue;'></span>");
    } else {
        $(event.target).css("background-color", "red");
    }
}