

document.querySelector('#button').addEventListener('click', loadUsers);

function loadUsers() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://api.github.com/users', true); // Fragt die Github API ab.

    xhr.onload = function() {
        if (this.status === 200) {
            let users = JSON.parse(this.responseText);
            let output = '<ul>';

            users.forEach(user => { // Eine Schleife die duch "user fährt"
                output += `
                    <li><img src="${user.avatar_url}" style="max-width: 60px; max-height: 50px;"></img></li>
                    <li>Login: ${user.login}</li>
                    <li><a href="${user.url}">Link</a> </li>
                    <li>Type: ${user.type}</li>
                    <br>
                    <li> --------------- </li>
                    <br>`; // Ein Abstand
            });

            output += '</ul>';
            document.querySelector('.text').innerHTML = output;
        }
    };

    xhr.send();
}