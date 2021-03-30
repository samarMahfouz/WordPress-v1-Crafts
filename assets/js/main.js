$(function () {
    'use strict';
    
    $('.cats-links li').on('click', function() {
        $(this).addClass('active').siblings().removeClass('active');
        if($(this).data('class') === 'all') {
            $('.shuffle-images .add-margin').css('opacity', 1);
        }else{
             $('.shuffle-images .add-margin').css('opacity', '.08');
             $($(this).data('class')).parent().css('opacity', 1);
        }
    
    });
}); 