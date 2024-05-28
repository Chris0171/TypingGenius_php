import {
	settings,
	counterClear,
	interval,
	setTime,
	getRandomText,
	getTimeToCount,
	printTime,
	saveUser,
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
const aliasField = document.getElementById("aliasField");
const aliasMessage = document.getElementById("aliasMessage");
const aliasAlert = document.getElementById("aliasAlert");
const saveUserForm = document.getElementById("saveUserForm");
const passwordField = document.getElementById("passwordField");
const passImp = document.getElementsByClassName("passImp")[0];
const passAlert = document.getElementById("passAlert");
const submitBtn = document.getElementById("submitBtn");
const levelField = document.getElementById("levelField");
const errorField = document.getElementById("errorField");

let myText = getRandomText();
let localSettings = JSON.parse(localStorage.getItem("settings"));
let errors = 0;
let isTyping = true;
let isPress = true;
let keyPress = null;
let typedKey = null;

// other vars
let allUsers = null;
let userExist = false;

// Events
retryBtn.addEventListener("click", () => {
	location.reload();
});
menuBtn.addEventListener("click", () => {
	location.href = "index.php";
});
aliasField.addEventListener("input", () => {
	let currentAlias = aliasField.value;
	let flag = false;

	// Check if actual alias exist
	for (let i = 0; i < allUsers.length; i++) {
		if (allUsers[i]["alias"] == currentAlias) {
			flag = true;
		}
	}
	userExist = flag;

	// * Show success message
	if (userExist) {
		aliasMessage.style.display = "block"; // TODO: check display
		passImp.style.display = "flex";
	} else {
		aliasMessage.style.display = "none";
		passwordField.value = "";
		passImp.style.display = "none";
	}

	if (aliasField.value.length <= 15 && aliasField.value.length >= 5) {
		aliasAlert.style.display = "none";
	} else aliasAlert.style.display = "block";
});

submitBtn.addEventListener("click", async (event) => {
	event.preventDefault();

	if (!userExist) {
		if (aliasField.value.length <= 15) {
			// * Change action if it's diferent
			saveUserForm.action = "actions/insertUser.php";
			saveUserForm.submit();
		}
	} else {
		try {
			let alias = aliasField.value;
			let pass = passwordField.value;
			const data = await saveUser(alias, "", "", pass, "actions/checkPass.php");
			let passCorrect = data;
			if (passCorrect["isCorrect"]) {
				passAlert.style.display = "none";
				console.log("Contraseña correcta");
				// * Change action
				saveUserForm.action = "actions/updateUser.php";
				saveUserForm.submit();
			} else {
				passAlert.style.display = "block";
			}
		} catch (error) {
			console.error("Error al guardar el usuario:", error);
		}
	}
});

// Typing function for de user
const detectKeyDown = () => {
	document.addEventListener("keydown", (event) => {
		if (event.key === " ") {
			// Previene el comportamiento predeterminado de la tecla de espacio
			event.preventDefault();
		}
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
			// * Game success
			if (textWell.textContent.length <= 0 && textTyping.textContent === "") {
				document.getElementById("modalButton").click();
				overTitle.textContent = "Felicitaciones";
				moBody.textContent =
					"¡Ha conseguido superar el nivel satisfactoriamente!";
				isTyping = false;
				clearInterval(interval);
				saveUserForm.style.display = "block";
				levelField.value = localSettings.level;
				errorField.value = errors;
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
setTime(
	getTimeToCount(parseInt(localSettings.level)),
	"counter",
	"modalButton"
);

document.addEventListener("DOMContentLoaded", async function () {
	// get users
	try {
		const data = await saveUser("", "", "", "", "actions/readUser.php");
		allUsers = data;
	} catch (error) {
		console.error("Error al guardar el usuario:", error);
	}
	aliasAlert.style.display = "none";
	aliasMessage.style.display = "none";
	passAlert.style.display = "none";
	passImp.style.display = "none";

	// * Apply functions
	initText();
	detectKeyDown();
});
