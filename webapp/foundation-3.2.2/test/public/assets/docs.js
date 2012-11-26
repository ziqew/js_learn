$(document).ready(function() {

    var fndtnSettings = $('.foundation-settings');

    fndtnSettings.children('h4').click(function() {

        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $(this).next('table').hide();
            $(this).children('small').text('Click to expand');
        } else {
            $(this).addClass('open');
            $(this).next('table').show();
            $(this).children('small').text('Click to collapse');
        }

    });

    $('.expand-all').click(function(e) {
        e.preventDefault();

        if ($(this).hasClass('open')) {
            $(this).text('Expend All').removeClass('open');
            $('.foundation-settings').children('h4').removeClass('open');
            $('table').hide();
            $('small').text('Click to expand');
        } else {
            $(this).text('Collapse All').addClass('open');
            $('.foundation-settings').children('h4').addClass('open');
            $('table').show();
            $('small').text('Click to collapse');
        }

    });

    if (Modernizr.touch) {
        $('table').show();
    }

});