$(document).ready(function () {
    $('.form').submit(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "php/basket_handler.php",
            data: $(this).serialize(),
            success: $('.btn-2').click(function(){
                $(this).addClass('active_btn');
            }),
            dataType: 'string'
          });
    });   
});
$(document).ready(function () {
    $('.form_status').submit(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "php/admin_handler.php",
            dataType: 'string',
            data: $(this).serialize(),
            success: console.log($(this).serialize()),
           
          });
    });   
});
