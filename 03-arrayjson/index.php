<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<button onclick="get_data_json()">Show data</button>
	<div id="info"></div>

	<script type="text/javascript">
		var result = document.getElementById('info');

		function get_data_json() {
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
					var data = JSON.parse(xmlhttp.responseText);
					if (result.innerHTML == "") {
						for (var i in data) {
							result.innerHTML += i + ": The age of " +
								data[i].name + " "
								+data[i].lastname + " is "
								+data[i].age + " yearsold"
								+"<hr>";
						}
					}
				}
			}
			xmlhttp.open("GET", "data.json", true);
			xmlhttp.send();
		}
	</script>
</body>

</html>