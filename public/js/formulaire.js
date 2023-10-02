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
    // Récupérer toutes les cases à cocher
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    
    // Ajouter un écouteur d'événement à chaque case à cocher
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            // Si "gauche" est coché, décocher "aucun"
            if (checkbox.value === 'gauche' && checkbox.checked) {
                const noneCheckbox = this.closest('.container_blessure').querySelector('input[value="aucun"]');
                if (noneCheckbox) noneCheckbox.checked = false;
            }
            // Si "droit" est coché, décocher "aucun"
            else if (checkbox.value === 'droit' && checkbox.checked) {
                const noneCheckbox = this.closest('.container_blessure').querySelector('input[value="aucun"]');
                if (noneCheckbox) noneCheckbox.checked = false;
            }
            // Si "aucun" est coché, décocher "gauche" et "droit"
            else if (checkbox.value === 'aucun' && checkbox.checked) {
                const leftCheckbox = this.closest('.container_blessure').querySelector('input[value="gauche"]');
                const rightCheckbox = this.closest('.container_blessure').querySelector('input[value="droit"]');
                if (leftCheckbox) leftCheckbox.checked = false;
                if (rightCheckbox) rightCheckbox.checked = false;
            }
        });
    });