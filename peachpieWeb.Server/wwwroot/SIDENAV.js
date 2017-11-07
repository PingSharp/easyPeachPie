// JavaScript source code
function navopen()
{
    
    var sidenav = document.getElementById("sidenav")
    sidenav.style.marginLeft = "0px";
    var nav = document.getElementById("nav"
    )
    nav.style.marginLeft = "200px;"
    var main = document.getElementById("section")
    main.style.marginLeft = "220px"
    //var main1 = document.getElementsByClassName("navigition")
    //main1.style.marginLeft = "220px"
    var main2 = document.getElementById("header")
    main2.style.marginLeft ="220px"
}

function navclose()
{
    
    var sidenav = document.getElementById("sidenav")
    sidenav.style.marginLeft = "-220px"
    var nav = document.getElementById("nav")
    nav.style.marginLeft = "0px"
    var main = document.getElementById("section")
    main.style.marginLeft = "15px"
    //var main1 = document.getElementsByClassName("navigition")
    //main1.style.marginLeft = "220px"
    var main2 = document.getElementById("header")
    main2.style.marginLeft = "15px"
}

