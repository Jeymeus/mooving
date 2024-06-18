console.log("delete.js chargé");

window.onload = () => {

    const deleteButtons = document.querySelectorAll("[data-delete]");
    
    for( deleteButton of deleteButtons) {
        deleteButton.addEventListener("click", function(e) {
            e.preventDefault();

                if(confirm("Voulez-vous supprimer cette image ?")) {
                    // On envoie une requête AJAX pour supprimer l'image
                    fetch(this.getAttribute("href"), {
                        method: "DELETE",
                        headers: {
                            "X-Requested-With": "XMLHttpRequest",
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({"_token": this.dataset.token})
                    }).then(
                    // On récupère la réponse en JSON
                    response => response.json()
                    ).then(data => {
                        if(data.success) {
                            this.parentElement.remove();
                        } else {
                            alert(data.error)
                        }
                    }).catch(e => alert(e))
            }
        })
    }
}