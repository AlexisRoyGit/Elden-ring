let radioConnexion = document.getElementById('connexionForm');
let radioInscription = document.getElementById('inscriptionForm')
let inscription = document.getElementById('inscription');
let connexion = document.getElementById('connexion');

function displayFormConnexion() {
    inscription.classList.add('undisplayed');
    connexion.classList.remove('undisplayed');
}

function displayFormInscription() {
    connexion.classList.add('undisplayed');
    inscription.classList.remove('undisplayed');
}

radioConnexion.addEventListener('change', displayFormConnexion);
radioInscription.addEventListener('change', displayFormInscription);