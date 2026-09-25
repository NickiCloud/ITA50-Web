document.querySelector('#button').addEventListener('click', textload);

function textload() {
    console.log('Erfolgreich');
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'BeispielText.txt', true);
    xhr.onload = function() {
        if (this.status == 200) {
            document.querySelector('.text').innerHTML = this.responseText;
        }
    }
    xhr.send();

}