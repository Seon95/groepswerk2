document.querySelectorAll(".p-image-class").forEach((element) => {
  element.onclick = function (e) {
    const modal = e.target.parentElement.nextElementSibling;
    modal.style.display = "block";
    modal.querySelector("#img01").src = e.target.src;
    // document.querySelectorAll(".caption").display = "block";
  };
});

document.querySelectorAll(".close").forEach((element) => {
  element.onclick = function (e) {
    e.target.parentElement.style.display = "none";
  };
});
