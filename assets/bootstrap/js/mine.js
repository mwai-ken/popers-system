const menubtn =document.querySelector(".menu-btn");
const nav =document.querySelector(".nav");
const loader = document.querySelector(".loader");
const main = document.querySelector(".main");
const button = document.getElementById("button");


/*menubtn*/
menubtn.addEventListener('click', ()=>{
    menubtn.classList.toggle('active');
    nav.classList.toggle('active');
});

/*making the button view active*/
button.addEventListener("click",()=>{
    button.classList.toggle('active');
    fash.classList.toggle('active');
})


// function init() {
//     setTimeout( ()=>{


      
//       loader.style.opacity = 0;
//       loader.style.display = "none";

//       main.style.display = "block";
//       main.style.opacity = 1;



//     },2000);
// }
// /*-----calling the function ---*/
// init();