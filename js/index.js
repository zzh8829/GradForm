$.fn.center = function () {
   this.css("position","absolute");
   this.css("top", ( Math.floor(($(window).height() - this.height()) / 2))  + "px");
   this.css("left", ( $(window).width() - this.width() ) / 2 + "px");
   return this;
}

$(".form-fp").click(function() {
	$("<div>Ask Mrs. Mohan in room 240</div>").dialog({
		title: "forgot password",
		buttons: { "ok": function() { $(this).dialog("close"); } } 
	});
});

$("#radio1").click(function() {
	$("#program").attr("placeholder","e.g. University of Windsor, Computer Science");
});
$("#radio2").click(function() {
	$("#program").attr("placeholder","e.g. St. Clair College, Computer Science");
});
$("#radio3").click(function() {
	$("#program").attr("placeholder","e.g. Returning back");
});
$("#radio4").click(function() {
	$("#program").attr("placeholder","e.g. Take a year off");
});


$(".form-dark").center()

$("#form-submit").click(function() {
	$("#form-form").submit();
});

setInterval(function(){	$(".form-dark").center()},20)

if (navigator.userAgent.toLowerCase().indexOf("chrome") >= 0) {
	fixAutofill = function(){
		$('input:-webkit-autofill').each(function(){
			var text = $(this).val();
			var name = $(this).attr('name');
			$(this).after(this.outerHTML).remove();
			$('input[name=' + name + ']').val(text);
		});
	}	
}

// LOOL
