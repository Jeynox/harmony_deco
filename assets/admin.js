import './styles/admin/admin.scss';
require('bootstrap');

window.addEventListener('load', () => {

    const tl = gsap.timeline();

    tl
    .from('.carte1', 1.5, {y: -100, opacity: 0 , ease: "power1.out"})
    .from('.carte2', 1.5, {y: -100, opacity: 0 , ease: "power1.out"}, '-=1')
    .from('.carte3', 1.5, {y: -100, opacity: 0 , ease: "power1.out"}, '-=1')
    .from('.carte4', 1.5, {y: -100, opacity: 0 , ease: "power1.out"}, '-=1')
    .from('.carte5', 1.5, {y: -100, opacity: 0 , ease: "power1.out"}, '-=1')
    .from('.carte6', 1.5, {y: -100, opacity: 0 , ease: "power1.out"}, '-=1')
    .from('.carte7', 1.5, {y: -100, opacity: 0 , ease: "power1.out"}, '-=1')

    tl.play();
})