$('.first_next_slide').click(function(){
    if($('.sl1_img1').hasClass('active')){
        $('.sl1_img2').addClass('active').removeClass('none')&$('.sl1_img1').addClass('none').removeClass('active')
    } else if($('.sl1_img2').hasClass('active')){
        $('.sl1_img3').addClass('active').removeClass('none')&$('.sl1_img2').addClass('none').removeClass('active')
    } else if($('.sl1_img3').hasClass('active')){
        $('.sl1_img4').addClass('active').removeClass('none')&$('.sl1_img3').addClass('none').removeClass('active')
    } else {
        $('.sl1_img1').addClass('active').removeClass('none')&$('.sl1_img4').addClass('none').removeClass('active')
    }
})
$('.first_prev_slide').click(function(){
    if($('.sl1_img1').hasClass('active')){
        $('.sl1_img4').addClass('active').removeClass('none')&$('.sl1_img1').addClass('none').removeClass('active')
    } else if($('.sl1_img4').hasClass('active')){
        $('.sl1_img3').addClass('active').removeClass('none')&$('.sl1_img4').addClass('none').removeClass('active')
    } else if($('.sl1_img3').hasClass('active')){
        $('.sl1_img2').addClass('active').removeClass('none')&$('.sl1_img3').addClass('none').removeClass('active')
    } else {
        $('.sl1_img1').addClass('active').removeClass('none')&$('.sl1_img2').addClass('none').removeClass('active')
    }
})
$('.second_next_slide').click(function(){
    if($('.sl2_img1').hasClass('active')){
        $('.sl2_img2').addClass('active').removeClass('none')&$('.sl2_img1').addClass('none').removeClass('active')
    } else if($('.sl2_img2').hasClass('active')){
        $('.sl2_img3').addClass('active').removeClass('none')&$('.sl2_img2').addClass('none').removeClass('active')
    } else if($('.sl2_img3').hasClass('active')){
        $('.sl2_img4').addClass('active').removeClass('none')&$('.sl2_img3').addClass('none').removeClass('active')
    } else {
        $('.sl2_img1').addClass('active').removeClass('none')&$('.sl2_img4').addClass('none').removeClass('active')
    }
})
$('.second_prev_slide').click(function(){
    if($('.sl2_img1').hasClass('active')){
        $('.sl2_img4').addClass('active').removeClass('none')&$('.sl2_img1').addClass('none').removeClass('active')
    } else if($('.sl2_img4').hasClass('active')){
        $('.sl2_img3').addClass('active').removeClass('none')&$('.sl2_img4').addClass('none').removeClass('active')
    } else if($('.sl2_img3').hasClass('active')){
        $('.sl2_img2').addClass('active').removeClass('none')&$('.sl2_img3').addClass('none').removeClass('active')
    } else {
        $('.sl2_img1').addClass('active').removeClass('none')&$('.sl2_img2').addClass('none').removeClass('active')
    }
})