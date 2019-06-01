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
        
        var email   = $("#new-email").val();
        
        $.post('ajax_update_email.php', {
                'email' : email
            } , function(data){
                $("#profile-email").fadeIn();
                $("#profile-email").html(data);
                $("#update-email-form").fadeOut();
            }, 'html'
        );
    });
});