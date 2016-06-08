<html>

	<head>
		<title>Alastair's Arcade | Loading...</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	</head>
	<body>
		<embed src="loading.mp3" width="180" height="90" loop="false" autostart="false" hidden="true" />

		<style>
			body {
				color:white;
				background-color:black;
				text-align:center;
				font-family:sans-serif;
			}
			#footer {
				position:fixed;
				bottom: 0;
				text-align:right;
			}
			a {
				color: white;
			}
		</style>
		<h1>Loading...</h1>
		<img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Youtube_loading_symbol_1_(wobbly).gif" />
		<p>
			We're loading some final touches to give you the best experience.
		</p>
		
		<script>
			$(document).ready(function(){
				$("body").keydown(function(){
					if(event.which === 67){
						document.location = "./pin.php";
					}
				});
			});
		</script>
		<div id="footer">Music copyright <a href="http://bensound.com" >bensound.com</a></div>
	</body>	
</html>