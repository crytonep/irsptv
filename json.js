async function getStar() {
    const response = await fetch('https://librefutbol.com/star-plus/eventos.json');
    response.ok;     // => false
    response.status; // => 404
    const text = await response.json();
    return text;
}
getStar().then(text => {
    text; // => 'Page not found'
});