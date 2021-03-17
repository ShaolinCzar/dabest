function show_call(){
    $('.hider, .callback_form').removeClass('none');
}
function show_proc(){
    $('.hider, .processing_text').removeClass('none');
}
function hide_call(){
    $('.hider, .callback_form').addClass('none');
}
function hide_proc(){
    $('.hider, .processing_text').addClass('none');
}
$(document).ready(function(){
    $('.slider').slick();
  });
  $(document).ready(function(){
    $('#form').submit(function(event){
        event.preventDefault();
        $.ajax({
            url: "post.php",
            type: "post",
            data: $('#form').serialize(),
            success: function(){
                alert('Спасибо! С Вами свяжутся в Ближайшее время!')&$('.hider, .callback_form').addClass('none')&$('#order_call_header, #order_call_footer').addClass('none');
            }
        })
    })
})