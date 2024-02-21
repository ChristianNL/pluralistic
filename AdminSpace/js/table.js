document.addEventListener("DOMContentLoaded", function() {
    // Fonction pour récupérer les données depuis le serveur
    function fetchData() {
        fetch('http://localhost/pluralistic/AdminSpace/get_tables.php')
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

    // Fonction pour afficher les données dans des tableaux HTML
    /*function displayData(data) {
        // Afficher les données des produits
        displayTable(data.produits, 'produits-table', 'produits');

        // Afficher les données des services
        displayTable(data.services, 'services-table', 'services');

        // Afficher les données des abonnés
        displayTable(data.abonnes, 'abonnes-table', 'abonnes');
    }*/
    

    // Fonction pour afficher une table HTML à partir des données fournies
    /* function displayTable(data, tableId, tableName) {
        var tableContainer = document.getElementById(tableId);
        var tableHTML = `<h2>${tableName}</h2><table><thead><tr>`;

        // Créer les en-têtes de colonnes
        Object.keys(data[0]).forEach(key => {
            tableHTML += `<th>${key}</th>`;
        });
        tableHTML += `</tr></thead><tbody>`;

        // Remplir les lignes de données
        data.forEach(row => {
            tableHTML += '<tr>';
            Object.values(row).forEach(value => {
                tableHTML += `<td>${value}</td>`;
            });
            tableHTML += '</tr>';
        });

        tableHTML += '</tbody></table>';
        tableContainer.innerHTML = tableHTML;
    }*/

    
    

    // Appeler la fonction fetchData pour récupérer les données lors du chargement de la page
    fetchData();
});
