$(document).ready(function () {

    $('#buttoncarp').click(function () {
        $('#carp').show();
        $('#metal').hide();
        $('#plancha').hide();
    });

    $('#buttonmetal').click(function () {
        $('#metal').show();
        $('#carp').hide();
        $('#plancha').hide();
    });

    $('#buttonplancha').click(function () {
        $('#plancha').show();
        $('#carp').hide();
        $('#metal').hide();
    });

    $(window).scroll(function () {
        var topPos = $(this).scrollTop();
        console.log(topPos);
        if (topPos > 900) {
            
        }
    });

}); 
