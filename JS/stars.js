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

////////////CODE ETOILES

let stars = document.querySelectorAll('.la-star');
let input = document.querySelector('#note');

for(star of stars) {
    star.addEventListener('mouseover', function() {
        this.style.color = 'black';

        let previousStar = this.previousElementSibling;

        while(previousStar) {
            previousStar.style.color = 'black';

            previousStar = previousStar.previousElementSibling;
    }
    });

    star.addEventListener('mouseleave', function() {
        resetStar(input.value);
    });

    star.addEventListener('click', function() {
        input.value = this.dataset.value;
    });
}

function resetStar(nombre = 0) {
    for(star of stars) {
        if(star.dataset.value > nombre) {
            star.style.color = 'white';
        } else {
            star.style.color = 'black';
        }
    }
}

/////ENVOI ASYNCHRONE NOTE

let buttonSubmit = document.getElementById('submitButton');

function XMLCall(identity, note) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `https://localhost:8888/EldenRing/Back/notation.php?client=${encodeURIComponent(identity)}?notation=${encodeURIComponent(note)}`);
    xhr.addEventListener('readystatechange', () => {
        if(xhr.status === 200 && xhr.readyState === 4) {
            alert('Votre note a bien été prise en compte, merci à vous');
        } else {
            alert('Une erreur est survenue');
        }
    })
}

buttonSubmit.addEventListener('click', function() {
    XMLCall($_SESSION['userIdentity'],input.value);
});