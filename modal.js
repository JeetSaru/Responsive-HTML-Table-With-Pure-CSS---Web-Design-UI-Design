//MODAL MENU
document.querySelector("label.agregar-btn").addEventListener("click", () => {
    document.querySelector(".div-modal").style.cssText = "display: grid;"
})
document.querySelector(".close-modal-button").addEventListener("click", () => {

    document.querySelector(".login-box").classList.remove("animate__fadeInDown")
    document.querySelector(".login-box").classList.add("animate__fadeOutDown")
    setTimeout(() => {
        document.querySelector(".div-modal").style.cssText = "display:none;"
    }, 300);
})