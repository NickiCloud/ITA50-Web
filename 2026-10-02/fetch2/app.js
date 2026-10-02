const holeText = document.querySelector('#getText');
holeText.addEventListener('click', getText);


function getText() {
    fetch('Beispiel.txt')
    .then((res) => {
        res.text();
    })
    .then((data) => {
        document.querySelector('#output').innerHTML = data;
    })
    .catch((err) => {
        console.log(err);
    })
}