$(document).ready(function(){
	if($("#guidance").length){
		try {
			var $guidanceText = $("#guidance");
			var ariaExpanded = $.parseJSON($("#guidance-btn").attr("aria-expanded").toLowerCase());
			var ariaHidden = $.parseJSON($guidanceText.attr("aria-hidden").toLowerCase());

			$("#guidance-btn").on('click', function(){
				$guidanceText.toggle();
				ariaHidden = !ariaHidden;
				ariaExpanded = !ariaExpanded;
				$guidanceText.attr('aria-hidden', ariaHidden);
				$(this).attr('aria-expanded', ariaExpanded);
			})
		}
		catch (e) {
			return false;
		}
	}
});
