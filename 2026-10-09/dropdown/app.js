const continent = document.querySelector("#continent");

let data = []; // Neuen Arrar erstellen

fetch("data.json") // Einen Fetch starten
    .then((res) => res.json()) // Prommis machen
    .then((json) => {
        /*
         * Hier werden die Daten abgefragt
         * Die Daten werden in "date" gespeichert
        */
        data = json;

        /*
         * Hier machen wir eine Schleife die durch data fährt
        */
        data.forEach(element => {
            const option = document.createElement("option");
            option.value = element.continent;
            option.text = element.continent;
            continent.innerHTML += option;
        });
    })
