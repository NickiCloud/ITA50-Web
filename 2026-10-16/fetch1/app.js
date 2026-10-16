
/*
 * NICHT FERTIG!!!
 * Diese Unterichtseinheit wurde abgebrochen
 */


function loadUsers() {
    fetch('https://api.github.com/users')
    .then((res) => {
        return res.json();
    })
    .then((users) => {
        
        let output = '<ul>';

        users.forEach(user => { 
            output += `
                <li><img src="${user.avatar_url}" style="max-width: 60px; max-height: 50px;"></img></li>
                <li>Login: ${user.login}</li>
                <li><a href="${user.url}">Link</a> </li>
                <li>Type: ${user.type}</li>
                <br>
                <li> --------------- </li>
                <br>`; 
        });
        document.querySelector('#output').innerHTML = output;
    })
    
}

loadUsers.then(message => {
    console.log(message);
}).catch(message => {
    console.log(message)
})


