const borderClass = "link-active";
let rightCol = null;
let infoLinks = null;
let currentOption = 0;

// let sections = [4, 6, 8, 12, 16, 19, 22, 24, 26];
const sectionsName = [
	"introduction.inc.php",
	"techniquesMethods.inc.php",
	"postureErgonomics.inc.php",
	"practiceEntertainment.inc.php",
	"applicationOfTyping.inc.php",
	"toolsResources.inc.php",
	"benefitsMyths.inc.php",
	"personalDevelopment.inc.php",
	"typingForGroups.inc.php",
];
const applyEvents = () => {
	for (let i = 0; i < infoLinks.length; i++) {
		infoLinks[i].addEventListener("click", () => {
			currentOption = i;
			let idItem = i + 1;
			checkSection(idItem);
			console.log("item" + idItem);
			infoLinks[i].classList.add(borderClass);
			unsetBorder();
		});
	}
};

const unsetBorder = () => {
	for (let i = 0; i < infoLinks.length; i++) {
		if (i != currentOption) {
			infoLinks[i].classList.remove(borderClass);
		}
	}
};

const checkSection = (idItem) => {
	if (currentOption >= 0 && currentOption < 4)
		loadInclude(sectionsName[0], idItem);
	else if (currentOption >= 4 && currentOption < 6)
		loadInclude(sectionsName[1], idItem);
	else if (currentOption >= 6 && currentOption < 8)
		loadInclude(sectionsName[2], idItem);
	else if (currentOption >= 8 && currentOption < 12)
		loadInclude(sectionsName[3], idItem);
	else if (currentOption >= 12 && currentOption < 16)
		loadInclude(sectionsName[4], idItem);
	else if (currentOption >= 16 && currentOption < 19)
		loadInclude(sectionsName[5], idItem);
	else if (currentOption >= 19 && currentOption < 22)
		loadInclude(sectionsName[6], idItem);
	else if (currentOption >= 22 && currentOption < 24)
		loadInclude(sectionsName[7], idItem);
	else if (currentOption >= 24 && currentOption < 26)
		loadInclude(sectionsName[8], idItem);
};

const loadInclude = (incName, idItem) => {
	fetch("includes/learn-more-includes/" + incName)
		.then((response) => response.text())
		.then((data) => {
			document.getElementById("rightCol").innerHTML = data;
			window.location.hash = "#" + "item" + idItem;
		});
};

document.addEventListener("DOMContentLoaded", () => {
	fetch("includes/learn-more-includes/introduction.inc.php")
		.then((response) => response.text())
		.then((data) => {
			document.getElementById("rightCol").innerHTML = data;
			rightCol = document.getElementById("rightCol");
			infoLinks = document.getElementsByClassName("infoLink");
			applyEvents();
		});
	currentOption = 1;
	document.getElementById("learn-more").classList.add("active");
});
