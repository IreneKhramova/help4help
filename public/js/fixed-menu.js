var menu = document.querySelector('.menu');
var menuHeight = menu.offsetHeight;
var menuPos = menu.getBoundingClientRect();
var anchor = document.querySelector('.anchor');

document.addEventListener('scroll', function (e) {
	var scrolled = window.pageYOffset;
	if(scrolled > menuPos.top) {
        menu.classList.add('scrolled');
        anchor.style.height = menuHeight + "px";
    }   
    else {     
        menu.classList.remove('scrolled');
        anchor.style.height = "0px";
    }
});