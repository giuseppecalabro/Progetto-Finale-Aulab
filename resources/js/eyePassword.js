// Input Reset Password
let inputsReset = document.querySelectorAll(".inputPassword");

let eye = document.querySelector(".eyePassword");

if(eye){
    eye.addEventListener("click", () => {
        eye.classList.toggle("fa-eye-slash");
        eye.classList.toggle("fa-eye");
        eye.classList.toggle("opacity-100");
        eye.style.color= "var(--colorWhiteSmoke)";
    
        inputsReset.forEach((input) => {
            let type =
                input.getAttribute("type") === "password" ? "text" : "password";
            input.setAttribute("type", type);
        });
    });
    
}