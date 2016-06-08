<html>
	<head>
		<title>Alastair's Arcade | Enter PIN</title>
	</head>
	<body>
		<style>
			body {
				color:white;
				background-color:black;
				text-align:center;
				font-family:sans-serif;
			}
		</style>
		<script>
			var enter = function(){
				var userPin = document.getElementById('txtBox').value;
				var realPin = "1234";
				if (userPin === realPin) {
					document.location = "./main/index.html";
				} else {
					document.body.style.backgroundColor = "red";
					alert("That is the wrong PIN number.")
				}
			};
			var eval = function(event){
				if (event.charCode === 13){
					enter()
				}
				if (document.getElementById("txtBox").value.length >= 4){
					return false;
				}
				return (event.charCode >= 48 && event.charCode <= 57);
			}
		</script>
		<h1>Enter PIN:</h1>
		<input id="txtBox" type="text" onkeypress='return eval(event)' autofocus></input>
		<br/><br/>
		<button onclick="enter()">Enter</button>
	</body>
</html>