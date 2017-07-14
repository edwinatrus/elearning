function check_1(event) {
    var isCorrect = true;
    
    if ($("#q1 input[type='checkbox']:checked").length < 5) {
        $("#a1-1").html("You have not choosen enough items.");
        return;
    }
    
    $("#q1 input[type='checkbox']:checked").each(function(i, e) {
        // i is the index, e is the element
        var isYes = $(e).prop("value");
        if (isYes === "no") {
            isCorrect = false;
        }
    });
    
    if (isCorrect) {
        $("#q1 input[type='checkbox']").each(function(i, e) {
        // i is the index, e is the element
            var isYes = $(e).prop("value");
            if (isYes === "yes") {
                $(e).prop("checked", true);
            }
        }).prop("disabled", true);
        $(event).prop("disabled", true).hide();
        $("#a1-1").html("Correct! All structural systems in which you can use timber are checked.");
        return
    } else {
        $("#a1-1").html("You have chosen structures in which timber cannot be used.");
        return
    }
}

function check_2(event) {
    var in1 = $('#q2-1').find(":selected").text();
    var in2 = $('#q2-2').find(":selected").text();
    
    var isCorrect = true;
    $("#q2 select").css("background", "white").prop("disabled", true);
    
    if (in1 !== "photosynthesis") {
        $("#q2-1").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (in2 !== "burnt") {
        $("#q2-2").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (isCorrect) {
        $(event).after("<span style='font-weight: bold;'><br/>Correct</span>").prop("disabled", true).hide();
        $("#a2-1").css("display", "block");
    }
}

function check_3(event) {
    var in1 = $('#q3-1').find(":selected").text();
    var in2 = $('#q3-2').find(":selected").text();
    var in3 = $('#q3-3').find(":selected").text();
    var in4 = $('#q3-4').find(":selected").text();
    
    var isCorrect = true;
    $("#q3 select").css("background", "white").prop("disabled", true);
    
    if (in1 !== "thinner") {
        $("#q3-1").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (in2 !== "low") {
        $("#q3-2").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (in3 !== "thicker") {
        $("#q3-3").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (in4 !== "high") {
        $("#q3-4").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (isCorrect) {
        $(event).after("<span style='font-weight: bold;'><br/>Correct</span>").prop("disabled", true).hide();
        $("#a3-1").css("display", "block");
    }
}

function check_4(event) {
    var in1 = $('#q4-1').find(":selected").text();
    
    var isCorrect = true;
    $("#q4 select").css("background", "white").prop("disabled", true);
    
    if (in1 !== "rise") {
        $("#q4 select").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (isCorrect) {
        $(event).after("<span style='font-weight: bold;'><br/>Correct</span>").prop("disabled", true).hide();
        $("#a4-1").css("display", "block");
    }
}

function check_5(event) {
    var in1 = $('#q5-1').find(":selected").text();
    var in2 = $('#q5-2').find(":selected").text();
    
    var isCorrect = true;
    $("#q5 select").css("background", "white").prop("disabled", true);
    
    if (in1 !== "under compression load over a long period of time") {
        $("#q5-1").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (in2 !== "high") {
        $("#q5-2").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (isCorrect) {
        $(event).after("<span style='font-weight: bold;'><br/>Correct</span>").prop("disabled", true).hide();
        $("#a5-1").css("display", "block");
    }
}

function check_6(event) {
    var isCorrect = true;
    
    if ($("#q6 input[type='checkbox']:checked").length < 5) {
        $("#a6-1").html("Your answer is not complete.");
        return;
    }
    
    $("#q6 input[type='checkbox']:checked").each(function(i, e) {
        // i is the index, e is the element
        var isYes = $(e).prop("value");
        if (isYes === "no") {
            isCorrect = false;
        }
    });
    
    if (isCorrect) {
        $("#q6 input[type='checkbox']").each(function(i, e) {
        // i is the index, e is the element
            var isYes = $(e).prop("value");
            if (isYes === "yes") {
                $(e).prop("checked", true);
            }
        }).prop("disabled", true);
        $(event).prop("disabled", true).hide();
        $("#a6-1").html("Correct! <br/>Samples of timber are tested in the timber mill to measure strength and stiffness to ensure the properties are aligned with the associated stress grade. The stress grade tells you the bending strength, tensile strength, shear strength, compression strength and modulus of elasticity.");
        return
    } else {
        $("#a6-1").html("Some of your choices are not given from stress grade");
        return
    }
}

function check_7(event) {
    var in1 = $('#q7-1').find(":selected").text();
    var in2 = $('#q7-2').find(":selected").text();
    var in3 = $('#q7-3').find(":selected").text();
    
    var isCorrect = true;
    $("#q7 select").css("background", "white").prop("disabled", true);
    
    if (in1 !== "mean modulus of elasticity") {
        $("#q7-1").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (in2 !== "the lower 5th percentile modulus of elasticity") {
        $("#q7-2").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (in3 !== "the lower 5th percentile strength value") {
        $("#q7-3").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (isCorrect) {
        $(event).after("<span style='font-weight: bold;'><br/>Correct</span>").prop("disabled", true).hide();
        $("#a7-1").css("display", "block");
    }
}

function check_8(event) {
    var in1 = $('#q8-1').find(":selected").text();
    var in2 = $('#q8-2').find(":selected").text();
    var in3 = $('#q8-3').find(":selected").text();
    
    var isCorrect = true;
    $("#q8 select").css("background", "white").prop("disabled", true);
    
    if (in1 !== "gluing sawn timber together") {
        $("#q8-1").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (in2 !== "gluing veneers of timber together") {
        $("#q8-2").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (in3 !== "gluing strands of timber together") {
        $("#q8-3").css("background-color", "red").prop("disabled", false);
        isCorrect = false;
    }
    
    if (isCorrect) {
        $(event).after("<span style='font-weight: bold;'><br/>Correct</span>").prop("disabled", true).hide();
        $("#a8-1").css("display", "block");
    }
}

function toSubmit(event) {
    var postData = {
        zid: id,
        week: "week01"
    };
    
    var isDone = true;
    
    $(".accordion").each(function(i, e) {
        var check = $(e).find("button").prop("disabled");
        if (check === false) {
            isDone = false;
        }
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