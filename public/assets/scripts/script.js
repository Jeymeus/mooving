function updatePlaceholder() {
    const input = document.getElementById('search-input');
    if (window.innerWidth <= 1290) {
        input.setAttribute('placeholder', '...');
    } else {
        input.setAttribute('placeholder', 'Rechercher un véhicule');
    }
}

// Mettre à jour le placeholder lors du chargement de la page
window.addEventListener('load', updatePlaceholder);

// Mettre à jour le placeholder lors du redimensionnement de la fenêtre
window.addEventListener('resize', updatePlaceholder);

function updateClasses() {
  const card = document.getElementById('card');
  const cardVehicles = document.querySelectorAll('.card-vehicle');

  if (window.innerWidth <= 994) {
    // Supprime les classes row et custom-row et ajoute display
    card.classList.remove('row', 'custom-row');
    card.classList.add('display');

    // Supprime les classes col-md-4 mb-4 custom-col et ajoute wdth40 à tous les éléments
    cardVehicles.forEach((cardVehicle) => {
      cardVehicle.classList.remove('col-md-4', 'mb-4', 'custom-col');
      cardVehicle.classList.add('custom-card-vehicle');
    });
  } else {
    // Ajoute les classes row et custom-row et supprime display
    card.classList.add('row', 'custom-row');
    card.classList.remove('display');

    // Ajoute les classes col-md-4 mb-4 custom-col et supprime wdth40 à tous les éléments
    cardVehicles.forEach((cardVehicle) => {
      cardVehicle.classList.add('col-md-4', 'mb-4', 'custom-col');
      cardVehicle.classList.remove('custom-card-vehicle');
    });
  }
}

// Appelle la fonction updateClasses au chargement de la page
updateClasses();

// Ajoute un écouteur d'événement pour l'événement resize
window.addEventListener('resize', updateClasses);