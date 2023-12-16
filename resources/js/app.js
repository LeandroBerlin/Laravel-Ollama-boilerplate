import './bootstrap';

window.addEventListener("load", (event) => {
    document.querySelector("#spinner").classList.add("hidden");
});

document.querySelector("#ollamaPrompt").addEventListener("submit", (e) => {
   document.querySelector("#spinner").classList.remove("hidden");
});

document.querySelector("#promptText").addEventListener("keyup", (e) => {
    if(document.querySelector("#promptText").value.length > 0) {
        document.querySelector("#submit").removeAttribute('disabled');
    }else{
        document.querySelector("#submit").setAttribute("disabled", true);
    }

});
