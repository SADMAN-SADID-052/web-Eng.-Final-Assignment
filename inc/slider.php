<!DOCTYPE html>

<head>
	<title>Basic Website</title>
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="blog,cms blog">
	<meta name="author" content="Delowar">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>
<body>



	<!-- Slider Section -->
	
	<div class="carousel w-full">
		<div id="item1" class="carousel-item w-full">
		  <img
			src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
			class="w-full" />
		</div>
		<div id="item2" class="carousel-item w-full">
		  <img
			src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
			class="w-full" />
		</div>
		<div id="item3" class="carousel-item w-full">
		  <img
			src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
			class="w-full" />
		</div>
		<div id="item4" class="carousel-item w-full">
		  <img
			src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
			class="w-full" />
		</div>
	  </div>

      <div class="flex w-full justify-center gap-2 py-2">
  <a href="#item1" class="btn btn-xs">1</a>
  <a href="#item2" class="btn btn-xs">2</a>
  <a href="#item3" class="btn btn-xs">3</a>
  <a href="#item4" class="btn btn-xs">4</a>
</div>
</body>
</html>