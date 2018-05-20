
window.onload = function() {
	var id_top_menu = document.getElementById("id_top_menu");
};

document.onclick = function(event) {
	var target = event.target;
	while (target != document) {
		if(target.id === "id_hamb_menu") {
			showMenu();
			return
		} else {
			target = target.parentNode;
		}
	}
	hideMenu();
}

function showMenu() {
	id_top_menu.setAttribute("style", "display: block;");
}

function hideMenu() {
	id_top_menu.setAttribute("style", "");
}