let access = document.querySelector("#access");
let option = document.querySelector("#option");
let account = document.querySelector("#account");
let profile = document.querySelector("#profile");

let temp = 0;

access.addEventListener("click", function(){
    if(temp == 0){
        option.style.setProperty("height", "250px");

        temp++;
    }
    else{
        option.style.setProperty("height", "0");

        temp--;
    }

});

function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}


let big = document.querySelector("#bigger");
let small = document.querySelector("#smaller");
let text = document.querySelectorAll("div");
let zmiana = document.querySelector("#colors");
let tlo = document.querySelector("body");
let p = document.querySelectorAll(".paragraph");

let fontSize = 15;


// powieksz
big.addEventListener("click", function(){
    fontSize += 3;
    if(fontSize > 26){
        fontSize = 24;
    }

    text.forEach(function(one_dive){
        one_dive.style.setProperty("font-size", fontSize+"px");
    });

    p.forEach(function(one_dive){
        one_dive.style.setProperty("font-size", fontSize+"px");
    });

});


// zmniejsz
small.addEventListener("click", function(){
    fontSize -= 3;
    if(fontSize < 10){
        fontSize = 10;
    }

    text.forEach(function(one_dive){
        one_dive.style.setProperty("font-size", fontSize+"px");
    });

    p.forEach(function(one_dive){
        one_dive.style.setProperty("font-size", fontSize+"px");
    });

});

//zmiana kolorow

let high = 0;
let img = document.querySelector("#logo");
let head = document.querySelector("header");
let title = document.querySelectorAll(".ltitle");
let menu = document.querySelector("#menu-btn");
let set = document.querySelector("#set");
let op = document.querySelectorAll(".op");
let express = document.querySelector("#express");
let year = document.querySelector("#year");
let awesome = document.querySelector("#customer");


zmiana.addEventListener("click", function(){

    if(high == 0){
        tlo.classList.add('high_contrast');
        title.forEach(function(e){
            e.style.setProperty("color", "white");
        });
        op.forEach(function(e){
            e.style.setProperty("color", "white");
        });
        high = 1;
        zmiana.innerHTML = "Kontrast biało-czarny";
        img.src = "img/logo_florczak_kontrast.png";
        access.src = "img/accessability_kontrast.png";
        account.src = "img/account_kontrast.png";
        head.style.setProperty("background-color", "black");
        menu.src = "img/menu_kontrast.png";
        set.src = "img/star_kontrast.png";
        express.src = "img/speed_kontrast.png";
        year.src = "img/verified_kontrast.png";
        awesome.src = "img/awesome_kontrast.png";
    }
    else{
        tlo.classList.remove('high_contrast');
        title.forEach(function(e){
            e.style.setProperty("color", "black");
        });
        op.forEach(function(e){
            e.style.setProperty("color", "black");
        });
        high = 0;
        zmiana.innerHTML = "Kontrast żółto-czarny";
        img.src = "img/logo_florczak.png";
        head.style.setProperty("background-color", "white");
        access.src = "img/accessible_FILL0_wght400_GRAD0_opsz48.png";
        account.src = "img/account_circle_FILL0_wght400_GRAD0_opsz48.png";
        menu.src = "img/menu_FILL0_wght400_GRAD0_opsz48.png";
        set.src = "img/star_rate_FILL0_wght400_GRAD0_opsz48.png";
        express.src = "img/speed_FILL0_wght400_GRAD0_opsz48.png";
        year.src = "img/verified_user_FILL0_wght400_GRAD0_opsz48.png";
        awesome.src = "img/auto_awesome_FILL0_wght400_GRAD0_opsz48.png";
    }

});

