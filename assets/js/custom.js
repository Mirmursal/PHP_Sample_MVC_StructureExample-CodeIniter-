$(document).ready(function(){


    $(".js-switch").each(function(){
       new Switchery(this);
    });

    $("body").on("change",".js-switch" , function() {

        let $completed = $(this).prop("checked");

        let $url = $(this).data("url");

        $.post($url , {completed : $completed}, function (res){});

    })

});