$(document).ready(function(){
    if ($(window).width()<'768') {
        $('.cat-list').addClass('collapse');
    }
    $('.cat-title').click(function(){
        $('.cat-list').toggleClass('collapse');
        $('.fa-chevron-down').toggleClass('rotate');
    })
})