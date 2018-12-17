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
            "quanity":quantity
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
                    alert(response.message);
                }
                console.log(response)
            },
            error: function(err){
                alert(err);
                console.log(err);
            }


        })
    })



    });
