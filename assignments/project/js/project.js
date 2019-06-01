$(document).ready(function(){
    $(".flippable").click(function(){
        $(this).toggleClass("flipme");
    });
    
    $("#update-email").on("click", function(){
        $("#update-email-form").fadeIn();
        $("#profile-email").fadeOut();
    });
    
    $("#update-email-form").on("submit", function(event){
        event.preventDefault();
        
        var user_id = $("#user_id").val();
        var email   = $("#new-email").val();
        
        $.post('ajax_update_email.php', {
                'user_id' : user_id,
                'email' : email
            } , function(data){
                $("#profile-email").fadeIn();
                $("#profile-email").html(data);
                $("#update-email-form").fadeOut();
            }, 'html'
        );
    });
});