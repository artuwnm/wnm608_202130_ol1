
$(()=>{

	$(".thumbnails img").on("mouseenter",function(e){
		let src = $(this).attr("src");
		$(".mainimg img").attr("src",src);
	})

});