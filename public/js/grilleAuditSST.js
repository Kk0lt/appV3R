//--------
    // Récupérer toutes les cases à cocher
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    
    // Ajouter un écouteur d'événement à chaque case à cocher
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            // Si "conforme" est coché, décocher "na"
            if (checkbox.value === 'conforme' && checkbox.checked) {
                const noneCheckbox = this.closest('.container_element').querySelector('input[value="na"]');
                const nonConformeCheckbox = this.closest('.container_element').querySelector('input[value="non_conforme"]');
                if (noneCheckbox) noneCheckbox.checked = false;
                if (nonConformeCheckbox) nonConformeCheckbox.checked = false;
            }
            // Si "non_conforme" est coché, décocher "na"
            else if (checkbox.value === 'non_conforme' && checkbox.checked) {
                const noneCheckbox = this.closest('.container_element').querySelector('input[value="na"]');
                const conformeCheckbox = this.closest('.container_element').querySelector('input[value="conforme"]');
                if (noneCheckbox) noneCheckbox.checked = false;
                if (conformeCheckbox) conformeCheckbox.checked = false;
            }
            // Si "na" est coché, décocher "conforme" et "non_conforme"
            else if (checkbox.value === 'na' && checkbox.checked) {
                const conformeCheckbox = this.closest('.container_element').querySelector('input[value="conforme"]');
                const nonConformeCheckbox = this.closest('.container_element').querySelector('input[value="non_conforme"]');
                if (conformeCheckbox) conformeCheckbox.checked = false;
                if (nonConformeCheckbox) nonConformeCheckbox.checked = false;
            }
        });
    });