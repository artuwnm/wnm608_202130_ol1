
$(()=>{

	$(".thumbnails img").on("mouseenter",function(e){
		Let src = $(this).attr("src");
		$(".mainimg img").attr("src",src);
	})

});