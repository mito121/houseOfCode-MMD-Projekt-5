// Smooth scrolling to ID's
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

$(document).ready(function () {
    // Mobile nav toggler
    $('#mobile-toggle').click(function () {
        $(this).toggleClass('open');
        $('#mobile-overlay').toggleClass('show-me');
    });

    // Move background on mouse move
    // Dark
    var movementStrength = 65;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();
    $(".bgImgDark").mousemove(function (e) {
        var pageX = e.pageX - ($(window).width() / 2);
        var pageY = e.pageY - ($(window).height() / 2);
        var newvalueX = width * pageX * -1 - 25;
        var newvalueY = height * pageY * -1 - 50;
        $('.bgImgDark').css("background-position", newvalueX + "px     " + newvalueY + "px");
    });
    // White
    var movementStrength = 65;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();
    $(".bgImgWhite").mousemove(function (e) {
        var pageX = e.pageX - ($(window).width() / 2);
        var pageY = e.pageY - ($(window).height() / 2);
        var newvalueX = width * pageX * -1 - 25;
        var newvalueY = height * pageY * -1 - 50;
        $('.bgImgWhite').css("background-position", newvalueX + "px     " + newvalueY + "px");
    });
});

// Waypoints
var $section = $("section");
var $currentSection = 0;
var $up = $(".prev-section");
var $down = $(".next-section");

$section.waypoint(function (direction) {
    if (direction == "down") {
        $currentSection++;
    } else {
        $currentSection--;
    }

//    console.log($currentSection);

    //Set links appropriately
    if ($currentSection === 1) {
        $down.attr("href", "#section2");

        $('#navSec1').css("background", "#a6bb75");
    } else {
        $('#navSec1').css("background", "#525F6D");
    }

    if ($currentSection === 2) {
        $up.attr("href", "#section1");
        $down.attr("href", "#section3");
        $('#navSec2').css("background", "#a6bb75");
    } else {
        $('#navSec2').css("background", "#525F6D");
    }

    if ($currentSection === 3) {
        $up.attr("href", "#section2");
        $down.attr("href", "#section4");
        $('#navSec3').css("background", "#a6bb75");
    } else {
        $('#navSec3').css("background", "#525F6D");
    }

    if ($currentSection === 4) {
        $up.attr("href", "#section3");
        $('#navSec4').css("background", "#a6bb75");
    } else {
        $('#navSec4').css("background", "#525F6D");
    }
}, {offset: "40%"});


// Find pris submit
$('#submitForm').click(function (e) {
    e.preventDefault();
    $('#popupModal').css("display", "block");
});
// Cancel form submit
$('#cancelFormSubmit').click(function (e) {
    $('#popupModal').css("display", "none");
});
// Confirm form submit
$('#confirmFormSubmit').click(function (e) {
    $('#confirmedSubmission').css("display", "block");
    $('#confirmSubmission').css("display", "none");
});
// Tilbage til forsiden
$('#back2home').click(function () {
    window.location.href = "http://hoc.webnation.dk";
});



//// Hvad er en app
// Dropdown
var btn1 = document.getElementById("show1");
var btn2 = document.getElementById("show2");
var btn3 = document.getElementById("show3");

var text1 = document.getElementById("text1");
var text2 = document.getElementById("text2");
var text3 = document.getElementById("text3");

var arrow1 = document.getElementById("arrow1");
var arrow2 = document.getElementById("arrow2");
var arrow3 = document.getElementById("arrow3");

// Show or hide text 1
btn1.addEventListener("click", function(){
    if(text1.style.display == "block"){
        text1.style.display = "none";
        arrow1.style.transform = "rotate(90deg)";
    }else{
        text1.style.display = "block";
        arrow1.style.transform = "rotate(0deg)";
    }
});

// Show or hide text 2
btn2.addEventListener("click", function(){
    if(text2.style.display == "block"){
        text2.style.display = "none";
        arrow2.style.transform = "rotate(90deg)";
    }else{
        text2.style.display = "block";
        arrow2.style.transform = "rotate(0deg)";
    }
});

// Show or hide text 3
btn3.addEventListener("click", function(){
    if(text3.style.display == "block"){
        text3.style.display = "none";
        arrow3.style.transform = "rotate(90deg)";
    }else{
        text3.style.display = "block";
        arrow3.style.transform = "rotate(0deg)";
    }
});