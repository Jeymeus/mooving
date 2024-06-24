document.addEventListener('DOMContentLoaded', function() {
    function updateClasses() {
        const card = document.getElementById('card');
        const cardVehicles = document.querySelectorAll('.card-vehicle');

        if (!card || cardVehicles.length === 0) {
            console.error('Card or card vehicle elements not found.');
            return;
        }

        if (window.innerWidth <= 994) {
            card.classList.remove('row', 'custom-row');
            card.classList.add('display');

            cardVehicles.forEach((cardVehicle) => {
                cardVehicle.classList.remove('col-md-4', 'mb-4', 'custom-col');
                cardVehicle.classList.add('custom-card-vehicle');
            });
        } else {
            card.classList.add('row', 'custom-row');
            card.classList.remove('display');

            cardVehicles.forEach((cardVehicle) => {
                cardVehicle.classList.add('col-md-4', 'mb-4', 'custom-col');
                cardVehicle.classList.remove('custom-card-vehicle');
            });
        }
    }

    updateClasses();
    window.addEventListener('resize', updateClasses);
});
