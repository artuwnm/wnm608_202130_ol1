
$(()=>{

	$(".images_thumbs img").on("mouseenter",function(e){

		let src = $(this).attr("src");
		$(".images_main img").attr("src",src);

	})

});