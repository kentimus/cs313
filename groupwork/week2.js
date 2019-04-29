var wasClicked = function(){
    alert("Clicked!");
}

var changeColor = function(){
    var box = document.getElementById("box1");
    var newColor = document.getElementById("newColor").value;
//    alert(newColor);
    box.style.color = newColor;
}


document.getElementById("myButton").addEventListener("click", wasClicked);
document.getElementById("newColorButton").addEventListener("click", changeColor);

// jquery stuff for stretch activities
$(document).ready(function(){
    $("#newColorButton2").on("click",function(){
        var newColor = $("#newColor2").val();
        $("#box2").css({
            'background-color' : newColor
        });
    });
    
    $("#fade3").on("click",function(){
        $("#box3").fadeToggle(1500); 
    });
});