$(document).ready(function(){
    $("#limburger-add").on("click",function(event){
        event.preventDefault();
        $.post('ajax_update_quantity.php', {
                'cheese' : 'limburger',
                'quantity' : $("#limburger-quantity").val()
            } , function(data){
                $("#cart-count").html(data);
                $("#limburger-success").show();
            }, 'html'
        );
    });
    
    $("#redhawk-add").on("click",function(event){
        event.preventDefault();
        $.post('ajax_update_quantity.php', {
                'cheese' : 'redhawk',
                'quantity' : $("#redhawk-quantity").val()
            } , function(data){
                $("#cart-count").html(data);
                $("#redhawk-success").show();
            }, 'html'
        );
    });
    
    $("#gorgonzola-add").on("click",function(event){
        event.preventDefault();
        $.post('ajax_update_quantity.php', {
                'cheese' : 'gorgonzola',
                'quantity' : $("#gorgonzola-quantity").val()
            } , function(data){
                $("#cart-count").html(data);
                $("#gorgonzola-success").show();
            }, 'html'
        );
    });
});