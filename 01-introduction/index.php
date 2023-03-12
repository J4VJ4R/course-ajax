<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="executeAjax()">Click here :)</button>    
    <div class="" id="info"></div>

    <script>
        function executeAjax(){
        //     var ajaxRequest;
        //     if(window.XMLHttpRequest){
        //         ajaxRequest = new XMLHttpRequest();
        //     }else{
        //         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP")
        //     }
        //     ajaxRequest.onreadystatechange = function
        // 0 Petición no ha sido realizada
        //1 Petición ha sido establecida
        // 2 Petición ha sido enviada
        // 3 Petición está siendo procesada
        // 4 Petición ha sido finalizada
        var ajaxRequest = new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                document.getElementById("info").innerHTML = ajaxRequest.responseText;
            }
        }
        ajaxRequest.open("GET", "document.txt", true);
        ajaxRequest.send();
    }

    </script>
</body>
</html>