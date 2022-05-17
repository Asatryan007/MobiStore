const filterBox = document.querySelectorAll("figure");

document.getElementById("navigation").addEventListener('click', event => {
	if (event.target.tagName !== "LI") return false;

	let filterClass = event.target.dataset["f"];

	filterBox.forEach(elem =>{
		elem.classList.remove("hide");
		if (!elem.classList.contains(filterClass) && filterClass !== "all"){
			elem.classList.add("hide");
		}

	});
});


