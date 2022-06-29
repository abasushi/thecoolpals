const text = document.querySelector("#copy-email");
const popup = document.querySelector(".popup");

text.addEventListener("click", () => {
  popup.classList.add("active");
  copyToClipBoard();
});
popup.addEventListener("animationend", () => {
  popup.classList.remove("active");
});

function copyToClipBoard() {
  const textarea = document.createElement("textarea");
  textarea.setAttribute("readonly", "");
  textarea.value = text.innerText;
  textarea.style.position = "absolute";
  document.body.appendChild(textarea);
  textarea.select();
  document.execCommand("copy");
  document.body.removeChild(textarea);
}

// Aba Creator Popup
document.getElementById("creator-aba").addEventListener("click", function() {
  document.getElementsByClassName("aba-popup")[0].classList.add("active");
});

document.getElementById("aba-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-aba").style.display = "block";
  document.getElementsByClassName("aba-popup")[0].classList.remove("active");
});

// Daniel Creator Popup
document.getElementById("creator-daniel").addEventListener("click", function() {
  document.getElementsByClassName("daniel-popup")[0].classList.add("active");
});

document.getElementById("daniel-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-daniel").style.display = "block";
  document.getElementsByClassName("daniel-popup")[0].classList.remove("active");
});

// Raja Creator Popup
document.getElementById("creator-raja").addEventListener("click", function() {
  document.getElementsByClassName("raja-popup")[0].classList.add("active");
});

document.getElementById("raja-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-raja").style.display = "block";
  document.getElementsByClassName("raja-popup")[0].classList.remove("active");
});

// RA Creator Popup
document.getElementById("creator-ra").addEventListener("click", function() {
  document.getElementsByClassName("ra-popup")[0].classList.add("active");
});

document.getElementById("ra-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-ra").style.display = "block";
  document.getElementsByClassName("ra-popup")[0].classList.remove("active");
});

// Kurk Creator Popup
document.getElementById("creator-kurk").addEventListener("click", function() {
  document.getElementsByClassName("kurk-popup")[0].classList.add("active");
});

document.getElementById("kurk-dismiss-btn").addEventListener("click", function() {
  document.getElementById("creator-kurk").style.display = "block";
  document.getElementsByClassName("kurk-popup")[0].classList.remove("active");
});