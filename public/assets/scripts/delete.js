window.onload = () => {
    let deleteButtons = document.querySelectorAll("[data-delete]");
    
    for (let deleteButton of deleteButtons) {
        deleteButton.addEventListener("click", async function(e) {
            e.preventDefault();

            if (confirm("Voulez-vous supprimer cette image ?")) {
                const token = this.dataset.token;

                if (!token) {
                    alert("Token non trouvé !");
                    return;
                }

                try {
                    const response = await fetch(this.getAttribute("href"), {
                        method: "DELETE",
                        headers: {
                            "X-Requested-With": "XMLHttpRequest",
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({"_token": token})
                    });

                    const data = await response.json();

                    if (data.success) {
                        this.parentElement.remove();
                    } else {
                        alert(data.error || "Une erreur s'est produite");
                    }
                } catch (error) {
                    alert("Une erreur s'est produite : " + error.message);
                }
            }
        });
    }
}
