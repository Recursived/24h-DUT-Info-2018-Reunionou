function opening(id, but) {
	document.getElementById(id).classList.add("opened");
	document.getElementById(but).onclick = function() { hiding(id, but); };
}

function hiding(id, but) {
	document.getElementById(id).classList.remove("opened");
	document.getElementById(but).onclick = function() { opening(id, but); };
}