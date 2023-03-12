const form = document.getElementById('form');
form.addEventListener('submit', function(event){
    event.preventDefault();
    const name = document.getElementById('name').value;
    const lastname = document.getElementById('lastname').value;
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'server.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function(){
        if (xhr.status === 200){
            alert(xhr.responseText);
        }
    };
    xhr.send('name=' + encodeURIComponent(name) + '&lastname=' + encodeURIComponent(lastname));
});