const hamburger = document.querySelector(".hamburger");
const navlinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");
const navigate = document.querySelector(".navigator");

hamburger.addEventListener("click", () => {
	navlinks.classList.toggle("open");
	links.forEach(link =>{
		link.classList.toggle("fade");
	});
});
hamburger.addEventListener("click", () => {
	navigate.classList.toggle("navopen");
});
