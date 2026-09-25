document.querySelector('#button').addEventListener('click', loudUser); // Gibt den Button ein Click Event

function loadUser() { // Neue Funktion mit den Namen loudUser
    // console.log('Erfolgreich'); 
    let xhr = new XMLHttpRequest(); // Neuen Http Request erstellen
    xhr.open('GET', 'user.json', true); // Die JSON Datei öffnen
    xhr.onload = function() { 
        if (this.status == 200) { // Wenn kein Fehler dann...
            let user = JSON.parse(this.responseText); // Ins JSON Format übersetzen
            let output = ''; // Variable "output" erstellen
            /*
             * Den Nutzer Ausgeben
            */
            output += `<ul>
            <li>ID: ${user.id} </li>
            <li>Name: ${user.name} </li>
            <li>Email: ${user.email} </li>
            </ul>`;
            document.querySelector('.user').innerHTML = output; 
        }
    }
    xhr.send(); // Den Output an das DOM senden

}

document.querySelector('#button2').addEventListener('click', loadUsers);

function loadUsers() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'users.json', true);

    xhr.onload = function() {
        if (this.status === 200) {
            let users = JSON.parse(this.responseText);
            let output = '<ul>';

            users.forEach(user => { // Eine Schleife die duch "user fährt"
                output += `
                    <li>ID: ${user.id}</li>
                    <li>Name: ${user.name}</li>
                    <li>Email: ${user.email}</li>
                    <br>`; // Ein Abstand
            });

            output += '</ul>';
            document.querySelector('.users').innerHTML = output;
        }
    };

    xhr.send();
}