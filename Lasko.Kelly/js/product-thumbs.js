
$(()=>{
	$(".images-thmbs img").on("mouseenter",function(e){
		let src = $(this).attr("src");
		$(".images-main img").attr("src",src);
	})
});