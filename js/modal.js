let cerrarI = document.querySelectorAll(".closeI")[0];
let modalI = document.querySelectorAll(".modalI")[0];
let modalC = document.querySelectorAll(".modalI-container")[0];

cerrarI.addEventListener("click", function () {
  modalI.classList.toggle("modalI-close");
  setTimeout(() => {
    modalC.style.opacity = "0";
    modalC.style.visibility = "hidden";
  }, 850);
});

window.addEventListener("click", function (e) {
  if (e.target == modalC) {
    modalI.classList.toggle("modalI-close");
    setTimeout(() => {
      modalC.style.opacity = "0";
      modalC.style.visibility = "hidden";
    }, 850);
  }
});
