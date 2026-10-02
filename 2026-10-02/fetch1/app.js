const holeText = document.querySelector('#getText');
holeText.addEventListener('click', getText);


// function getText() {
//     fetch('Beispiel.txt').then(function(res){
//         console.log(res);
//         console.log(res.text());
//         // return res.text();
//     })/*.then(function(data){
//         console.log(data);
//     })*/;
// }


function getText() {
    fetch('Beispiel.txt')
    .then((res) => {
        res.text();
    })
    .then((data) => {
        console.log(data);
    })
}