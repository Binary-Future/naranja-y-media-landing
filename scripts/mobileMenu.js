let x = document.getElementById("myLinks");

function toggleMenu() {
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
  }
}

window.addEventListener("resize", () => {
  if (screen.width > 600) {
    x.style.display = "flex";
  }
});
