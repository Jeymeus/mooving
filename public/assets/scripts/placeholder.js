document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('search-input');
    if (!input) {
        console.error('Search input element not found.');
        return;
    }

    function updatePlaceholder() {
        if (window.innerWidth <= 1290) {
            input.setAttribute('placeholder', '...');
        } else {
            input.setAttribute('placeholder', 'Rechercher un véhicule');
        }
    }

    updatePlaceholder();
    window.addEventListener('resize', updatePlaceholder);
});
