$(document).ready(function(){
	var link = $('div#attachment_90 > a');
	var img = $('div#attachment_90 > a > img.wp-image-90');
	var href = link.attr('href');
	var srcset = img.attr('srcset');
	srcset = srcset.replaceAll('/education', '');
	href = href.replace('/education', '');
	img.attr('srcset', srcset);
	link.attr('href', href)
});
