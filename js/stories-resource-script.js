$(document).ready(function(){
	var link = $('a#five-photos-link');
	var img = $('a#five-photos-link > img');
	var href = link.attr('href');
	var src = img.attr('src');
	var srcset = img.attr('srcset');

	src = src.replace('/education', '');
	href = href.replace('/education', '');

	if(typeof srcset.replaceAll !== "undefined"){
		srcset.replaceAll('/education', '');
		img.attr('srcset', srcset);
	}

	img.attr('src', src);
	link.attr('href', href);
});
