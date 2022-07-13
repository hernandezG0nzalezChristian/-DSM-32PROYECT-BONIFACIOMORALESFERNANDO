const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});



//* Registro en la base de datos *//  
const $btnSingIn= document.querySelector('.sing-in-btn'),
        $btnSingUp= document.querySelector('.sing-up-btn'),
        $singUp = document.querySelector('.sing-up'),
        $singIn = document.querySelector('.sing-in'); 

document.addEventListener('click', e=> {
    if (e.target === $btnSingIn || e.target === $btnSingUp) {
        $singIn.classList.toggle('active'); 
        $singUp.classList.toggle('active')
    }
})

function buttonss(){
location.href= "../admin.php"

}