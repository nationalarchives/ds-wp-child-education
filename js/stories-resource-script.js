function addButtonListener() {
	let guidanceBtn = document.getElementById('guidance-btn');
	let guidance = document.getElementById('guidance');
	guidanceBtn.addEventListener('click', e => {
		guidance.classList.toggle("hidden");
	})
}

window.addEventListener('DOMContentLoaded', e => {
	addButtonListener();
});
