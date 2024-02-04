import hero from "./hero";
import aboutMe from "./about-me";
import careAbout from "./care-about";
import career from "./career";
import featuredProjects from "./featured-projects";

export default function (settings) {
	[
		hero,
		aboutMe,
		careAbout,
		career,
		featuredProjects,
		animateSections
	]
		.forEach(f => f(settings));
}

function animateSections() {
	const elements = document.querySelectorAll(".section");
	elements.forEach((ele) => {
		const observer = new IntersectionObserver((entries) => {
			ele.classList.toggle(
				"animate-[fadeInUp_.8s_ease-out_.2s_forwards]",
				entries[0].isIntersecting
			);
		});

		observer.observe(ele);
	});
}