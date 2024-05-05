const copyBtn = document.getElementsByClassName("btnCopy")[0];
const passToCopy = document.getElementById("passToCopy").innerText;
const copyAlert = document.getElementById("copyAlert");

copyBtn.addEventListener("click", () => {
	// Crea un elemento de texto temporal y asigna el texto a copiar
	let tempInput = document.createElement("textarea");
	tempInput.value = passToCopy;
	document.body.appendChild(tempInput);

	// Selecciona y copia el texto del elemento temporal
	tempInput.select();
	document.execCommand("copy");

	// Elimina el elemento temporal
	document.body.removeChild(tempInput);
	copyAlert.style.display = "block";
	copyBtn.textContent = "COPIADA";
});
