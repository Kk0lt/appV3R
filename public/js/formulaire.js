        // Récupérer les éléments HTML pertinents
        const temoinOui = document.getElementById('temoin_oui');
        const temoinNon = document.getElementById('temoin_non');
        const temoinNom = document.getElementById('temoin_nom');

        // Ajouter des gestionnaires d'événements de changement pour les boutons radio "Oui" et "Non"
        temoinOui.addEventListener('change', function() {
            // Si "Oui" est sélectionné, afficher le champ de saisie du nom du témoin
            if (this.checked) {
                temoinNom.style.display = 'block';
            }
        });

        temoinNon.addEventListener('change', function() {
            // Si "Non" est sélectionné, cacher le champ de saisie du nom du témoin
            if (this.checked) {
                temoinNom.style.display = 'none';
            }
        });



//--------
const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const aucunCheckboxes = document.querySelectorAll('input[type="checkbox"][value="aucun"]');

// Fonction pour gérer la logique lorsque "Aucun" est coché ou décoché
function handleAucunCheckbox(event) {
    if (event.target.checked) {
        if (event.target.value === "aucun") {
            const nameParts = event.target.name.split('_');
            const blessureType = nameParts[1];
            checkboxes.forEach(checkbox => {
                const checkboxNameParts = checkbox.name.split('_');
                if (checkbox !== event.target && checkboxNameParts[1] === blessureType) {
                    checkbox.checked = false;
                }
            });
        } else {
            const nameParts = event.target.name.split('_');
            const blessureType = nameParts[1];
            const blessureAucunCheckbox = document.querySelector(`input[name="blessure_${blessureType}_aucun"]`);
            if (blessureAucunCheckbox) {
                blessureAucunCheckbox.checked = false;
            }
        }
    }
}

// Écoutez les changements de chaque case à cocher
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', handleAucunCheckbox);
});