$(document).ready(function () {
    preparePhotos();
    setBottomSpacing();
});

function preparePhotos() {
    $("#main-gallery div.photo").each(function (i, div) {
        var url = $(div).find('a').attr('href');
        $(div).css('background', 'url(' + $(div).find('img').attr('src') + ') no-repeat center').click(function () { document.location.href = url; }).mouseenter(function () { $(this).find('div').fadeIn(300); }).mouseleave(function () { $(this).find('div').fadeOut(300); });
        $("<div>").css({ 'margin-top': '150px', height: '40px', opacity: 0.9 }).html($(div).find('span').html()).addClass('overlay-text').addClass('overlay-' + $(div).attr('class').split(' ')[1]).appendTo($(div));
        $("<div>").css({ height: '110px', opacity: 0.5 }).addClass('overlay-' + $(div).attr('class').split(' ')[1]).appendTo($(div));
        $(div).find('img').remove(); $(div).find('a').remove();
    });
}

function setBottomSpacing() {
    var photos = $("#skin-content div.column-wide div.all-galleries div.photo");
    $(photos[1]).addClass('center'); $(photos[4]).addClass('center');
}