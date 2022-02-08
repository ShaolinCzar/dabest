function menu(){
    if($('.nav_menu').hasClass('none')||$('.nav_menu').hasClass('bounceOut')){
        $('.nav_menu').removeClass('none').addClass('bounceIn').removeClass('bounceOut')
        $('.menu_but').removeClass('zoom_out').addClass('zoom_in')
        $('#menu_span').fadeOut();
    } else {
        $('.nav_menu').addClass('bounceOut').removeClass('bounceIn')
        $('.menu_but').removeClass('zoom_in').addClass('zoom_out')
        $('#menu_span').fadeIn();
    }
};
$('.proof').click(function(){
    $('.prime_slide').addClass('slideOutDown delay-1s')&$('.second_slide').addClass('slideInUp delay-1s').removeClass('none slideOutDown')
    $('.proof').addClass('proof_click')
    $('.ns2').addClass('active_span')&$('.ns1, .ns3').removeClass('active_span')
});
function menu_start(){
        if($('.second_slide').hasClass('slideInUp')||$('.third_slide').hasClass('slideInUp')){
        $('.ns1').addClass('active_span')&$('.ns2, .ns3').removeClass('active_span')
        $('.second_slide, .third_slide').removeClass('slideInUp delay-1s').addClass('slideOutDown')
        $('.prime_slide').removeClass('delay-1s slideOutDown').addClass('slideInUp')
        $('.nav_menu').addClass('bounceOut').removeClass('bounceIn')&$('#menu_span').fadeIn()
        $('.proof').removeClass('proof_click');
    } else {
        $('.nav_menu').addClass('bounceOut').removeClass('bounceIn')&$('#menu_span').fadeIn();
        alert ('Дарова! Вы и так на ней!');
    }
};
function menu_about(){
    if($('.prime_slide').hasClass('slideInUp')||$('.second_slide').hasClass('none')||$('.third_slide').hasClass('slideInUp')){
        $('.prime_slide, .third_slide').removeClass('slideInUp delay-1s').addClass('slideOutDown')
        $('.second_slide').removeClass('delay-1s slideOutDown none').addClass('slideInUp')
        $('.ns2').addClass('active_span')&$('.ns1, .ns3').removeClass('active_span')
        $('.nav_menu').addClass('bounceOut').removeClass('bounceIn')&$('#menu_span').fadeIn()
        $('.proof').removeClass('proof_click');
    } else if($('.second_slide').hasClass('slideInUp')){
        $('.nav_menu').addClass('bounceOut').removeClass('bounceIn')&$('#menu_span').fadeIn();
        alert ('Дарова! Вы и так на ней!');
    } else {
        $('.nav_menu').addClass('bounceOut').removeClass('bounceIn')&$('#menu_span').fadeIn();
        alert ('Дарова! Вы и так на ней!');
    }
}
function menu_hiw(){
    if($('.third_slide').hasClass('none')||$('.third_slide').hasClass('slideOutDown')||$('.prime_slide').hasClass('slideInUp')||$('.second_slide').hasClass('slideInUp')){
        $('.third_slide').removeClass('none slideOutDown').addClass('slideInUp')
        $('.ns3').addClass('active_span')&$('.ns2, .ns1').removeClass('active_span')
        $('.prime_slide, .second_slide').removeClass('slideInUp delay-1s').addClass('slideOutDown')
        $('.nav_menu').addClass('bounceOut').removeClass('bounceIn')&$('#menu_span').fadeIn()
        $('.proof').removeClass('proof_click');
    } else {
        $('.nav_menu').addClass('bounceOut').removeClass('bounceIn')&$('#menu_span').fadeIn();
        alert ('Дарова! Вы и так на ней!');
    }
}
function show_hider(){
    $('.hider').removeClass('none bounceOut')&$('.callback_form').addClass('bounceIn')
    if($('.nav_menu').hasClass('bounceIn')){
        $('.nav_menu').addClass('bounceOut').removeClass('bounceIn')&$('#menu_span').fadeIn();
    };
}
$('#hider_of_the_hider').click(function(){
    $('.hider').addClass('none')&$('.callback_form').removeClass('bounceIn')
});
$(document).ready(function(){
    $('#cb_form').submit(function(event){
        event.preventDefault();
        $.ajax({
            url: "../post.php",
            type: "post",
            data: $('#cb_form').serialize(),
            success: function(){
                alert('Готово! Пакуйте сумки!')&$('.hider').addClass('none')&$('.callback_form').removeClass('bounceIn')
                $('.call_order, #menu_callback').addClass('none');
            }
        })
    })
})
alert('Исполнитель - Надысев Владислав. Рабочих часов за проектом - 8 - 9. Спасибо за внимание!');