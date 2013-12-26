$(document).ready(function() {
    $('#header-container').mouseenter(function() {
        $(this).css("opacity", "0.8");
    });
    $('#header-container').mouseleave(function() {
        $(this).css("opacity", "0.7");
    });
    $('#mainlogo,#left-container').mouseenter(function() {
        $('#main-container').stop().animate({left: "250px"}, 200);
        $('#left-container').stop().animate({left: "0px"}, 200);
    });
    $('#mainlogo,#left-container').mouseleave(function() {
        $('#main-container').stop().animate({left: "0px"}, 200);
        $('#left-container').stop().animate({left: "-250px"}, 200);
    });
    $('#rightlogo,#right-container').mouseenter(function() {
        $('#main-container').stop().animate({left: "-250px"}, 200);
        $('#right-container').stop().animate({right: "0px"}, 200);
        $('#left-container').stop().animate({left: "-250px"}, 200);
    });
    $('#rightlogo,#right-container').mouseleave(function() {
        $('#main-container').stop().animate({left: "0px"}, 200);
        $('#right-container').stop().animate({right: "-250px"}, 200);
    });

});