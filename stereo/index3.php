<html>

<head>
	<title>S  T  E  R  E  O  S  C  O  P  I  C</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="style.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

	<style>
		.img-1 {
			z-index: 0;
			width: 800px;
			position: absolute;
			top: 0;
			left: 0;
			-webkit-animation: float 15s ease-in-out 15s infinite alternate;
		}
		
		.img-2 {
			z-index: 100;
			height: 800px;
			position: absolute;
			top: 0;
			left: 0;
			-webkit-animation: float 10s ease-in-out 10s infinite alternate;
		}
		
		@-webkit-keyframes float {
			from {
				height: 400px;
			}
			to {
				height: 2000px;
			}
		}
		
		p { z-index: 5; }
	</style>
	
</head>

<body>
	<div>
	
	</div>
		<p>click me</p>
		<img class="img-1" src="images/1.jpg">
		<img class="img-2" src="images/2.jpg">


<script>
	$("p").click(function(){
		$(".img-1").css("z-index", "500");
	});
</script>

</body>

</html>