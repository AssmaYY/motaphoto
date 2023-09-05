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

