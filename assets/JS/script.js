// MODALE DE CONTACT//

const modal = document.getElementById("modal");
const contactMenu = document.getElementById("menu-item-15"); 


contactMenu.onclick = function(event){
    modal.style.display = 'block';
    event.preventDefault();
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// RECUPERER REFERENCE FORMULAIRE POST

// Étape 1 : Récupérer l'élément du DOM avec la classe "ref"
const paragraph = document.querySelector('.ref-contact');

if (paragraph !== null) {
  // Étape 2 : Récupérer le contenu textuel de l'élément
  const contenuTextuel = paragraph.textContent;
  const champRef = document.getElementById('ref');

  champRef.value = contenuTextuel;
}

