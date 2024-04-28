import {
  settings,
  counterClear,
  interval,
  setTime,
  getRandomText,
  getTimeToCount,
  printTime,
} from "./toolkit.js";

// * HTML elements
const textDone = document.getElementsByClassName("text-done")[0];
const textTyping = document.getElementsByClassName("text-typing")[0];
const textWell = document.getElementsByClassName("text-well")[0];
const nivelNum = document.getElementsByClassName("nivelNum");
const errorNum = document.getElementsByClassName("errorNum");
const moBody = document.getElementById("moBody");
const overTitle = document.getElementById("over-title");
const retryBtn = document.getElementById("retryBtn");
const menuBtn = document.getElementById("menuBtn");


let myText = getRandomText();
let localSettings = JSON.parse(localStorage.getItem("settings"));
let errors = 0;
let isTyping = true;
let isPress = true;
let keyPress = null;
let typedKey = null;

// Events
retryBtn.addEventListener("click", () => {
  location.reload();
});
menuBtn.addEventListener("click", () => {
  location.href = "../../index.html";
});

// Typing function for de user
const detectKeyDown = () => {
  document.addEventListener("keydown", (event) => {
    if (!counterClear && isTyping) {
      typedKey = event.key;
      let letter = textTyping.textContent;
      if (typedKey == letter) {
        textDone.textContent += letter;
        if (textWell.textContent.length > 0) {
          textTyping.textContent = textWell.textContent[0];
          setTextWell();
        } else {
          textTyping.textContent = "";
        }
      } else {
        if (isPress && !event.shiftKey && event.key != "Dead") {
          errors++;
          setError();
        }
      }
      if (textWell.textContent.length <= 0 && textTyping.textContent === "") {
        document.getElementById("modalButton").click();
        overTitle.textContent = "Felicitaciones";
        moBody.textContent =
          "¡Ha conseguido superar el nivel satisfactoriamente!";
        isTyping = false;
        clearInterval(interval);
      }
      if (isPress) {
        keyPress = typedKey;
        isPress = false;
      }
      if (keyPress != typedKey) {
        isPress = true;
      }
      document.addEventListener("keyup", () => {
        isPress = true;
      });
    }
  });

};


// * Functions
const setTextWell = () => {
  let newText = "";
  for (let i = 1; i < textWell.textContent.length; i++) {
    newText += textWell.textContent[i];
  }
  textWell.textContent = newText;
};
const initText = () => {
  textDone.textContent = "";
  textTyping.textContent = myText[0];
  for (let i = 1; i < myText.length; i++) {
    textWell.textContent += myText[i];
  }
  // Set nivel
  nivelNum[0].textContent = nivelNum[1].textContent = localSettings.level;
};

const setError = () => {
  errorNum[0].textContent = errorNum[1].textContent = errors;
};

// * Initialize counter
setTime(getTimeToCount(localSettings.level), "counter", "modalButton");

// * Apply functions
initText();
detectKeyDown();
