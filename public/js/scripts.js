$( document ).ready(function() {
    $('#menu-btn').click(function() {
      $('.side-nav').toggle();
    });
    $('.selectable').click(function() {
        $(this).select();console.log($(this));
    });
});