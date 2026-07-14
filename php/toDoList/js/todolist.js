let addBtn = document.querySelector("#addBtn");
let closeBtn = document.querySelector("#closeBtn");
let main = document.querySelector("#main");
let modal = document.querySelector("#modal");
let reset = 0;

addBtn.addEventListener("click", ()=>{
    modal.style.right = "0";
    main.style.marginRight = "400px";
    addBtn.style.setProperty("border", "3px solid #444");
    addBtn.style.setProperty("color", "#444");
});

closeBtn.addEventListener("click", ()=>{
    modal.style.right = "-403px";
    main.style.marginRight= "0";
    addBtn.style.setProperty("border", "3px solid #000");
    addBtn.style.setProperty("color", "#000");
    points.innerHTML = code;
    points.style.right = 0;
    reset = 1;
});

let previous = document.querySelector("#previous");
let next = document.querySelector("#next");
let points = document.querySelector("#point-con");
let code = "<div class='inp-con'><label for='point[]'>Point title:</label> <br><input name='point[]' type='text'><br><label for='pointdes[]'>Point description:</label> <br> <textarea max='20' name='pointdes[]'></textarea></div>";
let indeks = 0;
let maxIndex = 0;
let rightValue = 0;
let pointsArray = [];
previous.addEventListener("click", ()=>{
    if(reset == 1){
        indeks = 0;
        maxIndex = 0;
        rightValue = 0;
        reset = 0;
    }
    
    if(indeks != 0){
        rightValue -= 385;
        points.style.right = rightValue + "px";
        indeks--;
    }
});

next.addEventListener("click", ()=>{
    if(reset == 1){
        indeks = 0;
        maxIndex = 0;
        rightValue = 0;
        reset = 0;
    }

    rightValue += 385;
    if(maxIndex == indeks){
        points.innerHTML += code;
        maxIndex++;
        console.log(maxIndex);
    }

    points.style.right = rightValue + "px";

    indeks++;
    console.log(indeks);
});