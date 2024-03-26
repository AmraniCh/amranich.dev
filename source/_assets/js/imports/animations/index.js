import hero from "./sections/hero";
import aboutMe from "./sections/about-me";
import careAbout from "./sections/care-about";
import career from "./sections/career";
import featuredProjects from "./sections/featured-projects";
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
		animationClass: "animate-[fadeInUp_.7s_ease-out_forwards]",
		options: { threshold: 0 }
	});
}
