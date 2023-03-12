<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button onclick="showdata()">Show User: </button>
    <div id="info"></div>
    <script type="text/javascript">
        var result = document.getElementById('info')

        function showdata() {
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("MicrosoftXObject");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                    var datos = JSON.parse(xmlhttp.responseText);
                    if (result.innerHTML === "") {
                        for (var i in datos) {
                            result.innerHTML += i + ": " + datos[i] + "<br/>";
                        }
                    }
                }
            }
            xmlhttp.open("GET", "data.json", true);
            xmlhttp.send();
        }
    </script>
    </script>
</body>

</html>