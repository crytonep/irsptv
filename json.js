// read local JSON file in javascript
fetch("https://librefutbol.com/star-plus/eventos.json")
    .then(function (response) {
        return response.json();
    })
    .then(function (data) {
        console.log(data);
    })