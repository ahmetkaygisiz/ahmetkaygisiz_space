
function openNav(){
    screenWidth = $(window).width();
    paddingSize = "300px";

    if(screenWidth < 768){
        paddingSize = "150px";
    }
    
    document.getElementById("mySidenav").style.width = paddingSize;
    document.getElementById("main").style.marginLeft = paddingSize;
}

function closeNav(){
    document.getElementById("mySidenav").style.width = "0px";
    document.getElementById("main").style.marginLeft = "0px";
}

function toggleNav(){
    navSize = document.getElementById("mySidenav").style.width;
    

    if(navSize == "0px"){
        return openNav();
    }
    return closeNav();
}
