var summernote_btns = [
	['insert', [/*'emojiList', */'link', 'picture'/*, 'hr'*//*, 'video'*/]],
	['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'clear'/*, 'subscript'*/]],
	['fontname', ['fontname']],
	['fontsize', ['fontsize']],
	['color', ['color']],
	['style', ['style']],
	['para', ['paragraph'/*, 'ul'*//*, 'ol'*/]],
    /*['height', ['height']],*/
	['view', ['codeview'/*, 'fullscreen'*/, 'undo', 'redo', 'help']]
];

$(function () {
	// Activate popovers and tooltips
	$('[data-toggle="popover"]').popover();
	$('[data-toggle="tooltip"]').tooltip();
  
	// Activate Summernote editors:
	$(".summernote").summernote({
		height: 300,
		toolbar: summernote_btns
	});
	
	// Activate checkboxes and radio buttons
	$("input").iCheck({
		checkboxClass: "icheckbox",
		radioClass: "iradio",
		increaseArea: "20%"
	});
	
	// Activate combo boxes
	$(".combobox").combobox();
	
	// Activate error checking on forms
	$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
	
	// Add close buttons to alerts
	$(".alert-dismissible").prepend("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>");
	$(".alert-dismissible").addClass("fade in out");
});

// My jQuery Plugins:
(function($) {
	// Add bootstrap Tooltip to element:
    $.fn.addTooltip = function(options) {
        var settings = $.extend({
            location: "left",
            title: "tooltip"
        }, options);
		
        return this.attr("data-toggle", "tooltip").attr("data-placement", settings.location).attr("title", settings.title).tooltip();
    };
	// Add boostrap Popover to element:
	$.fn.addPopover = function(options) {
        var settings = $.extend({
            location: "left",
			title: "Popover Title",
            text: "Popover contents go here."
        }, options);
		
		if (settings.title != "") {
			this.attr("title", settings.title);
		}
		if (settings.text != "") {
			this.attr("data-content", settings.text);
		}
		this.attr("data-container", "body");
        return this.attr("data-toggle", "popover").attr("data-placement", settings.location).attr("role", "button").attr("data-trigger", "focus").popover();
    };
	
	// Scroll to the selected element:
	$.fn.scrollView = function () {
		return this.each(function () {
			$('html, body').animate({
				scrollTop: $(this).offset().top
			}, 1000);
		});
	};
}(jQuery));