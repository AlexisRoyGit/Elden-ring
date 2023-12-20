let buttonModal = document.getElementById('buttonDeploy');
let buttonCloseModal = document.getElementById('closeModal');
let modal = document.getElementById('modal');
let phraseModal = document.getElementById('phraseModal');

function displayModal() {
    modal.classList.remove('undisplayed');
    phraseModal.classList.add('undisplayed');
}

function hideModal() {
    modal.classList.add('undisplayed');
    phraseModal.classList.remove('undisplayed');
}

buttonModal.addEventListener('click', displayModal);
buttonCloseModal.addEventListener('click', hideModal);