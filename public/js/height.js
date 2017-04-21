function f() 
{
	var menu = document.querySelector('.menu');
	var menuHeight = menu.offsetHeight;
	var menuPos = menu.getBoundingClientRect();
	var node = menu.nextElementSibling;
	node.style.height = (document.documentElement.clientHeight - menuPos.bottom) + "px";
	node = node.nextElementSibling;

	while(node.tagName == "SECTION")
	{
		node.style.height = document.documentElement.clientHeight + "px";
		var nodePaddingTop = parseInt(getComputedStyle(node).paddingTop);
		node.style.paddingTop = (menuHeight+nodePaddingTop) + "px";
		node = node.nextElementSibling;
	}
}

f();