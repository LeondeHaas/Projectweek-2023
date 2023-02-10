const body = document.querySelector("body");
const website = document.querySelector(".website");
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

// window.onscroll = () => {
//   this.scrollY > 20
//     ? navbar.classList.add("sticky")
//     : navbar.classList.remove("sticky");
// };

window.onscroll = () => {
  this.scrollY > 20
    ? website.classList.add("remove")
    : website.classList.remove("remove");
};

const elts = {
  text1: document.getElementById("text1"),
  text2: document.getElementById("text2"),
};

const texts = [
  "𓈖",
  "𓏲",
  "𓆓",
  "𓊽",
  "𓉐",
  "𓇯",
  "𓃾",
  "𓁶",
  "𓃾",
  "𓀠",
  "𓇯",
  "𓈖",
  "𓃾",
  "𓃻",
  "𓉐",
  "𓏲",
  "𓌅",
  "𓆓",
  "𓃾",
  "𓇯",
  "𓀠",
  "𓂝",
  "𓁶",
  "𓃾",
  "𓁹",
  "𓈖",
  "𓃾",
  "𓈖",
  "𓏲",
  "𓏴",
  "𓃾",
  "𓈖",
  "𓉗",
  "𓂝",
  "𓃾",
  "𓇯",
  "𓌅",
];

const morphTime = 1;
const cooldownTime = 2;

let textIndex = texts.length - 1;
let time = new Date();
let morph = 0;
let cooldown = cooldownTime;

elts.text1.textContent = texts[textIndex % texts.length];
elts.text2.textContent = texts[(textIndex + 1) % texts.length];

function doMorph() {
  morph -= cooldown;
  cooldown = 0;

  let fraction = morph / morphTime;

  if (fraction > 1) {
    cooldown = cooldownTime;
    fraction = 1;
  }

  setMorph(fraction);
}

function setMorph(fraction) {
  elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
  elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

  fraction = 1 - fraction;
  elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
  elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

  elts.text1.textContent = texts[textIndex % texts.length];
  elts.text2.textContent = texts[(textIndex + 1) % texts.length];
}

function doCooldown() {
  morph = 0;

  elts.text2.style.filter = "";
  elts.text2.style.opacity = "100%";

  elts.text1.style.filter = "";
  elts.text1.style.opacity = "0%";
}

function animate() {
  requestAnimationFrame(animate);

  let newTime = new Date();
  let shouldIncrementIndex = cooldown > 0;
  let dt = (newTime - time) / 1000;
  time = newTime;

  cooldown -= dt;

  if (cooldown <= 0) {
    if (shouldIncrementIndex) {
      textIndex++;
    }

    doMorph();
  } else {
    doCooldown();
  }
}

animate();
