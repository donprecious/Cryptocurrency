$(function(){
    $("#txtAmount").keyup(function(event){
        {

            var crptoSymbol = $("select#selectCurrency").children("option:selected").attr("data-symbol");
            var price = $("select#selectCurrency").children("option:selected").attr("data-price");
            var amount = $(this).val();
            var quantity = amount/price;
            $("#txtQuanity").val(quantity.toFixed(6));
        }
    });

    $("#txtQuanity").keyup(function(event){
        {

            var crptoSymbol = $("select#selectCurrency").children("option:selected").attr("data-symbol");
            var price = $("select#selectCurrency").children("option:selected").attr("data-price");
            var quantity  = $(this).val();
            var amount=  price *quantity;
            $("#txtAmount").val(amount.toFixed(2));
        }
    });

    $('#btnBuyToken').click(function(event){
        event.preventDefault();
        var crptoSymbol = $("select#selectCurrency").children("option:selected").attr("data-symbol");
        var price = $("select#selectCurrency").children("option:selected").attr("data-price");
        var amount = $("#txtAmount").val();
        var quantity = $("#txtQuanity").val();

        $.ajax({
            url: "/user/buytoken",
            method: "post",
            data: {
            "symbol": crptoSymbol,
            "price":price,
            "amount":amount,
            "quantity":quantity
            },
            beforeSend:function(){
                $("#img_buy").show();
                $(this).attr("disabled", true);
            },
            complete: function(){
                $("#img_buy").hide();
                $(this).attr("disabled", false);
            },
            success: function(response){
                if(response.status ===200){
                    $("#txtMessageHeading").text("Success")
                    $("#txtMessage").text(response.message)
                    $("#modalNotice").modal();

                }
                else{
                    $("#txtMessageHeading").text("Failed")
                    $("#txtMessage").text(response.message)
                    $("#modalNotice").modal();
                }
                console.log(response)
            },
            error: function(err){
                $("#txtMessageHeading").text("Error Occured")
                $("#txtMessage").text(err)
                $("#modalNotice").modal();
                console.log("error",err);
            }


        })
    })

    //funtion to open sell coin modal and add neccassary parameter
    $('.btnSellTb').on('click', function(){
        var symbol = $(this).attr("data-symbol");
        //task is to show the modal and set the selected option to the corresponding symbol
        $("#selectCurrency").val(symbol);
        $("#sellModal").modal();

    });

    //funtion to sell coin
    $("#btnSellCoin").click(function(event){
        event.preventDefault();
        var crptoSymbol = $("select#selectCurrency").children("option:selected").attr("data-symbol");
        var price = $("select#selectCurrency").children("option:selected").attr("data-price");
        var amount = $("#txtAmount").val();
        var quantity = $("#txtQuanity").val();
        $.ajax({
            url: "/user/selltoken",
            method: "post",
            data: {
            "symbol": crptoSymbol,
            "price":price,
            "amount":amount,
            "quantity":quantity
            },
            beforeSend:function(){
                $("#img_buy").show();
                $(this).attr("disabled", true);
            },
            complete: function(){
                $("#img_buy").hide();
                $(this).attr("disabled", false);
            },
            success: function(response){
                if(response.status ===200){
                    $("#txtMessageHeading").text("Success")
                    $("#txtMessage").text(response.message)
                    $("#modalNotice").modal();
                }
                else{
                    $("#txtMessageHeading").text("Failed")
                    $("#txtMessage").text(response.message)
                    $("#modalNotice").modal();
                }
                console.log(response)
            },
            error: function(err){
                $("#txtMessageHeading").text("Error Occured")
                $("#txtMessage").text(err)
                $("#modalNotice").modal();
                console.log("error",err);
            }
        });

    });
});
