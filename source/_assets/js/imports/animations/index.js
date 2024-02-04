import hero from "./hero";
import aboutMe from "./about-me";
import careAbout from "./care-about";
import career from "./career";
import featuredProjects from "./featured-projects";
import { animateOnVisibility } from "../../helpers";

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
	animateOnVisibility({
		element: document.querySelectorAll(".section"),
		animationClass: "animate-[fadeInUp_.8s_ease-out_forwards]",
		options: { threshold: .3 }
	});
}
