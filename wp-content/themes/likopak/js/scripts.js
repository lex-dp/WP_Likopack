$(document).ready(function() {
	
/*Start of main page*/	
	
	//var slideBg = document.querySelector(".slide-bg");
	//var textShow = document.querySelector("#textShow");



/*End of products page*/


/*Start of productsNamesPages*/	


var services = $(".services").find("div");
var moreInfo = $(".moreInfo");

$(moreInfo).hide();

	$(services).hover(function(){
		$(this).find(moreInfo).stop().show(700);
	},
	function(){
		$(moreInfo).stop().stop().hide(700);
	});
	
	
	
	
var img = $(".products").find("img");

	$(img).each(function(){
		$(this).attr({
			width: "300px",
			height: "200px"
		});
	});	

	
/*End of productsNamesPages*/



});