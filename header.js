// Attendre que le DOM soit complètement chargé
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner les éléments nécessaires : le burger menu et le menu de navigation
    const burgerMenu = document.querySelector('.burger-menu');
    const navMenu = document.querySelector('.menu');

    // Ajouter un écouteur d'événement pour le clic sur le burger menu
    burgerMenu.addEventListener('click', function() {
        // Basculer la classe 'open' sur le burger menu
        burgerMenu.classList.toggle('open');
        // Basculer la classe 'active' sur le menu de navigation pour l'afficher/masquer
        navMenu.classList.toggle('active');
    });

    // Ajouter un écouteur d'événement pour détecter les clics en dehors du menu et du burger menu
    document.addEventListener('click', function(e) {
        // Vérifier si le clic est en dehors du menu et du burger menu
        if (!navMenu.contains(e.target) && !burgerMenu.contains(e.target)) {
            // Retirer les classes 'active' et 'open' pour fermer le menu
            navMenu.classList.remove('active');
            burgerMenu.classList.remove('open');
        }
    });
});
