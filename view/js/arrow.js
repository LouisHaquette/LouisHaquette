var arrowUp = document.getElementById('logoArrowUp');
var arrowDown = document.getElementById('logoArrowDown');
var footer = document.getElementById('mainFooter');

function getScrollPosition()
{
	if (document.body) {
		var height = (document.body.clientHeight);
	}
	else {
		var height = (window.innerHeight);
	}

	var position = (document.documentElement && document.documentElement.scrollTop) 
	|| window.pageYOffset || self.pageYOffset || document.body.scrollTop;
	
	if (position) {
		arrowUp.style = "display: inline-block;"
	}
	else {
		arrowUp.style = "display: none;"
	}

	if (footer.offsetTop - position - height <= 0) {
		arrowDown.style = "display: none;"
	}
	else {
		arrowDown.style = "display: inline-block;"
	}
}
 
getScrollPosition();
 
if (window.addEventListener) { // Firefox 1+, Opera 9, Safari 3+, etc.
	window.addEventListener("scroll", getScrollPosition, false);
}
else if (document.addEventListener) { // Opera 7, Opera 8
	document.addEventListener("scroll", getScrollPosition, false);
}
else if ("onscroll" in self) { // MSIE 6, 7 and MSIE 8
	self.onscroll = getScrollPosition;
};
