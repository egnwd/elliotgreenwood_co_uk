/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icons\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-visit' : '&#x26a1;',
			'icon-tweet' : '&#x25d1;',
			'icon-heart' : '&#x2661;',
			'icon-heart.hover' : '&#x2665;',
			'icon-download' : '&#x2601;',
			'icon-arrow-left' : '&#x2190;',
			'icon-open.up' : '&#x2191;',
			'icon-open' : '&#x2193;',
			'icon-tick' : '&#x2714;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};