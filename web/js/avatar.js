var current = "1";
document.getElementById(1).className = 'selected';



function afficher(avatar_number) {
     
    var avatar = document.getElementById(avatar_number);
     
    if (avatar_number != current) {
     
        avatar.className = 'selected';
     
        document.getElementById(current).className = 'unselected';
        current = avatar_number;
         
        $("#foo1").trigger("slideTo", current-1);
    }  
}
