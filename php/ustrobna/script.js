// let prevscroll = window.pageYOffset;
// let navbar = document.querySelector("nav");

// window.onscroll = () => {
//     let currentscrol = window.pageYOffset;

//     if (prevscroll > currentscrol) {
//         navbar.style.top = "0";
//     }
//     else {
//         navbar.style.top = "-20vw";
//     }

//     prevscroll = currentscrol;
// }

// let slide_con = document.querySelector("#slide-container");
// let slide1 = document.querySelector("#slide1");
// let slide2 = document.querySelector("#slide2");

// let f_btn = document.querySelector("#f-btn");
// let l_btn = document.querySelector("#l-btn");
// let translate1 = -97;
// let translate2 = 0;

// window.onload = ()=>{
//     let temp = 0;
//     let slide;
//     f_btn.style.transform = "scale(1.2)";
//     // if(window.innerHeight < )
//     slide = setInterval(() => {
//         if (temp == 0){
//             slide1.style.transform = "translateX(" + translate1 + "vw)";
//             slide2.style.transform = "translateX(" + translate1 + "vw)";
//             l_btn.style.transform = "scale(1.2)";
//             f_btn.style.transform = "scale(1)";
//             temp++;
//         }
//         else{
//             slide1.style.transform = "translateX(" + translate2 + "vw)";
//             slide2.style.transform = "translateX(" + translate2 + "vw)";
//             l_btn.style.transform = "scale(1)";
//             f_btn.style.transform = "scale(1.2)";
//             temp--;
//         }
//     }, 10000);

//     f_btn.addEventListener("click", ()=>{
//         slide1.style.transform = "translateX(" + translate2 + "vw)";
//         slide2.style.transform = "translateX(" + translate2 + "vw)";
//         l_btn.style.transform = "scale(1)";
//         f_btn.style.transform = "scale(1.2)";
//     });

//     l_btn.addEventListener("click", ()=>{
//         slide1.style.transform = "translateX(" + translate1 + "vw)";
//         slide2.style.transform = "translateX(" + translate1 + "vw)";
//         l_btn.style.transform = "scale(1.2)";
//         f_btn.style.transform = "scale(1)";
//     });
// }