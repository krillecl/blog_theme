const toggleClass = (el, className) => el.classList.toggle(className);

document.querySelector(".nav__toggle").onclick = function() {
    toggleClass(document.querySelector(".nav"), 'active');
}