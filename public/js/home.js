
function openNav(){
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "300px";
}

function closeNav(){
    document.getElementById("mySidenav").style.width = "0px";
    document.getElementById("main").style.marginLeft = "0px";
}

function toggleNav(){
    navSize = document.getElementById("mySidenav").style.width;
    console.log(navSize);

    if(navSize == "0px"){
        return openNav();
    }
    return closeNav();
}
