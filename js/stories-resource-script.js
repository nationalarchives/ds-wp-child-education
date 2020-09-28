$(document).ready(function(){
	var link = $('a#five-photos-link');
	var img = $('a#five-photos-link > img');
	var href = link.attr('href');
	var src = img.attr('src');
	var srcset = img.attr('srcset');

	src = src.replaceAll('/education', '');
	href = href.replace('/education', '');

	if(srcset){
		srcset.replaceAll('/education', '');
	}

	img.attr('src', src);
	img.attr('srcset', srcset);
	link.attr('href', href);
});
