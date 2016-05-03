$(document).ready(function() {
    $('.button-collapse').sideNav({
            menuWidth: 300, // Default is 240
            edge: 'right', // Choose the horizontal origin
            closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
        }
    );

    $('#show_side_nav').on('click', function(){
        $('#side_nav').animate({
            marginLeft: 0
        }, 500 );

        $('#hide_side_nav').css('display', 'block');
    });

    $('#hide_side_nav').on('click', function(){
        $('#side_nav').animate({
            marginLeft: "-240px"
        }, 500 );
        $('#hide_side_nav').css('display', 'none');
    });


});