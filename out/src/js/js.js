$('.rs_reviews_button_line button').on( "click", function() {
    let langid = $(this).attr('data-langid');
    
    $('.rs_reviews_button_line button').removeClass('btn-primary');
    $('.rs_reviews_reviews_list > div').css('display','none');
    
    $(this).addClass('btn-primary');
    $('#rs_reviews_' + langid).css('display','block');
});

if($('.rs_reviews_button_line button.btn-primary').length > 0)
{
    $('.rs_reviews_button_line button.btn-primary').trigger('click');
}