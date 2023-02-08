const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = () => {
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
};
cancelBtn.onclick = () => {
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
};
window.onscroll = () => {
  this.scrollY > 20
    ? navbar.classList.add("sticky")
    : navbar.classList.remove("sticky");
};

//smooth scroll
// var locate = document.querySelector("#locate1");
// locate.scrollIntoView("#section-1");
// locate.scrollIntoView({ behavior: "smooth", block: "end" });

// var locate = document.querySelector("#locate2");
// locate.scrollIntoView("#section-2");
// locate.scrollIntoView({ behavior: "smooth", block: "end" });

// var locate = document.querySelector("#locate3");
// locate.scrollIntoView("#section-3");
// locate.scrollIntoView({ behavior: "smooth", block: "end" });
