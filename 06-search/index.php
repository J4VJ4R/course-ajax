<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	Search people: <input type="text" onkeyup="ajax_get_json(this.value)" />
	<div id="info"></div>

	<script type="text/javascript">
		result = document.getElementById('info');

		function ajax_get_json(userInside) {
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
			}
			if (userInside.length === 0) {
				result.innerHTML = "";
			} else {

				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
						var data = JSON.parse(xmlhttp.responseText)
						var x = findPeople(data, userInside);
						var message = (x === true) ? "<span style='color: green'>Find it</span> " : "<span style='color: red'>Doesn 't find it</span>";
						result.innerHTML = message;
					}
				}
				xmlhttp.open("GET", "data.json", true);
				xmlhttp.send();
			}
		}

		function findPeople(objectJSON, user) {
			var array = [];
			for (var i in objectJSON) {
				var person = objectJSON[i];
				array.push(person.name);
			}
			return array.indexOf(user) > -1;
		}
	</script>
</body>

</html>