$('.menu-toggle').on('click', function () {
    $('.navigation').toggleClass('open-menu');
});

// for geting language from url and add class active them
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var lang = getParameterByName('lang');

if (lang == 'en') {
    $('#menu-item-110 > a').css('text-decoration', 'underline');
}

else if (lang == null) {
    $('#menu-item-109 > a').css('text-decoration', 'underline');
}
// end;

// got active link primary menu
if (window.location.pathname == '/about-us/') {
    $('#menu-item-39 > a').addClass('active');
}

else  if (window.location.pathname == '/contacts/') {
    $('#menu-item-38 > a').addClass('active');
}

else  if (window.location.pathname == '/news/') {
    $('#menu-item-124 > a').addClass('active');
}

else  if (window.location.pathname == '/videogallery/') {
    $('#menu-item-127 > a').addClass('active');
}

else if (window.location.pathname == '/') {
    $('#menu-item-121 > a').addClass('active');
}

if ($('#primary').data('is_blog')) {
    $('#menu-item-20 > a').addClass('active');
}
// end;