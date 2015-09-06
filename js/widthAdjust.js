
$( window ).bind("resize", function(){
    var vid_height = $("#vid").height();
	var window_width = $(window).width();
	var window_height = $(window).height();
    $(".intro").css("padding-top",vid_height*0.3);
	 $(".intro").css("left",window_width*0.6);

	
});
$( document ).bind("ready", function(){
    var vid_height = $("#vid").height();
	var window_width = $(window).width();
	var window_height = $(window).height();
    $(".intro").css("padding-top",vid_height*0.3);
	$(".intro").css("left",window_width*0.6);
  
});



