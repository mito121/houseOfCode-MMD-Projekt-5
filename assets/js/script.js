// Mobile nav toggler
$(document).ready(function(){
	$('#mobile-toggle').click(function(){
		$(this).toggleClass('open');
	});
});

$(document).ready(function () {
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