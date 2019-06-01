$(document).ready(function(){
    $(".flippable").click(function(){
        $(this).toggleClass("flipme");
    });
    
    $("#update-email").on("click", function(){
     
    });
    
    $("#update-email-form").on("submit", function(event){
        event.preventDefault();
        alert("hi");
        
        var user_id = $("#user_id").val();
        var email   = $("#new-email").val();
        
        $.post('ajax_update_email.php', {
                'user_id' : user_id,
                'email' : email
            } , function(data){
                $("#profile-email").html(data);
                $("#update-email-form").fadeOut();
            }, 'html'
        );
    });
});