document.addEventListener("DOMContentLoaded", function() {
    const data = {
        "abonnes": [
            {
                "nom": "Doe",
                "prenom": "John",
                "mail": "johndoe@example.com",
                "tel": "+1-123-456-7890",
                "whatsapp": "+1-987-654-3210"
            },
            {
                "nom": "Doe",
                "prenom": "Jane",
                "mail": "janedoe@example.com",
                "tel": "+1-345-678-9012",
                "whatsapp": "+1-210-987-6543"
            }
        ]
    };

    function callData() {
        const url = "http://localhost/pluralistic/AdminSpace/get_tables.php";
        fetch(data)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                displayData(data);
            })
            .catch(error => {
                console.log(data);
                console.error('Erreur lors de la récupération des données:', error);
            });
    }

    function displayTable(data, tableId, tableName) {
        var tableContainer = document.getElementById(tableId);
        var tableHTML = `<h2>${tableName}</h2><table><thead><tr>`;
    
        // Utiliser une liste fixe de propriétés (ajustez selon vos besoins)
        var properties = ["nom", "prenom", "mail", "tel", "whatsapp"];
    
        // Créer les en-têtes de colonnes
        properties.forEach(key => {
            tableHTML += `<th>${key}</th>`;
        });
    
        tableHTML += `</tr></thead><tbody>`;
    
        // Remplir les lignes de données
        data.forEach(row => {
            tableHTML += '<tr>';
            properties.forEach(key => {
                tableHTML += `<td>${row[key]}</td>`;
            });
            tableHTML += '</tr>';
        });
    
        tableHTML += '</tbody></table>';
        tableContainer.innerHTML = tableHTML;
    }

    function displayData(data) {
        if (data.abonnes) {
            displayTable(data.abonnes, 'abonnes-table', 'abonnés');
        } else {
            console.log(data);
            console.error('Données incorrectes ou manquantes.');
        }
    }

    callData();
}
)