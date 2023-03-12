<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<button onclick="show_data_ajax()" >Show Data</button>
	<div id="data_json"></div>

	<script type="text/javascript">
		result = document.getElementById('data_json');
		function show_data_ajax(){
			var xmlhttp;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function(){
				if(result.innerHTML == ""){
					if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
						var data = JSON.parse(xmlhttp.responseText);
						for(var i in data){
							result.innerHTML += "<h5>" + i + "<h5>";
							
							var person = data[i];
							for (var j in person){
								console.log(person[j]);
								result.innerHTML += j + ": " + person[j] + "<br/>";
							}
						}
					}
				}
			}
			xmlhttp.open("GET", "object.json", true);
			xmlhttp.send();
		}
	</script>
</body>
</html>