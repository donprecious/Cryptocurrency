$(function(){
$('form').submit(function(event){
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
        url: $(this).attr('action'),
        method: "post",
        data: formData,
        beforeSend:function(){

        },
        complete: function(){

        },
        success: function(){

        },
        error: function(){

        }


    })
})


});
