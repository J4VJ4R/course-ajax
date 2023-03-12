<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<button onclick="data_ajax()">Show data</button>
	<div id="js-data-ajax"></div>

	<script type="text/javascript">
		var result = document.getElementById('js-data-ajax');

		function data_ajax() {
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
					var data = JSON.parse(xmlhttp.responseText);
					var edadMenor = findAgeLesss(data);
					if (result.innerHTML == "") {
						result.innerHTML += "The less age is: " +
							edadMenor;
					}
				}
			}
			xmlhttp.open("GET", "data.json", true);
			xmlhttp.send();
		}

		function findAgeLesss(data) {
			var ages = [];
			for (var i in data) {
				var value = data[i].age;
				ages.push(value);
			}
			var ageLess = Math.min.apply(null, ages);
			// var ageLess = ages[0];
			// for(var j = 0; j < ages.length; j++){
			// 	if(ages[j] < ageLess){
			// 		ageLess = ages[j];
			// 	}
			// }
			return ageLess;
		}
	</script>
</body>

</html>