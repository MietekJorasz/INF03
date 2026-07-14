const dropdown = document.querySelectorAll(".dropdown");
const view = document.querySelectorAll(".view");
var temp = 0;   


view.forEach((v)=>{
    v.addEventListener("click",()=>{
        if(temp == 0){
            dropdown.forEach((d)=>{
                d.style.height = '200px';
            });
            view.forEach((v)=>{
                    v.style.transform = 'rotate(-180deg)';
            });
            temp++;
            console.log(temp)
        }
        else{
            dropdown.forEach((d)=>{
                d.style.height = '0';
            });
            view.forEach((v)=>{
                    v.style.transform = 'rotate(0deg)';
            });
            temp--;
            console.log(temp)
        }
            
    });

});