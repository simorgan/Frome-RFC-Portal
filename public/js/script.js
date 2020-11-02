
window.onload = function () {
	var button = document.getElementById('memberAdd')

	button.addEventListener('click', hideshow, false);
}
function hideshow() {
	document.getElementById('memberAdd').style.display = 'block';
	this.style.display = 'none'
	var load = document.getElementById('loading')
	load.classList.remove("loadingHide");
	load.classList.add("loadingShow");
}
