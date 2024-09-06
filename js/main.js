AOS.init();

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 0) {
            $("#navborder").css({ "background-color": "#000", "box-shadow": "4px 0 20px -5px rgba(0,0,0,.1)" });
            $("#navbarSupportedContent ul li a").css("color", "#2d2d2d");
        } else {
            $("#navborder").css({ "background-color": "transparent", "box-shadow": "0px 0px 0px 0px rgba(0,0,0,.1)" });
            $("#navbarSupportedContent ul li a").css("color", "#bebec2");
        }
    });
});

if ((document.body.id === "homepage") || (document.body.id === "gallerypage")) {
    $('#allproduct').on('click', function (e) {
        $('#allproducthere').show();
        $('#designproducthere').hide();
        $('#developmentproducthere').hide();
        $('#brandingproducthere').hide();
        $('#wordpressproducthere').hide();
        $('#allproduct').css({ "border": "none", "border-bottom": "1px solid #fff" });
        $('#designproduct').css({ "border": "none" });
        $('#developmentproduct').css({ "border": "none" });
        $('#brandingproduct').css({ "border": "none" });
        $('#wordpressproduct').css({ "border": "none" });
    });

    $('#designproduct').on('click', function (e) {
        $('#allproducthere').hide();
        $('#designproducthere').show();
        $('#developmentproducthere').hide();
        $('#brandingproducthere').hide();
        $('#wordpressproducthere').hide();
        $('#allproduct').css({ "border": "none" });
        $('#designproduct').css({ "border": "none", "border-bottom": "1px solid #fff" });
        $('#developmentproduct').css({ "border": "none" });
        $('#brandingproduct').css({ "border": "none" });
        $('#wordpressproduct').css({ "border": "none" });
    });

    $('#developmentproduct').on('click', function (e) {
        $('#allproducthere').hide();
        $('#designproducthere').hide();
        $('#developmentproducthere').show();
        $('#brandingproducthere').hide();
        $('#wordpressproducthere').hide();
        $('#allproduct').css({ "border": "none" });
        $('#designproduct').css({ "border": "none" });
        $('#developmentproduct').css({ "border": "none", "border-bottom": "1px solid #fff" });
        $('#brandingproduct').css({ "border": "none" });
        $('#wordpressproduct').css({ "border": "none" });
    });

    $('#brandingproduct').on('click', function (e) {
        $('#allproducthere').hide();
        $('#designproducthere').hide();
        $('#developmentproducthere').hide();
        $('#brandingproducthere').show();
        $('#wordpressproducthere').hide();
        $('#allproduct').css({ "border": "none" });
        $('#designproduct').css({ "border": "none" });
        $('#developmentproduct').css({ "border": "none" });
        $('#brandingproduct').css({ "border": "none", "border-bottom": "1px solid #fff" });
        $('#wordpressproduct').css({ "border": "none" });
    });

    $('#wordpressproduct').on('click', function (e) {
        $('#allproducthere').hide();
        $('#designproducthere').hide();
        $('#developmentproducthere').hide();
        $('#brandingproducthere').hide();
        $('#wordpressproducthere').show();
        $('#allproduct').css({ "border": "none" });
        $('#designproduct').css({ "border": "none" });
        $('#developmentproduct').css({ "border": "none" });
        $('#brandingproduct').css({ "border": "none" });
        $('#wordpressproduct').css({ "border": "none", "border-bottom": "1px solid #fff" });
    });

    $('.stat-number').each(function () {
        var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 6000,
            step: function (func) {
                $(this).text(parseFloat(func).toFixed(size));
            }
        });
    });
}