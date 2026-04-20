/*===== go to top ===========*/
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 100) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });
    $('#return-to-top').click(function () { $('body,html').animate({ scrollTop: 0 }, 500); });

/* ----- AOS ----- */
AOS.init({
    easing: 'ease-out-back',
    duration: 1000
});


/* ----- # AOS ----- */

/* ==== fully year show */
var date = new Date().getFullYear();document.getElementById("year").innerHTML = date;
