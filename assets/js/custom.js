jQuery(document).ready(function($){
$(document).on("click", ".browse", function(event) {
	event.preventDefault();
	var file = $(this).parent().parent().parent().find(".coursefile");
	file.trigger("click");
});
$(document).on("change", ".coursefile", function(event) {
	event.preventDefault();
	$(this).parent().find(".form-control").val($(this).val().replace(/C:\\fakepath\\/i, ""));
});


$(document).on("click", ".quizbrowse", function(event) {
	event.preventDefault();
	var file = $(this).parent().parent().parent().find(".quizfile");
	file.trigger("click");
});
$(document).on("change", ".quizfile", function(event) {
	event.preventDefault();
	$(this).parent().find(".form-control").val($(this).val().replace(/C:\\fakepath\\/i, ""));
});


$(document).on("click", ".questionbrowse", function(event) {
	event.preventDefault();
	var file = $(this).parent().parent().parent().find(".question_img");
	file.trigger("click");
});
$(document).on("change", ".question_img", function(event) {
	event.preventDefault();
	$(this).parent().find(".form-control").val($(this).val().replace(/C:\\fakepath\\/i, ""));
});



$(document).on("click", ".videobrowse", function(event) {
	event.preventDefault();
	var file = $(this).parent().parent().parent().find(".upload_video");
	file.trigger("click");
});
$(document).on("change", ".upload_video", function(event) {
	event.preventDefault();
	$(this).parent().find(".form-control").val($(this).val().replace(/C:\\fakepath\\/i, ""));
});



$(document).on("click", ".filebrowse", function(event) {
	event.preventDefault();
	var file = $(this).parent().parent().parent().find(".upload_file");
	file.trigger("click");
});
$(document).on("change", ".upload_file", function(event) {
	event.preventDefault();
	$(this).parent().find(".form-control").val($(this).val().replace(/C:\\fakepath\\/i, ""));
});



    // this will get the full URL at the address bar
    var url = window.location.href; 
    // passes on every "a" tag 
    jQuery(".main_nav a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            jQuery(this).closest("li").addClass("active");
        }
    });
	
	

});