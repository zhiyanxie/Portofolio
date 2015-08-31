
$( window ).bind("resize", function(){
    var vid_height = $("#vid").height();
	var vid_left = $(window).width();
    $(".intro").css("padding-top",vid_height*0.3);
	 $(".intro").css("left",vid_left*0.6);
});
$( document ).bind("ready", function(){
    var vid_height = $("#vid").height();
	var vid_left = $(window).width();
    $(".intro").css("padding-top",vid_height*0.3);
	
	$(".intro").css("left",vid_left*0.6);
});



