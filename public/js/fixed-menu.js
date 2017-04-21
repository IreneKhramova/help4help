var menu = document.querySelector('.menu');
var menuHeight = menu.offsetHeight;
var next = document.getElementById(1);
var menuPos = menu.getBoundingClientRect();
var nextPaddingTop = parseInt(getComputedStyle(next).paddingTop);

document.addEventListener('scroll', function (e) {
	var scrolled = window.pageYOffset;
    var nextStyle = getComputedStyle(next);
	if(scrolled > menuPos.top) {
        menu.classList.add('scrolled');
        next.style.paddingTop = (menuHeight+nextPaddingTop) + "px";
    }   
    else {     
        menu.classList.remove('scrolled');
        next.style.paddingTop = "";
    }
});