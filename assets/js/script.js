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
// Collapse content
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("collapseOpen");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}