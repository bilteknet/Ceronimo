$(document).ready(function () {
    prepareMainNews();
    prepareBoxNews();
});

function prepareBoxNews() {
    $("#box-news div:eq(1)").addClass('center');
    $("#box-news div:eq(4)").addClass('center');
	 $("#box-news div:eq(7)").addClass('center');
	 $("#box-news div:eq(10)").addClass('center');
	  $("#box-news div:eq(13)").addClass('center');
	   $("#box-news div:eq(14)").addClass('center');
	    $("#box-news div:eq(17)").addClass('center');
		 $("#box-news div:eq(20)").addClass('center');
		  $("#box-news div:eq(23)").addClass('center');
		   $("#box-news div:eq(26)").addClass('center');
    $("#box-news div img").each(function (i, img) { var src = $(img).attr('src'); $(img).parent().parent().css('background', 'url(' + src + ') no-repeat center'); }).remove();
    $("#box-news div span").each(function (i, span) { $("<div>").addClass($(span).attr('class')).html($(span).html()).appendTo($(span).parent()); }).remove();
    $("#box-news div a").each(function (i, a) { $("<div>").addClass('container').html($(a).html()).appendTo($(a).parent()).click(function () { document.location.href = $(a).attr('href'); }); }).remove();
    $("#box-news div.box").mouseenter(function () { $(this).find('div.container').fadeTo(300, 0.9); });
    $("#box-news div.box").mouseleave(function () { $(this).find('div.container').fadeTo(300, 0); });
}

function prepareMainNews() {
    $('#main-news').slides({ preload: true, preloadImage: 'content/images/loading.gif', generatePagination: true, play: 5000, pause: 2500, hoverPause: true, start: 1 });
}