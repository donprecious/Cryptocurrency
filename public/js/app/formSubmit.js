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
});


});

function ajaxPost(senderControl, url,data,senderImage,modalNotification, recieverStatusControl, recieverMessageControl ){
    $.ajax({

        url: url,
        method: "post",
        data: data,
        beforeSend:function(){
            senderImage.show();
            senderControl.attr("disabled", true);
        },
        complete: function(){
            senderImage.hide();
            senderControl.attr("disabled", false);
        },
        success: function(response){
            if(response.status ===200){
                recieverStatusControl.text("Success")
                recieverMessageControl.text(response.message)
                modalNotification.modal();
            }
            else{
                recieverStatusControl.text("Failed")
                recieverMessageControl.text(response.message)
               modalNotification.modal();
            }
            console.log(response)
        },
        error: function(err){
            recieverStatusControl.text("Error Occured")
            recieverMessageControl.text(err)
            modalNotification.modal();
            console.log("error",err);
        }


    })
}

