function openNav() {
    localStorage.setItem("navWidth", 1);
    $(".sidenav").removeClass("active");
    $("#main").removeClass("active");
}

function closeNav() {
    $(".sidenav").addClass("active");
    $("#main").addClass("active");

    localStorage.setItem("navWidth", 0);
}

function toggleNav() {
    state = localStorage.getItem("navWidth");
    console.log("Tıklandım...");

    if (state == 0) {
        return openNav();
    }
    return closeNav();
}

$("document").ready(function() {
    navState = localStorage.getItem("navWidth");
    console.log(navState);

    if (navState == 0) return closeNav();
    return openNav();
});
