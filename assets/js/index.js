import { settings } from "./tootkit.js";

// * HTML elements
//const levelNum = document.getElementsByClassName("level")[0];
//const levelBtn = document.getElementById("levelButton");
const leveles = document.getElementsByClassName("level-box");
const radioButtons = document.querySelectorAll('input[name="level"]');

for (let i = 0; i < leveles.length; i++) {
  leveles[i].addEventListener("click", () => {
    leveles[i].classList.add("level-box-active");
    for (let j = 0; j < leveles.length; j++) {
      if (j != i) {
        leveles[j].classList.remove("level-box-active");
      }
    }
  });
}

radioButtons.forEach(function (radioButton) {
  radioButton.addEventListener('change', function () {
    settings.level = this.value;
    let settingsJson = JSON.stringify(settings);
    localStorage.setItem("settings", settingsJson);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  if (localStorage.getItem("settings")) {
    let localSettings = JSON.parse(localStorage.getItem("settings"));
    settings.level = localSettings.level;
    let index = localSettings.level - 1;
    leveles[index].classList.add("level-box-active");
  }
  else {
    settings.level = 1;
    leveles[0].classList.add("level-box-active");
    let settingsJson = JSON.stringify(settings);
    localStorage.setItem("settings", settingsJson);
  }
});

