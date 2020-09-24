$(document).ready(function(){
	var link = $('a#five-photos-link');
	var img = $('a#five-photos-link > img');
	var href = link.attr('href');
	var srcset = img.attr('srcset');
	srcset = srcset.replaceAll('/education', '');
	href = href.replace('/education', '');
	img.attr('srcset', srcset);
	link.attr('href', href)
});
