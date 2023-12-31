// Sélectionnez le bouton du menu
const menuBtn = document.getElementById('menu-btn');

// Sélectionnez la barre latérale
const sidebar = document.getElementById('sidebar');

// Sélectionnez l'icône du menu (le hamburger)
const menuIcon = document.querySelector('.menu-btn i');

// Ajoutez un gestionnaire d'événements clic au bouton du menu
menuBtn.addEventListener('click', () => {
    // Vérifiez si la barre latérale est déjà ouverte
    const isOpen = sidebar.classList.contains('active-nav');
    
    // Si elle est ouverte, fermez-la, sinon ouvrez-la
    if (isOpen) {
        sidebar.classList.remove('active-nav');
        menuIcon.style.color = 'black'; // Changez la couleur en noir
    } else {
        sidebar.classList.add('active-nav');
        menuIcon.style.color = 'white'; // Changez la couleur en blanc
    }
});
